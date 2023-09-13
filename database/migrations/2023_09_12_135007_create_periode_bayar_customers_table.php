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
        Schema::create('periode_bayar_customers', function (Blueprint $table) {
            $table->id();
            $table->string('siklus')->nullable();
            $table->string('periode')->nullable();
            $table->string('cara_pembayaran')->nullable();
            $table->string('status')->nullable();
            $table->integer('id_customer')->nullable();
            $table->integer('id_alamat')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('periode_bayar_customers');
    }
};
