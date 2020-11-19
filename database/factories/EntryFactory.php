<?php

namespace Database\Factories;

use App\Models\Entry;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class EntryFactory extends Factory
{

    protected $model = Entry::class;

    public function definition()
    {
        return [
            'title'=> $this->faker->company,
            'content'=> $this->faker->paragraph(3),
            'user_id'=> User::all()->random()->id,
        ];
    }
}
