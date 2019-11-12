<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBikeDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bike-details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('part');
            $table->string('color');
            $table->string('size');
            $table->string('description');
            $table->timestamps();
        });
        Schema::table('bike-details', function (Blueprint $table) {
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
    
    }
}
