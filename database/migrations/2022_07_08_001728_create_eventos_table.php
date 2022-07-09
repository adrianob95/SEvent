<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('tema');
            $table->string('local');
            $table->string('endereco');
            $table->date('data_inicio');
            $table->time('hora_inicio');
            $table->date('data_fim');
            $table->time('hora_fim');
            $table->boolean('free');
            $table->boolean('palestrante');
            $table->boolean('programacao');
       
            $table->boolean('hoteis');
            $table->boolean('galeria');
            $table->boolean('orgnizacao');
           
            $table->text('sobre_evento');
            $table->text('sobre_local');
            $table->boolean('fotos_local');
            $table->string('email');
            $table->string('contato');
            $table->string('local_organizacao');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('twitter');
            $table->text('link_youtube');
            $table->text('link_mapa');
            $table->timestamps();
 
            $table->foreignId('user_id')->constrained()->onDelete('CASCADE')->onUpdate('CASCADE');             

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos');
    }
};
