<?php

namespace App\Models;

//use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Auth\User as Authenticatable;


class Usuario extends Authenticatable
{
    protected $connection = 'mongodb';
    protected $collection = 'usuarios';

    protected $fillable = [
        'id', 'name', 'surname', 'email', 'address', 'postal_code', 'password', 'role',
    ];

    public function casas()
    {
        return $this->hasMany(CasasRegistradas::class, 'alias', 'alias');
    }
}
