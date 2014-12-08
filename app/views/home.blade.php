@extend('layout')

@section('content')
<div class="wrapper-md">
  <div class="panel panel-default">
    <div class="panel-heading font-bold">
      Agregar obras
    </div>
    <div class="panel-body">
      <form class="form-horizontal ng-pristine ng-valid ng-valid-required" method="get">
        <div class="form-group">
          <label class="col-sm-2 control-label">Rounded</label>
          <div class="col-sm-10">
            <input type="text" class="form-control">                        
          </div>
        </div>
        
      </form>
    </div>
  </div>
</div>

@stop