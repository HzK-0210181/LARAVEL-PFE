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
            'client_id' => Client::all()->random()->id,
            'service_id' => Service::all()->random()->id,
            'Date' => fake()->date(),
            'car_type_id' => CarType::all()->random()->id,
            'zone_id' => Zone::all()->random()->id,
        ];
    }
}
