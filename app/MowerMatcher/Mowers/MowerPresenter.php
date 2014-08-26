<?php namespace MowerMatcher\Mowers;


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
    return $this->mower_make . ' ' .$this->mower_model;
  }

  public function availability() {
    return $this->status == 1 ? 'For Sale' : 'Sold';
  }
} 