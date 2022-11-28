<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RhTrnAdjunto extends Model
{
    use HasFactory;
    protected $table = 'rh_trn_adjuntos';
    protected $fillable = ['path', 'tipo'];
}
