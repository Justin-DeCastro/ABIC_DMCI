<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddLeasesTable extends Migration
{
    public function up()
    {
        Schema::create('add_leases', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('price');
            $table->string('status');
            $table->string('units');
            $table->string('location');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('add_leases');
    }
}
