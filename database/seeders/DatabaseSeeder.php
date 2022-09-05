<?php

namespace Database\Seeders;

use App\Models\CarType;
use App\Models\Group;
use App\Models\Service;
use App\Models\SuperAdmin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ZoneSeeder::class,
            UserSeeder::class,
            CommentSeeder::class,
            CarTypeSeeder::class,
            WorkerSeeder::class,
            ServiceSeeder::class,
            OrderSeeder::class
        ]);
    }
}
