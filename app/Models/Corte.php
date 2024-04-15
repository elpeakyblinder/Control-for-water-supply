<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Corte extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'Corte';

    protected $fillable = [
        'id', 'fecha', 'litros', 'vivienda',
    ];
}
