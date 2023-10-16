<?php

namespace Database\Factories;

use App\Models\Fluxe;
use Illuminate\Database\Eloquent\Factories\Factory;

class FluxeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Fluxe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "demande_id" => rand(1,3),
            "source" => $this->faker->text(10),
            "destination" => $this->faker->text(10),
            "port" => strval(rand(3000,4000)),
            "type_flux" => array_rand(["Nouvel","Additionnel","Suppression"],1),
            "regle_flux" => array_rand(["Ajout","Suppression","Modification"],1),
            "change_flux" => rand(0,1),
            "categorie_flux"  => array_rand(["Temporaire","Permanent"],1),
            "tcp_udp"  => rand(0,1), //0=tcp et 1=udp
            "protocole_id" => rand(1,3),
            "departement_id" => rand(1,3),
            "sousdepartement_id" => rand(1,3),
            "action"  => rand(0,1), // 0=deny et 1=permit
            "duree_id" => rand(1,3),
            "description" => $this->faker->text(50),
            // "chemin_description" => $this->faker->file(),
            "justification" => $this->faker->text(50),
            // "chemin_justification" => $this->faker->file('/tmp'),
        ];
    }
}
