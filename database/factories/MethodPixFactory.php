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
        $chaves = ['email', 'cpf/cnpj', 'celular', 'Aleatória'];
        return [
            'descricao' => $chaves[random_int(0, (count($chaves) - 1))]
        ];
    }
}
