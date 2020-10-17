<?php

namespace Pkg\EasyCms\Admin\Main\Database\Seeders;

use Illuminate\Database\Seeder;
// add DatabaseSeeder to database/seeders/DatabaseSeeder.php
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersDatabaseSeeder::class);
    }
}
