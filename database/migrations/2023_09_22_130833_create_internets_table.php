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
        Schema::create('internets', function (Blueprint $table) {
            $table->id();
            $table->string('modemnumber');
            $table->string('modemip');
            $table->string('modemmac');
            $table->string('cpeip');
            $table->string('cpemac');
            $table->integer('customerid');
            $table->integer('customerserviceid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('internets');
    }
};
