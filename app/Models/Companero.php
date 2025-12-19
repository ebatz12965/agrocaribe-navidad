<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Companero extends Model
{
    protected $table = 'companeros';

    protected $fillable = [
        'nombre_completo'
    ];

    public function mensaje()
    {
        return $this->hasOne(Mensaje::class);
    }
}
