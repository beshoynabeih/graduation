<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tables', function (Blueprint $table) {
            $table->increments('id');
            $table->string('grade');
            $table->string('day');

            $table->string('lec1');
            $table->string('lec2');
            $table->string('lec3');
            $table->string('lec4');
            $table->string('lec5');
            $table->string('lec6');
            $table->string('lec7');
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
        Schema::drop('tables');
    }
}
