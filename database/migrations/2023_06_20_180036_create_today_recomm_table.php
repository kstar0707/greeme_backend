<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodayRecommTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('today_recomm', function (Blueprint $table) {
            $table->id();
            $table->string("user_id");
            $table->string("nick_name");
            $table->string("recomm_user_id");
            $table->string("recomm_nickname");
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
        Schema::dropIfExists('today_recomm');
    }
}
