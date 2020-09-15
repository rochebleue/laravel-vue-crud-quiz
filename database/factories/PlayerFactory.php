<?php

namespace Database\Factories;

use App\Models\Player;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
//use Faker\Generator as Faker;

class playerFactory extends Factory
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
        // return [
        //         'name' => 'book',
        //         'answers' => rand(0,10),
        //         'points' => rand(0,10),
        // ];
    }
}
