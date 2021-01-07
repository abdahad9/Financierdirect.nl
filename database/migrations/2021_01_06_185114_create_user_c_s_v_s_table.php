<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserCSVSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_c_s_v_s', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('username');
            $table->string('email');
            $table->string('password');
            $table->string('phone');
            $table->string('country');
            $table->string('date_of_birth');
            $table->string('role_id');
            $table->string('status');
            $table->string('gender');
            $table->string('avatar');
            $table->string('google');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('linkedin');
            $table->string('skype');
            $table->string('dribbble');
            $table->string('remember_token');
            $table->string('no_bkr');
            $table->string('company_name');
            $table->string('image');
            $table->string('company_start_date');
            $table->string('no_kvk');
            $table->string('postcode');
            $table->string('street');
            $table->string('city');
            $table->string('province');
            $table->string('house_number');
            $table->string('slug');
            $table->string('created_at');
            $table->string('updated_at');
            $table->string('deleted_at');
            $table->string('creater_id');
            $table->string('attempts');
            $table->string('accountmanager');
            $table->string('bellijst');
            $table->string('employee');
            $table->string('email_status');
            $table->string('private_email');
            $table->string('private_phone');
            $table->string('overhead');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_c_s_v_s');
    }
}
