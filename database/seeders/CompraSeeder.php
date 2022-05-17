<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Compra;

class CompraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Compra::factory()
          ->count(4)
          ->create();
    }
}
