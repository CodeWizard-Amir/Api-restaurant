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
        Schema::create('order__details', function (Blueprint $table) {
            $table->id();
            $table->string("order_id");
            $table->foreign("order_id")->references("order_id")->on("orders")->cascadeOnDelete();
            $table->string("food_id");
            $table->foreign("food_id")->references("food_id")->on("food")->cascadeOnDelete();
            $table->integer("quantity");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order__details');
    }
};
