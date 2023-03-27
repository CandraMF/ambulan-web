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
        Schema::table('settings', function ($table) {
            $table->string('nama')->nullable()->change();
            $table->text('alamat')->nullable()->change();
            $table->text('deskripsi')->nullable()->change();
            $table->string('no_hp')->nullable()->change();
            $table->string('email')->nullable()->change();
            $table->string('youtube')->nullable()->change();
            $table->string('instagram')->nullable()->change();
            $table->string('tiktok')->nullable()->change();
            $table->string('whatsapp')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
