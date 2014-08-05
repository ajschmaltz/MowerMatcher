<?php
/**
 * Created by PhpStorm.
 * User: Drew
 * Date: 7/14/14
 * Time: 8:44 PM
 */

namespace MowerMatcher\Forms;


use Laracasts\Validation\FormValidator;

class SignInForm extends FormValidator {

  /**
   * Validation rules for the registration form
   *
   * @var array
   */
  protected $rules = [
    'email'    => 'required',
    'password' => 'required'
  ];
} 