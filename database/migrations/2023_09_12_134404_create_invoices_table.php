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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('jenis')->nullable();
            $table->string('periode')->nullable();
            $table->string('nama_layanan')->nullable();
            $table->string('frekuensi')->nullable();
            $table->string('tagihan')->nullable();
            $table->string('status')->nullable();
            $table->timestamp("tanggal_lunas")->nullable();
            $table->string('adm_lunas')->nullable();
            $table->integer('id_user')->nullable();
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
        Schema::dropIfExists('invoices');
    }
};
