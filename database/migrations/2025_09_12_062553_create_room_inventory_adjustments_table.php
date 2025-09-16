<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('room_inventory_adjustments', function (Blueprint $t) {
            $t->id();

            // FK (define once)
            $t->foreignId('hotel_room_id')
              ->constrained('hotel_rooms')
              ->cascadeOnDelete();

            $t->date('date');
            $t->integer('delta'); // e.g., -2 blocks two rooms; +3 adds temporary capacity
            $t->text('note')->nullable();
            $t->timestamps();

            // helpful index
            $t->index(['hotel_room_id', 'date']);
            // If you want to prevent duplicates per day, use:
            // $t->unique(['hotel_room_id', 'date']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('room_inventory_adjustments');
    }
};
