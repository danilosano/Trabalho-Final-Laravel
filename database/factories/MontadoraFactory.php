<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Montadora>
 */
class MontadoraFactory extends Factory
{
        /**
    * The name of the factory's corresponding model.
    * if you are using convention names, it is optional
    *
    * @var string
    */
    protected $model = MontadoraFactory::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->firstName,
            'nacionalidade' => $this->faker->city,
            'anoCriacao' => $this->faker->numberBetween(1900, 2000),
            'telefone' => $this->faker->numberBetween(190000, 400000)
        ];
    }
}
