<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
}
