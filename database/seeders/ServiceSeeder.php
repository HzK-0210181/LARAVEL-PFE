<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            'libelle' => 'Full Carwash',
<<<<<<< HEAD
=======
            'description' => 'Ceiling stain removal,Plastic cleaning,Leather renovation',
            'text' => fake()->text(200),
>>>>>>> 2c1d119 (laravel backend api)
            'prix' => '150'
        ]);
        Service::create([
            'libelle' => 'Interior Carwash',
<<<<<<< HEAD
=======
            'description' => 'Ceiling stain removal,Plastic cleaning,Leather renovation',
            'text' => fake()->text(200),
>>>>>>> 2c1d119 (laravel backend api)
            'prix' => '75'
        ]);
        Service::create([
            'libelle' => 'Exterior Carwash',
<<<<<<< HEAD
            'prix' => '45'
        ]);
=======
            'description' => 'Ceiling stain removal,Plastic cleaning,Leather renovation',
            'text' => fake()->text(200),
            'prix' => '45'
        ]);
        Service::create([
            'libelle' => 'Full Package',
            'description' => 'Ceiling stain removal,Plastic cleaning,Leather renovation',
            'text' => fake()->text(200),
            'prix' => '300'
        ]);
        Service::create([
            'libelle' => 'Scratch Treatement',
            'description' => 'Ceiling stain removal,Plastic cleaning,Leather renovation',
            'text' => fake()->text(200),
            'prix' => '120'
        ]);
>>>>>>> 2c1d119 (laravel backend api)
    }
}
