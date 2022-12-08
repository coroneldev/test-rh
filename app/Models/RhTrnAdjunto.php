<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RhTrnAdjunto extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'rh_trn_adjuntos';

    protected $fillable = ['path', 'tipo', 'nombre'];

    public function personas()
    {
        return $this->hasMany(RhTrnPersona::class, 'id');
    }
}
