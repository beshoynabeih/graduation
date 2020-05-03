<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type'); //this is for month field but I doen't know wht i named it ype :)
            $table->integer('student_id');
            $table->decimal('arabic',10, 2);
            $table->decimal('english',10, 2);
            $table->decimal('math',10, 2);
            $table->decimal('science',10, 2);
            $table->decimal('history',10, 2);
            $table->decimal('arts',10, 2);
            $table->decimal('computer',10, 2);
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
        Schema::drop('results');
    }
}
