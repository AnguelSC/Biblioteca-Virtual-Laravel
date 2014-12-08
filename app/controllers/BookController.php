<?php

class BookController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	protected $layout = 'layout';
	public function index()
	{
		$this->layout->title = 'VirtualBook';
		$this->layout->content = View::make('home');
	}

	public function create()
	{
		$this->layout->title = 'Create book | VirtualBook';
		$this->layout->content = View::make('book.create');
	}

}
