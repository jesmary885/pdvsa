<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObjoperacionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objoperacionals', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('description');
            $table->unsignedBigInteger('objtactico_id');
            $table->foreign('objtactico_id')->references('id')->on('objtacticos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('objoperacionals');
    }
}
