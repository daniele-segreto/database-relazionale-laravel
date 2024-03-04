<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Definizione degli attributi riempibili del modello
    protected $fillable = [
        'name',         // Nome del prodotto
        'description',  // Descrizione del prodotto
        'price'         // Prezzo del prodotto
    ];

    // Definizione della relazione "hasMany" con il modello Order
    public function orders()
    {
        return $this->hasMany(Order::class); // Ogni prodotto può essere incluso in molteplici ordini
    }
}
