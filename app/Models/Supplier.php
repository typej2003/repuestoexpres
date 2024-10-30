<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'rif',
        'email',
        'phone',
        'address',
    ];

}

$table->string('name');
            $table->string('rif');
            $table->string('address');
            $table->string('phone');