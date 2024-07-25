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
        Schema::create('cocktail_mixer', function (Blueprint $table) {
            $table->foreignId('cocktail_id')->constrained()->onDelete('cascade');
            $table->foreignId('mixer_id')->constrained()->onDelete('cascade');
            $table->integer('mixer_amount_ounces');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cocktail_mixer');
    }
};
