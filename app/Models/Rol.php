<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\RolesFactory;

class Rol extends Model
{
    use HasFactory;

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return RolesFactory::new();
    }

    protected $table = 'roles';

    # Relationships

    public function permisos()
    {
      return $this->belongsToMany(Role::class, 'roles_permisos', 'permiso_id', 'rol_id');
    }

    public function usuarios()
    {
      return $this->belongsToMany(Role::class, 'usuarios_roles', 'usuario_id', 'rol_id');
    }
}
