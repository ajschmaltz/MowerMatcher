<?php namespace MowerMatcher\Users;

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Eloquent, Hash;
use Laracasts\Presenter\PresentableTrait;
use MowerMatcher\Mowers\Mower;
use MowerMatcher\Registration\Events\UserRegistered;
use Laracasts\Commander\Events\EventGenerator;
use MowerMatcher\Filters\Filter;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait, EventGenerator, PresentableTrait;
	
	/**
	* Which fields can be mass assigned?
	*
	* @var array
	*/
	protected $fillable = ['username', 'email', 'password'];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

  /**
   * Path to the presenter for a user.
   *
   * @var string
   */
  protected $presenter = 'MowerMatcher\Users\UserPresenter';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');
	
	/**
	 * Passwords must always be hashed
	 *
	 * @param $password
	 */
	public function setPasswordAttribute($password)
	{
    $this->attributes['password'] = Hash::make($password);
	}

  public function mowers()
  {
    return $this->hasMany('MowerMatcher\Mowers\Mower');
  }

  public function images()
  {
    return $this->hasMany('MowerMatcher\Images\Image');
  }

  public function filters()
  {
    return $this->hasMany(Filter::class);
  }

	/**
	 * Register a new user
	 *
	 * @param $username
	 * @param $email
	 * @param $password
	 */
	public static function register($username, $email, $password)
	{
    $user = new static(compact('username', 'email', 'password'));

    $user->raise(new UserRegistered($user));

    return $user;
	}

  public function is($user)
  {
    if (is_null($user)) return false;
    return $this->username == $user->username;
  }

}
