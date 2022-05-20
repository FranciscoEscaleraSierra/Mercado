<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Compra;

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
            'cardNumber' => $this->faker->creditCardNumber(),
            'valida' => $this->faker->boolean(),
            'a_pagar' => $this->faker->randomDigit(),
            'usuario_id' => $this->faker->randomDigitNot(0),
        ];
    }
}
