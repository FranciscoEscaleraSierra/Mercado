<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Usuario;

class DatabaseSeeder extends Seeder
{
    const ROLES = [
      'encargado' => [
        'puede_ver_no_consignados',
        'puede_restablecer_contraseña',
        'puede_consignar_producto',
        'puede_comentar_consignacion',
        'puede_desconsignar_producto',
      ],
      'cliente' => [],
      'contador' => [],
      'supervisor' => [
        'puede_crear_categoria',
        'puede_leer_categoria',
        'puede_actualizar_categoria',
        'puede_eliminar_categoria',
        'puede_crear_usuario',
        'puede_leer_usuario',

      ],
    ];

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $permisos = Permiso::factory()
          ->count(1)
          ->state(new Sequence(
            ['permiso' => 'puede_ver']
            ['permiso' => 'puede_crud_categoria']
            ['permiso' => 'puede_leer_usuario']
            ['permiso' => 'puede_editar_usuario']
            ['permiso' => 'puede_restablecer_contraseña']
            ['permiso' => 'puede_ver_no_consignados']
            ['permiso' => 'puede_consignar_producto']
            ['permiso' => 'puede_desconsignar_producto',]
            ['permiso' => 'puede_comentar_consignacion',]
            ['permiso' => 'puede_pausa_producto']
            ['permiso' => 'puede_validar_compras']
            ['permiso' => 'puede_crear_pago']
            ['permiso' => 'puede_listar_pagos']
            ))
          ->create();

        $roles = Rol::factory()
          ->count(4)
          ->state(new Sequence(
            ['rol' => 'encargado'],
            ['rol' => 'cliente'],
            ['rol' => 'contador'],
            ['rol' => 'supervisor'],
          ))
          ->create();

        Usuario::factory(1)
            ->state([])
            ->create();

        Usuario::factory(10)
          ->hasProductos(5)

          ->create();

        Usuario::factory(1)
          ->
          ->create();
    }
}
