<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssociadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('associados', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('telefone')->nullable();
            $table->string('celular')->nullable();
            $table->string('profissao')->nullable();
            $table->string('nit')->nullable();
            $table->string('cognome')->nullable();
            $table->string('pis')->nullable();
            $table->string('cp')->nullable();
            $table->string('conjuge')->nullable();
            $table->string('nascimento')->nullable();
            $table->char('genero');
            $table->string('pai')->nullable();
            $table->string('mae')->nullable();
            $table->string('escolaridade')->nullable();
            $table->string('rgp')->nullable();
            $table->string('naturalidade')->nullable();
            $table->string('nacionalidade')->nullable();
            $table->string('estado_civil')->nullable();
            $table->string('identidade');
            $table->string('expedidor')->nullable();
            $table->string('cpf')->nullable();
            $table->string('titulo_eleitor')->nullable();
            $table->string('zona_eleitor')->nullable();
            $table->string('secao_eleitor')->nullable();
            $table->string('categoria_socio')->nullable();
            $table->string('data_inscricao')->nullable();
            $table->string('data_matricula')->nullable();
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
        Schema::dropIfExists('associados');
    }
}
