<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function details($id){

        $hotel=Hotel::find($id);

        return view('Hotel.details',compact('hotel'));
    }
}
