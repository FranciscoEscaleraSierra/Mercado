<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\ImagenesFactory;

class Imagen extends Model
{
    use HasFactory;

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return ImagenesFactory::new();
    }

    protected $table = 'imagenes';

    # Relationships

    public function imagenes()
    {
        return $this->morphTo();
    }
}
