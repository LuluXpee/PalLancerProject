<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('Room_Number')->nullable();
            $table->string('Room_Type')->nullable();
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->string('Amenities')->nullable();
            $table->float('Price Per Night')->default(0);
            $table->enum('Status',['Available','Unavailable'])->default('Available');
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
        Schema::dropIfExists('rooms');
    }
}
