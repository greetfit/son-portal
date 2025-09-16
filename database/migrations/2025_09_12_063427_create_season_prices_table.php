<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('season_prices', function (Blueprint $t) {
            $t->id();

            // Correct FKs -> parent `id`
            $t->foreignId('rate_plan_id')
              ->constrained('rate_plans')
              ->cascadeOnDelete();

            $t->foreignId('season_id')
              ->constrained('seasons')
              ->cascadeOnDelete();

            $t->decimal('price', 12, 2);
            $t->timestamps();

            // Prevent duplicates per (rate_plan, season)
            $t->unique(['rate_plan_id', 'season_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('season_prices');
    }
};
