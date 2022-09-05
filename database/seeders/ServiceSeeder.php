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
            'description' => 'Ceiling stain removal,Plastic cleaning,Leather renovation',
            'text' => fake()->text(200),
            'prix' => '150'
        ]);
        Service::create([
            'libelle' => 'Interior Carwash',
            'description' => 'Ceiling stain removal,Plastic cleaning,Leather renovation',
            'text' => fake()->text(200),
            'prix' => '75'
        ]);
        Service::create([
            'libelle' => 'Exterior Carwash',
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
    }
}
