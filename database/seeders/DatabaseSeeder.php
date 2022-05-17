<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Usuario;
use Database\Seeders\CategoriasSeeder;
use Database\Seeders\CompraSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call(CategoriasSeeder::class);
      $this->call(CompraSeeder::class);

      Usuario::factory(1)
          ->supervisor()
          ->create();

      Usuario::factory(1)
          ->encargado()
          ->create();

      Usuario::factory(10)
          ->cliente()
          ->create()
          ->each(function ($cliente) {
            $productos = Producto::factory()
              ->count(3)
              ->create()
              ->each(function ($producto) {
                $categorias = Categoria::inRandomOrder()->take(2)->get();

                $producto->categorias()->attach($categorias->pluck('id'));
              });

            $cliente->productos()->saveMany($productos);
          });
    }
}
