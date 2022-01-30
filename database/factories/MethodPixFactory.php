<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MethodPixFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'descricao' => [
                'email',
                'cpf',
                'celular',
                'key'
            ]
        ];
    }
}
