<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Database\Factories\ProductosFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    use HasFactory, SoftDeletes;

    protected $casts = [
        'autorizado' => 'datetime',
    ];

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

    // public function cometarios()
    // {
    //   return $this->hasMany(Comentario::class, 'producto_id');
    // }

    public function categorias()
    {
      return $this->belongsToMany(Categoria::class, 'productos_categorias', 'producto_id', 'categoria_id');
    }

    public function consignacion()
    {
      return $this->belongsTo(Consignacion::class, 'producto_id');
    }

    public function compras()
    {
      return $this->hasMany(Compra::class, 'producto_id');
    }

    public function imagen()
    {
        return $this->morphOne(Imagen::class, 'imagenes');
    }

    public function comentarios()
    {
        return $this->morphMany(Comentario::class, 'comentarios');
    }

    # Scopes

    public function scopeNoConsignado(Builder $query)
    {
        return $query
            ->has('consignacion', '=', 0)
            ->orWhereHas('consignacion', function (Builder $consignacion) {
                $consignacion->whereNull('autorizado');
            });
    }

    public function scopeConsignado(Builder $query)
    {
        return $query->whereHas('consignacion', function (Builder $consignacion) {
            $consignacion->whereNotNull('autorizado');
        });
    }

    public function scopeComprados(Builder $producto)
    {
        return $producto
            ->whereHas('consignacion', function (Builder $consignacion) {
                $consignacion->whereNotNull('autorizado');
            })
            ->whereHas('compras');
    }

    public function scopeExistencias(Builder $producto)
    {
        return $producto
            ->whereHas('consignacion', function (Builder $consignacion) {
                $consignacion->whereNotNull('autorizado');
            })
            ->where('existencias', '>', 0);
    }

    public function scopeDeCategoria(Builder $producto, Categoria $categoria)
    {
        return $producto
            ->whereHas('categorias', function (Builder $producto) use ($categoria) {
                $producto->where('id', $categoria->id);
            });
    }
}
