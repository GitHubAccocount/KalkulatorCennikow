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
        Schema::create('g13_prices', function (Blueprint $table) {
            $table->id();

            // strefa g13
            $table->decimal('g13_1_before_limit', 8, 4)->default(0);
            $table->decimal('g13_1_after_limit', 8, 4)->default(0);
            $table->decimal('g13_2_before_limit', 8, 4)->default(0);
            $table->decimal('g13_2_after_limit', 8, 4)->default(0);
            $table->decimal('g13_3_before_limit', 8, 4)->default(0);
            $table->decimal('g13_3_after_limit', 8, 4)->default(0);
            $table->decimal('g13_1_beyond_limit', 8, 4)->default(0);
            $table->decimal('g13_2_beyond_limit', 8, 4)->default(0);
            $table->decimal('g13_3_beyond_limit', 8, 4)->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('g13_prices');
    }
};
