<?php

namespace Database\Factories;

use App\Models\SousDepartement;
use Illuminate\Database\Eloquent\Factories\Factory;

class SousDepartementFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SousDepartement::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nomsd" => $this->faker->text(10),
        ];
    }
}
