<?php

namespace Pkg\EasyCMS\Admin\Main\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

// add DatabaseSeeder to database/seeders/DatabaseSeeder.php
class RolesDatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $table = 'roles';
        DB::table($table)->insert([
            'name' => 'Администратор',
            'description' => 'Полный доступ',
            'permission_type' => 'all',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table($table)->insert([
            'name' => 'Пользователь',
            'description' => 'Доступ к сайту',
            'permission_type' => 'user',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
