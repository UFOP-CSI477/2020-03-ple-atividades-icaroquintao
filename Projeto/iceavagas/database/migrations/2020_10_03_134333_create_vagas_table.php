<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVagasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vagas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo',100);
            $table->string('empresa',50);
            $table->string('email',20);
            $table->string('descricao',200);
            $table->string('local',30);
            $table->date('data');
            $table->string('area',10); // EC EE EP SI
            $table->string('tipo',10); // T OU E
            $table->string('status',10); // APROVADA PASSADA..
            $table->string('link',200); // LINK DE INSCRIÇÃO
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vagas');
    }
}
