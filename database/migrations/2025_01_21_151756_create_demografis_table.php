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
        Schema::create('demografi', function (Blueprint $table) {
            $table->id();
            $table->string('title');        
            $table->text('jumlah_penduduk');
            $table->text('struktur_umur');
            $table->text('komposisi_etnis');
            $table->text('sebaran_agama');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demografi');
    }
};
