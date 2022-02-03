<?php

namespace Database\Factories;

use App\Models\MethodPix;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'responsavel'   => $this->faker->name(),
            'razao_social'  => $this->faker->name(),
            'chave_pix' => $this->faker->numerify(),
            'tipo_chave_pix' => MethodPix::factory(),
            'banco' => 'Nubank',
            'cpf_cnpj' => '33680277000161',
            'nova' => 1,
            'email' => $this->faker->email(),
            'cod_empresa' => $this->faker->text(10)
        ];
    }
}
