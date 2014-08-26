<?php namespace MowerMatcher\Mowers;


use Laracasts\Commander\Events\EventGenerator;
use Laracasts\Presenter\PresentableTrait;
use MowerMatcher\Mowers\Events\MowerWasPublished;

class Mower extends \Eloquent {

  use EventGenerator, PresentableTrait;

  /**
   * Fillable fields for a new mower
   *
   * @var array
   */
  protected $fillable = ['body','cutting_width', 'engine_hours', 'engine_make', 'engine_model', 'mower_make', 'mower_model', 'price', 'style', 'use', 'year'];

  /**
   * Path to presenter for a mower
   *
   * @var string
   */
  protected $presenter = 'MowerMatcher\Mowers\MowerPresenter';

  public function user()
  {
    return $this->belongsTo('MowerMatcher\Users\User');
  }

  public function images()
  {
    return $this->hasMany('MowerMatcher\Images\Image');
  }

  public function scopeAvailable($query)
  {
    return $query->where('status', 1);
  }

  /**
   * Publish a new mower
   *
   * @param $body
   * @return static
   */
  public static function publish($body, $cutting_width, $engine_hours, $engine_make, $engine_model, $mower_make, $mower_model, $price, $style, $use, $year)
  {

    $mower = new static(compact('body','cutting_width', 'engine_hours', 'engine_make', 'engine_model', 'mower_make', 'mower_model', 'price', 'style', 'use', 'year'));

    $mower->raise(new MowerWasPublished($body));

    return $mower;
  }

} 