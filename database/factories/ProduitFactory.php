<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\Produit;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProduitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Produit::class;
    
    public function definition()
    {
        return [
            'nom'=>$this->faker->randomElement($array=array('loto','loti','lota')),
        ];
    }
}
