<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlunos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('nome');
            $table->string('senha');
            $table->timestamps();
        });

        Schema::create('alunos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('matricula')->unique();
            $table->string('nome');
            $table->string('situacao');
            $table->string('curso');
            $table->string('turma');
            $table->string('datamtr');
            $table->string('cep');
            $table->string('uf');
            $table->string('cidade');
            $table->string('bairro');
            $table->string('endereco');
            $table->string('complemento');
            $table->string('foto');
            $table->timestamps();
        });

        Schema::create('cursos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('codigo')->unique();
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
        Schema::dropIfExists('admin');
        Schema::dropIfExists('alunos');
        Schema::dropIfExists('cursos');
    }
}
