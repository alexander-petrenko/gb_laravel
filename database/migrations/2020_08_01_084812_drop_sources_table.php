<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropSourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sources', function (Blueprint $table) {
            $table->dropIfExists('sources');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('sources', function (Blueprint $table) {
            $table->id();
            $table->string('link');
            $table->unsignedBigInteger('news_id');
            $table->timestamps();

            $table->foreign('news_id')->references('id')->on('news');

            $table->index('news_id');
        });
    }
}
