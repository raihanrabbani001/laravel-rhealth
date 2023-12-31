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
        Schema::create('informasi_obats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('keluhan_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('obat_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('dosis_penggunaan', 64);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informasi_obats');
    }
};
