<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViolationReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('violation_report', function (Blueprint $table) {
            $table->id();
            $table->string("violation_id");
            $table->string("user_id");
            $table->string("user_nickname");
            $table->timestamp("violation_date");
            $table->string("violation_content");
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
        Schema::dropIfExists('violation_report');
    }
}
