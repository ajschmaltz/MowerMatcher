<?php namespace MowerMatcher\Mowers;


use Iveoles\Image\Facades\Image;
use Laracasts\Presenter\Presenter;

class MowerPresenter extends Presenter {

  /**
   * Display how long its been since the publish date
   *
   * @return mixed
   */
  public function timeSincePublished()
  {
    return $this->created_at->diffForHumans();
  }

  public function description() {
    $pieces = [$this->year, $this->cutting_width . '"', $this->mower_make, $this->mower_model];
    return implode(' ', $pieces);
  }

  public function availability() {
    return $this->status == 1 ? 'For Sale' : 'Sold';
  }

  public function image($method, $width = 100, $height = null)
  {
    $path = Image::path('/pics_mowers_for_sale/'.$this->images[0]->filename, $method, $width, $height);
    return "<img class='img-responsive pull-left' src='$path' />";
  }
} 