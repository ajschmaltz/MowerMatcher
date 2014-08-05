<?php

class DatabaseSeeder extends Seeder {

  /**
   * @var array
   */
  protected $tables = ['users', 'mowers', 'images'];

  /**
   * @var array
   */
  protected $seeders = [
    // add to array to actually seed
  ];

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

    $this->cleanDatabase();

    foreach($this->seeders as $seedClass)
    {
      $this->call($seedClass);
    }

	}


  /**
   * Clean out the database for new seed generation
   *
   */
  private function cleanDatabase()
  {

    DB::statement('SET FOREIGN_KEY_CHECKS=0');

    foreach($this->tables as $table)
    {
      DB::table($table)->truncate();
    }

    DB::statement('SET FOREIGN_KEY_CHECKS=0');
  }

}
