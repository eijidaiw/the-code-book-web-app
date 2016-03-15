<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibraryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libraries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ISBN',20);
            $table->string('name_book',80);
            $table->string('author',50);
            $table->string('category',50);
            $table->string('publisher',50);
            $table->tinyInteger('edition');
            $table->string('published_year',4);
            $table->string('printery',50);
            $table->text('description');
            $table->double('price',15,3);
            $table->string('location',100);
            $table->date('import');
            $table->enum('source', ['purchased', 'donate']);
            $table->boolean('borrow');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('libraries');
    }
}
