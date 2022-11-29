<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RhClPais extends Model
{
    use HasFactory;
    protected $table = 'rh_cl_paises';

    protected $fillable = ['nombre', 'sigla'];

    public function rh_trn_personas()
    {
        return $this->hasMany(RhTrnPersona::class);
    }
}
