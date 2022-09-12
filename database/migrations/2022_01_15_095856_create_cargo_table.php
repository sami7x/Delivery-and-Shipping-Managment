<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCargoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargo', function (Blueprint $table) {
            $table->id();
            $table->string('sender_name');
            $table->string('sender_phone');
            $table->string('sender_location');
            $table->string('sender_address');
            $table->string('product');
            $table->float('product_weight');
            $table->string('product_type');
            $table->boolean('pickup_status')->default(0)->nullable();


            $table->string('receiver_name');
            $table->string('receiver_phone');
            $table->string('receiver_location');
            $table->string('receiver_address');
            $table->boolean('cargo_status')->default(0)->nullable();
            $table->float('total')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cargo');
    }
}
