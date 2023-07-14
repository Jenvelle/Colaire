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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('bought_by');
            $table->integer('quantity');
            $table->integer('productId');
            $table->string('productName');
            $table->enum('status', ['paid','pending','cancelled','completed']);
            $table->integer('totalPrice');
            // $table->string('processed_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
