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
		$data = array('books' => Book::paginate(15), );
		$this->layout->content = View::make('book.index',$data);
	}

	public function create()
	{
		$this->layout->title = 'Create book | VirtualBook';
		$data = array(
			'authors' => Author::orderBy('name', 'DESC')->lists('name','id'),
			'editorials' => Editorial::orderBy('name', 'DESC')->lists('name','id'),
		);
		$this->layout->content = View::make('book.create',$data);
	}

	public function store()
	{
		$rules = array(
			'title' => 'required',
			'authors' => 'required',
			'editorial' => 'required' );
		$input = Input::all();

	    $validation = Validator::make($input, $rules);

	    if ($validation->passes())
	    {
	    	if (Input::hasFile('picture')) {
	    		$file = Input::file('picture');
	    		$filename = $file->getClientOriginalName();
	    		Image::make($file->getRealPath())->resize('500','700')->save('public/pictures/'.$filename);
	    	}else{
	    		$filename = 'default.jpg';
	    	}
	    	$book = new Book;
	    	$book->title = Input::get('title');
	    	$book->editorial_id = Input::get('editorial');
	    	$book->description = Input::get('description');
	    	$book->picture = $filename;
	    	$book->save();
	    	$authors = Input::get('authors');

	    	foreach ($authors as $author) {
	    		$new_author = new AuthorBook;
	    		$new_author->book_id = $book->id;
	    		$new_author->author_id = $author;
	    		$new_author->save();
	    	}
	    	return Redirect::to('book/'.$book->slug);
	    }
	    return View::make('book.create')->withError($validation);
	}
	
	public function show($slug){
		$book = Book::where('slug','=',$slug)->first();
		$data = array(
			'book' => $book,
		);
		if (isset($book)) {
			$this->layout->title = $book->title;
			$this->layout->content = View::make('book.show',$data);
		}
	}

	public function edit($slug){
		$book = Book::where('slug','=',$slug)->first();
		$data = array(
			'authors' => Author::orderBy('name', 'DESC')->lists('name','id'),
			'editorials' => Editorial::orderBy('name', 'DESC')->lists('name','id'),
			'book' => $book,
		);
		if (isset($book)) {
			$this->layout->title = $book->title;
			$this->layout->content = View::make('book.edit',$data);
		}
	}

	public function update($id)
	{
		$book = Book::find($id);
		if(isset($book)){
			$rules = array(
				'title' => 'required',
				'authors' => 'required',
				'editorial' => 'required' );
			$input = Input::all();

		    $validation = Validator::make($input, $rules);

		    if ($validation->passes())
		    {		    	
		    	$book->title = Input::get('title');
		    	$book->editorial_id = Input::get('editorial');
		    	$book->description = Input::get('description');
		    	if (Input::hasFile('picture')) {
		    		$file = Input::file('picture');
		    		$filename = $file->getClientOriginalName();
		    		$book->picture = $filename;
		    		Image::make($file->getRealPath())->resize('500','700')->save('public/pictures/'.$filename);
		    	}
		    	$book->save();
		    	$authors = Input::get('authors');
		    	AuthorBook::where('book_id','=',$id)->delete();
		    	foreach ($authors as $author) {
		    		$new_author = new AuthorBook;
		    		$new_author->book_id = $book->id;
		    		$new_author->author_id = $author;
		    		$new_author->save();
		    	}
		    	return Redirect::to('book/'.$book->slug);
		    }
		    //return Redirect::make('book.create')->withError($validation);
		}
			
	}

	public function destroy($id){
		
		return Response::json(array('success'));
	}
}
