<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Valoracion extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'comercio_id',
        'product_id',
        'ca_valoracion',
        'referred', // 0 product 1 comercio
        'comment',
    ];

    

    public function valoracionClass($ca_valoracion){
        
        switch ($ca_valoracion) {
            case '1':
                return 'one';
                break;
            case '2':
                return 'two';
                break;
            case '3':
                return 'three';
                break;
            case '4':
                return 'four';
                break;
            case '5':
                return 'five';
                break;
        }

        return 'star';
            
    }

}
