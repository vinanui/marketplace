<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCateringsTable extends Migration
{
    public function up()
    {
        Schema::create('caterings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('address')->nullable();
            $table->string('contact')->nullable();
            $table->string('food_type'); // Kolom untuk jenis makanan
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('caterings');
    }
}
