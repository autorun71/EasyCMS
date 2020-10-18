<?php

namespace Pkg\EasyCMS\Admin\Main\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

// add DatabaseSeeder to database/seeders/DatabaseSeeder.php
class MainDatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $table = 'main';
        DB::table($table)->insert([

            'locale_id' => 1
        ]);
    }
}
