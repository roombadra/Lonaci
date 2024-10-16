<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Agence;
use Illuminate\Support\Str;

class AgenceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Agence::class;
    
    public function definition()
    {
        return [
            'code'=>$this->faker->swiftBicNumber(),
            'nom'=>$this->faker->name(),
            'ville'=>$this->faker->city(),
        ];
    }
}
