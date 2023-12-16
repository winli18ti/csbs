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
            $table->string('member')->nullable();
            $table->string('name')->nullable();
            $table->string('company')->nullable();
            $table->string('identity')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('email')->nullable();
            $table->integer('vip')->nullable();
            $table->timestamp('effectivedate')->nullable();
            $table->string('homephone')->nullable();
            $table->string('officephone')->nullable();
            $table->string('cellphone')->nullable();
            $table->string('servicetype')->nullable();
            $table->integer('specialprice')->nullable();
            $table->string('specialinfo')->nullable();
            $table->string('paytype')->nullable();
            $table->integer('billperiod')->nullable();
            $table->integer('subsperiod')->nullable();
            $table->integer('tvcount')->nullable();
            $table->integer('nodeid')->nullable();
            $table->string('status')->nullable();
            $table->timestamp('statusdate')->nullable();
            $table->integer('marketerid')->nullable();
            $table->longText('notes')->nullable();
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
