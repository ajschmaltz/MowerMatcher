<?php


use MowerMatcher\Mowers\MowerRepository;
use Laracasts\TestDummy\Factory as TestDummy;

class MowerRepositoryTest extends \Codeception\TestCase\Test
{
   /**
    * @var \IntegrationTester
    */
    protected $tester;

    protected $repo;

    protected function _before()
    {
      $this->repo = new MowerRepository;
    }

    /** @test */
    public function it_gets_all_mowers_for_a_user()
    {
      // Given I have 2 users
      $users = TestDummy::times(2)->create('MowerMatcher\Users\User');

      // ... and mowers for both of them.
      TestDummy::times(2)->create('MowerMatcher\Mowers\Mower', [
        'user_id' => $users[0]->id,
        'body' => 'My mower'
      ]);

      TestDummy::times(2)->create('MowerMatcher\Mowers\Mower', [
        'user_id' => $users[1]->id,
        'body' => 'His mower'
      ]);

      // When I fetch mowers for one user
      $mowersForUser = $this->repo->getAllForUser($users[0]);

      // ... then I should receive only relevant ones.
      $this->assertCount(2, $mowersForUser);
      $this->assertEquals('My mower', $mowersForUser[0]->body);
      $this->assertEquals('My mower', $mowersForUser[1]->body);

    }
  /** @test */
  public function it_saves_a_mower_for_a_user()
  {
    // Given I have an unsaved mower
    $mower = TestDummy::create('MowerMatcher\Mowers\Mower', [
      'user_id' => null,
      'body' => 'My mower'
    ]);

    // ... and an existing user.
    $user = TestDummy::create('MowerMatcher\Users\User');

    // When I try and persist this mower
    $savedMower = $this->repo->save($mower, $user->id);

    // ... then it should be saved
    $this->tester->seeRecord('mowers', [
      'body' => 'My mower'
    ]);

    // ... and have the correct user_id.
    $this->assertEquals($user->id, $savedMower->user_id);

  }

}