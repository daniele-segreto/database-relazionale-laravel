<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // Definizione degli attributi riempibili del modello
    protected $fillable = [
        'client_id',   // ID del cliente associato all'ordine
        'product_id',  // ID del prodotto associato all'ordine
        'quantity',    // Quantità di prodotti nell'ordine
        'price'        // Prezzo totale dell'ordine
    ];

    // Definizione della relazione "belongsTo" con il modello Client
    public function client()
    {
        return $this->belongsTo(Client::class); // Ogni ordine appartiene a un solo cliente
    }

    // Definizione della relazione "belongsTo" con il modello Product
    public function product()
    {
        return $this->belongsTo(Product::class); // Ogni ordine è relativo a un solo prodotto
    }
}
