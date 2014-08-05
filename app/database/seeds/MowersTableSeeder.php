<?php

use Faker\Factory as Faker;
use MowerMatcher\Mowers\Mower;
use MowerMatcher\Users\User;

class MowersTableSeeder extends Seeder {

  public function run()
  {
    $faker = Faker::create();

    $users = User::lists('id');

    foreach(range(1, 50) as $index)
    {
      Mower::create([
        'user_id' => $faker->randomElement($users),
        'body' => $faker->sentence()
      ]);
    }
  }

}