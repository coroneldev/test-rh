<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RhClEstado extends Model
{
    use HasFactory;
    protected $table = 'rh_cl_estados';

    protected $fillable = ['nombre', 'categoria'];

    public function persona()
    {
        return $this->hasMany(RhTrnPersona::class);
    }

}
