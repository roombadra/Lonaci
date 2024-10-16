<?php

namespace Database\Factories;

use App\Models\Panne;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PanneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Panne::class;

    
    public function definition()
    {
        return [
            'nom_panne'=>Str::random(10),
        ];
    }
}
