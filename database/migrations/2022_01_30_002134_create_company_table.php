<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company', function (Blueprint $table) {
            $table->id();
            $table->string('responsavel', 45);
            $table->string('razao_social', 45);
            $table->string('chave_pix', 45);
            $table->string('tipo_chave_pix', 45);
            $table->string('banco', 45);
            $table->string('cpf_cnpj', 14);
            $table->string('cor_primaria', 7)->nullable()->default('#031927');
            $table->string('cor_secundaria', 7)->nullable()->default('#FFFFFF');
            $table->string('cor_terciaria', 7)->nullable()->default('#E88233');
            $table->unsignedInteger('nova')->nullable()->default('1');
            $table->string('email', 45);
            $table->string('cod_empresa', 10);
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
        Schema::dropIfExists('company');
    }
}
