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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jargon')->nullable();
            $table->text('alamat');
            $table->text('deskripsi');
            $table->string('no_hp');
            $table->string('no_hp_alt')->nullable();
            $table->string('email');
            $table->string('youtube');
            $table->string('instagram');
            $table->string('tiktok');
            $table->string('whatsapp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
