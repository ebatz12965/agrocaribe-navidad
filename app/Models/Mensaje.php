<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    protected $table = 'mensajes';

    protected $fillable = [
        'companero_id',
        'mensaje'
    ];

    public function companero()
    {
        return $this->belongsTo(Companero::class);
    }
}
