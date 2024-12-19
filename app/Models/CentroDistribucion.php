<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CentroDistribucion extends Model
{
    use HasFactory;

    protected $fillable = [
        'comercio_id',
        'address',
        'contactphone',
        'horario',
    ];
}
