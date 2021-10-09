<?php

namespace Database\Factories;

use App\Models\user_domicilio;
use Illuminate\Database\Eloquent\Factories\Factory;

class user_domicilioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = user_domicilio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'domicilio' => $this->faker->address(),
            'numero_exterior' => $this->faker->numberBetween($min=1, $max=100),
            'colonia' => $this->faker->name(),
            'ciudad' => $this->faker->city()
        ];
    }
}
