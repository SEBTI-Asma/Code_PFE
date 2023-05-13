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
            "flux_id" => rand(1,10),
            "acteurs_personnes_id" => rand(1,10),
            "status" => rand(0,1),
            "type" => rand(0,1),
            "archivee" => rand(0,1), 
            "suivi" => rand(0,1),
            "annulee" => rand(0,1),
            "dateDemande" => $this->faker->date('Y_m_d'),
        ];
    }
}
