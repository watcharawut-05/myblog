<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('employees')->insert([
           [
               'fullname'=>'john Deo',
               'gender'=>'Male',
               'email'=>'John@email.com',
               'tel'=>'0000000000',
               'age'=>30,
               'address'=>'8/80 moo.8 bangkok',
               'avartar'=>'noavartar.jpg',
               'status'=>1
           ],
           [
            'fullname'=>'สมชาย ใจดี',
            'gender'=>'Male',
            'email'=>'somchai@email.com',
            'tel'=>'0000000000',
            'age'=>20,
            'address'=>'9/99 moo.9 bangkok',
            'avartar'=>'noavartar.jpg',
            'status'=>1
        ],
        [
            'fullname'=>'wut',
            'gender'=>'Feaale',
            'email'=>'wut@email.com',
            'tel'=>'0000000000',
            'age'=>36,
            'address'=>'112 moo.9 chaiyaphum',
            'avartar'=>'noavartar.jpg',
            'status'=>1
        ]
        ]);
    }
}
