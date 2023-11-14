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
            $table->string('billnumber');
            $table->string('servicetype');
            $table->string('paytype');
            $table->integer('subsperiod');
            $table->integer('bill');
            $table->string('status');
            $table->timestamp('billdate')->nullable();
            $table->timestamp('duedate')->nullable();
            $table->timestamp('paiddate')->nullable();
            $table->string('info')->nullable();
            $table->integer('serviceid');
            $table->integer('collectorid')->nullable();
            $table->integer('customerid');
            $table->integer('userid')->nullable();
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
