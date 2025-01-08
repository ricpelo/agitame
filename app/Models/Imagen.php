<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    protected $table = 'imagenes';

    public function imaginable()
    {
        return $this->morphTo();
    }
}
