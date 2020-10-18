<?php

namespace Pkg\EasyCMS\Admin\Main\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

// add DatabaseSeeder to database/seeders/DatabaseSeeder.php
class LocalesDatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $table = 'locales';
        DB::table($table)->insert([
            'name' => 'Russia',
            'code' => 'ru',
        ]);
    }
}
