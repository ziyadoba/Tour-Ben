<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id('idRes');
            $table->unsignedBigInteger('idTouriste');
            $table->enum('statutRes', ['en_attente', 'confirmee', 'annulee']);
            $table->date('dateRes');
            $table->string('motif');
            $table->string('commentaire')->nullable();
            $table->timestamps();


            $table->foreignId('site_id')->references('idSit')->on('sites')->onDelete('cascade');
            $table->foreignId('evenement_id')->references('idEve')->on('evenements')->onDelete('cascade');
            $table->foreign('idTouriste')->references('id')->on('touristes')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
