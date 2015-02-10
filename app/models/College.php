<?php

class College extends \Eloquent {
	protected $table = 'kp_college_master';
	protected $primaryKey = 'college_id';
	// Add your validation rules here
	public static $rules = [
		'college_name' => 'required|between:3,255',
		'city_name' => 'required',
	];

	// Don't forget to fill this array
	protected $fillable = ['college_name','city_name','college_rating','college_established','college_contact_person','college_email','college_url','college_address','college_phone','why_join'];

}