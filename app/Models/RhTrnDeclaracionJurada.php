<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RhTrnDeclaracionJurada extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'rh_trn_declaraciones_juradas';
    protected $fillable = [
        'nombre',
        'fecha_inicio',
        'fecha_fin',
        'adjunto_id',
        'persona_id',
        'activo',
        'verificado',
        'editable',
        'observacion',
        'sol_edicion',
        'motivo_sol'
    ];

    public function adjunto()
    {
        return $this->belongsTo(RhTrnAdjunto::class, 'adjunto_id');
    }
    
    public function persona()
    {
        return $this->belongsTo(RhTrnPersona::class, 'persona_id');
    }
    
}
