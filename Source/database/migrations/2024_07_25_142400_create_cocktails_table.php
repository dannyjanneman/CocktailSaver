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
        Schema::create('cocktails', function (Blueprint $table) {
            $table->id();
            $table->id('glass_id');
            $table->id('garnish_id');
            $table->id('ice_id');
            $table->boolean('eggwhite');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cocktails');
    }
};
