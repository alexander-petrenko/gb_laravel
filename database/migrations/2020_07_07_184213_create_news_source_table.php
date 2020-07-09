<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsSourceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_source', function (Blueprint $table) {
            $table->id();
            $table->string('source_link');
            $table->unsignedBigInteger('news_id');
            $table->timestamps();

            $table->foreign('news_id')->references('id')->on('news');

            $table->index('news_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_source');
    }
}
