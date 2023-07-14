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
        Schema::create('inventory_purchases', function (Blueprint $table) {
            $table->id();
            $table->string('itemName');
            $table->string('current_stocks');
            $table->integer('total_stocks');
            $table->integer('quantity_bought');
            $table->integer('quantity_price');
            $table->enum('status', ['paid','pending', 'cancelled', 'completed']);
            $table->string('ordered_by');
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
