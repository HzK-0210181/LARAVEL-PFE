<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(4)->admin()->create();
        User::factory()->count(10)->worker()->create();
        User::create([
            'first_name' => 'Hamza',
            'last_name' => 'KHIAR',
            'telephone' => '+212 649 404 650',
            'email' => 'theultimanhood@gmail.com',
            'password' => bcrypt('somethingirrelevant'),
            'role' => 'admin'
        ]);
    }
}
