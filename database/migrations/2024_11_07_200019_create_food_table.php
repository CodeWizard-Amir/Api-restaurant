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
        Schema::create('food', function (Blueprint $table) {
            $table->id();
            $table->string("food_id")->Primary()->unique();
            $table->string("menu_id");
            $table->foreign("menu_id")->references("menu_id")->on("menus")->cascadeOnDelete();
            $table->string("name");
            $table->longText("description");
            $table->string("price");
            $table->string("image_url");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food');
    }
};
