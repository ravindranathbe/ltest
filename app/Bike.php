<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bike extends Model
{
    protected $table = 'bikes';
    
    protected $fillable = [
        'make', 'model', 'year', 'mods', 'picture',
    ];
    
}
