<?php

namespace Database\Factories;

use App\Models\Player;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlayerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Player::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $heightArray = [178, 180, 182, 185, 188, 190, 192, 195];
        $weightArray = [75, 77, 79, 82, 84, 86, 88, 90, 96, 100];
        $ageArray = [21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33];
        $saralyArray = [600, 650, 700, 750, 800, 850, 900, 950, 1000];
        $yearArray = [0, 0, 1, 1, 2, 2, 2, 2, 3, 3, 4, 5, 6, 7];
        $idArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

        return [
        'name' => $this->faker->name(),
        'height' => $heightArray[array_rand($heightArray)],
        'weight' => $weightArray[array_rand($weightArray)],
        'age' => $ageArray[array_rand($ageArray)],
        'salary' => $saralyArray[array_rand($saralyArray)],
        'year_enrolled' => $yearArray[array_rand($yearArray)],
        'team_id' => $idArray[array_rand($idArray)]
        ];
    }
}
