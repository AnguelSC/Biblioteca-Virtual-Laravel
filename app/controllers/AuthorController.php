<?php

class AuthorController extends BaseController {

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

	public function store(){
		$rules = array(
			'name' => 'required|unique:authors', 
		);

	    $input = Input::all();

	    $validation = Validator::make($input, $rules);

	    if ($validation->passes())
	    {
	    	$author = new Author;
	    	$author->name = Input::get('name');
	    	$author->country = Input::get('country');
	    	$author->save();
	    	return Response::json(array('message' => 'Author inserted successfully.','type' => 'success','author' => $author));
	    }
	    return Response::json(array('message' => $validation,'type' => 'danger'));    
	}

}
