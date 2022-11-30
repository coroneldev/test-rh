<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RhTrnFormacion extends Model
{
    use HasFactory;
    protected $table = 'rh_trn_formaciones';

    protected $fillable = [
        'titulo',
        'fecha_inicio',
        'fecha_fin',
        'provision_nacional',
        'registro_profesinal',
        'persona_id',
        'pais_id',
        'ciudad_id',
        'estado_id',
        'grado_id',
        'institucion_id',
        'adjunto_id'
    ];

    public function persona()
    {
        //return $this->hasMany(RhTrnPersona::class, 'persona_id');
        return $this->belongsTo(RhTrnPersona::class, 'persona_id');
        //return $this->belongsToMany(RhTrnPersona::class, 'persona_id');
    }
    public function pais()
    {
        return $this->belongsTo(RhClPais::class, 'pais_id');
    }
    public function ciudad()
    {
        return $this->belongsTo(RhClCiudad::class, 'ciudad_id');
    }
    public function estado()
    {
        return $this->belongsTo(RhClEstado::class, 'estado_id');
    }
    public function grado()
    {
        return $this->belongsTo(RhClGrado::class, 'grado_id');
    }
    public function institucion()
    {
        return $this->belongsTo(RhClInstitucion::class, 'institucion_id');
    }
    public function adjunto()
    {
        return $this->belongsTo(RhTrnAdjunto::class, 'adjunto_id');
    }


    public function personas()
    {
        return $this->belongsToMany(RhTrnPersona::class, 'rh_trn_formaciones');
        
    }
    
}
