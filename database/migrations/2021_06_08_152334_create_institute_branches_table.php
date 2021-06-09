<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstituteBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institute_branches', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('institute_id');
            $table->char('name');
            $table->char('status');
            $table->float('latitude');
            $table->float('longitude');
            $table->timestamps();

            $table->foreign('institute_id')->references('id')->on('institutes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('institute_branches');
    }
}
