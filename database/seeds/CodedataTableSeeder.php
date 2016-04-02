<?php

use Illuminate\Database\Seeder;
use App\Codedata;

class CodedataTableSeeder  extends Seeder {
    public function run() {
        // DB::table('students')->delete();

        // $students = [
        //     [  "name" => 'Warodom',
        //         "surname" => 'Werapun',  ],
        //     [   "name" => 'John',
        //         "surname" => 'Denver',
        //     ]
        // ];

        // foreach ($students as $s ) {
        //     Student::create($s);     
        // } 

        Codedata::truncate();
        factory(Codedata::class,100)->create();

    }

}