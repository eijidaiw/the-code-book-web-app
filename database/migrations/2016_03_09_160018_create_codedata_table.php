<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCodedataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('codedatas', function (Blueprint $table) {
            $table->increments('id_code');
            $table->string('title',60);
            $table->text('content');
            $table->string('type',10);
            $table->double('evaluation');
            $table->integer('user_id');
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
        Schema::drop('codedatas');
    }
}
 