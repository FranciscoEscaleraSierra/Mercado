<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\ConsignacionesFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Consignacion extends Model
{
    use HasFactory, SoftDeletes;

    protected $attributes = [
        'autorizado' => null,
    ];

    protected $casts = [
        'autorizado' => 'datetime'
    ];

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return ConsignacionesFactory::new();
    }

    protected $table = 'consignaciones';

    # Relationships

    public function producto()
    {
      return $this->hasOne(Producto::class, 'producto_id');
    }

    public function comentarios()
    {
      return $this->hasMany(Comentario::class, 'consignacion_id');
    }

    # Scoope

    // public function scope(Builder $query)
    // {
    //     return $query->
    // }
}
