<?php

namespace Database\Seeders;

use App\Models\CarType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CarType::create([
            'type' => 'Crossover',
            'margin' => '1.1'
        ]);
        CarType::create([
            'type' => 'Coupe',
            'margin' => '1.2'
        ]);
        CarType::create([
            'type' => 'Universial',
            'margin' => '1.5'
        ]);
        CarType::create([
            'type' => 'Sedan',
            'margin' => '1.2'
        ]);
        CarType::create([
            'type' => 'Pick-Up',
            'margin' => '2'
        ]);
        CarType::create([
            'type' => 'Minivan',
            'margin' => '2.5'
        ]);
    }
}
