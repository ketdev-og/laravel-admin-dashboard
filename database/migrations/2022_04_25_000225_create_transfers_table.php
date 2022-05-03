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
        Schema::create('transfers', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('from_acc');
            $table->string('recp_bank_name');
            $table->string('acc_name');
            $table->string('iban');
            $table->string('swift_code');
            $table->string('amount');
            $table->string('message');
            $table->string('cm_code');
            $table->boolean('confirmed')->default(false)->nullable();
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
        Schema::dropIfExists('transfers');
    }
};
