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
        Schema::create('geografis', function (Blueprint $table) {
            $table->id();
            $table->string('title');       
            $table->text('location_boundary')->nullable(); 
            $table->text('topography_climate')->nullable(); 
            $table->text('area_population')->nullable(); 
            $table->string('image')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('geografis');
    }
};