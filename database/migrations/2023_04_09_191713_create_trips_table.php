<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->integer('vehicleId');
            $table->String('from');
            $table->String('to');
            $table->Date('date');
            $table->Date('startTime');
            $table->Date('endTime');
            $table->integer('odoMeterStart');
            $table->integer('odoMeterEnd');
            $table->integer('amount');
            $table->integer('mileage');
            $table->string('journeyStart');
            $table->string('journeyEnd');
            $table->integer('createdBy');
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
        Schema::dropIfExists('trips');
    }
}
