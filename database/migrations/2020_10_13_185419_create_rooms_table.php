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
            $table->string('room_no');
            $table->string('hotel_name');
            // $table->string('size')->nullable()->unique()->default('single');
            $table->string('size');
            $table->integer('cost_per_night');
            $table->boolean('has_offer')->default(false);
            $table->date('booked_date_start');
            $table->date('booked_date_end');
            $table->string('state');
            $table->longText('notes')->nullable();
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
