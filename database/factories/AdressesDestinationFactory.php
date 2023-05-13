<?php

namespace Database\Factories;

use App\Models\AdressesDestination;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdressesDestinationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AdressesDestination::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "adresse" => array_rand(["192.168.1.6","192.168.1.7","192.168.1.8","192.168.1.9"],1),
        ];
    }
}
