<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\ProductosFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return ProductosFactory::new();
    }

    protected $table = 'productos';

    # Relationships

    public function vendedor()
    {
      return $this->belongsTo(Usuario::class, 'usuario_id');
    }

    public function cometarios()
    {
      return $this->hasMany(Comentario::class, 'producto_id');
    }

    public function categorias()
    {
      return $this->belongsToMany(Usuario::class, 'productos_categorias', 'producto_id', 'categoria_id');
    }

    public function consignacion()
    {
      return $this->hasOne(Consignacion::class, 'producto_id');
    }

    public function compras()
    {
      return $this->hasMany(Compra::class, 'producto_id');
    }

    public function imagen()
    {
        return $this->morphOne(Imagen::class, 'imagenes');
    }
}
