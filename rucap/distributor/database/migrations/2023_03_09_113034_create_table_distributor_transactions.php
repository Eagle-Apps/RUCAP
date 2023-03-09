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
        Schema::create('table_distributor_transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('productid');
            $table->string('clientid');
            $table->string('content');
            $table->integer('amount');
            $table->timestamps();

 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_distributor_transactions');
    }
};
