<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id')->index();
            $table->string('point_1_name');
            $table->decimal('point_1_latitude');
            $table->decimal('point_1_longitude');
            $table->string('point_2_name');
            $table->decimal('point_2_latitude');
            $table->decimal('point_2_longitude');     
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
        Schema::dropIfExists('routes');
    }
}
