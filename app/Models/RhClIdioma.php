<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class RhClIdioma extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $table = 'rh_cl_idiomas';

    protected $fillable = [
        'sigla',
        'nombre'
    ];

    public function idiomas()
    {
        return $this->hasMany(RhTrnIdioma::class, 'id');
    }
}
