<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('floor_id')
            ->constrained()
            ->onDelete('cascade');
            $table->string('apartment_number');
            $table->integer('rooms')->nullable();
            $table->decimal('area', 8, 2)->nullable();
            $table->enum('status', ['free', 'occupied', 'reserved'])
            ->default('free');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apartments');
    }
};
