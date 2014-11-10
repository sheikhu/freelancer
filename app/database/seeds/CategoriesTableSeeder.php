<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CategoriesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

        $categories = [
        'Web development',
        'Order Processing',
        'Data Entry',
        'Transcription',
        'Personal Assistant',
        'Phone Support'
        ];

		foreach($categories as $category)
		{
            Category::create([
                'name'  =>  $category,
                'slug'  =>  Str::slug($category)
            ]);
		}
	}

}
