<?php

namespace App\Http\Controllers\Admin;

use App\Models\Hotel;
use App\Models\Chambre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Room_Type;

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
        $room_types=Room_Type::all();
        $hotels=Hotel::all();
        return view('admin.room.create',compact('hotels','room_types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $path = 'assets/images/chambres';
            $myimage = $request->image->getClientOriginalName();
            $pathImage="$path/$myimage";
            $request->image->move(public_path($path), $myimage);
        $chambre=new Chambre;
        $chambre->room__type_id=$request->type;
        $chambre->hotel_id=$request->hotel;
        $chambre->image=$pathImage;
        $chambre->status=0;
        $chambre->save();

        return to_route('admin.rooms.index')->with('success','Hotel enregistré avec success');
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
    public function destroy(Room_Type $type)
    {
        $type->delete();
        return redirect()->back()->with('danger','hotel suprimé avec success');
    }
}
