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
        Schema::create('boarding_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('passenger_id')->nullable->constraint()->deleteOnCascade();
            $table->foreignId('rfid_uid')->nullable->constraint()->deleteOnCascade();
            $table->foreign('voyage_id')->nullable->constraint()->deleteOnCascade();
            $table->dateTime('boarded_at');
            $table->dateTime('disembarked_at');
            $table->enum('status', ['waiting', 'departed', 'arrived'])->default('waiting');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boarding_records');
    }
};
