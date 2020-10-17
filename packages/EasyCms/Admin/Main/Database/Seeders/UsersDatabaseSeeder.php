<?php

namespace Pkg\EasyCMS\Admin\Main\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

// add DatabaseSeeder to database/seeders/DatabaseSeeder.php
class UsersDatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@easy-cms.ru',
            'password' => bcrypt('admin'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
