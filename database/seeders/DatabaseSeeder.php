<?php

namespace Database\Seeders;

use App\Models\Entry;
use App\Models\User;
use Database\Factories\EntriesFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        User::factory(10)->create();
        Entry::factory(100)->create();
    }
}
