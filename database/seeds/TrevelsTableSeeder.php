<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Trevel;
class TrevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

		
		for($i = 0; $i < 40; $i++){
			$new_travel = New Trevel();
			
			$new_travel->price = rand(200, 500);
			$new_travel->country = $faker->country();
			$new_travel->city = $faker->city();
			$new_travel->description = $faker->text(50);
			$new_travel->save();
	  }
    }
}
