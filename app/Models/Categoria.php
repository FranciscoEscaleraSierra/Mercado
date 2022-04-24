<?php

namespace App\Models;

use Database\Factories\CategoriasFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categoria extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return CategoriasFactory::new();
    }

    protected $attributes = [
        'activa' => false,
    ];

    protected $fillable = [
        'nombre',
        'activa',
    ];

    protected $table = 'categorias';

    # Relationships

    public function productos()
    {
      return $this->belongsToMany(Producto::class, 'productos_categorias', 'categoria_id', 'producto_id');
    }
}
