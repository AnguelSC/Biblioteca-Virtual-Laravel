@extend('layout')

@section('content')
<div class="wrapper-md">
  <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default">
        <div class="panel-heading font-bold">
          Edit Book
        </div>
        <div class="panel-body">
        {{Form::open(array('url'=>'book/'.$book->id,'class'=>'form-horizontal frm_add_book','method'=>'PUT','files'=> true))}}
            <div class="form-group">
              <label class="col-sm-2 control-label">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="title" id="title" value="{{$book->title}}">                        
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Description</label>
              <div class="col-sm-10">
                <textarea  class="form-control" name="description" id="description" rows="7">{{$book->description}}</textarea>                   
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Authors</label>
              <div class="col-sm-8">
                {{Form::select('authors[]',$authors,$book->authors->lists('id'),array('multiple'=>'multiple','class'=>'form-control chosen','style' => 'style="width: 240px;"','id'=>'authors'))}}
              </div>
              <div class="col-sm-2"><a data-toggle="modal" data-backdrop="false" data-target="#add_author" class="btn btn-success"><i class="fa fa-plus"></i> Add Author</a></div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Editorial</label>
              <div class="col-sm-8">
                  {{Form::select('editorial',$editorials,$book->editorial_id,array('class'=>'form-control chosen','id'=>'editorial'))}}
              </div>
              <div class="col-sm-2"><a data-toggle="modal" data-backdrop="false" data-target="#add_editorial" class="btn btn-success"><i class="fa fa-plus"></i> Add Editorial</a></div>                 
              
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Picture</label>
              <div class="col-sm-2">
                {{HTML::image('pictures/'.$book->picture,$book->title,array('class'=>'img-responsive'))}}
              </div>
              <div class="col-sm-8">
                <input type="file" class="filestyle" data-icon="false" name="picture" data-classButton="btn btn-default" data-classInput="form-control inline v-middle input-s">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-12">
                <button type="submit" class="btn btn-info btn-block">Submit</button>
              </div>
            </div>
          {{Form::close()}}
        </div>
      </div>
    </div>
    <div class="col-sm-6"></div>
  </div>
</div>

@stop