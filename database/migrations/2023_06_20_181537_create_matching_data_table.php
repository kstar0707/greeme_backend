<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchingDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matching_data', function (Blueprint $table) {
            $table->id();
            $table->string("proposed_user_id");
            $table->string("proposed_user_nickname");
            $table->timestamp("proposed_date");
            $table->string("accepted_user_id");
            $table->string("accepted_user_nickname");
            $table->timestamp("accepted_date")->nullable();
            $table->string("receiving_message_state");
            $table->string("proposal_state");
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
        Schema::dropIfExists('matching_data');
    }
}
