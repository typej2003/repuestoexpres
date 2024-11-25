<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    const CONFIRMED = '1';
    const NOTCONFIRMED = '0';

    protected $fillable = [
        'reference',
        'comercio_id',
        'user_id',
        'description',
        'coste',
        'currency',
        'in_delivery',
        'confirmed',
    ];

    public function client()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
