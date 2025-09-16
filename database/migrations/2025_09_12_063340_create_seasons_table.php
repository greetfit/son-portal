<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('seasons', function (Blueprint $t) {
            $t->id();

            // FK -> hotels.id (correct target)
            $t->foreignId('hotel_id')
              ->constrained('hotels')
              ->cascadeOnDelete();

            $t->string('code', 20);   // e.g., PEAK, SHOULDER, OFF
            $t->string('name');       // e.g., Peak Season
            $t->date('start_date');
            $t->date('end_date');     // inclusive
            $t->timestamps();

            // Prevent duplicate codes per hotel
            $t->unique(['hotel_id', 'code']);

            // Helpful index for range queries
            $t->index(['hotel_id', 'start_date', 'end_date']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('seasons');
    }
};
