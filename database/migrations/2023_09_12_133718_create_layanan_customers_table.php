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
        Schema::create('layanan_customers', function (Blueprint $table) {
            $table->id();
            $table->string('status_layanan')->nullable();
            $table->string('nama_layanan')->nullable();
            $table->string('keterangan')->nullable();
            $table->timestamp("tanggal_pasang")->nullable();
            $table->integer('no_decoder')->nullable();
            $table->integer('no_kartu_pelanggan')->nullable();
            $table->string('channel')->nullable();
            $table->integer('id_alamat')->nullable();
            $table->integer('id_layanan')->nullable();
            $table->integer('id_customer')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('layanan_customers');
    }
};
