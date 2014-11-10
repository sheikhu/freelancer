<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SkillsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
        $skills = [
        'HTML',
        'CSS',
        'Web Design',
        'Android Development',
        'Internet Marketing',
        'Article Writing',
        'JavaScript',
        'Article Design',
        'Joomla',
        'Wordpress',
        'Google',
        'Search Engine Optimization (SEO)',
        'Developer',
        'Sale and Marketing',
        'Frontend Developer'
        ];
		foreach($skills as $skill)
		{
            Skill::create([
                'name'  =>  $skill,
                'slug'  =>  Str::slug($skill)
			]);
		}
	}

}
