<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Pkg\ExamplePackage\Database\Seeders\DatabaseSeeder as ExampleDatabaseSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ExampleDatabaseSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
