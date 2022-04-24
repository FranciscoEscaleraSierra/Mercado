<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\PermisosFactory;

class Permiso extends Model
{
    use HasFactory;

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return PermisosFactory::new();
    }

    protected $table = 'permisos';

    public function roles()
    {
      return $this->belongsToMany(Rol::class, 'roles_permisos', 'rol_id', 'permiso_id');
    }
}
