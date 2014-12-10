@extend('layout')

@section('content')
<div class="wrapper-md">
  <div class="row">
    @foreach($books as $book)
      <div class="col-md-2 col-sm-3 col-xs-6 col-lg-2" id="book_{{$book->id}}">
        <div class="panel b-a">
          <div class="panel-heading no-border bg-primary">          
            <span class="text-lt">{{$book->title}}</span>
          </div>
          <div class="item m-l-n-xxs m-r-n-xxs">
            {{HTML::image('pictures/'.$book->picture,$book->title,array('width'=>'300px','class'=>'img-responsive'))}}
          </div>
          <div class="hbox text-center b-t b-info">          
            <a href="{{ URL::to('book', $book->slug) }}" class="col padder-v">
              <span>View</span>
            </a>
            <a href="{{ URL::to('book/'.$book->slug.'/edit') }}" class="col padder-v">
              <span>Edit</span>
            </a>
            <a href="#" data-slug="{{$book->slug}}" data-id="{{$book->id}}" class="col delete_book padder-v">
              <span>Delete</span>
            </a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
  <?php echo $books->links(); ?>
</div>

@stop