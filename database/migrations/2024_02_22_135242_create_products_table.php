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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('quality');
            $table->double('price');
            $table->string('images');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('usere_id');
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->foreignId('usere_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};