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
        Schema::create('complains', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('status');
            $table->string('priority');
            $table->string('servicetype');
            $table->string('via');
            $table->string('source');
            $table->string('submittedby');
            $table->string('subject');
            $table->text('description');
            $table->text('solution')->nullable();
            $table->string('acceptedby')->nullable();
            $table->timestamp('acceptedbydate')->nullable();
            $table->string('updatedby')->nullable();
            $table->timestamp('updatedbydate')->nullable();
            $table->integer('customerid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('complains');
    }
};
