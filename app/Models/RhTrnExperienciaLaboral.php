<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RhTrnExperienciaLaboral extends Model
{
    use HasFactory;

    protected $table = 'rh_trn_experiencias_laborales';

    protected $fillable = [
                            'lugar_trabajo', 
                            'fecha_inicio',
                            'fecha_fin',
                            'cargo_desempeniado',
                            'funcion_desempeniada',
                            'nombre_inmediato_sup',
                            'cargo_inmediato_sup',
                            'salario_percibido',
                            'motivo_desvinculacion',
                            'persona_id',
                            'adjunto_id',
                            
                        ];

}
