<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdentifyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identify', function (Blueprint $table) {
            $table->id();
            $table->int("user_id");
            $table->string("user_name");
            $table->string("nick_name");
            $table->timestamp("request_date");
            $table->string("identity_type");
            $table->string("identity_photo");
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
        Schema::dropIfExists('identify');
    }
}
