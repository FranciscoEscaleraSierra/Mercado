<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\ComentariosFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comentario extends Model
{
    use HasFactory, SoftDeletes;

    protected $attributes = [
        'comentario' => '',
    ];

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

    public function comentarios()
    {
        return $this->morphTo();
    }

    // public function producto()
    // {
    //   return $this->belongsTo(Producto::class, 'producto_id');
    // }
    //
    // public function compra()
    // {
    //   return $this->belongsTo(Compra::class, 'compra_id');
    // }
    //
    // public function consignacion()
    // {
    //   return $this->belongsTo(Consignacion::class, 'consignacion_id');
    // }
    //
    public function usuario()
    {
      return $this->belongsTo(Usuario::class, 'usuario_id');
    }

    public function comentarioPadre()
    {
      return $this->belongsTo(Comentario::class, 'comentario_id');
    }

    public function comentariosHijos()
    {
      return $this->hasMany(Comentario::class, 'comentario_id');
    }
}
