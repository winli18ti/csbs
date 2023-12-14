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
        Schema::create('spks', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('spknumber');
            $table->string('service');
            $table->string('servicetype');
            $table->string('status');
            //penambahan / pengurangan tv analog
            $table->integer('tvanalog')->nullable();
            //tv digital
            $table->string('serialnumber')->nullable();
            $table->string('smartcard')->nullable();
            //internet
            $table->string('modemnumber')->nullable();
            $table->string('modemip')->nullable();
            $table->string('modemmac')->nullable();
            $table->string('cpeip')->nullable();
            $table->string('cpemac')->nullable();
            $table->string('cpegateway')->nullable();
            
            $table->timestamp('inputdate');
            $table->timestamp('startdate')->nullable();
            $table->timestamp('enddate')->nullable();
            $table->integer('officerid1')->nullable();
            $table->integer('officerid2')->nullable();
            $table->string('node')->nullable();
            //dismantle
            $table->text('reason')->nullable();
            $table->text('solution')->nullable();

            $table->integer('customerid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spks');
    }
};
