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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('nama_customer')->nullable();
            $table->string('nama_perusahaan')->nullable();
            $table->string('no_ktp')->nullable();
            $table->timestamp("tanggal_lahir")->nullable();
            $table->string('no_hp')->nullable();
            $table->string('telepon_rumah')->nullable();
            $table->string('email')->nullable();
            $table->timestamp("tanggal_registrasi")->nullable();
            $table->integer('status_vip')->nullable();
            $table->bigInteger('id_user')->nullable();
            $table->bigInteger('id_alamat')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
