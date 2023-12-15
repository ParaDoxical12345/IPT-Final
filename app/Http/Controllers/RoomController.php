<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index(){
        $room = Room::orderBy('id')->get();
        return view('room.index', ['rooms'=> $room]);
    }

    public function create(){
        return view('room.create');
    }

    public function store(Request $request){

        $request->validate([
            'room_number'   =>  'required',
            'room_type'     =>  'required',
            'rate'          =>  'required|numeric',
            'capacity'      =>  'required|numeric'
        ]);

        Room::create([
            'room_number'   =>  $request->room_number,
            'room_type'     =>  $request->room_type,
            'rate'          =>  $request->rate,
            'capacity'      =>  $request->capacity
        ]);

        return redirect('/rooms')->with('message', "A new room has been added");
    }

    public function edit(Room $room){
        return view('room.edit', compact('room'));
    }

    public function update(Room $room, Request $request){
        $request->validate([
            'room_number'   =>  'required',
            'room_type'     =>  'required',
            'rate'          =>  'required|numeric',
            'capacity'      =>  'required|numeric'
        ]);

        $room->update($request->all());
        return redirect('/rooms')->with('message', "$room->room_number has been updated successfully");
    }

    public function delete(Room $room){

        $room->delete();

        return redirect('/rooms')->with('message', " $room->room_number   $room->room_type has been deleted");
    }
}
