<?php

use Illuminate\Database\Seeder;
use App\Student;

class StudentTableSeeder  extends Seeder {
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

        Student::truncate();
        factory(Student::class,100)->create();

    }

}