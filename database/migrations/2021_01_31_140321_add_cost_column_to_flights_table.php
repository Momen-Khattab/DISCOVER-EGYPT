<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCostColumnToFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('flights', function (Blueprint $table) {
            //
            
            $table->string('cost')->before('flight_destinaion')->nullable();
            $table->string('company_number')->before('notes')->nullable();
            $table->string('seat_no')->before('created_at')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('flights', function (Blueprint $table) {
            //
            
            $table->dropColumn('cost');
            $table->dropColumn('company_number');
            $table->dropColumn('seat_no');
        });
    }
}
