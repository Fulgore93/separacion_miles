<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Numero extends Model
{
    use HasFactory;

    protected $table = 'numeros';

    protected $primaryKey = 'id';

    protected $fillable = [
        'numero_string1',
        'numero_string2',
        'numero_float1',
        'numero_float2',
        'numero_int1',
        'numero_int2',
        'numero_double1',
        'numero_double2',
    ];
}
