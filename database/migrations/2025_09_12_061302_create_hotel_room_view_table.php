<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('hotel_room_view', function (Blueprint $t) {
            $t->id();

            $t->foreignId('hotel_room_id')
              ->constrained('hotel_rooms')
              ->cascadeOnDelete();

            $t->foreignId('room_view_id')
              ->constrained('room_views')
              ->restrictOnDelete();

            // prevent duplicates
            $t->unique(['hotel_room_id', 'room_view_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hotel_room_view');
    }
};
