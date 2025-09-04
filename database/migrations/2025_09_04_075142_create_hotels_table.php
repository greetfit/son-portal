<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id('hotel_id'); // PK
            $table->string('name');
            $table->string('category_notes')->nullable();
            $table->string('city');
            $table->string('address')->nullable();
            $table->string('phone', 50)->nullable();
            $table->string('email')->nullable();
            $table->unsignedBigInteger('account_manager')->nullable(); // FK → users
            $table->boolean('is_active')->default(true);
            $table->timestamps();

            // foreign key
            $table->foreign('account_manager')
                ->references('id')
                ->on('users')
                ->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
