<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $lastname=$this->faker->lastName;
        $firstname=$this->faker->firstName();
        return [
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            "nom" =>$lastname,
            "prenom" => $firstname,
            "telephone" => rand(3000,4000),
            "departement_id" => rand(1,3),
            "sous_departement_id" => rand(1,3),
            "role" => rand(0,3),
            "droit" => rand(0,1),
            "active" => 0,
            "photo" => $this->faker->imageUrl(),
            "user_name" => str::lower($lastname)."_".str::lower($firstname),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
