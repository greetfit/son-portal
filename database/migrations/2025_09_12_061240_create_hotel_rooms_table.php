<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('hotel_rooms', function (Blueprint $t) {
            $t->id();

            // Always reference parent `id`
            $t->foreignId('hotel_id')->constrained('hotels')->cascadeOnDelete();
            $t->foreignId('room_type_id')->constrained('room_types')->restrictOnDelete();
            $t->foreignId('room_category_id')->constrained('room_categories')->restrictOnDelete();

            // If you don't have occupancy_types yet, remove the next line.
            // Otherwise create the occupancy_types table first.
            // $t->foreignId('occupancy_type_id')->nullable()->constrained('occupancy_types')->nullOnDelete();

            $t->unsignedInteger('total_rooms')->default(1);
            $t->unsignedTinyInteger('base_occupancy')->default(2);
            $t->unsignedTinyInteger('max_occupancy')->default(3);

            $t->timestamps();

            // Prevent duplicate variants per hotel
            $t->unique(['hotel_id','room_type_id','room_category_id'], 'uniq_hotel_room_combo');
            // If you keep occupancy_type_id, include it in the unique key:
            // $t->unique(['hotel_id','room_type_id','room_category_id','occupancy_type_id'], 'uniq_hotel_room_combo');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hotel_rooms');
    }
};
