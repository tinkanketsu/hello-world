<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('name');
            $table->string('real_name')->default("");
            $table->tinyInteger('gender');
            $table->string('profile_image');
            $table->string('location');
            $table->string('birthday');
            $table->string('postcode');
            $table->integer('province');
            $table->integer('city');
            $table->string('addr1');
            $table->string('addr2');

            $table->integer('status');
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
        //
        Schema::drop('profiles');
    }
}
