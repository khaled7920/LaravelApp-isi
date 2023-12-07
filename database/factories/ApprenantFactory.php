<?php

namespace Database\Factories;

use App\Models\Apprenant;
use Illuminate\Database\Eloquent\Factories\Factory;

class ApprenantFactory extends Factory
{
    protected $model = Apprenant::class;

    public function definition()
    {
        return [
            'nom' => $this->faker->lastName,
            'prenom' => $this->faker->firstName,
            'email' => $this->faker->unique()->safeEmail,
        ];
    }
}
