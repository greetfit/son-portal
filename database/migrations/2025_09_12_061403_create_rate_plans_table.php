<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rate_plans', function (Blueprint $t) {
            $t->id();

            // FKs -> reference parent `id`
            $t->foreignId('hotel_room_id')
              ->constrained('hotel_rooms')
              ->cascadeOnDelete();

            $t->foreignId('meal_plan_id')
              ->constrained('meal_plans')
              ->restrictOnDelete();

            $t->string('code', 20)->nullable();      // e.g., DLX-BB
            $t->string('name')->nullable();          // e.g., Deluxe with Breakfast
            $t->boolean('cancellable')->default(true);
            $t->text('refund_policy')->nullable();
            $t->decimal('default_price', 12, 2);

            // Additional fields
            $t->text('guide_policy')->nullable();
            $t->text('child_policy')->nullable();
            $t->text('notes')->nullable();

            $t->timestamps();

            // Prevent duplicates per room/meal plan (adjust if you want per-code uniqueness)
            $t->unique(['hotel_room_id', 'meal_plan_id']);
            // Optional:
            // $t->unique(['hotel_room_id', 'meal_plan_id', 'code']);
            // $t->index('code');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rate_plans');
    }
};
