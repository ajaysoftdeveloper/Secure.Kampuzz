<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
/* Event::listen('illuminate.query', function($sql, $bindings, $time){


    // To get the full sql query with bindings inserted
    $sql = str_replace(array('%', '?'), array('%%', '%s'), $sql);
    $full_sql = vsprintf($sql, $bindings);
   echo $full_sql.'<br>
   ';
}); */


Route::get('login', array('as' => 'login', 'uses' => 'LoginController@getLogin'));
Route::post('login', array('as' => 'login.post', 'uses' => 'LoginController@postLogin'));
Route::get('logout', array('as' => 'logout', 'uses' => 'LoginController@getLogout'));

Route::group(array('before' => 'auth'), function(){
    Route::get('/', 'DashboardController@index');
    Route::get('dashboard', array('as' => 'dashboard', 'uses' => 'DashboardController@index'));
    Route::get('password', array('as' => 'password', 'uses' => 'LoginController@getChangePwd'));
    Route::post('password', array('as' => 'password.post', 'uses' => 'LoginController@postChangePwd'));
    Route::resource('articles', 'ArticlesController');
    Route::resource('colleges', 'CollegesController');
    Route::get('courses/child/{course_id}', array('as' => 'courses.child', 'uses' => 'CoursesController@childCourses'));
    Route::resource('courses', 'CoursesController');
});