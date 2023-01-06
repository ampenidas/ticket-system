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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->string('subject');
            $table->string('authorized_personnel');
            $table->string('request_type');
            $table->text('request_description');
            $table->string('phone');
            $table->text('address');
            $table->string('request_status');
            $table->string('location');
            $table->string('partner');
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
        Schema::dropIfExists('tickets');
    }
};
