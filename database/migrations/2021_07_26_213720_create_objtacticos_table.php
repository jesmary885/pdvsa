<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObjtacticosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objtacticos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('description');
            $table->unsignedBigInteger('objestrategico_id');
            $table->foreign('objestrategico_id')->references('id')->on('objestrategicos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('objtacticos');
    }
}
