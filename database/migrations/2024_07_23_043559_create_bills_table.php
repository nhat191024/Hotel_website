<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->foreignId('room_id')->references('id')->on('rooms');
            $table->integer('guest_number');
            $table->string('full_name');
            $table->text('address');
            $table->string('phone');
            $table->string('email');
            $table->tinyInteger('payment_method');
            $table->integer('total')->default(0);
            $table->tinyInteger('status')->default(1);
            $table->dateTime('check_in');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bills');
    }
};
