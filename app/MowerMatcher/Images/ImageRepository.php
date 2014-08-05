<?php namespace MowerMatcher\Images;

use MowerMatcher\Users\User;
use MowerMatcher\Images\Events\ImageWasSaved;


class ImageRepository {

  public function save(Image $image, $userId)
  {
    return User::findOrFail($userId)
      ->images()
      ->save($image);
  }

} 