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

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@showWelcome']);

Route::resource('/book','BookController');

Route::get('login',function(){
	return View::make('login');
});

Route::post('login',function(){
	$rules = array();
	$validation = Validator::make(Input::all(),$rules);
	if ($validation->fails()) {
		return View::make('login')->withErrors($validation);
	}
	try{
	  	Auth::attempt(array('identifier' => Input::get('username'), 'password' => Input::get('password')));
	}
	catch (Exception $e){
		return View::make('login')->with(array('error' => $e->getMessage()));
	}
});