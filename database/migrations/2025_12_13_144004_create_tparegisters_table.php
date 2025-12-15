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
        Schema::create('tparegisters', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('whatsapp');
            $table->string('nama_anak');
            $table->string('jenis_kelamin');
            $table->date('tanggal_lahir');
            $table->boolean('tpalama');
            $table->string('kelas_tpa');
            $table->string('saran_waktutpa');
            $table->boolean('pendampingan');
            $table->string('saran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tparegisters');
    }
};
