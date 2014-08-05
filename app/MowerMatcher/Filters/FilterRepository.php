<?php namespace MowerMatcher\Filters;


use MowerMatcher\Users\User;

class FilterRepository {

  public function save(Filter $filter, $userId)
  {
    return User::findOrFail($userId)->filters()->save($filter);
  }

  public function getAllFiltersForUser(User $user)
  {
    return $user->filters()->get();
  }

  public function getFilter($id)
  {
    return Filter::find($id);
  }

} 