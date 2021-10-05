<?php

namespace Database\Factories;

use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeamFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Team::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $countCampion = [0, 0, 0, 0, 0, 1, 1, 1, 2, 2, 3, 3, 4];
        $budgetArray = [1000, 1200, 1500, 2000, 2500, 3000, 5000, 7000];
        
        return [
            'name' => $this->faker->firstName(),
            'company' => $this->faker->company(),
            'address' => $this->faker->prefecture(),
            'campion' => $countCampion[array_rand($countCampion)],
            'budget' =>  $budgetArray[array_rand($budgetArray)],
        ];
    }
}
