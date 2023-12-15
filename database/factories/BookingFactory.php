<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_id'   =>fake()->numberBetween(1,100),
            'room_id'       =>fake()->numberBetween(1,100),
            'check_in'      =>fake()->date(),
            'check_out'     =>fake()->date(),
            'total_ammount' =>fake()->numberBetween(1000,100000),
        ];
    }
}
