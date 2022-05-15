<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bitacora extends Model
{
    use HasFactory;

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return BitacorasFactory::new();
    }

    protected $attributes = [
        'usuario' => false,
        'accion' => false,
        'fecha' => false,
    ];

    protected $fillable = [
        'usuario',
        'accion',
        'fecha',
    ];

    protected $table = 'bitacoras';
}
