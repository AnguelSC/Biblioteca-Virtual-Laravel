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
		$data = array(
			'authors' => Author::all(),
			'editorials' => Editorial::all(),
		);
		$this->layout->content = View::make('book.create',$data);
	}

	public function store()
	{
		$file = Input::file('picture');
		$rules = array(
			'title' => 'required',
			'authors' => 'required',
			'editorial' => 'required' );
		$input = Input::all();

	    $validation = Validator::make($input, $rules);

	    if ($validation->passes())
	    {
	    	$filename = $file->getClientOriginalName();
	    	Image::make($file->getRealPath())->resize('200','200')->save('public/pictures/'.$filename);
	    	$book = new Book;
	    	$book->title = Input::get('title');
	    	$book->id_editorial = Input::get('editorial');
	    	$book->description = Input::get('description');
	    	$book->picture = $filename;
	    	$book->save();
	    	$authors = Input::get('authors');

	    	foreach ($authors as $author) {
	    		$new_author = new AuthorBook;
	    		$new_author->id_book = $book->id;
	    		$new_author->id_author = $author;
	    		$new_author->save();
	    	}
	    	var_dump($authors);
	    }else{
	    	var_dump($validation);
	    }
	}
	

}
