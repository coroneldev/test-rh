<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RhClPais extends Model
{
    use HasFactory;
    protected $table = 'rh_cl_paises';

    protected $fillable = ['nombre', 'sigla'];

    public function personas()
    {
        return $this->hasMany(RhTrnPersona::class, 'id');
    }

    public function formaciones()
    {
        return $this->hasMany(RhTrnFormacion::class, 'id');
    }
    
}
