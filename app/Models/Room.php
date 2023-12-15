<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = ['room_number', 'room_type', 'rate', 'capacity'];

    public function bookings(){
        return $this->hasMany(Booking::class);
    }

    public static function list(){
        $rooms = Room::orderByRaw('id')->get();
        $list = [];

        foreach ($rooms as $room){
            $list[$room->id] = $room->room_number.' '.$room->room_type;
        }
        return $list;
    }
}
