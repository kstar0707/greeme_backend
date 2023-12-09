<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActiveBoardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('active_board', function (Blueprint $table) {
            $table->id();
            $table->string("board_id");
            $table->string("user_id");
            $table->string("user_name");
            $table->string("created_date");
            $table->string("deleted_date");
            $table->string("board_content");
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
        Schema::dropIfExists('active_board');
    }
}
