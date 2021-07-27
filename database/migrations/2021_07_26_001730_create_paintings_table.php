<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaintingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paintings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description')->nullable(true);
            $table->string('artist');
            $table->string('year')->nullable(true);
            $table->string('type')->nullable(true);
            $table->float('width');
            $table->float('height');
            $table->integer('price')->nullable(true);
            $table->string('link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paintings');
    }
}
