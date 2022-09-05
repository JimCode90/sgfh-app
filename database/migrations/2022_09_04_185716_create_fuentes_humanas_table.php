<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuentesHumanasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fuentes_humanas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('dni');
            $table->string('nro_celular');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('email');
            $table->string('codigo');
            $table->string('direccion');
            $table->string('area_criminal');
            $table->string('ubigeo');
            $table->foreignId('user_create');
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
        Schema::dropIfExists('fuentes_humanas');
    }
}
