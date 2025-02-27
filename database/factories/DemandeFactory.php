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
            "user_id" => rand(1,10),
            "status" => rand(0,2),
            "archivee" => rand(0,1), 
            "suivi" => rand(0,1),
            "annulee" => rand(0,1),
            "objet_demande" => $this->faker->text(100),
        ];
    }
}
