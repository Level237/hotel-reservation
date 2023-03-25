<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(){

        $ids=['2','4','10','13']; //Liste des id des Hotels en vedette
        $arrayHotel=[];
        for($i=0;$i<count($ids);$i++){

            $hotel=Hotel::find($ids[$i]);
            array_push($arrayHotel,$hotel);
        }

        //return $arrayHotel;
        return view('Homepage',compact('arrayHotel'));
    }
}
