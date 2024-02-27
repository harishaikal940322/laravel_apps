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
        //
        Schema::create('customer2', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address1');
            $table->string('address2');
            $table->string('address3');
            $table->timestamps();
        });


        Schema::create('customer_transaction', function (Blueprint $table) {
            $table->id();
            $table->string('invoice');
            $table->bigInteger('customer_id')->unsigned();
            $table->foreign('customer_id')->references('id')->on('customer2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('customer2');
        Schema::dropIfExists('customer_transaction');
    }
};
