<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{

    protected $model = User::class;


    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'username' => $this->faker->username,
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('javoshine'),
            'remember_token' => Str::random(10),
        ];
    }
}
