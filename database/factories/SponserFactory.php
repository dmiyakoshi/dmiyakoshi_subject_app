<?php

namespace Database\Factories;

use App\Models\Sponser;
use Illuminate\Database\Eloquent\Factories\Factory;


class SponserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Sponser::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $teamArray = [0];
        for ($i = 1; $i <= 10; $i++)
        {
            $teamArray[] = $i;
        }

        $playerArray = [0];

        for ($i = 1; $i <= 50; $i++) {
            $playerArray[] = $i;
        }

        $moneyArray = [100];

        for ($i=200; $i <= 1000 ; $i += 100)
        {
            $moneyArray[] = $i;
        }

        $yearArray = [1, 2, 3, 4];

        return [
            'company' => $this->faker->company(),
            'team_id' => $teamArray[array_rand($teamArray)],
            'player_id' => $playerArray[array_rand($playerArray)],
            'money' => $moneyArray[array_rand($moneyArray)],
            'year' => $yearArray[array_rand($yearArray)],
        ];
    }
}
