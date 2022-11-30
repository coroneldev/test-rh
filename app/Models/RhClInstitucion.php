<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RhClInstitucion extends Model
{
    use HasFactory;
    protected $table = 'rh_cl_instituciones';

    protected $fillable = ['nombre', 'sigla'];

    public function formaciones()
    {
        return $this->hasMany(RhTrnFormacion::class, 'id');
    }


}
