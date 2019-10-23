<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTechnicalDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technical_descriptions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('parts');
            $table->string('description');
            $table->timestamps();
        });
              Schema::table('technical_descriptions', function (Blueprint $table) {
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
        Schema::dropIfExists('technical_descriptions');
    }
}
