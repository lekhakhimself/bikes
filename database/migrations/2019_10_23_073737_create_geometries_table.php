<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeometriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('geometries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('size');
            $table->string('49');
             $table->string('52');
              $table->string('54');
              $table->string('56');
              $table->string('58');
              $table->string('61');
            $table->timestamps();
        });
                  Schema::table('geometries', function (Blueprint $table) {
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
        Schema::dropIfExists('geometries');
    }
}
