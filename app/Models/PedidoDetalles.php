<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidoDetalles extends Model
{
    use HasFactory;

    protected $fillable = [
        'pedido_id',
        'comercio_id',
        'user_id',
        'product_id',
        'price1',
    ];
}
