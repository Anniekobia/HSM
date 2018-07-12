<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->integer('age');
            $table->string('gender',100);
            $table->string('symptoms',100);
            $table->string('temperature',100);
            $table->string('blood_pressure',100);
            $table->string('allergies',100);
            $table->string('diagnosis',100);
            $table->string('treatment',100);
            $table->date('appointment');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
