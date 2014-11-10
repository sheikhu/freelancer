<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

        $skills_id = Skill::lists('id');

		foreach(range(1, 10) as $index)
		{
			$user = User::create([
                'email' =>  $faker->email,
                'name'  =>  $faker->firstName . ' ' . $faker->lastName,
                'password'  =>  Hash::make('password')
			]);

            $user->skills()->sync(
                $faker->randomElements(
                    $skills_id,
                    $faker->randomElement(range(1, 3))
                    )
                );
		}
	}

}
