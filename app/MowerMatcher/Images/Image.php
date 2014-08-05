<?php namespace MowerMatcher\Images;

use Laracasts\Commander\Events\EventGenerator;
use MowerMatcher\Images\Events\ImageWasSaved;

class Image extends \Eloquent {

  use EventGenerator;

	protected $fillable = ['filename', 'uid'];

  public function user()
  {
    return $this->hasOne('MowerMatcher\Users\User');
  }

  public function mower()
  {
    return $this->belongsTo('MowerMatcher\Mowers\Mower');
  }

  public function setUidAttribute($uid)
  {
    $this->attributes['uid'] = uniqid();
  }

  public static function post($filename, $uid = null)
  {
    $image = new static(compact('filename', 'uid'));

    $image->raise(new ImageWasSaved($image));

    return $image;
  }

}