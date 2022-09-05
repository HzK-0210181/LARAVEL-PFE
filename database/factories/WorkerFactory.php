<?php

namespace Database\Factories;

<<<<<<< HEAD
use App\Models\Group;
=======
>>>>>>> 2c1d119 (laravel backend api)
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Worker>
 */
class WorkerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::where('role', 'worker')->get()->random()->id,
<<<<<<< HEAD
            'group_id' => Group::all()->random()->id
=======
>>>>>>> 2c1d119 (laravel backend api)
        ];
    }
}
