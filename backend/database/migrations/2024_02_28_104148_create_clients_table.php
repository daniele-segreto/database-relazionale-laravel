<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    // create_clients_table migration
    public function up(): void
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id(); // Crea un campo ID auto-incrementale per la tabella
            $table->string('name'); // Aggiunge un campo di tipo stringa per memorizzare il nome dei clienti
            $table->string('email')->unique(); // Aggiunge un campo di tipo stringa per memorizzare l'email dei clienti, assicurandosi che sia univoca
            // Aggiungi altri campi necessari per i clienti
            // ............a
            $table->timestamps(); // Aggiunge automaticamente i campi "created_at" e "updated_at" per tenere traccia della data e ora di creazione e aggiornamento delle righe della tabella

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
