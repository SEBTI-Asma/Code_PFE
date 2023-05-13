<?php

namespace Database\Factories;

use App\Models\Protocole;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProtocoleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Protocole::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nomp" => array_rand(["HTTP","HTTPS"],1),
        ];
    }
}
