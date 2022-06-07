<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\Student;
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
         \App\Models\User::factory(1)->create();
      // Student::factory(20)->create();
        //Item::factory(20)->create();
    }
}
