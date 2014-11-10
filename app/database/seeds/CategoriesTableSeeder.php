<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CategoriesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			$name = $faker->sentence($faker->randomElement([2,3,4]));
            
            Category::create([
                'name'  =>  $name,
                'slug'  =>  Str::slug($name)
            ]);
		}
	}

}