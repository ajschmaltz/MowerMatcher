<?php namespace MowerMatcher\Users;

class UserRepository {
  
  /**
   * Persist a user
   *
   * @param User $user
   * @return mixed
   */
  public function save(User $user)
  {
    return $user->save();
  }

  /**
   * Get paginated list of all users
   *
   * @param int $howMany
   * @return mixed
   */
  public function getPaginated($howMany = 25)
  {
    return User::orderBy('username', 'asc')->paginate($howMany);
  }

  /**
   * Fetch a user by their username
   *
   * @param $username
   */
  public function findByUsername($username)
  {
    return User::with(['mowers' => function($query)
    {
      $query->latest();
      $query->available();
    }, 'mowers.images', 'mowers.user'])->whereUsername($username)->first();
  }

  /**
   * Fetch a user by their id
   *
   * @param $id
   * @return mixed
   */
  public function findById($id)
  {
    return User::with(['mowers' => function($query)
      {
        $query->latest();
        $query->available();
      }, 'mowers.images', 'mowers.user'])->find($id);
  }
}