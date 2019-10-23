<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bike-galleries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('images');
            $table->timestamps();
        });
           Schema::table('bike-galleries', function (Blueprint $table) {
    $table->unsignedBigInteger('bike_id');

    $table->foreign('bike_id')->references('id')->on('bikes')->onDelete('cascade');
});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('galleries');
    }
}
