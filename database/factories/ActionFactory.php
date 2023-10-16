<?php

namespace Database\Factories;

use App\Models\Action;
use Illuminate\Database\Eloquent\Factories\Factory;

class ActionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Action::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "demande_id" => rand(1,10),
            "equipeUser" => rand(1,3),
            "userTrai_id" => rand(1,10),
            "dateArrivee"  => $this->faker->date('Y-m-d'),
            "Approval" => rand(0,1),
            "approvalDate" => $this->faker->date('Y-m-d'),
            "equipeUserNext" => rand(1,3),
            "motif" => $this->faker->text(50),
        ];
    }
}
