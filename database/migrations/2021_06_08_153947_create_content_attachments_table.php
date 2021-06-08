<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_attachments', function (Blueprint $table) {
            $table->id();
            $table->char('title');
            $table->string('description');
            $table->char('url');
            $table->char('type');
            $table->unsignedBigInteger('content_id');
            $table->timestamps();

            $table->foreign('content_id')->references('id')->on('contents');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('content_attachments');
    }
}
