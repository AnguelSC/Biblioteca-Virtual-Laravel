<?php
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
class Book extends Eloquent implements SluggableInterface{
	use SluggableTrait;
	protected $sluggable = array(
        'build_from' => 'title',
        'save_to'    => 'slug',
    );
	protected $table = 'books';
	public function editorial()
    {
        return $this->hasOne('Editorial','id','editorial_id');
    }

    public function authors()
    {
        return $this->belongsToMany('Author','author_book');
    }

}
