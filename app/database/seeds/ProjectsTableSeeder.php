<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use Carbon\Carbon;
class ProjectsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			$p = Project::create([
                'title' =>  $faker->sentence($faker->randomElement([3,4,5])),
                'description'   =>  $faker->paragraph($faker->randomElement([1,2])),
                'budget'    =>  $faker->numberBetween(1000, 5000),
                'expires_at'    =>  Carbon::now()->addDay($faker->numberBetween(4, 20))
			]);

            if($faker->boolean)
                $p->skills()->save(Skill::find($index));
		}
	}

}
