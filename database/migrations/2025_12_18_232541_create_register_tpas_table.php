<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
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
            $table->string('email');
            $table->foreignId('user_id')->nullable()->index();
            $table->date('datebirth');
            $table->boolean('tpalama')->default(false);
            $table->string('leveltpa')->nullable();

            $table->boolean('pendampingan')->default(false);
            $table->string('saran')->default("we dont have any saran");
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
