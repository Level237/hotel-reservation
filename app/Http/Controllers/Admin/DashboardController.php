<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Chambre;
use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\Reservation;
use Illuminate\Support\Facades\DB;
class DashboardController extends Controller
{
    public function index(){

        $hotelCount=Hotel::count();
        $roomCount=Chambre::count();
        $reservationCount=Reservation::where('status',1)->count();

        $reservations=DB::table('chambres')
                        ->join('reservations','chambres.id','reservations.chambre_id')
                        ->join('hotels','hotels.id','chambres.hotel_id')
                        ->join('users','users.id','reservations.user_id')
                        ->select('reservations.id','reservations.check_in','reservations.check_out','reservations.status','reservations.price_reser','reservations.user_id','hotels.nom_hotel','hotels.nombres_etoiles','hotels.ville','reservations.chambre_id','chambres.image','users.name','users.email')
                        ->where('reservations.status',1)
                        ->get();
                    
                        //return $reservations;
        return view('admin.dashboard',compact('hotelCount','roomCount','reservationCount','reservations'));
    }
}
