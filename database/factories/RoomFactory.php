<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                'room_number'   =>fake()->randomElement(['A','B','C']).fake()->numberBetween(1,20),
                'room_type'     =>fake()->randomElement(['regular','suite','Presidential Suite']),
                'rate'          =>fake()->numberBetween(1000,100000),
                'capacity'      =>fake()->numberBetween(1,4)
        ];
    }
}
