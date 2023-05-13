<?php

namespace Database\Factories;

use App\Models\Flux;
use Illuminate\Database\Eloquent\Factories\Factory;

class FluxFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Flux::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "source" => $this->faker->text(10),
            "adresses_sources_id" => rand(1,10),
            "destination" => $this->faker->text(10),
            "adresses_destinations_id" => rand(1,10),
            "port" => rand(3000,4000),
            "type_flux" => array_rand(["Nouvel","Additionnel","Suppression"],1),
            "regle_flux" => array_rand(["Ajout","Suppression","Modification"],1),
            "change_flux" => rand(0,1),
            "categorie_flux"  => array_rand(["Temporaire","Permanent"],1),
            "tcp/udp"  => array_rand(["TCP","UDP"],1),
            "protocole_id" => rand(1,10),
            "action"  => array_rand(["Deny","Permit"],1),
            "durees_id" => rand(1,10),
            "description" => $this->faker->text(50),
            "justification" => $this->faker->text(50),
        ];
    }
}
