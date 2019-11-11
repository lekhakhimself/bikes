<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MakeChangeInBike extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Bikes', function (Blueprint $table) {
        
        });
             Schema::table('bikes', function (Blueprint $table) {
    $table->unsignedBigInteger('category_id');

    $table->foreign('category_id')->references('id')->on('bike-categories')->onDelete('cascade');
});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Bikes', function (Blueprint $table) {
            $table->dropColumn('Category');
          
        });
    }
}
