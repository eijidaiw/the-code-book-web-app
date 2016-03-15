<?php

use Illuminate\Database\Seeder;
use App\library;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class);
        $this->call(LibraryTableSeeder::class);
    }
}

class StudentTableSeeder  extends Seeder {
    public function run() {
        DB::table('students')->delete();

        $students = [
            [  "name" => 'Warodom',
                "surname" => 'Werapun',  ],
            [   "name" => 'John',
                "surname" => 'Denver',
            ]
        ];

        foreach ($students as $s ) {
            Student::create($s);     
        } 

    }

}
class CodeDataTableSeeder  extends Seeder {
    public function run() {
        DB::table('codedatas')->delete();

        $codedatas = [
            [  "title" => 'hello world',
                "content" => 'public class HelloWorld {

    public static void main(String[] args) {
        System.out.println("Hello, World");
    }

}',
                "type" => 'java' ,
                "evaluation" => 5.0 ,
                "user_id" => 1 , ]
        ];

        foreach ($codedatas as $s ) {
            Codedata::create($s);     
        } 

    }
}

class LibraryTableSeeder  extends Seeder {
    public function run() {
        DB::table('librarys')->delete();

        $librarys = [
        [   "ISBN" => '1234-56789-123',
            "name_book" => 'PHP Laravel',
            "author" => 'Eiji',
            "category" => 'academic',
            "publisher" => 'nanmebook',
            "edition" => '2',
            "published_year" => '2016',
            "printery" => 'Thai Printing Center',
            "description" => 'The PHP Framework For Web Artisans',
            "price" => '230.0',
            "location" => '2nd Floor',
            "import" => '2016-11-21',
            "source" => 'purchased',
            "borrow" => 'true', ]
        ];

        foreach ($librarys as $s ) {
            library::create($s);     
        } 

    }
}
