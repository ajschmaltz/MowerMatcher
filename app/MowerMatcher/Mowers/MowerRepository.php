<?php namespace MowerMatcher\Mowers;


use Illuminate\Support\Facades\DB;
use MowerMatcher\Users\User;
use MowerMatcher\Images\Image;
use Helpers;

class MowerRepository {

  public $mower;

  /**
   * Save a mower for a user
   *
   */
  public function save(Mower $mower, $userId)
  {
    return User::findOrFail($userId)->mowers()->save($mower);
  }

  public function attachImages(Mower $mower, $imageIds)
  {
    foreach($imageIds as $imageId)
    {
      $image = Image::find($imageId);
      $image->mower()->associate($mower);
      $image->save();
    }
  }

  public function getAll()
  {
    return Mower::with('user', 'images')->get();
  }

  public function getFilteredMowers($input)
  {

    $filters = ['cutting_width', 'mower_make', 'price', 'style', 'use', 'engine_make'];

    $mowers = Mower::query();

    foreach($filters as $filter)
    {
      if( isset($input[$filter]) && array_filter($input[$filter][key($input[$filter])]))
      {
        sort($input[$filter][key($input[$filter])]);
        $mowers->{'where' . ucfirst(key($input[$filter]))}($filter, $input[$filter][key($input[$filter])]);
      }
    }

    return $mowers->get();

  }

  public function getAllForUser(User $user)
  {
    return $user->mowers()->with('user', 'images')->latest()->get();
  }

} 