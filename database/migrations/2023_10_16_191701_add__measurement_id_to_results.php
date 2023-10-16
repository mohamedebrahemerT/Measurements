<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMeasurementIdToResults extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('results', function (Blueprint $table) {
            //
               $table->unsignedInteger('Measurement_id')->nullable();

            $table->foreign('Measurement_id', 'user_fk_773765')->references('id')->on('measurements');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('results', function (Blueprint $table) {
            //
        });
    }
}
