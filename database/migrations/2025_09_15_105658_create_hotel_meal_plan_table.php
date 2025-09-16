<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('hotel_meal_plan', function (Blueprint $t) {
            $t->id(); // or omit and use a composite primary key instead
            $t->foreignId('hotel_id')->constrained('hotels')->cascadeOnDelete();
            $t->foreignId('meal_plan_id')->constrained('meal_plans')->cascadeOnDelete();

            // prevent duplicates
            $t->unique(['hotel_id', 'meal_plan_id']);

            // optional if you want audit trail on the pivot:
            // $t->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hotel_meal_plan');
    }
};
