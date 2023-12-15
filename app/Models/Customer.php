<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['last_name', 'first_name', 'address', 'phone', 'email'];

    public function bookings(){
        return $this->hasMany(Booking::class);
    }

    public static function list(){
        $customers = Customer::orderByRaw('id')->get();
        $list = [];

        foreach ($customers as $customer){
            $list[$customer->id] = $customer->first_name.' '.$customer->last_name;
        }
        return $list;
    }
}
