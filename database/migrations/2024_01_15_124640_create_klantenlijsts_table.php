<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('klantenlijsts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->boolean('Bedrijf')->nullable();
            $table->string('Bedrijfsnaam')->nullable();
            $table->string('KVKNummer')->nullable();
            $table->string('Voornaam')->nullable();
            $table->string('Achternaam')->nullable();
            $table->string('Straat')->nullable();
            $table->string('Huisnummer')->nullable();
            $table->string('Postcode')->nullable();
            $table->string('Plaats')->nullable();
            $table->string('Email')->nullable();
            $table->string('Telefoonnummer')->nullable();
            $table->string('Functie')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('klantenlijsts');
    }
};
