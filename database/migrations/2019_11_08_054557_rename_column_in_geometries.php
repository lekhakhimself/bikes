<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameColumnInGeometries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('geometries', function (Blueprint $table) {
  
            $table->renameColumn('forty_nine','fortynine');
              

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('geometries', function (Blueprint $table) {
         $table->renameColumn('fortynine','forty_nine');
     });
        
    }
}
