<?php

namespace Database\Factories;

use App\Models\AdresseDestination;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdresseDestinationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AdresseDestination::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "adresse" => array_rand(["192.168.1.4","192.168.1.5"],1),
        ];
    }
}
