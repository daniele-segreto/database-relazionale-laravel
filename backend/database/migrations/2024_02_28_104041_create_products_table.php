<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    // create_products_table migration
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Crea un campo ID auto-incrementale per la tabella dei prodotti
            $table->string('name'); // Aggiunge un campo per memorizzare il nome del prodotto
            $table->text('description')->nullable(); // Aggiunge un campo per memorizzare la descrizione del prodotto, consentendo il valore nullo (optional)
            $table->decimal('price', 8, 2); // Aggiunge un campo per memorizzare il prezzo del prodotto, con un massimo di 8 cifre totali, di cui 2 decimali
            // Aggiungi altri campi necessari per i prodotti
            // ..........
            $table->timestamps(); // Aggiunge automaticamente i campi "created_at" e "updated_at" per tenere traccia della data e ora di creazione e aggiornamento delle righe della tabella
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
