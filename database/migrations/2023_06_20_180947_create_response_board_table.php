<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponseBoardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('response_board', function (Blueprint $table) {
            $table->id();
            $table->string("res_board_id");
            $table->string("res_board_user_id");
            $table->string("res_board_user_nickname");
            $table->string("act_board_id");
            $table->string("act_board_user_id");
            $table->string("act_board_user_nickname");
            $table->string("res_board_content");
            $table->timestamp("delete_date");
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
        Schema::dropIfExists('response_board');
    }
}
