<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;
	public static $auth_rules = [
		'username' => 'required',
		'password' => 'required|min:6'
	];
	public static $change_password_rules = [
		'password' => 'required',
		'new_password' => 'required|min:6',
		'confirm_password' => 'required|same:new_password',

	];
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');
	protected $fillable = array('username', 'password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
//	public function getAuthIdentifier()
//	{
//		return $this->email;
//	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}


	public function getAuthIdentifier() {
		return $this->getKey();
	}



	/**
	 * Automatically Hash the password when setting it
	 * @param string $password The password
	 */
	public function setPassword($password)
	{
		$this->password = Hash::make($password);
	}
}
