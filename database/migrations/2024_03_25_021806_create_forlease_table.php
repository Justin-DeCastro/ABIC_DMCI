<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForleaseTable extends Migration
{
    public function up()
    {
        Schema::create('forlease', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->decimal('price', 8, 2);
            $table->string('status');
            $table->integer('units');
            $table->string('location');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('forlease');
    }
}
