<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaiementsTable extends Migration
{
    public function up()
    {
        Schema::create('paiements', function (Blueprint $table) {
            $table->id('idPai');
            $table->unsignedBigInteger('id');
            $table->integer('montant');
            $table->enum('statutPai', ['en_attente', 'valide', 'refuse']);
            $table->date('datePai');
            $table->string('modePai');
            $table->string('referencePai');
            $table->timestamps();

            $table->foreign('id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('paiements');
    }
}

