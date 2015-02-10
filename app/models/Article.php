<?php

class Article extends \Eloquent {


	protected $table = 'kp_articles';

	// Add your validation rules here
	public static $rules = [
		 'article_title' => 'required|between:3,255',
		 'article_content' => 'required',
	];

	// Don't forget to fill this array
	protected $fillable = ['article_title', 'article_publish_date', 'article_content', 'revised'];

}