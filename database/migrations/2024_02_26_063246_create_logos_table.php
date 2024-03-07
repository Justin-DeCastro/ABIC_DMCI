<?php

// database/migrations/xxxx_xx_xx_xxxxxx_create_logos_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogosTable extends Migration
{
    public function up()
    {
        Schema::create('logos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->string('picture');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('logos');
    }
}
