<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsignacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignacions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('objestrategico_id');
            $table->foreign('objestrategico_id')->references('id')->on('objestrategicos');
            $table->unsignedBigInteger('objtactico_id');
            $table->foreign('objtactico_id')->references('id')->on('objtacticos');
            $table->unsignedBigInteger('objoperacional_id');
            $table->foreign('objoperacional_id')->references('id')->on('objoperacionals');
            $table->date('fecha_conformacion_i');
            $table->date('fecha_conformacion_f');
            $table->date('fecha_recopilacion_i');
            $table->date('fecha_recopilacion_f');
            $table->date('fecha_inf_i');
            $table->date('fecha_inf_f');
            $table->date('fecha_divulgacion_i');
            $table->date('fecha_divulgacion_f');
            $table->date('fecha_carga_i');
            $table->date('fecha_carga_f');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asignacions');
    }
}
