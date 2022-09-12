<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiderTable extends Migration
{
    /**
     * Run the migrations
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('riders')){
        Schema::create('riders', function (Blueprint $table) {
            $table->id('id');
            $table->string('rider_name');
            $table->string('rider_address')->nullable();
            $table->string('rider_phone')->nullable();
            $table->string('gender')->nullable();
            $table->string('license_no')->nullable();
            $table->string('vehicle_no')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rider');
    }
}
