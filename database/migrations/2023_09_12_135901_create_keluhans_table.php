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
        Schema::create('keluhans', function (Blueprint $table) {
            $table->id();
            $table->string('kode')->nullable();
            $table->string('subyek')->nullable();
            $table->string('layanan')->nullable();
            $table->string('prioritas')->nullable();
            $table->string('diterima')->nullable();
            $table->string('durasi')->nullable();
            $table->string('status')->nullable();
            $table->integer('id_customer')->nullable();
            $table->integer('id_layanan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keluhans');
    }
};
