<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Energenti extends Model
{
    protected $fillable = [
        'Pogon',
        'JM',
        'updated_at',
        'created_at'
    ];
}
