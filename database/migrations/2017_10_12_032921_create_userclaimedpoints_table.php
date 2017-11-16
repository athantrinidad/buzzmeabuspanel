<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserclaimedpointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userclaimedpoints', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('route_id')->index();
            $table->integer('user_id')->index();
            $table->integer('claimedpoints');
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
        Schema::dropIfExists('userclaimedpoints');
    }
}
