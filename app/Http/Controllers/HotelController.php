<?php

namespace App\Http\Controllers;

use App\Models\Chambre;
use App\Models\Hotel;
use App\Models\Room_Type;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Reservation;
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
        $array=explode(" ",$request->check);
        $checkIn=$array[0]." ".$array[1];
        $checkOut=$array[3]." ".$array[4];
        $begin=Carbon::parse($checkIn);
        $end=Carbon::parse($checkOut);
        $lenght=$end->diffInDays($begin);
        $request->session()->put('duree',$lenght);
        $request->session()->put('checkIn',$checkIn);
        $request->session()->put('checkOut',$checkOut);
        return view('Hotel.step-one',compact('hotels','classes'));

    }

    public function stepTwo($id,Request $request){
        $classe=$request->session()->get('classe');
        $rooms=DB::table('chambres')
                ->join('room__types','chambres.room__type_id','room__types.id')
                ->select('chambres.id','chambres.hotel_id','chambres.image','room__types.title','room__types.price','room__types.adult_capacity','room__types.kids_capacity')
                ->where('room__types.title',$classe)
                ->where('chambres.hotel_id',$id)
                ->get();

            return view('Hotel.step-two',compact('rooms'));
    }

    public function stepThree($id,Request $request){
        $checkIn=$request->session()->get('checkIn');
        $checkOut=$request->session()->get('checkOut');
        $duree=$request->session()->get('duree');
        $hotelId=$request->session()->get('id');
        $chambre=Chambre::find($id);
        $request->session()->put('chambreId',$id);
        $hotel=Hotel::find($chambre->hotel_id);
        $room_type=Room_type::find($chambre->room__type_id);
        //return $hotel;
        //return $room_type;
        return view('Hotel.step-three',compact('checkIn','checkOut','hotel','room_type','duree','chambre'));
    }

    public function stepFinal(Request $request){

        if($request->session()->has('reservation')){
            $request->session()->forget('reservation');
        }
        $reservation=Reservation::create([
            'chambre_id'=>$request->chambre_id,
            'check_in'=>$request->check_in,
            'check_out'=>$request->check_out,
            'duration_of_stay'=>$request->duree,
            'price_reser'=>$request->price_reser,
            'user_id'=>auth()->user()->id,
            'status'=>1,
        ]);

        $request->session()->put('reservation', $reservation);

        return to_route('customer.confirm');
    }

    public function confirm(Request $request){

        $reservation=$request->session()->get('reservation');
        $chambre=Chambre::find($reservation->chambre_id);
        $hotel=Hotel::find($chambre->hotel_id);
        //return $hotel;
        return view('customer.booking-confirm',compact('reservation','hotel'));
    }
}
