<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ComprasFactory extends Factory
{
    protected $model = Compra::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cardNumber' => $this->faker->randomDigit(),
            'valida' => $this->faker->boolean(),
            'a_pagar' => $this->faker->randomDigit(),
        ];
    }
}
