<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Catalogo extends Model
{
    public function procesos()
    {
        return $this->hasMany(Proceso::class);
    }
}
