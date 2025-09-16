<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('hotel_amenity', function (Blueprint $t) {
            $t->id();
            $t->foreignId('hotel_id')->constrained('hotels')->cascadeOnDelete();
            $t->foreignId('amenity_id')->constrained('amenities')->cascadeOnDelete();

            // prevent duplicates
            $t->unique(['hotel_id', 'amenity_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hotel_amenity');
    }
};
