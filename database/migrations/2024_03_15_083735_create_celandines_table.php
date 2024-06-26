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
        Schema::create('celandines', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('name');
            $table->string('price');
            $table->string('status');
            $table->string('development');
            $table->string('units');
            $table->string('location');
            $table->string('general');
            $table->string('building');
            $table->string('link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('celandines');
    }
};
