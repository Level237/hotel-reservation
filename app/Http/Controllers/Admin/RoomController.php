<?php

namespace App\Http\Controllers\Admin;

use App\Models\Hotel;
use App\Models\Chambre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
  
        $rooms=DB::table('chambres')
        ->join('room__types','chambres.room__type_id','room__types.id')
        ->select('chambres.id','chambres.hotel_id','chambres.image','room__types.title','room__types.price','room__types.adult_capacity','room__types.kids_capacity')
        ->get();
        //return $rooms;
        return view('admin.room.index',compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.room.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
