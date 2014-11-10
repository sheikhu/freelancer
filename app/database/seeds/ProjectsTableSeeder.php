<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use Carbon\Carbon;
class ProjectsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

        $skills_id = Skill::lists('id');
        $categories_id = Category::lists('id');

		foreach(range(1, 10) as $index)
		{
			$p = Project::create([
                'title' =>  $faker->sentence($faker->randomElement([3,4,5])),
                'description'   =>  $faker->paragraph($faker->randomElement([1,2])),
                'budget'    =>  $faker->numberBetween(1000, 5000),
                'expires_at'    =>  Carbon::now()->addDay($faker->numberBetween(4, 20))
			]);

            $p->skills()->sync(
                $faker->randomElements(
                    $skills_id,
                    $faker->randomElement(range(1, 3))
                    )
                );

            $p->categories()->sync(
                $faker->randomElements(
                    $categories_id,
                    $faker->randomElement(range(1, 3))
                    )
                );

		}

	}

}
