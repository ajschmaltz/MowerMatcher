<?php namespace MowerMatcher\Filters;

use MowerMatcher\Users\User;

class Filter extends \Eloquent {

	protected $fillable = ['query'];

  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public static function prepare($query)
  {

    $filter = new static(compact('query'));

    return $filter;
  }

}