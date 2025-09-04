<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id('room_id');                           // PK
            $table->unsignedBigInteger('hotel_id');          // FK → hotels.hotel_id
            $table->unsignedBigInteger('room_type_id');      // FK → room_types.room_type_id
            $table->unsignedBigInteger('meal_plan_id');      // FK → meal_plans.meal_plan_id
            $table->unsignedInteger('quantity')->default(1);
            $table->decimal('base_rate', 10, 2)->default(0); // adjust precision/scale if needed
            $table->timestamps();

            // Indexes (helpful for lookups)
            $table->index(['hotel_id', 'room_type_id']);
            $table->index('meal_plan_id');

            // FKs
            $table->foreign('hotel_id')
                ->references('hotel_id')->on('hotels')
                ->onDelete('cascade');         // delete rooms if hotel is deleted

            $table->foreign('room_type_id')
                ->references('room_type_id')->on('room_types')
                ->onDelete('restrict');        // or cascade/set null based on your logic

            $table->foreign('meal_plan_id')
                ->references('meal_plan_id')->on('meal_plans')
                ->onDelete('restrict');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
