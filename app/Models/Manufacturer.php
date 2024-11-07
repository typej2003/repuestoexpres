<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'avatar',
        'mercado', //primario o secundario //originales o genericos
        'user_id',
        'area_id',
        'comercio_id',
    ];
}
