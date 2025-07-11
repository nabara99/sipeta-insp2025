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
        Schema::create('kwitansi_tus', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('kw_id');
            $table->date('tgl');
            $table->string('hal');
            $table->bigInteger('nilai');
            $table->bigInteger('ppn');
            $table->bigInteger('pph21');
            $table->bigInteger('pph22');
            $table->bigInteger('pph23');
            $table->bigInteger('pdaerah');
            $table->bigInteger('sisa');
            $table->string('penerima_id');
            $table->string('anggaran_id');
            $table->text('file')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kwitansi_tus');
    }
};
