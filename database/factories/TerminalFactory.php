<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\Agence;
use App\Models\Concessionnaires;
use App\Models\Produit;
use App\Models\Terminal;
use Illuminate\Database\Eloquent\Factories\Factory;

class TerminalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Terminal::class;


    public function definition()
    {
       return [
            'code_guichet'=>$this->faker->swiftBicNumber(),
            'marque'=>$this->faker->randomElement($array=array('Samsung','asus','axe')), 
            'model'=>Str::random(8),
            'status'=>$this->faker->randomElement($array=array('en cours','Terminé')),
            'id_concessionnaire'=> Concessionnaires::all()->random()->id,
            'id_agence'=> Agence::all()->random()->id,
            'id_produit'=> Produit::all()->random()->id,
        ];
    }
}
