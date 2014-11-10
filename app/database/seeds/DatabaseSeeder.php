<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('SkillsTableSeeder');
		$this->call('CategoriesTableSeeder');
		$this->call('ProjectsTableSeeder');
		$this->call('UsersTableSeeder');
	}

}
