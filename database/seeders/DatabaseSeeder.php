<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Usuario;
use Database\Seeders\CategoriasSeeder;
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

      $categorias = Categoria::get();

      Usuario::factory(1)
          ->supervisor()
          ->create();

      Usuario::factory(1)
          ->encargado()
          ->create();

      Usuario::factory(10)
          ->cliente()
          ->has(Producto::factory()->count(3), 'productos')
          ->create();
    }
}
