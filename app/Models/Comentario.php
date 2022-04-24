<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\ComentariosFactory;

class Comentario extends Model
{
    use HasFactory;

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return ComentariosFactory::new();
    }

    protected $table = 'comentarios';

    # Relationships

    public function producto()
    {
      return $this->belongsTo(Producto::class, 'producto_id');
    }

    public function compra()
    {
      return $this->belongsTo(Compra::class, 'compra_id');
    }

    public function consignacion()
    {
      return $this->belongsTo(Consignacion::class, 'consignacion_id');
    }

    public function comentario()
    {
      return $this->belongsTo(Comentario::class, 'comentario_id');
    }

    public function comentarios()
    {
      return $this->hasMany(Comentario::class, 'comentario_id');
    }
}
