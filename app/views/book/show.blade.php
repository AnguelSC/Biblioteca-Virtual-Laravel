@extend('layout')

@section('content')
<div class="app-content-body fade-in-up ng-scope">
  <div class="hbox hbox-auto-xs hbox-auto-sm ng-scope">
    <div class="col">
      <div class="bg-light lter b-b wrapper-md">
          <div class="row">
            <div class="col-sm-12 col-xs-12">
              <h1 class="m-n font-thin h4 text-black">{{$book->title}}</h1>
              <small class="text-muted">{{$book->editorial->name}}</small>
              <a href="{{ URL::to('book/'.$book->slug.'/edit') }}" class="btn btn-default btn-addon pull-right m-t-n-xs">Edit Book</a>
            </div>
          </div>
        </div>
        <div class="panel">
        <div class="row">
          <div class="col-sm-3 col-xs-12">
            {{HTML::image('pictures/'.$book->picture,$book->title,array('class'=>'img-responsive'))}}
          </div>
          <div class="col">
            <div class="wrapper">
              <h2 class="m-t-none">
                {{$book->title}}
              </h2>
              <div class="wrapper">
                <dl>
                  <dt>Description:</dt>
                  <dd class="text-justify">{{{$book->description}}}</dd>
                  <dt>Editorial:</dt>
                  <dd>{{$book->editorial->name}}</dd>
                  <dt>Author's:</dt>
                  <dd>
                    @foreach($book->authors as $author)
                      <a href="{{URL::to('author/'.$author->id)}}"><span class="label label-danger">{{$author->name}}</span></a>
                    @endforeach
                  </dd>

                </dl>
              </div>
            </div>
          </div>           
        </div>
          
        </div>
    </div>
    <div class="col w-md bg-white-only b-l bg-auto bg-auto-right no-border-xs">
      
    </div>
  </div>
</div>
@stop