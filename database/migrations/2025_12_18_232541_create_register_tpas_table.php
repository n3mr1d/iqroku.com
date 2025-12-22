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
            $table->string('name_father');
            $table->string('name_mother');
            $table->string('whatsapp');
            $table->string('name');
            $table->string('gender');
            $table->date('datebirth');
            $table->boolean('tpalama')->default(false);
            $table->string('leveltpa');
            $table->boolean('pendampingan')->default(false);
            $table->string('saran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('register_tpas');
    }
};
