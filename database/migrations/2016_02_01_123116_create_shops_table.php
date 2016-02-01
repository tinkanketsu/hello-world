<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('shops', function (Blueprint $table) {

            $table->increments('id');
            $table->string('name');
            $table->string('access');
            $table->string('description');
            $table->string('short_description');
            $table->string('business_hours');
            $table->string('telephone');
            $table->string('wechat_no');

            $table->integer('seat_counts')->default(0);
            $table->integer('stylist_counts')->default(0);


            $table->float('latitude');
            $table->float('longitude');

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
        Schema::drop('shops');
    }
}
