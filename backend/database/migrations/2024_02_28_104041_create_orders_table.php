<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    // create_orders_table migration
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id(); // Crea un campo ID auto-incrementale per la tabella degli ordini
            $table->unsignedBigInteger('client_id'); // Aggiunge un campo per memorizzare l'ID del cliente che ha effettuato l'ordine
            $table->unsignedBigInteger('product_id'); // Aggiunge un campo per memorizzare l'ID del prodotto ordinato
            $table->integer('quantity'); // Aggiunge un campo per memorizzare la quantità del prodotto ordinato
            $table->decimal('price', 8, 2); // Aggiunge un campo per memorizzare il prezzo del prodotto, con un massimo di 8 cifre totali, di cui 2 decimali
            // Aggiungi altri campi necessari per gli ordini
            // ..........
            $table->timestamps(); // Aggiunge automaticamente i campi "created_at" e "updated_at" per tenere traccia della data e ora di creazione e aggiornamento delle righe della tabella

            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade'); // Aggiunge una chiave esterna che fa riferimento all'ID del cliente nella tabella "clients" e specifica che se un cliente viene cancellato, tutti i suoi ordini correlati saranno cancellati (cascata)
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade'); // Aggiunge una chiave esterna che fa riferimento all'ID del prodotto nella tabella "products" e specifica che se un prodotto viene cancellato, tutti gli ordini correlati a quel prodotto saranno cancellati (cascata)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
