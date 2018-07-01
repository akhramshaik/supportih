<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Support extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('bg_votes', function (Blueprint $table) {
            $table->increments('userId');
            $table->string('userIp');
            $table->string('userCity');
            $table->string('userPincode');
            $table->string('userState');
            $table->string('userCountry');
            $table->string('userTimestamp');
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
    }
}
