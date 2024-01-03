<?php

namespace Database\Factories;

use App\Models\student;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class studentFactory extends Factory
{
    protected $model = student::class; 

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    public function definition(): array
    {
        return [  
            'name' => $this->faker->name,
            'age' => $this->faker->numberBetween(18, 30),
            'number' => $this->faker->randomNumber(5)
            
        ];
    }
}
