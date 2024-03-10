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
        Schema::create('g11_prices', function (Blueprint $table) {
            $table->id();

            // strefa g11
            $table->decimal('g11_before_limit', 8, 4)->default(0);
            $table->decimal('g11_after_limit', 8, 4)->default(0);
            $table->decimal('g11_beyond_limit', 8, 4)->default(0);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('g11_prices');
    }
};
