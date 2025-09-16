<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        // in create_cities_table.php
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('district_id')->constrained()->cascadeOnDelete();    // <-- change to unsignedBigInteger

            $table->string('name_en', 45)->nullable();
            $table->string('name_si', 45)->nullable();
            $table->string('name_ta', 45)->nullable();
            $table->string('sub_name_en', 45)->nullable();
            $table->string('sub_name_si', 45)->nullable();
            $table->string('sub_name_ta', 45)->nullable();
            $table->string('postcode', 5)->nullable();
            $table->decimal('latitude', 10, 8)->nullable();
            $table->decimal('longitude', 11, 8)->nullable();

            $table->index('district_id');
            $table->index('postcode');

            
        });
    }

    public function down(): void
    {
        Schema::table('cities', function (Blueprint $table) {
            $table->dropForeign(['district_id']);
            $table->dropIndex(['district_id']);
            $table->dropIndex(['postcode']);
        });

        Schema::dropIfExists('cities');
    }
};
