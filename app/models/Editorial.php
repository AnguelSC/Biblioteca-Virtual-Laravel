<?php
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
class Editorial extends Eloquent implements SluggableInterface{
	use SluggableTrait;
	protected $sluggable = array(
        'build_from' => 'name',
        'save_to'    => 'slug',
    );
	protected $table = 'editorials';


}
