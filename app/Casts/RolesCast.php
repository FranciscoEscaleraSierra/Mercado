<?php

namespace App\Casts;

use App\Models\Enums\Rol;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class RolesCast implements CastsAttributes
{
    /**
     * Cast the given value.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  mixed  $value
     * @param  array  $attributes
     * @return mixed
     */
    public function get($model, string $key, $roles, array $attributes)
    {
        return collect(json_decode($roles))
            ->map(function ($rol) {
                return Rol::tryFrom($rol);
            });
    }

    /**
     * Prepare the given value for storage.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  mixed  $value
     * @param  array  $attributes
     * @return mixed
     */
    public function set($model, string $key, $roles, array $attributes)
    {
        return $roles
            ->map(function ($rol) {
                return $rol->value;
            })
            ->toJson();
    }
}
