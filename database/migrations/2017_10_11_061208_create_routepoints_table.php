<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoutepointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routepoints', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('route_id');
            $table->string('point_name');
            $table->decimal('point_latitude');
            $table->decimal('point_longitude');
            $table->decimal('fare');
            $table->integer('farepoints');
            $table->integer('rewardpoints'); 
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
        Schema::dropIfExists('routepoints');
    }
}
