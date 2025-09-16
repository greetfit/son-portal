<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('occupancy_types', function (Blueprint $t) {
            $t->id();
            $t->string('name'); // e.g., Single, Double, Triple, Quad
            $t->timestamps();
        });

        // Seed some common types (optional)
        DB::table('occupancy_types')->insert([
            ['name' => 'Single'],
            ['name' => 'Double'],
            ['name' => 'Triple'],
            ['name' => 'Quad'],
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('occupancy_types');
    }
};
