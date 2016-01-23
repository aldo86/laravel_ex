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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('about', 'AboutController@showAbout');

Route::get('about/directions', array( 'as' => 'directions', function()
{
	$theURL = URL::route('directions');
	return "ABOUT Directions Content: $theURL";	
}));
Route::any('submit-form', function()
{
	return 'Process form';
});
Route::get('about/{theSubject}', function($theSubject)
{
	return $theSubject. ' here';	
});
Route::get('about/{artForm}/{theSpecialty}', function($artForm,$theSpecialty)
{
	return "ABOUT Directions Content: $artForm + $theSpecialty";	
});

Route::get('birthday', array(
	'before' => 'birthday:5/19',
	function()
		{
		return "Still not your birthday";	
		}));
