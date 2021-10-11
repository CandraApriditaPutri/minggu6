<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'nim' => '2031710048',
            'name' => 'Candra Apridita',
            'class' => 'MI-2E',
            'department' => 'JTI',
            'phone_number' => '085790926971'
        ]);
        DB::table('students')->insert([
            'nim' => '2031710164',
            'name' => 'Celline Salsabiela',
            'class' => 'MI-2E',
            'department' => 'JTI',
            'phone_number' => '082134584516'
        ]);
        DB::table('students')->insert([
            'nim' => '2031710054',
            'name' => 'Diska Oktavia',
            'class' => 'MI-2E',
            'department' => 'JTI',
            'phone_number' => '088996538919'
        ]);
    }
}
