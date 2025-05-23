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
        Schema::table('subs', function (Blueprint $table) {
            $table->string('pptk_id')->nullable()->after('kegiatan_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('subs', function (Blueprint $table) {
            $table->dropColumn('pptk_id');
        });
    }
};
