<?php

namespace Database\Factories;

use App\Models\ActeursDemande;
use Illuminate\Database\Eloquent\Factories\Factory;

class ActeursDemandeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ActeursDemande::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "valideur_id" => rand(1,10),
            "analyseur_id" => rand(1,10),
            "codeur_id" => rand(1,10),
            "demandeur_id" => rand(1,10),
        ];
    }
}
