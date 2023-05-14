<?php

namespace Database\Factories;

use App\Models\Demande;
use Illuminate\Database\Eloquent\Factories\Factory;

class DemandeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Demande::class;
    
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // "acteurs_personnes_id" => rand(1,10),
            "status" => rand(0,1),
            "type" => rand(0,1),
            "archivee" => rand(0,1), 
            "suivi" => rand(0,1),
            "annulee" => rand(0,1),
            "validee_par_id" => rand(1,10),
            "validee_at" => $this->faker->date('Y_m_d'),
            "analysee_par_id" => rand(1,10),
            "analysee_at" => $this->faker->date('Y_m_d'),
            "codee_par_id" => rand(1,10),
            "codee_at" => $this->faker->date('Y_m_d'),
            "demandeur_id" => rand(1,10),
        ];
    }
}
