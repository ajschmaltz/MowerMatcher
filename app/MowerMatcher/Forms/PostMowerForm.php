<?php namespace MowerMatcher\Forms;


use Laracasts\Validation\FormValidator;

class PostMowerForm  extends FormValidator {

  /**
   * Validation rules for the registration form
   *
   * @var array
   */
  protected $rules = [
    'body' => 'required',
    'images' => 'array'
  ];
}