<?php

namespace App\Http\Controllers\Hotel;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        $hotel=Hotel::where('user_id',auth()->user()->id)->first();
        return view('Hotel.dashboard',compact('hotel'));
    }
}
