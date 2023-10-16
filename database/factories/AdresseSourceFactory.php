<?php

namespace Database\Factories;

use App\Models\AdresseSource;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdresseSourceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AdresseSource::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "fluxe_id" => rand(1,3),
            "adresse" => array_rand(["192.168.1.2","192.168.1.3"],1),
        ];
    }
}
