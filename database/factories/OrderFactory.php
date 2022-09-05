<?php

namespace Database\Factories;

use App\Models\CarType;
use App\Models\Client;
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
<<<<<<< HEAD
            'client_id' => Client::all()->random()->id,
            'service_id' => Service::all()->random()->id,
            'Date' => fake()->date(),
            'car_type_id' => CarType::all()->random()->id,
            'zone_id' => Zone::all()->random()->id,
            'status' => fake()->randomElement(['taken', 'suspended'])
=======
            'FullName' => fake()->name(),
            'phoneNumber' => fake()->phoneNumber(),
            'Service' => Service::all()->random()->libelle,
            'Date' => fake()->date(),
            'Cartype' => CarType::all()->random()->type,
            'Zone' => Zone::all()->random()->name,
            'Time' => fake()->time(),
            'status' => fake()->randomElement(['Delivered','Waiting','Refuse']),
            'prix' => fake()->numberBetween('49.5','750')
>>>>>>> 2c1d119 (laravel backend api)
        ];
    }
}
