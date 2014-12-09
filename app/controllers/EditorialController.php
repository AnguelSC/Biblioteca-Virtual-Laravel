<?php

class EditorialController extends BaseController {

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
			'name' => 'required|unique:editorials', 
		);

	    $input = Input::all();

	    $validation = Validator::make($input, $rules);

	    if ($validation->passes())
	    {
	    	$editorial = new Editorial;
	    	$editorial->name = Input::get('name');
	    	$editorial->country = Input::get('country');
	    	$editorial->save();
	    	return Response::json(array('message' => 'Editorial inserted successfully.','type' => 'success','editorial' => $editorial));
	    }
	    return Response::json(array('message' => $validation,'type' => 'danger'));    
	}

}
