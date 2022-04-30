<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Producto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'nombre' => $this->faker->word(),
          'precio' => $this->faker->randomDigit(),
          'existencias' => $this->faker->randomDigit(),
          'descripcion' => $this->faker->text(),
        ];
    }
}
