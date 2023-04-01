<?php

namespace App\Http\Controllers\Hotel;

use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Chambre;

class DashboardController extends Controller
{
    public function index(){

        $hotel=Hotel::where('user_id',auth()->user()->id)->first();
        $reservations=DB::table('chambres')
        ->join('reservations','chambres.id','reservations.chambre_id')
        ->join('hotels','hotels.id','chambres.hotel_id')
        ->join('users','users.id','reservations.user_id')
        ->select('reservations.id','reservations.check_in','reservations.check_out','reservations.status','reservations.price_reser','reservations.user_id','hotels.nom_hotel','hotels.nombres_etoiles','hotels.ville','reservations.chambre_id','chambres.image','users.name','users.email')
        ->where('reservations.status',1)
        ->where('hotels.id',$hotel->id)
        ->get();

        $reservationCount=DB::table('chambres')
        ->join('reservations','chambres.id','reservations.chambre_id')
        ->join('hotels','hotels.id','chambres.hotel_id')
        ->join('users','users.id','reservations.user_id')
        ->select('reservations.id','reservations.check_in','reservations.check_out','reservations.status','reservations.price_reser','reservations.user_id','hotels.nom_hotel','hotels.nombres_etoiles','hotels.ville','reservations.chambre_id','chambres.image','users.name','users.email')
        ->where('reservations.status',1)
        ->where('hotels.id',$hotel->id)
        ->count();
        $chambreCount=Chambre::where('hotel_id',$hotel->id)->count();

        //return $reservations;
        return view('Hotel.dashboard',compact('hotel','chambreCount','reservations','reservationCount'));
    }
}
