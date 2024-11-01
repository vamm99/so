<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proceso extends Model
{
    public function catalogo()
    {
        return $this->belongsTo(Catalogo::class);
    }
}
