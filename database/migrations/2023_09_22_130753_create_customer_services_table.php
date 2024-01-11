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
        Schema::create('customer_services', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('info')->nullable();
            $table->string('price')->nullable();
            $table->string('note')->nullable();
            $table->string('status')->nullable();
            $table->string('condition')->nullable();
            $table->timestamp("date")->nullable();
            $table->integer('subsperiod')->nullable();
            $table->integer('setmain')->nullable();
            $table->integer('customerid')->nullable();
            $table->integer('serviceid')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_services');
    }
};
