<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RhTrnDatoLaboral extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'rh_trn_datos_laborales';
    protected $fillable = ['fecha_inicio',
                           'fecha_fin',
                           'motivo_desvinculacion',
                           'persona_id',
                           'cargo_id',
                           'estructura_organizacional_id',
                           'tipo_contrato_id',
                           'adjunto_id',
                           'estado_id',
                           'horario_id',
                           'organizmo_financiador_id',
                           'puesto_id',
                           'acceso_id'
                          ];


}
