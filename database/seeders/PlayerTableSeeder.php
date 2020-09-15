<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Player;
use Faker\Generator as Faker;

class PlayerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {        
        DB::table('players')->delete();
        for ($i = 0 ; $i < 20 ; $i++) {
            Player::create([
                'name' => $faker->firstName,
                'answers' => rand(0,10),
                'points' => rand(0,10),
            ]);
        }
    }
}
