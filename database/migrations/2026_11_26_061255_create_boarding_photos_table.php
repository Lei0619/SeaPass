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
        Schema::create('boarding_photos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('boarding_record_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('photo_path');
            $table->dateTime('captured_at');
            $table->dateTime('deleted_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boarding_photos');
    }
};
