<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('address');
            $table->integer('phone1');
            $table->integer('phone2');
            $table->integer('phone3');
            $table->integer('fax');
            $table->text('profile');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('linkedin');
            $table->string('email')->index();
            $table->string('contact_person');
            $table->string('image');
            $table->string('thumb');
            $table->integer('admin_id')->index();
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
        Schema::dropIfExists('companies');
    }
}
