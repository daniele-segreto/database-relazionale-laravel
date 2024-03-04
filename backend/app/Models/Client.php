<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    // Definizione degli attributi riempibili del modello
    protected $fillable = [
        'name',  // Nome del cliente
        'email'  // Email del cliente
    ];

    // Definizione della relazione "hasMany" con il modello Order
    public function orders()
    {
        return $this->hasMany(Order::class); // Ogni cliente ha molteplici ordini
    }
}
