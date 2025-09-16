<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('hotels', function (Blueprint $t) {
            $t->id();
            $t->string('name', 150);
            $t->text('description')->nullable();
            $t->text('address')->nullable();
            $t->foreignId('district_id')->nullable()->constrained()->nullOnDelete();
            $t->foreignId('city_id')->nullable()->constrained()->nullOnDelete();
            $t->string('phone', 50)->nullable();
            $t->string('email', 100)->nullable();
            $t->string('website', 150)->nullable();
            $t->unsignedTinyInteger('star_rating')->nullable();
            $t->string('featured_image', 255)->nullable(); // <- single featured image on hotels table
            $t->boolean('is_active')->default(true);
            $t->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
