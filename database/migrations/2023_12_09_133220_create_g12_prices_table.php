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
        Schema::create('g12_prices', function (Blueprint $table) {
            $table->id();
            
            // strefa g12
            $table->decimal('g12_1_before_limit', 8, 4)->default(0);
            $table->decimal('g12_1_after_limit', 8, 4)->default(0);
            $table->decimal('g12_2_before_limit', 8, 4)->default(0);
            $table->decimal('g12_2_after_limit', 8, 4)->default(0);
            $table->decimal('g12_1_beyond_limit', 8, 4)->default(0);
            $table->decimal('g12_2_beyond_limit', 8, 4)->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('g12_prices');
    }
};
