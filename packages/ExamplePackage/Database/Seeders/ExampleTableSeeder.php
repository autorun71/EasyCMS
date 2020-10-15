<?php

namespace Pkg\ExamplePackage\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ExampleTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('examples')->delete();

        DB::table('attributes')->insert([
                [
                    'id' => '1',
                    'title' => 'Example One'
                ], [
                    'id' => '2',
                    'title' => 'Example Two'
                ]
            ]
        );
    }
}
