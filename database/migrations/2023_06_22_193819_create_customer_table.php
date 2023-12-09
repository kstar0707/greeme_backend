<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');
            $table->string('email')->unique();
            $table->string('user_nickname');
            $table->int('address');
            $table->timestamp('birthday');
            $table->string('community');
            $table->string('height');
            $table->int('blood_type');
            $table->int('education');
            $table->int('holiday');
            $table->int('cigarette');
            $table->int('alcohol');
            $table->int('annual_income');
            $table->int('body_type');
            $table->int('use_purpose');
            $table->string('intro_badge');
            $table->string('photo1');
            $table->string('photo2');
            $table->string('photo3');
            $table->string('photo4');
            $table->string('photo5');
            $table->string('photo6');
            $table->string('introduce');
            $table->string('plan_type');
            $table->string('likes_rate');
            $table->string('coin');
            $table->string('identity_state');
            $table->int('is_show_unverified_age');
            $table->int('is_show_unmatched_person');
            $table->rememberToken();
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
        Schema::dropIfExists('customer');
    }
}
