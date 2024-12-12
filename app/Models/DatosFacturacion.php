<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatosFacturacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'identificationNac',
        'identificationNumber',
        'names',
        'surnames',
        'cellphonecode',
        'cellphone',
        'address',
        'country',
        'province',
        'city',
        'deliveryarea',
        'zipcode',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
