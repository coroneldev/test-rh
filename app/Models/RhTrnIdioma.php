<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RhTrnIdioma extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'rh_trn_idiomas';

    protected $fillable = [
        'nivel_conocimiento',
        'persona_id',
        'idioma_id',
        'adjunto_id',
        'estado_id',
        'activo',
        'verificado',
        'editable',
        'observacion',
        'sol_edicion',
        'motivo_sol',

    ];


    public function persona()
    {
        return $this->belongsTo(RhTrnPersona::class, 'persona_id');
    }
    public function idioma()
    {
        return $this->belongsTo(RhClIdioma::class, 'idioma_id');
    }
    public function adjunto()
    {
        return $this->belongsTo(RhTrnAdjunto::class, 'adjunto_id');
    }
    public function estado()
    {
        return $this->belongsTo(RhClEstado::class, 'estado_id');
    }
}

