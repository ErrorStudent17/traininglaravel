<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'jenis_kelamin', 'jabatan'];

    public function scopeJumlahOperator($query)
    {
        return $query->count();
    }
}
