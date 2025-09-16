<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('promotions', function (Blueprint $t) {
            $t->id();

            $t->foreignId('hotel_id')
              ->constrained('hotels')
              ->cascadeOnDelete();

            $t->string('code', 30)->unique();            // e.g., WINTER25
            $t->string('name');
            $t->enum('discount_type', ['percent', 'flat']);
            $t->decimal('discount_value', 12, 2);        // 25.00 (%) or 2500.00 (flat currency)

            $t->date('book_from')->nullable();           // booking window
            $t->date('book_to')->nullable();
            $t->date('stay_from')->nullable();           // stay/travel window
            $t->date('stay_to')->nullable();

            $t->unsignedTinyInteger('min_nights')->default(1);
            $t->unsignedTinyInteger('max_nights')->nullable();

            $t->boolean('stackable')->default(false);    // can combine with other promos?
            $t->json('blackout_dates')->nullable();      // ["2025-12-31","2026-01-01"]
            $t->json('conditions')->nullable();          // flexible JSON
            $t->boolean('active')->default(true);

            $t->timestamps();

            // Helpful index for date lookups
            $t->index(['hotel_id', 'book_from', 'book_to']);
            $t->index(['hotel_id', 'stay_from', 'stay_to']);
        });

        // Link promotions to specific rate plans
        Schema::create('promotion_rate_plan', function (Blueprint $t) {
            $t->id();

            $t->foreignId('promotion_id')
              ->constrained('promotions')
              ->cascadeOnDelete();

            $t->foreignId('rate_plan_id')
              ->constrained('rate_plans')
              ->cascadeOnDelete();

            $t->unique(['promotion_id', 'rate_plan_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('promotion_rate_plan');
        Schema::dropIfExists('promotions');
    }
};
