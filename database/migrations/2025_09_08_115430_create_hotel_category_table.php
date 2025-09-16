<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('hotel_category', function (Blueprint $t) {
            $t->id();
            $t->foreignId('hotel_id')->constrained('hotels')->cascadeOnDelete();
            $t->foreignId('category_id')->constrained('categories')->cascadeOnDelete();
            $t->unique(['hotel_id', 'category_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hotel_category');
    }
};
