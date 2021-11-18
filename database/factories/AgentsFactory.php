<?php

namespace Database\Factories;

use App\Models\AgentsModel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;

class AgentsFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return
            [
                'nom' => $this->faker->lastName,
                'postnom' => $this->faker->lastName,
                'prenom' => $this->faker->firstname(),
                'username' => $this->faker->lastName,
                'password' => $this->faker->lastName,
                'zone_id' => rand(1, 7),
                'grade' => $this->faker->lastName,
            ];
    }
}
