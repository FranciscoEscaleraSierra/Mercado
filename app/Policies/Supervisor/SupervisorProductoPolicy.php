<?php

namespace App\Policies\Supervisor;

use App\Models\Producto;
use App\Models\Usuario;
use Illuminate\Auth\Access\HandlesAuthorization;

class SupervisorProductoPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can moderate a model.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function Moderar(Usuario $usuario, Producto $producto)
    {
        if ($usuario->roles == 'supervisor')
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(Usuario $usuario)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\Usuario  $usuario
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(Usuario $usuario, Producto $producto)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(Usuario $usuario)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\Usuario  $usuario
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(Usuario $usuario, Producto $producto)
    {
        if ($producto->usuario_id == $usuario->id)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Usuario  $usuario
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Usuario $usuario, Producto $producto)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\Usuario  $usuario
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(Usuario $usuario, Producto $producto)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Usuario  $usuario
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(Usuario $usuario, Producto $producto)
    {
        //
    }
}
