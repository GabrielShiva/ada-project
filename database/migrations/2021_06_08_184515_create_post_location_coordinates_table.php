<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostLocationCoordinatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_location_coordinates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('location_id');
            $table->float('latitude');
            $table->float('longitude');
            $table->timestamps();

            $table->foreign('location_id')->references('id')->on('post_locations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_location_coordinates');
    }
}
