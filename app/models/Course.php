<?php

class Course extends \Eloquent {
	protected $table = 'kp_courses';
	protected $primaryKey = 'course_id';
	// Add your validation rules here
	public static $rules = [
		  'course_name' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['course_name','parent_course_id'];

	public static function CatTree($course_id=0){
		$parent_id = DB::table('kp_courses')->where('course_id', $course_id)->pluck('parent_course_id');
		$cats =  DB::table('kp_courses')->where('parent_course_id', $parent_id)->get();
		$categories[''] = '-- Select --';
		if($parent_id=='')
{
	$categories['0'] = '-- Top --';
}
		foreach ($cats as $cat)
		{
			$categories[$cat->course_id] =  $cat->course_name;
		}
return $categories;
	}
}