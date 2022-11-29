<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RhClEstadoCivil extends Model
{
    use HasFactory;
    
    protected $table = 'rh_cl_estados_civiles';

    protected $fillable = ['sigla', 'nombre'];

    public function rh_trn_personas()
    {
        return $this->hasMany(RhTrnPersona::class);
    }

}
