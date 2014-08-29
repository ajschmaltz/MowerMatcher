<?php

use MowerMatcher\Forms\RegistrationForm;
use MowerMatcher\Registration\RegisterUserCommand;


class RegistrationController extends BaseController {
  
  /**
  * @var RegistrationForm
  */
  private $registrationForm;
  
  /**
  * Constructor
  *
  * @param RegistrationForm $registrationForm
  */
  function __construct(RegistrationForm $registrationForm)
  {
    $this->registrationForm = $registrationForm;

    $this->beforeFilter('guest');
  }
  
  /**
  * Show form to register the user
  *
  * @return Response
  */
  public function create()
  {
    return View::make('pages.register');
  }
  
  public function store()
  {

    $this->registrationForm->validate(Input::all());

    $user = $this->execute(RegisterUserCommand::class);

		Auth::login($user);

    Flash::overlay('Glad to have you as a new MowerMatcher member!');
		
		return Redirect::to('/');
  }
}