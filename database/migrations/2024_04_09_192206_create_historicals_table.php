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
        Schema::create('historicals', function (Blueprint $table) {
            $table->id();
            $table->float('amount_origin');
            $table->string('currency_origin');
            $table->string('description_origin');
            $table->string('flag_origin');
            $table->string('symbol_origin');
            $table->float('amount_final');
            $table->string('currency_final');
            $table->string('description_final');
            $table->string('flag_final');
            $table->string('symbol_final');
            $table->string('transaction_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historicals');
    }
};
