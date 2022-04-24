<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\CategoriasFactory;

class Categoria extends Model
{
    use HasFactory;

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return CategoriasFactory::new();
    }

    protected $table = 'categorias';

    # Relationships

    public function productos()
    {
      return $this->belongsToMany(Producto::class, 'productos_categorias', 'categoria_id', 'producto_id');
    }
}
