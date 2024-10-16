<?php

namespace Database\Factories;

use App\Models\Concessionnaires;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ConcessionnairesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Concessionnaires::class;

    public function definition()
    {
        return [
            'nom'=>$this->faker->firstNameFemale(),
            'prenom'=>$this->faker->lastName(),
            'contact'=>$this->faker->tollFreePhoneNumber(),
        ];
    }
}
