<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RhTrnParentesco extends Model
{
    use HasFactory;

    protected $table = 'rh_trn_parentescos';

    protected $fillable = [
        'persona_id',
        'parentesco_id',
        'nombres',
        'apellidos',
        'cedula_identidad',
        'direccion_laboral',
        'direccion_parentesco',
        'correo_electronico'
    ];

    public function parentetsco()
    {
        return $this->belongsTo(RhClParentesco::class, 'parentesco_id');
    }

}
