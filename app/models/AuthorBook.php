<?php
class AuthorBook extends Eloquent {
	protected $table = 'author_book';
	public function book(){
		return $this->belongsTo('Book');
	}
	public function author(){
		return $this->belongsTo('Author');
	}
}
