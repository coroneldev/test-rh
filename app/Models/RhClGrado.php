<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class RhClGrado extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $table = 'rh_cl_grados';

    protected $fillable = ['nombre', 'sigla'];

    public function formaciones()
    {
        return $this->hasMany(RhTrnFormacion::class, 'id');
    }

}
