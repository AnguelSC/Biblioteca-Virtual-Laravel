@extend('layout')

@section('content')
<div class="wrapper-md">
  <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default">
        <div class="panel-heading font-bold">
          Add book
        </div>
        <div class="panel-body">
        {{Form::open(array('url'=>'book','class'=>'form-horizontal frm_add_book','method'=>'POST','files'=> true))}}
            <div class="form-group">
              <label class="col-sm-2 control-label">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="title" id="title">                        
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Description</label>
              <div class="col-sm-10">
                <textarea  class="form-control" name="description" id="description"></textarea>                   
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Authors</label>
              <div class="col-sm-10">
                <div class="input-group">
                  {{Form::select('authors[]',$authors,null,array('multiple'=>'multiple','class'=>'form-control chosen','id'=>'authors'))}}
                  <div class="input-group-btn"><a data-toggle="modal" data-backdrop="false" data-target="#add_author" class="btn btn-success"><i class="fa fa-plus"></i></a> </div>
                </div>                  
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Editorial</label>
              <div class="col-sm-10">
                <div class="input-group">
                  {{Form::select('editorial',$editorials,null,array('class'=>'form-control chosen','id'=>'editorial'))}}
                  <div class="input-group-btn"><a data-toggle="modal" data-backdrop="false" data-target="#add_editorial" class="btn btn-success"><i class="fa fa-plus"></i></a> </div> 
                </div>                     
              </div>
            </div>
            <!--<div class="form-group"> 
              <label class="col-sm-2 control-label">Date</label> 
              <div class="col-sm-10"> 
                <input class="input-sm input-s datepicker-input datepicker form-control" size="16" type="text" data-date-format="dd-mm-yyyy"> 
              </div> 
            </div>-->
            <div class="form-group">
              <label class="col-sm-2 control-label">Picture</label>
              <div class="col-sm-10">
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