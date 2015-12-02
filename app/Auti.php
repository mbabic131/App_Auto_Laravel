<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auti extends Model
{
    protected $fillable = [
        'Naziv',
        'Tip',
        'JM',
        'updated_at',
        'created_at'
    ];
}
