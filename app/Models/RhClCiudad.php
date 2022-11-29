<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RhClCiudad extends Model
{
    use HasFactory;
    protected $table = 'rh_cl_ciudades';

    protected $fillable = ['nombre', 'sigla'];

    public function persona()
    {
        return $this->hasMany(RhTrnPersona::class);
    }

    public function formacion()
    {
        return $this->hasMany(RhTrnFormacion::class);
    }
}
