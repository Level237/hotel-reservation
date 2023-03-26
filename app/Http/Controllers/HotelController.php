<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Room_Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HotelController extends Controller
{
    public function details($id){

        $hotel=Hotel::find($id);

        return view('Hotel.details',compact('hotel'));
    }

    public function stepOne(Request $request){

        $hotels=Hotel::where('ville',$request->location)->get();
        $request->session()->put('classe',$request->classe);
        $classes=Room_Type::all();
        return view('Hotel.step-one',compact('hotels','classes'));

    }

    public function stepTwo($id,Request $request){
        $classe=$request->get('classe');
        $rooms=DB::table('chambres')
                ->join('room__types','chambres.room_type_id','room_types.id')
                ->select('chambres.id','room__types.title','room__types.price','room__type.adult_capacity','room__type.kids_capacity')
                ->where('room__types.title',$classe)->get();
    }
}
