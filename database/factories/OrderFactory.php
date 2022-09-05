<?php

namespace Database\Factories;

use App\Models\CarType;
use App\Models\Service;
use App\Models\Zone;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'FullName' => fake()->name(),
            'phoneNumber' => fake()->phoneNumber(),
            'Service' => Service::all()->random()->libelle,
            'Date' => fake()->date(),
            'Cartype' => CarType::all()->random()->type,
            'Zone' => Zone::all()->random()->name,
            'Time' => fake()->time(),
            'status' => fake()->randomElement(['Delivered', 'Waiting', 'Refuse']),
            'prix' => fake()->numberBetween('49.5', '750')

        ];
    }
}
