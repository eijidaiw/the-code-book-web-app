<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSharecodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sharecodes', function (Blueprint $table) {
            $table->increments('id_code');
            $table->string('title',60);
            $table->text('content');
            $table->string('type',10);
            $table->double('evaluation');
            $table->integer('viewcounter');
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
        Schema::drop('sharecodes');
    }
}
