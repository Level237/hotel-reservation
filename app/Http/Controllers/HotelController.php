<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Room_Type;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function details($id){

        $hotel=Hotel::find($id);

        return view('Hotel.details',compact('hotel'));
    }

    public function search(Request $request){

        $hotels=Hotel::where('ville',$request->location)->get();
        $classes=Room_Type::all();
        return view('Hotel.step-one',compact('hotels','classes'));

    }
}
