<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Hotel;
use App\Models\Room_Type;
use Carbon\Carbon;
class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations=DB::table('chambres')
                        ->join('reservations','chambres.id','reservations.chambre_id')
                        ->join('hotels','hotels.id','chambres.hotel_id')
                        ->select('reservations.id','reservations.check_in','reservations.check_out','reservations.status','reservations.price_reser','reservations.user_id','hotels.nom_hotel','hotels.nombres_etoiles','hotels.ville','reservations.chambre_id','chambres.image')
                        ->where('reservations.user_id',auth()->user()->id)
                        ->where('reservations.status',1)
                        ->get();
        return view('customer.my-reservations',compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function cancel($id){

        $reservation=Reservation::find($id);
        $reservation->update([
            'status'=>0,
        ]);


        return redirect()->back()->with('cancel','reservation annulée');
    }

    public function fast(){

        $hotels=Hotel::all();
        $classes=Room_Type::all();
        return view('customer.reservation-fast',compact('hotels','classes'));
    }

    public function fastStore(Request $request){

        $classe=$request->classe;
        $rooms=DB::table('chambres')
                ->join('room__types','chambres.room__type_id','room__types.id')
                ->select('chambres.id','chambres.hotel_id','chambres.image','room__types.title','room__types.price','room__types.adult_capacity','room__types.kids_capacity')
                ->where('room__types.title',$classe)
                ->where('chambres.hotel_id',$request->hotel)
                ->get();
        
        $begin=Carbon::parse($request->checkIn);
        $end=Carbon::parse($request->checkOut);
        $lenght=$end->diffInDays($begin);
        $request->session()->put('duree',$lenght);
        $request->session()->put('checkIn',$request->checkIn);
        $request->session()->put('checkOut',$request->checkOut);
        return view('Hotel.step-two',compact('rooms'));
    }   
}
