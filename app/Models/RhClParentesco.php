<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RhClParentesco extends Model
{
    use HasFactory;
    protected $table = 'rh_cl_parentescos';
    protected $fillable = [
        'nombre'
    ];

    public function parentescos()
    {
        return $this->hasMany(RhTrnParentesco::class, 'id');
    }

}
