<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('hotel_amenity', function (Blueprint $table) {
            $table->unsignedBigInteger('hotel_id');
            $table->unsignedBigInteger('amenity_id');

            $table->primary(['hotel_id', 'amenity_id']);

            $table->foreign('hotel_id')
                ->references('hotel_id')->on('hotels')
                ->onDelete('cascade');

            $table->foreign('amenity_id')
                ->references('amenity_id')->on('amenities')
                ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hotel_amenity');
    }
};
