<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>{{$title}}</title>
  <meta name="description" content="app, web app, responsive, responsive layout, admin, admin panel, admin dashboard, flat, flat ui, ui kit, AngularJS, ui route, charts, widgets, components" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  {{HTML::style('css/bootstrap.css')}}
  {{HTML::style('css/animate.css')}}
  {{HTML::style('css/font-awesome.min.css')}}
  {{HTML::style('css/simple-line-icons.css')}}
  {{HTML::style('css/font.css')}}
  {{HTML::style('css/app.css')}}
  {{HTML::style('css/bootstrapValidator.css')}}
  {{HTML::style('js/jquery/nestable/nestable.css')}}
  {{HTML::style('js/jquery/slider/slider.css')}}
  {{HTML::style('js/jquery/chosen/chosen.css')}}
  {{HTML::style('js/jquery/spinner/jquery.bootstrap-touchspin.css')}}
  {{HTML::style('js/jquery/datatables/dataTables.bootstrap.css')}}
  {{HTML::style('js/jquery/jvectormap/jquery-jvectormap.css')}}
  {{HTML::style('js/jquery/footable/footable.core.css')}}
  {{HTML::style('js/jquery/datepicker/datepicker.css')}}

</head>
<body>
  <div class="app app-header-fixed app-aside-fixed" > 
    <div class="app-header navbar">
        <div class="navbar-header bg-black">
          <button class="pull-right visible-xs dk" ui-toggle-class="show" data-target=".navbar-collapse">
            <i class="glyphicon glyphicon-cog"></i>
          </button>
          <button class="pull-right visible-xs" ui-toggle-class="off-screen" data-target=".app-aside">
            <i class="glyphicon glyphicon-align-justify"></i>
          </button>
          <!-- brand -->
          <a href="#/" class="navbar-brand text-lt">
            <i class="fa fa-btc"></i>
            <img src="img/logo.png" alt="." class="hide">
            <span class="hidden-folded m-l-xs">VirtualBook</span>
          </a>
          <!-- / brand -->
        </div>
        <!-- / navbar header -->

        <!-- navbar collapse -->
        <div class="collapse navbar-collapse box-shadow bg-white-only">
          <!-- link and dropdown -->
          <div class="nav navbar-nav m-l-sm hidden-xs">
            <a href="#" class="btn no-shadow navbar-btn">
              <i class="fa fa-dedent fa-fw"></i>
            </a>
          </div>
          <form class="navbar-form navbar-form-sm navbar-left shift" ui-shift="prependTo" target=".navbar-collapse">
            <div class="form-group">
              <div class="input-group">
                <input type="text" class="form-control input-sm bg-light no-border rounded padder" placeholder="Search projects..." aria-autocomplete="list" aria-expanded="false" aria-owns="typeahead-069-6982">
                <span class="input-group-btn">
                  <button type="submit" class="btn btn-sm bg-light rounded"><i class="fa fa-search"></i></button>
                </span>
              </div>
            </div>
          </form>
          <!-- / link and dropdown -->

          <!-- search form -->
          
          <!-- / search form -->

          <!-- nabar right -->
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle clear" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="thumb-sm avatar pull-right m-t-n-sm m-b-n-sm m-l-sm">
                  <img src="img/a0.jpg" alt="...">
                  <i class="on md b-white bottom"></i>
                </span>
                <span class="hidden-sm hidden-md">{{Auth::user()->username}}</span> <b class="caret"></b>
              </a>
              <!-- dropdown -->
              <ul class="dropdown-menu animated fadeInRight w">
                <li class="wrapper b-b m-b-sm bg-light m-t-n-xs">
                  <div>
                    <p>300mb of 500mb used</p>
                  </div>
                  <div class="progress-xs m-b-none bg-white progress ng-isolate-scope" value="60">
                    <div class="progress-bar" ng-class="type &amp;&amp; 'progress-bar-' + type" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" ng-style="{width: percent + '%'}" aria-valuetext="60%" ng-transclude="" style="width: 60%;"></div>
                  </div>
                </li>
                <li>
                  <a href="">
                    <span class="badge bg-danger pull-right">30%</span>
                    <span>Settings</span>
                  </a>
                </li>
                <li>
                  <a ui-sref="app.page.profile" href="#/app/page/profile">Profile</a>
                </li>
                <li>
                  <a ui-sref="app.docs" href="#/app/docs">
                    <span class="label bg-info pull-right">new</span>
                    Help
                  </a>
                </li>
                <li class="divider"></li>
                <li>
                  <a ui-sref="access.signin" href="#/access/signin">Logout</a>
                </li>
              </ul>
              <!-- / dropdown -->
            </li>
          </ul>
          <!-- / navbar right -->

        </div>
        <!-- / navbar collapse --></div>
    <!-- / navbar -->

    <!-- menu -->
    <div class="app-aside hidden-xs bg-black">
      <div class="aside-wrap">
        <div class="navi-wrap">
          <!-- nav -->
          <nav class="navi">
            <ul class="nav" data-ride="collapse"> 
              <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                <span translate="aside.nav.HEADER" class="ng-scope">Navigation</span>
              </li>
              <li>
                <a href="" class="auto">
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                  <i class="glyphicon glyphicon-briefcase icon"></i>
                  <span translate="aside.nav.components.ui_kits.UI_KITS" class="ng-scope">UI Kits</span>
                </a>
                <ul class="nav nav-sub dk">
                  <li class="nav-sub-header">
                    <a href="">
                      <span translate="aside.nav.components.ui_kits.UI_KITS" class="ng-scope">UI Kits</span>
                    </a>
                  </li>
                  <li ui-sref-active="active">
                    <a ui-sref="app.ui.buttons" href="#/app/ui/buttons">
                      <span translate="aside.nav.components.ui_kits.BUTTONS" class="ng-scope">Buttons</span>
                    </a>
                  </li>
                  <li ui-sref-active="active">
                    <a ui-sref="app.ui.icons" href="#/app/ui/icons">
                      <b class="badge bg-info pull-right">3</b>
                      <span translate="aside.nav.components.ui_kits.ICONS" class="ng-scope">Icons</span>
                    </a>
                  </li>
                  <li ui-sref-active="active">
                    <a ui-sref="app.ui.grid" href="#/app/ui/grid">
                      <span translate="aside.nav.components.ui_kits.GRID" class="ng-scope">Grid</span>
                    </a>
                  </li>
                  <li ui-sref-active="active">
                    <a ui-sref="app.ui.bootstrap" href="#/app/ui/bootstrap">
                      <b class="badge bg-primary pull-right">16</b>
                      <span translate="aside.nav.components.ui_kits.BOOTSTRAP" class="ng-scope">Bootstrap</span>
                    </a>
                  </li>
                  <li ui-sref-active="active">
                    <a ui-sref="app.ui.sortable" href="#/app/ui/sortable">
                      <span translate="aside.nav.components.ui_kits.SORTABLE" class="ng-scope">Sortable</span>
                    </a>
                  </li>
                  <li ui-sref-active="active">
                    <a ui-sref="app.ui.portlet" href="#/app/ui/portlet">
                      <span translate="aside.nav.components.ui_kits.PORTLET" class="ng-scope">Portlet</span>
                    </a>
                  </li>
                  <li ui-sref-active="active">
                    <a ui-sref="app.ui.timeline" href="#/app/ui/timeline">
                      <span translate="aside.nav.components.ui_kits.TIMELINE" class="ng-scope">Timeline</span>
                    </a>
                  </li>
                  <li ui-sref-active="active">
                    <a ui-sref="app.ui.jvectormap" href="#/app/ui/jvectormap">
                      <span translate="aside.nav.components.ui_kits.VECTOR_MAP" class="ng-scope">Vector Map</span>
                    </a>
                  </li>
                  <li ui-sref-active="active">
                    <a ui-sref="app.ui.googlemap" href="#/app/ui/googlemap">
                      <span>Google Map</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
          <!-- nav -->
          <!-- aside footer -->
          <div class="wrapper m-t">
            <div class="text-center-folded">
              <span class="pull-right pull-none-folded">60%</span>
              <span class="hidden-folded ng-scope" translate="aside.MILESTONE">Milestone</span>
            </div>
            <div class="progress-xxs m-t-sm dk progress ng-isolate-scope" value="60" type="info">
              <div class="progress-bar progress-bar-info" ng-class="type &amp;&amp; 'progress-bar-' + type" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" ng-style="{width: percent + '%'}" aria-valuetext="60%" ng-transclude="" style="width: 60%;"></div>
            </div>
            <div class="text-center-folded">
              <span class="pull-right pull-none-folded">35%</span>
              <span class="hidden-folded ng-scope" translate="aside.RELEASE">Release</span>
            </div>
            <div class="progress-xxs m-t-sm dk progress ng-isolate-scope" value="35" type="primary">
              <div class="progress-bar progress-bar-primary" ng-class="type &amp;&amp; 'progress-bar-' + type" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" ng-style="{width: percent + '%'}" aria-valuetext="35%" ng-transclude="" style="width: 35%;"></div>
            </div>
          </div>
          <!-- / aside footer -->
        </div>
      </div>
    </div>
    <!-- / menu -->

    <!-- content -->
    <div class="app-content">
        @yield('content')
    </div>
    <!-- /content -->

    <!-- footer -->
    <div class="app-footer wrapper b-t bg-light ng-scope">
      <span class="pull-right ng-binding">1.1.3 <a href="" ui-scroll="app" class="m-l-sm text-muted"><i class="fa fa-long-arrow-up"></i></a></span>
      © 2014 Copyright.
    </div>
    <!-- / footer -->

    
  <!-- jQuery -->

  {{ HTML::script('js/jquery/jquery.min.js')}}
  {{ HTML::script('js/bootstrap.min.js')}}
  {{ HTML::script('js/demo.js')}}
  {{ HTML::script('js/jquery/charts/easypiechart/jquery.easy-pie-chart.js')}}
  {{ HTML::script('js/jquery/charts/sparkline/jquery.sparkline.min.js')}}
  {{ HTML::script('js/jquery/charts/flot/jquery.flot.min.js')}} 
  {{ HTML::script('js/jquery/charts/flot/jquery.flot.resize.js')}}
  {{ HTML::script('js/jquery/charts/flot/jquery.flot.tooltip.min.js')}}
  {{ HTML::script('js/jquery/charts/flot/jquery.flot.spline.js')}}
  {{ HTML::script('js/jquery/charts/flot/jquery.flot.orderBars.js')}}
  {{ HTML::script('js/jquery/charts/flot/jquery.flot.pie.min.js')}}
  {{ HTML::script('js/jquery/slimscroll/jquery.slimscroll.min.js')}}
  {{ HTML::script('js/jquery/sortable/jquery.sortable.js')}}
  {{ HTML::script('js/jquery/nestable/jquery.nestable.js')}}
  {{ HTML::script('js/jquery/slider/bootstrap-slider.js')}}
  {{ HTML::script('js/jquery/chosen/chosen.jquery.min.js')}}
  {{ HTML::script('js/jquery/spinner/jquery.bootstrap-touchspin.min.js')}}
  {{ HTML::script('js/jquery/wysiwyg/bootstrap-wysiwyg.js')}}
  {{ HTML::script('js/jquery/wysiwyg/jquery.hotkeys.js')}}
  {{ HTML::script('js/jquery/datatables/jquery.dataTables.min.js')}}
  {{ HTML::script('js/jquery/datatables/dataTables.bootstrap.js')}}
  {{ HTML::script('js/jquery/jvectormap/jquery-jvectormap.min.js')}} 
  {{ HTML::script('js/jquery/jvectormap/jquery-jvectormap-world-mill-en.js')}}
  {{ HTML::script('js/jquery/jvectormap/jquery-jvectormap-us-aea-en.js')}}
  {{ HTML::script('js/jquery/datepicker/bootstrap-datepicker.js')}}
  {{ HTML::script('js/jquery/file/bootstrap-filestyle.min.js')}}
  {{ HTML::script('js/actions.js')}}
  {{ HTML::script('js/bootstrapValidator.js')}}

  <!-- Lazy loading -->
  <div class="modal fade in" id="add_author" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <form action="" id="frm_add_author">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h4 class="modal-title" id="myModalLabel">Add author</h4>
        </div>
        <div class="modal-body">
            <div id="message_author"> </div>
            <div class="form-group">
              <label for="" class="col-sm-2 label-control">Name</label>
              <input type="text" name="author_name" id="author_name" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 label-control">Country</label>
              <input type="text" name="author_country" id="author_country" class="form-control" required>
            </div>
         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" id="add_author_btn">Add Author</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  <div class="modal fade in" id="add_editorial" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <form action="" id="frm_add_editorial">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h4 class="modal-title" id="myModalLabel">Add editorial</h4>
        </div>
        <div class="modal-body">
            <div id="message_editorial"> </div>
            <div class="form-group">
              <label for="" class="col-sm-2 label-control">Name</label>
              <input type="text" name="editorial_name" id="editorial_name" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 label-control">Country</label>
              <input type="text" name="editorial_country" id="editorial_country" class="form-control" required>
            </div>
         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" id="add_editorial_btn">Add Editorial</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>