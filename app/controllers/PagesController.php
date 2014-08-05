<?php

use MowerMatcher\Mowers\MowerRepository;

class PagesController extends \BaseController {

  private $mowerRepository;

  function __construct(MowerRepository $mowerRepository)
  {
    $this->mowerRepository = $mowerRepository;
  }

  public function home()
  {
    $input = Input::all();
    $mowers = $this->mowerRepository->getFilteredMowers($input);
    return View::make('pages.home')->withMowers($mowers);
  }
  
}