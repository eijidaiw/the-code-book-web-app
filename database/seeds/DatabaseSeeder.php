<?php

use Illuminate\Database\Seeder;
use App\Bear;
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
        //$this->call(LibraryTableSeeder::class);
        $this->call(BearTableSeeder::class);
    }
}

// class CodeDataTableSeeder  extends Seeder {
//     public function run() {
//         DB::table('codedatas')->delete();

//         $codedatas = [
//             [  "title" => 'hello world',
//                 "content" => 'public class HelloWorld {

//     public static void main(String[] args) {
//         System.out.println("Hello, World");
//     }

// }',
//                 "type" => 'java' ,
//                 "evaluation" => 5.0 ,
//                 "user_id" => 1 , ]
//         ];

//         foreach ($codedatas as $s ) {
//             Codedata::create($s);     
//         } 

//     }
// }

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

class BearTableSeeder  extends Seeder {
    public function run() {
        Bear::truncate();
        factory(Bear::class,20)->create();

    }
}