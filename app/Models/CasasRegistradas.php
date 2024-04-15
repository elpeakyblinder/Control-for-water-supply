<?php

namespace App\Models;

//use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Auth\User as Authenticatable;

class CasasRegistradas extends Authenticatable
{
    protected $connection = 'mongodb';
    protected $collection = 'CasasRegistradas';

    protected $fillable = [
        'id', 'nombre', 'direccion', 'alias',
    ];
}
