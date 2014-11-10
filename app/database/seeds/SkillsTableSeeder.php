<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SkillsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
            $name = $faker->sentence($faker->randomElement([2,3,4]));
			
            Skill::create([
                'name'  =>  $name,
                'slug'  =>  Str::slug($name)
			]);
		}
	}

}