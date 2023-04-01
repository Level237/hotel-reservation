<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Hotel;
class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hotels=Hotel::all();
        return view('admin.hotel.list',compact('hotels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.hotel.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user=new User;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->role_id=2;
        $user->save();

        

            // $path = $request->file('logo')->store('logo','public');

            
           
            $path = 'assets/images/hotel';
            $myimage = $request->image->getClientOriginalName();
            $pathImage="$path/$myimage";
            $request->image->move(public_path($path), $myimage);
        $hotel=new Hotel;
        $hotel->nom_hotel=$request->nom_hotel;
        $hotel->ville=$request->localisation;
        $hotel->nombres_etoiles=$request->nombres_etoiles;
        $hotel->tel=$request->tel;
        $hotel->image=$pathImage;
        $hotel->user_id=$user->id;
        $hotel->save();

        return to_route('admin.hotels.index')->with('success','Hotel enregistré avec success');
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
    public function destroy(Hotel $hotel)
    {
       

        $hotel->delete();
        return redirect()->back()->with('danger','hotel suprimé avec success');
    }
}
