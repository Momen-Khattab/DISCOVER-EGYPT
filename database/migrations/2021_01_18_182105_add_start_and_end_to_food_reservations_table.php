<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStartAndEndToFoodReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('food_reservations', function (Blueprint $table) {
            $table->bigInteger('user_id')->unsigned()->after('id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->bigInteger('food_id')->unsigned()->after('user_id');
            $table->foreign('food_id')->references('id')->on('foods')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('food_reservations', function (Blueprint $table) {
            $table->dropForeign('food_reservations_user_id_foreign');
            $table->dropColumn('user_id');

            $table->dropForeign('food_reservations_food_id_foreign');
            $table->dropColumn('food_id');

        });
    }
}
