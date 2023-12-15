<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Customer;
use App\Models\Room;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index(){
        $booking = Booking::orderBy('id')->get();
        return view('booking.index', ['bookings'=> $booking]);
    }

    public function create(){
        $customers = Customer::list();
        $rooms = Room::list();
        return view('booking.create',['customers' => $customers, 'rooms' => $rooms]);
    }

    public function store(Request $request){

        $request->validate([
            'customer_id'   =>  'required|numeric',
            'room_id'       =>  'required|numeric',
            'check_in'      =>  'required|date',
            'check_out'     =>  'nullable|date',
            'total_ammount' =>  'required|numeric'
        ]);

        Booking::create([
            'customer_id'   =>  $request->customer_id,
            'room_id'       =>  $request->room_id,
            'check_in'      =>  $request->check_in,
            'check_out'     =>  $request->check_out,
            'total_ammount' =>  $request->total_ammount
        ]);

        return redirect('/bookings')->with('message', "A new booking has been added");
    }

    public function edit(Booking $booking){
        $customers = Customer::list();
        $rooms = Room::list();
        return view('booking.edit',['customers' => $customers, 'rooms' => $rooms, 'booking' => $booking], compact('booking'));
    }

    public function update(Booking $booking, Request $request){
        $request->validate([
            'customer_id'   =>  'required|numeric',
            'room_id'       =>  'required|numeric',
            'check_in'      =>  'required|date',
            'check_out'     =>  'required|date',
            'total_ammount' =>  'required|numeric'
        ]);

        $booking->update($request->all());
        return redirect('/bookings')->with('message', $booking->customer->first_name. " " .$booking->customer->last_name ." has been updated successfully at $request->check_in");
    }

    public function delete(Booking $booking){
        $booking->delete();

        return redirect('/bookings')->with('message', " $booking->id , ". $booking->customer->first_name. " " . $booking->customer->last_name . " has been deleted");
    }
}
