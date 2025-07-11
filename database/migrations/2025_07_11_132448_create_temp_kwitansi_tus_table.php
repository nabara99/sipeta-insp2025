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
        Schema::create('temp_kwitansi_tus', function (Blueprint $table) {
            $table->id();
            $table->string('kwitansi_id');
            $table->foreignId('anggaran_id')->constrained('anggarans')->onDelete('cascade');
            $table->bigInteger('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('temp_kwitansi_tus');
    }
};
