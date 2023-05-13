<?php

namespace Database\Factories;

use App\Models\Duree;
use Illuminate\Database\Eloquent\Factories\Factory;

class DureeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Duree::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "mois" => rand(0,30),
            "semaines" => rand(0,30),
            "jours" => rand(0,30),
        ];
    }
}
