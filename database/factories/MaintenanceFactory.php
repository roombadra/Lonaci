<?php

namespace Database\Factories;

use App\Models\Maintenance;
use App\Models\Terminal;
use App\Models\Agence;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class MaintenanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Maintenance::class;

    public function definition()
    {
        return [
            'nom_deposant'=>$this->faker->firstNameFemale(),
            'prenom_deposant'=>$this->faker->lastName(),
            'contact'=>$this->faker->tollFreePhoneNumber(),
            'status'=>$this->faker->randomElement($array=array('en cours','Terminé')),
            'observation'=>$this->faker->sentence(),
            'id_terminal'=> Terminal::all()->random()->id,
            'id_agence'=> Agence::all()->random()->id,
        ];
    }
}
