<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('dob');
            $table->string('occupation')->nullable();
            $table->string('acc_no')->nullable();
            $table->string('phone_no');
            $table->string('address');
            $table->string('gender');
            $table->string('country');
            $table->string('acc_type');
            $table->string('city');
            $table->string('state');
            $table->string('zp');
            $table->string('sq');
            $table->string('vsq');
            $table->boolean('isActive')->default(false)->nullable();
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
        Schema::dropIfExists('users');
    }
};
