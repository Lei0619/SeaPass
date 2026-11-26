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
        Schema::create('r_f_i_d_s', function (Blueprint $table) {
            $table->id();
            $table->foreign('passenger_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('rfid_uid')->unique();
            $table->enum('status', ['active', 'inactive', 'lost'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_f_i_d_s');
    }
};
