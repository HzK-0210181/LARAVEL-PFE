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
            'prix' => '150'
        ]);
        Service::create([
            'libelle' => 'Interior Carwash',
            'prix' => '75'
        ]);
        Service::create([
            'libelle' => 'Exterior Carwash',
            'prix' => '45'
        ]);
    }
}
