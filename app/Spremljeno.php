<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spremljeno extends Model
{
    protected $fillable = [
        'Automobil',
        'Pogon',
        'Broj_kmh',
        'Ukupni_troskovi',
        'updated_at',
        'created_at'
    ];
}
