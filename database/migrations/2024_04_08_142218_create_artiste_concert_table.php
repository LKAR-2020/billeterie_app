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
        Schema::create('artiste_concert', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('artiste_id');
            $table->unsignedBigInteger('concert_id');
            $table->timestamps();

            $table->foreign('artiste_id')->references('id')->on('artistes')->onDelete('cascade');
            $table->foreign('concert_id')->references('id')->on('concerts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artiste_concert');
    }
};
