<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RhClCargo extends Model
{
    use HasFactory;

    protected $table = 'rh_cl_cargos';

    protected $fillable = ['abreviatura'];

}
