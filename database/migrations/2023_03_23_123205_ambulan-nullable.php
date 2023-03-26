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
        Schema::table('ambulans', function($table) {
            $table->text('deskripsi')->nullable()->change();
            $table->text('merk')->nullable()->change();
            $table->text('tahun')->nullable()->change();
            $table->integer('jumlah')->nullable()->change();
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
