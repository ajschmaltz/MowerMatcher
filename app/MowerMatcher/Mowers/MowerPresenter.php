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
} 