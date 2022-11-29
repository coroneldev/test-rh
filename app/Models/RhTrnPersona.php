<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RhTrnPersona extends Model
{
    use HasFactory;

    protected $table = 'rh_trn_personas';

    protected $fillable = [
        'paterno',
        'materno',
        'nombres',
        'cedula_identidad',
        'expedido_ci',
        'complemento_ci',
        'fecha_nacimiento',
        'telefono_fijo',
        'telefono_movil',
        'correo_electronico',
        'nro_nua_afp',
        'nombre_afp',
        'libreta_militar',
        'grupo_sanguineo',
        'nombre_banco',
        'nro_cuenta_bancaria',
        'nro_nit',
        'nro_seguro_medico',
        'licencia_conducir',
        'licencia_categoria',
        'adjunto_id',
        'domicilio',
        'estado_civil_id',
        'estado_civil_id',
        'genero_id',
        'pais_id',
        'ciudad_id',
        'cas',
        'nro_cas'

    ];

    public function estadoCivil()
    {
        return $this->belongsTo(RhClEstadoCivil::class, 'estado_civil_id');
    }
    public function genero()
    {
        return $this->belongsTo(RhClGenero::class, 'genero_id');
    }
    public function pais()
    {
        return $this->belongsTo(RhClPais::class, 'pais_id');
    }
    public function ciudad()
    {
        return $this->belongsTo(RhClCiudad::class, 'ciudad_id');
    }
}
