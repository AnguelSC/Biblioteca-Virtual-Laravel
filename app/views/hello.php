
<!DOCTYPE html>
<html lang="en" data-ng-app="app">
<head>
  <meta charset="utf-8" />
  <title>Be Angular | Bootstrap Admin Web App with AngularJS</title>
  <meta name="description" content="app, web app, responsive, responsive layout, admin, admin panel, admin dashboard, flat, flat ui, ui kit, AngularJS, ui route, charts, widgets, components" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="css/animate.css" type="text/css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="css/simple-line-icons.css" type="text/css" />
  <link rel="stylesheet" href="css/font.css" type="text/css" />
  <link rel="stylesheet" href="css/app.css" type="text/css" />
</head>
<body ng-controller="AppCtrl">
  <div class="app ng-scope app-header-fixed app-aside-fixed" id="app" ng-class="{'app-header-fixed':app.settings.headerFixed, 'app-aside-fixed':app.settings.asideFixed, 'app-aside-folded':app.settings.asideFolded}" ui-view="">  <!-- navbar -->
    <!-- ngInclude: 'tpl/blocks/header.html' --><div data-ng-include=" 'tpl/blocks/header.html' " class="app-header navbar ng-scope">      <!-- navbar header -->
        <div class="navbar-header bg-black">
          <button class="pull-right visible-xs dk" ui-toggle-class="show" data-target=".navbar-collapse">
            <i class="glyphicon glyphicon-cog"></i>
          </button>
          <button class="pull-right visible-xs" ui-toggle-class="off-screen" data-target=".app-aside" ui-scroll="app">
            <i class="glyphicon glyphicon-align-justify"></i>
          </button>
          <!-- brand -->
          <a href="#/" class="navbar-brand text-lt">
            <i class="fa fa-btc"></i>
            <img src="img/logo.png" alt="." class="hide">
            <span class="hidden-folded m-l-xs ng-binding">Angulr</span>
          </a>
          <!-- / brand -->
        </div>
        <!-- / navbar header -->

        <!-- navbar collapse -->
        <div class="collapse navbar-collapse box-shadow bg-white-only">
          <!-- buttons -->
          <div class="nav navbar-nav m-l-sm hidden-xs">
            <a href="" class="btn no-shadow navbar-btn" ng-click="app.settings.asideFolded = !app.settings.asideFolded">
              <i class="fa fa-fw fa-dedent"></i>
            </a>
            <a href="" class="btn no-shadow navbar-btn" ui-toggle-class="show" target="#aside-user">
              <i class="icon-user fa-fw"></i>
            </a>
          </div>
          <!-- / buttons -->

          <!-- link and dropdown -->
          <ul class="nav navbar-nav hidden-sm">
            <li class="active">
              <a href=""><i class="fa fa-cloud-upload fa-fw"></i> <span translate="header.navbar.UPLOAD" class="ng-scope">Upload</span></a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-fw fa-plus visible-xs-inline-block"></i>
                <span translate="header.navbar.new.NEW" class="ng-scope">New</span> <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#" translate="header.navbar.new.PROJECT" class="ng-scope">Projects</a></li>
                <li>
                  <a href="#">
                    <span class="badge bg-info pull-right">5</span>
                    <span translate="header.navbar.new.TASK" class="ng-scope">Task</span>
                  </a>
                </li>
                <li><a href="#" translate="header.navbar.new.USER" class="ng-scope">User</a></li>
                <li class="divider"></li>
                <li>
                  <a href="#">
                    <span class="badge bg-danger pull-right">4</span>
                    <span translate="header.navbar.new.EMAIL" class="ng-scope">Email</span>
                  </a>
                </li>
              </ul>
            </li>
          </ul><form class="navbar-form navbar-form-sm navbar-left shift ng-scope ng-pristine ng-valid" ui-shift="prependTo" target=".navbar-collapse" role="search" ng-controller="TypeaheadDemoCtrl">
            <div class="form-group">
              <div class="input-group">
                <input type="text" ng-model="selected" typeahead="state for state in states | filter:$viewValue | limitTo:8" class="form-control input-sm bg-light no-border rounded padder ng-pristine ng-valid" placeholder="Search projects..." aria-autocomplete="list" aria-expanded="false" aria-owns="typeahead-069-6982"><!-- ngIf: isOpen() -->
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
            <li class="dropdown hidden-sm" is-open="lang.isopen">
              <a href="" class="dropdown-toggle ng-binding" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                English <b class="caret"></b>
              </a>
              <!-- dropdown -->
              <ul class="dropdown-menu animated fadeInRight w">
                <!-- ngRepeat: (langKey, label) in langs --><li ng-repeat="(langKey, label) in langs" class="ng-scope">
                  <a ng-click="setLang(langKey, $event)" href="" class="ng-binding">German</a>
                </li><!-- end ngRepeat: (langKey, label) in langs --><li ng-repeat="(langKey, label) in langs" class="ng-scope">
                  <a ng-click="setLang(langKey, $event)" href="" class="ng-binding">English</a>
                </li><!-- end ngRepeat: (langKey, label) in langs --><li ng-repeat="(langKey, label) in langs" class="ng-scope">
                  <a ng-click="setLang(langKey, $event)" href="" class="ng-binding">Italian</a>
                </li><!-- end ngRepeat: (langKey, label) in langs -->
              </ul>
              <!-- / dropdown -->
            </li>
            <li class="hidden-xs">
              <a ui-fullscreen="" class=""><i class="fa fa-expand fa-fw text"></i><i class="fa fa-compress fa-fw text-active"></i></a>
            </li>
            <li class="dropdown">
              <a href="" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">
                <i class="icon-bell fa-fw"></i>
                <span class="visible-xs-inline">Notifications</span>
                <span class="badge badge-sm up bg-danger pull-right-xs">2</span>
              </a>
              <!-- dropdown -->
              <div class="dropdown-menu w-xl animated fadeInUp">
                <div class="panel bg-white">
                  <div class="panel-heading b-light bg-light">
                    <strong>You have <span>2</span> notifications</strong>
                  </div>
                  <div class="list-group">
                    <a href="" class="media list-group-item">
                      <span class="pull-left thumb-sm">
                        <img src="img/a0.jpg" alt="..." class="img-circle">
                      </span>
                      <span class="media-body block m-b-none">
                        Use awesome animate.css<br>
                        <small class="text-muted">10 minutes ago</small>
                      </span>
                    </a>
                    <a href="" class="media list-group-item">
                      <span class="media-body block m-b-none">
                        1.0 initial released<br>
                        <small class="text-muted">1 hour ago</small>
                      </span>
                    </a>
                  </div>
                  <div class="panel-footer text-sm">
                    <a href="" class="pull-right"><i class="fa fa-cog"></i></a>
                    <a href="#notes" data-toggle="class:show animated fadeInRight">See all the notifications</a>
                  </div>
                </div>
              </div>
              <!-- / dropdown -->
            </li>
            <li class="dropdown">
              <a href="" class="dropdown-toggle clear" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="thumb-sm avatar pull-right m-t-n-sm m-b-n-sm m-l-sm">
                  <img src="img/a0.jpg" alt="...">
                  <i class="on md b-white bottom"></i>
                </span>
                <span class="hidden-sm hidden-md">John.Smith</span> <b class="caret"></b>
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
    <!-- ngInclude: 'tpl/blocks/aside.html' --><div data-ng-include=" 'tpl/blocks/aside.html' " class="app-aside hidden-xs bg-black"><div class="aside-wrap ng-scope">
    <div class="navi-wrap">
      <!-- user -->
      <div class="clearfix hidden-xs text-center hide" id="aside-user">
        <div class="dropdown wrapper">
          <a ui-sref="app.page.profile" href="#/app/page/profile">
            <span class="thumb-lg w-auto-folded avatar m-t-sm">
              <img src="img/a0.jpg" class="img-full" alt="...">
            </span>
          </a>
          <a href="" class="dropdown-toggle hidden-folded" aria-haspopup="true" aria-expanded="false">
            <span class="clear">
              <span class="block m-t-sm">
                <strong class="font-bold text-lt">John.Smith</strong> 
                <b class="caret"></b>
              </span>
              <span class="text-muted text-xs block">Art Director</span>
            </span>
          </a>
          <!-- dropdown -->
          <ul class="dropdown-menu animated fadeInRight w hidden-folded">
            <li class="wrapper b-b m-b-sm bg-info m-t-n-xs">
              <span class="arrow top hidden-folded arrow-info"></span>
              <div>
                <p>300mb of 500mb used</p>
              </div>
              <div class="progress-xs m-b-none dker progress ng-isolate-scope" value="60" type="white">
    <div class="progress-bar progress-bar-white" ng-class="type &amp;&amp; 'progress-bar-' + type" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" ng-style="{width: percent + '%'}" aria-valuetext="60%" ng-transclude="" style="width: 60%;"></div>
  </div>
            </li>
            <li>
              <a href="">Settings</a>
            </li>
            <li>
              <a ui-sref="app.page.profile" href="#/app/page/profile">Profile</a>
            </li>
            <li>
              <a href="">
                <span class="badge bg-danger pull-right">3</span>
                Notifications
              </a>
            </li>
            <li class="divider"></li>
            <li>
              <a ui-sref="access.signin" href="#/access/signin">Logout</a>
            </li>
          </ul>
          <!-- / dropdown -->
        </div>
        <div class="line dk hidden-folded"></div>
      </div>
      <!-- / user -->

      <!-- nav -->
      <!-- ngInclude: 'tpl/blocks/nav.html' --><nav ui-nav="" class="navi ng-scope" ng-include="'tpl/blocks/nav.html'"><!-- first -->
  <ul class="nav ng-scope">
    <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
      <span translate="aside.nav.HEADER" class="ng-scope">Navigation</span>
    </li>
    <li>
      <a ui-sref="app.dashboard" href="#/app/dashboard">
        <i class="glyphicon glyphicon-stats icon text-primary-dker"></i>
        <span class="font-bold ng-scope" translate="aside.nav.DASHBOARD">Dashboard</span>
      </a>
    </li>
    <li ui-sref-active="active">
      <a ui-sref="app.calendar" href="#/app/calendar">
        <i class="glyphicon glyphicon-calendar icon text-info-dker"></i>
        <span class="font-bold ng-scope" translate="aside.nav.CALENDAR">Calendar</span>
      </a>
    </li>
    <li ui-sref-active="active">
      <a ui-sref="app.mail.list" href="#/app/mail/inbox/">
        <b class="badge bg-info pull-right">9</b>
        <i class="glyphicon glyphicon-envelope icon text-info-lter"></i>
        <span class="font-bold ng-scope" translate="aside.nav.EMAIL">Email</span>
      </a>
    </li>
    <li ui-sref-active="active" class="">
      <a ui-sref="app.widgets" href="#/app/widgets">
        <b class="badge bg-success dk pull-right">16</b>
        <i class="glyphicon glyphicon-th-large icon text-success"></i>
        <span class="font-bold ng-scope" translate="aside.nav.WIDGETS">Widgets</span>
      </a>
    </li>
    <li class="line dk"></li>

    <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
      <span translate="aside.nav.components.COMPONENTS" class="ng-scope">Components</span>
    </li>
    <li ng-class="{active:$state.includes('app.layout')}">
      <a href="" class="auto">      
        <span class="pull-right text-muted">
          <i class="fa fa-fw fa-angle-right text"></i>
          <i class="fa fa-fw fa-angle-down text-active"></i>
        </span>
        <b class="badge bg-info pull-right">3</b>
        <i class="glyphicon glyphicon-th"></i>
        <span>Layout</span>
      </a>
      <ul class="nav nav-sub dk">
        <li class="nav-sub-header">
          <a href="">
            <span>Layout</span>
          </a>
        </li>
        <li ui-sref-active="active">
          <a ui-sref="layout.app" href="#/layout/app">
            <span>Application</span>
          </a>
        </li>
        <li ui-sref-active="active">
          <a ui-sref="layout.fullwidth" href="#/layout/fullwidth">
            <span>Full width</span>
          </a>
        </li>
        <li ui-sref-active="active">
          <a ui-sref="layout.mobile" href="#/layout/mobile">
            <span>Mobile</span>
          </a>
        </li>      
      </ul>
    </li>
    <li ng-class="{active:$state.includes('app.ui')}">
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
    <li ng-class="{active:$state.includes('app.table')}">
      <a href="" class="auto">      
        <span class="pull-right text-muted">
          <i class="fa fa-fw fa-angle-right text"></i>
          <i class="fa fa-fw fa-angle-down text-active"></i>
        </span>
        <b class="label bg-primary pull-right">2</b>
        <i class="glyphicon glyphicon-list"></i>
        <span translate="aside.nav.components.table.TABLE" class="ng-scope">Table</span>
      </a>
      <ul class="nav nav-sub dk">
        <li class="nav-sub-header">
          <a href="">
            <span translate="aside.nav.components.table.TABLE" class="ng-scope">Table</span>
          </a>
        </li>
        <li ui-sref-active="active">
          <a ui-sref="app.table.static" href="#/app/table/static">
            <span translate="aside.nav.components.table.TABLE_STATIC" class="ng-scope">Table static</span>
          </a>
        </li>
        <li ui-sref-active="active">
          <a ui-sref="app.table.datatable" href="#/app/table/datatable">
            <span translate="aside.nav.components.table.DATATABLE" class="ng-scope">Datatable</span>
          </a>
        </li>
        <li ui-sref-active="active">
          <a ui-sref="app.table.footable" href="#/app/table/footable">
            <span translate="aside.nav.components.table.FOOTABLE" class="ng-scope">Footable</span>
          </a>
        </li>
      </ul>
    </li>
    <li ng-class="{active:$state.includes('app.form')}">
      <a href="" class="auto">
        <span class="pull-right text-muted">
          <i class="fa fa-fw fa-angle-right text"></i>
          <i class="fa fa-fw fa-angle-down text-active"></i>
        </span>
        <i class="glyphicon glyphicon-edit"></i>
        <span translate="aside.nav.components.form.FORM" class="ng-scope">Form</span>
      </a>
      <ul class="nav nav-sub dk">
        <li class="nav-sub-header">
          <a href="">
            <span translate="aside.nav.components.form.FORM" class="ng-scope">Form</span>
          </a>
        </li>
        <li ui-sref-active="active">
          <a ui-sref="app.form.elements" href="#/app/form/elements">
            <span translate="aside.nav.components.form.FORM_ELEMENTS" class="ng-scope">Form elements</span>
          </a>
        </li>
        <li ui-sref-active="active">
          <a ui-sref="app.form.validation" href="#/app/form/validation">
            <span translate="aside.nav.components.form.FORM_VALIDATION" class="ng-scope">Form validation</span>
          </a>
        </li>
        <li ui-sref-active="active">
          <a ui-sref="app.form.wizard" href="#/app/form/wizard">
            <span translate="aside.nav.components.form.FORM_WIZARD" class="ng-scope">Form wizard</span>
          </a>
        </li>
      </ul>
    </li>
    <li ui-sref-active="active">
      <a ui-sref="app.chart" href="#/app/chart">
        <i class="glyphicon glyphicon-signal"></i>
        <span translate="aside.nav.components.CHART" class="ng-scope">Chart</span>
      </a>
    </li>
    <li ng-class="{active:$state.includes('app.page')}">
      <a href="" class="auto">
        <span class="pull-right text-muted">
          <i class="fa fa-fw fa-angle-right text"></i>
          <i class="fa fa-fw fa-angle-down text-active"></i>
        </span>
        <i class="glyphicon glyphicon-file icon"></i>
        <span translate="aside.nav.components.pages.PAGES" class="ng-scope">Pages</span>
      </a>
      <ul class="nav nav-sub dk">
        <li class="nav-sub-header">
          <a href="">
            <span translate="aside.nav.components.pages.PAGES" class="ng-scope">Pages</span>
          </a>
        </li>
        <li ui-sref-active="active">
          <a ui-sref="app.page.profile" href="#/app/page/profile">
            <span translate="aside.nav.components.pages.PROFILE" class="ng-scope">Profile</span>
          </a>
        </li>
        <li ui-sref-active="active">
          <a ui-sref="app.page.post" href="#/app/page/post">
            <span translate="aside.nav.components.pages.POST" class="ng-scope">Post</span>
          </a>
        </li>
        <li ui-sref-active="active">
          <a ui-sref="app.page.search" href="#/app/page/search">
            <span translate="aside.nav.components.pages.SEARCH" class="ng-scope">Search</span>
          </a>
        </li>
        <li ui-sref-active="active">
          <a ui-sref="app.page.invoice" href="#/app/page/invoice">
            <span translate="aside.nav.components.pages.INVOICE" class="ng-scope">Invoice</span>
          </a>
        </li>
        <li ui-sref-active="active">
          <a ui-sref="app.page.price" href="#/app/page/price">
            <span>Price</span>
          </a>
        </li>
        <li>
          <a ui-sref="lockme" href="#/lockme">
            <span translate="aside.nav.components.pages.LOCK_SCREEN" class="ng-scope">Lock screen</span>
          </a>
        </li>
        <li>
          <a ui-sref="access.signin" href="#/access/signin">
            <span translate="aside.nav.components.pages.SIGNIN" class="ng-scope">Signin</span>
          </a>
        </li>
        <li>
          <a ui-sref="access.signup" href="#/access/signup">
            <span translate="aside.nav.components.pages.SIGNUP" class="ng-scope">Signup</span>
          </a>
        </li>
        <li>
          <a ui-sref="access.forgotpwd" href="#/access/forgotpwd">
            <span translate="aside.nav.components.pages.FORGOT_PASSWORD" class="ng-scope">Forgot password</span>
          </a>
        </li>
        <li>
          <a ui-sref="access.404" href="#/access/404">
            <span translate="aside.nav.components.pages.404" class="ng-scope">404</span>
          </a>
        </li>
      </ul>
    </li>

    <li class="line dk hidden-folded"></li>

    <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">          
      <span translate="aside.nav.your_stuff.YOUR_STUFF" class="ng-scope">Your Stuff</span>
    </li>  
    <li>
      <a ui-sref="app.page.profile" href="#/app/page/profile">
        <i class="icon-user icon text-success-lter"></i>
        <b class="badge bg-success dk pull-right">30%</b>
        <span translate="aside.nav.your_stuff.PROFILE" class="ng-scope">Profile</span>
      </a>
    </li>
    <li>
      <a ui-sref="app.docs" href="#/app/docs">
        <i class="icon-question icon"></i>
        <span translate="aside.nav.your_stuff.DOCUMENTS" class="ng-scope">Documents</span>
      </a>
    </li>
  </ul>
  <!-- / third --></nav>
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
  </div></div>
    <!-- / menu -->

    <!-- content -->
    <div class="app-content ng-scope">
      <div ui-butterbar="" class="butterbar hide"><span class="bar"></span></div>
      <a href="" class="off-screen-toggle hide" ui-toggle-class="off-screen" data-target=".app-aside"></a>
      <!-- uiView:  --><div class="app-content-body fade-in-up ng-scope" ui-view="">
  <div class="hbox hbox-auto-xs hbox-auto-sm ng-scope">
    <!-- main -->
    <div class="col">
      <!-- main header -->
      <div class="bg-light lter b-b wrapper-md">
        <div class="row">
          <div class="col-sm-6 col-xs-12">
            <h1 class="m-n font-thin h3 text-black">Dashboard</h1>
            <small class="text-muted">Welcome to angulr application</small>
          </div>
          <div class="col-sm-6 text-right hidden-xs">
            <div class="inline m-r text-left">
              <div class="m-b-xs">1290 <span class="text-muted">items</span></div>
              <div ng-init="data1=[ 106,108,110,105,110,109,105,104,107,109,105,100,105,102,101,99,98 ]" ui-jq="sparkline" ui-options="[106,108,110,105,110,109,105,104,107,109,105,100,105,102,101,99,98], {type:'bar', height:20, barWidth:5, barSpacing:1, barColor:'#dce5ec'}" class="sparkline inline"><canvas width="101" height="20" style="display: inline-block; width: 101px; height: 20px; vertical-align: top;"></canvas></div>
            </div>
            <div class="inline text-left">
              <div class="m-b-xs">$30,000 <span class="text-muted">revenue</span></div>
              <div ng-init="data2=[ 105,102,106,107,105,104,101,99,98,109,105,100,108,110,105,110,109 ]" ui-jq="sparkline" ui-options="[105,102,106,107,105,104,101,99,98,109,105,100,108,110,105,110,109], {type:'bar', height:20, barWidth:5, barSpacing:1, barColor:'#dce5ec'}" class="sparkline inline"><canvas width="101" height="20" style="display: inline-block; width: 101px; height: 20px; vertical-align: top;"></canvas></div>
            </div>
          </div>
        </div>
      </div>
      <!-- / main header -->
      <div class="wrapper-md ng-scope" ng-controller="FlotChartDemoCtrl">
        <!-- stats -->
        <div class="row">
          <div class="col-md-5">
            <div class="row row-sm text-center">
              <div class="col-xs-6">
                <div class="panel padder-v item">
                  <div class="h1 text-info font-thin h1">521</div>
                  <span class="text-muted text-xs">New items</span>
                  <div class="top text-right w-full">
                    <i class="fa fa-caret-down text-warning m-r-sm"></i>
                  </div>
                </div>
              </div>
              <div class="col-xs-6">
                <a href="" class="block panel padder-v bg-primary item">
                  <span class="text-white font-thin h1 block">930</span>
                  <span class="text-muted text-xs">Uploads</span>
                  <span class="bottom text-right w-full">
                    <i class="fa fa-cloud-upload text-muted m-r-sm"></i>
                  </span>
                </a>
              </div>
              <div class="col-xs-6">
                <a href="" class="block panel padder-v bg-info item">
                  <span class="text-white font-thin h1 block">432</span>
                  <span class="text-muted text-xs">Comments</span>
                  <span class="top text-left">
                    <i class="fa fa-caret-up text-warning m-l-sm"></i>
                  </span>
                </a>
              </div>
              <div class="col-xs-6">
                <div class="panel padder-v item">
                  <div class="font-thin h1">129</div>
                  <span class="text-muted text-xs">Feeds</span>
                  <div class="bottom text-left">
                    <i class="fa fa-caret-up text-warning m-l-sm"></i>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 m-b-md">
                <div class="r bg-light dker item hbox no-border">
                  <div class="col w-xs v-middle hidden-md">
                    <div ng-init="data1=[60,40]" ui-jq="sparkline" ui-options="[60,40], {type:'pie', height:40, sliceColors:['#fad733','#fff']}" class="sparkline inline"><canvas width="40" height="40" style="display: inline-block; width: 40px; height: 40px; vertical-align: top;"></canvas></div>
                  </div>
                  <div class="col dk padder-v r-r">
                    <div class="text-primary-dk font-thin h1"><span>$12,670</span></div>
                    <span class="text-muted text-xs">Revenue, 60% of the goal</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-7">
            <div class="panel wrapper">
              <label class="i-switch bg-warning pull-right" ng-init="showSpline=true">
                <input type="checkbox" ng-model="showSpline" class="ng-pristine ng-valid">
                <i></i>
              </label>
              <h4 class="font-thin m-t-none m-b text-muted">Latest Campaign</h4>
              <div ui-jq="plot" ui-refresh="showSpline" ui-options="[
                  { data: [[0,7],[1,6.5],[2,12.5],[3,7],[4,9],[5,6],[6,11],[7,6.5],[8,8],[9,7]], label:'TV', points: { show: true, radius: 1}, splines: { show: showSpline, tension: 0.4, lineWidth: 1, fill: 0.8 } },
                  { data: [[0,4],[1,4.5],[2,7],[3,4.5],[4,3],[5,3.5],[6,6],[7,3],[8,4],[9,3]], label:'Mag', points: { show: true, radius: 1}, splines: { show: showSpline, tension: 0.4, lineWidth: 1, fill: 0.8 } }
                ], 
                {
                  colors: ['#23b7e5', '#7266ba'],
                  series: { shadowSize: 3 },
                  xaxis:{ font: { color: '#a1a7ac' } },
                  yaxis:{ font: { color: '#a1a7ac' }, max:20 },
                  grid: { hoverable: true, clickable: true, borderWidth: 0, color: '#dce5ec' },
                  tooltip: true,
                  tooltipOpts: { content: '%s of %x.1 is %y.4',  defaultTheme: false, shifts: { x: 10, y: -25 } }
                }" style="height: 246px; padding: 0px; position: relative;">
              <canvas class="flot-base" width="462" height="246" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 462px; height: 246px;"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div style="position: absolute; max-width: 46px; top: 234px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 12.65px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 14px; text-align: center;">0</div><div style="position: absolute; max-width: 46px; top: 234px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 12.65px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 63px; text-align: center;">1</div><div style="position: absolute; max-width: 46px; top: 234px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 12.65px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 112px; text-align: center;">2</div><div style="position: absolute; max-width: 46px; top: 234px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 12.65px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 161px; text-align: center;">3</div><div style="position: absolute; max-width: 46px; top: 234px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 12.65px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 210px; text-align: center;">4</div><div style="position: absolute; max-width: 46px; top: 234px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 12.65px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 259px; text-align: center;">5</div><div style="position: absolute; max-width: 46px; top: 234px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 12.65px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 308px; text-align: center;">6</div><div style="position: absolute; max-width: 46px; top: 234px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 12.65px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 357px; text-align: center;">7</div><div style="position: absolute; max-width: 46px; top: 234px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 12.65px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 406px; text-align: center;">8</div><div style="position: absolute; max-width: 46px; top: 234px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 12.65px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 456px; text-align: center;">9</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div style="position: absolute; top: 223px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 12.65px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 6px; text-align: right;">0</div><div style="position: absolute; top: 167px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 12.65px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 6px; text-align: right;">5</div><div style="position: absolute; top: 112px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 12.65px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 0px; text-align: right;">10</div><div style="position: absolute; top: 56px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 12.65px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 0px; text-align: right;">15</div><div style="position: absolute; top: 0px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 12.65px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 0px; text-align: right;">20</div></div></div><canvas class="flot-overlay" width="462" height="246" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 462px; height: 246px;"></canvas><div class="legend"><div style="position: absolute; width: 43px; height: 44px; top: 11px; right: 9px; opacity: 0.85; background-color: rgb(255, 255, 255);"> </div><table style="position:absolute;top:11px;right:9px;;font-size:smaller;color:#dce5ec"><tbody><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(35,183,229);overflow:hidden"></div></div></td><td class="legendLabel">TV</td></tr><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(114,102,186);overflow:hidden"></div></div></td><td class="legendLabel">Mag</td></tr></tbody></table></div></div>
            </div>
          </div>
        </div>
        <!-- / stats -->

        <!-- service -->
        <div class="panel hbox hbox-auto-xs no-border">
          <div class="col wrapper">
            <i class="fa fa-circle-o text-info m-r-sm pull-right"></i>
            <h4 class="font-thin m-t-none m-b-none text-primary-lt">Managed Services</h4>
            <span class="m-b block text-sm text-muted">Service report of this year (updated 1 hour ago)</span>
            <div ui-jq="plot" ui-options="[
                { data: [[0,53.875625159125775],[1,52.68405358772725],[2,49.01585485320538],[3,50.82360299769789],[4,53.45679963938892],[5,49.19892752543092],[6,45.53120986325666],[7,44.848731802776456],[8,43.429273520596325],[9,45.65004715230316],[10,46.671777931042016],[11,48.73024081112817],[12,43.74697064049542],[13,44.63318502996117],[14,45.938982111401856],[15,46.5372088435106],[16,48.19034698884934],[17,47.52744981320575],[18,44.48619512608275],[19,40.52531545981765],[20,41.18767348583788],[21,42.43256652029231],[22,40.46123160049319],[23,38.16069927299395],[24,40.73298397939652],[25,42.82245746580884],[26,44.28393402136862],[27,49.22096484340727],[28,44.48000898351893],[29,43.89153806492686],[30,39.727815091609955],[31,35.50500041805208],[32,31.236977796070278],[33,31.633928823284805],[34,34.046368626877666],[35,37.60220216354355],[36,33.991347178816795],[37,32.7123450464569],[38,29.296171688474715],[39,24.46129811462015],[40,26.777017663698643],[41,31.130864664446563],[42,29.980458468198776],[43,29.270132412202656],[44,28.304902683012187],[45,31.104066842235625],[46,29.676475459709764],[47,25.091417147777975],[48,22.308091383893043],[49,22.16484955744818],[50,24.626992375124246],[51,24.209749037399888],[52,20.458012772724032],[53,24.526927599217743],[54,26.043461970984936],[55,28.086590839084238],[56,31.629078595433384],[57,35.338355775456876],[58,37.01051142765209],[59,32.95666189631447],[60,36.89590754918754],[61,38.32541733281687],[62,41.03635581675917],[63,38.674636324867606],[64,34.468710385262966],[65,30.1977719203569],[66,34.8347261431627],[67,34.03023882769048],[68,34.335526656359434],[69,31.982355050276965],[70,33.247053960803896],[71,32.90598195511848],[72,30.15139698749408],[73,25.38038430036977],[74,23.36428139358759],[75,22.43253645952791],[76,25.491885242518038],[77,28.020270550623536],[78,31.379792012739927],[79,29.338297538924962],[80,25.037612749729306],[81,29.359758370555937],[82,26.410845164209604],[83,23.512357957661152],[84,18.705274353269488],[85,18.62470848020166],[86,16.488530940841883],[87,12.520900426898152],[88,10.753157562576234],[89,6.50943904183805],[90,10.920809272211045],[91,9.107304941862822],[92,13.516546497121453],[93,13.345393710769713],[94,17.565300196874887],[95,17.648107488639653],[96,21.44406013423577],[97,25.870959321036935],[98,30.699459488969296],[99,34.347709675785154],[100,31.08299832092598],[101,26.342958810273558],[102,30.19710924476385],[103,25.598209344316274],[104,30.55790140060708],[105,26.786419581621885],[106,22.67181753180921],[107,25.374376878608018],[108,28.11373044969514],[109,24.719362808391452],[110,19.723158467095345],[111,22.088685159105808],[112,25.3632625262253],[113,23.015644915867597],[114,25.484878078568727],[115,25.500265997834504],[116,26.40677193645388],[117,29.941942819859833],[118,29.4989614142105],[119,24.83405706938356],[120,24.076564661227167],[121,20.565717327408493],[122,17.16843025991693],[123,17.452855263836682],[124,15.176270778756589],[125,16.130942760501057],[126,20.110510583035648],[127,19.031433851923794],[128,23.11230990337208],[129,22.856655351351947],[130,22.300863356795162],[131,26.07077947817743],[132,23.530949470587075],[133,22.957757050171494],[134,18.23163985274732],[135,16.56587172066793],[136,17.442262154072523],[137,21.22582902899012],[138,17.238407307304442],[139,17.438405477441847],[140,20.313216182403266],[141,22.176831625401974],[142,27.129574441350996],[143,29.68936654739082],[144,25.16573280794546],[145,24.3660778272897],[146,21.34073229506612],[147,20.106676905415952],[148,19.384152141865343],[149,15.336578441783786]], lines: { show: true, lineWidth: 1, fill:true, fillColor: { colors: [{opacity: 0.2}, {opacity: 0.8}] } } }
              ], 
              {
                colors: ['#e8eff0'],
                series: { shadowSize: 3 },
                xaxis:{ show:false },
                yaxis:{ font: { color: '#a1a7ac' } },
                grid: { hoverable: true, clickable: true, borderWidth: 0, color: '#dce5ec' },
                tooltip: true,
                tooltipOpts: { content: '%s of %x.1 is %y.4',  defaultTheme: false, shifts: { x: 10, y: -25 } }
              }" style="height: 240px; padding: 0px; position: relative;">
            <canvas class="flot-base" width="559" height="240" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 559px; height: 240px;"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div style="position: absolute; top: 226px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 12.65px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 6px; text-align: right;">0</div><div style="position: absolute; top: 189px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 12.65px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 0px; text-align: right;">10</div><div style="position: absolute; top: 151px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 12.65px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 0px; text-align: right;">20</div><div style="position: absolute; top: 114px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 12.65px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 0px; text-align: right;">30</div><div style="position: absolute; top: 77px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 12.65px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 0px; text-align: right;">40</div><div style="position: absolute; top: 39px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 12.65px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 0px; text-align: right;">50</div><div style="position: absolute; top: 2px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 12.65px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 0px; text-align: right;">60</div></div></div><canvas class="flot-overlay" width="559" height="240" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 559px; height: 240px;"></canvas></div>
          </div>
          <div class="col wrapper-lg w-lg bg-light dk r-r">
            <h4 class="font-thin m-t-none m-b">Reports</h4>
            <div class="">
              <div class="text-center-folded">
                <span class="pull-right text-primary">60%</span>
                <span class="hidden-folded">Consulting</span>
              </div>
              <div class="progress-xs m-t-sm bg-white progress ng-isolate-scope" value="60" animate="true" type="primary">
    <div class="progress-bar progress-bar-primary" ng-class="type &amp;&amp; 'progress-bar-' + type" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" ng-style="{width: percent + '%'}" aria-valuetext="60%" ng-transclude="" style="width: 60%;"></div>
  </div>
              <div class="text-center-folded">
                <span class="pull-right text-info">35%</span>
                <span class="hidden-folded">Online tutorials</span>
              </div>
              <div class="progress-xs m-t-sm bg-white progress ng-isolate-scope" value="35" animate="true" type="info">
    <div class="progress-bar progress-bar-info" ng-class="type &amp;&amp; 'progress-bar-' + type" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" ng-style="{width: percent + '%'}" aria-valuetext="35%" ng-transclude="" style="width: 35%;"></div>
  </div>
              <div class="text-center-folded">
                <span class="pull-right text-warning">25%</span>
                <span class="hidden-folded">EDU management</span>
              </div>
              <div class="progress-xs m-t-sm bg-white progress ng-isolate-scope" value="25" animate="true" type="warning">
    <div class="progress-bar progress-bar-warning" ng-class="type &amp;&amp; 'progress-bar-' + type" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" ng-style="{width: percent + '%'}" aria-valuetext="25%" ng-transclude="" style="width: 25%;"></div>
  </div>
            </div>
            <p class="text-muted">Dales nisi nec adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis</p>
          </div>
        </div>
        <!-- / service -->

        <!-- tasks -->
        <div class="panel wrapper">
          <div class="row">
            <div class="col-md-6 b-r b-light no-border-xs">
              <a href="" class="text-muted pull-right text-lg"><i class="icon-arrow-right"></i></a>
              <h4 class="font-thin m-t-none m-b-md text-muted">My Tasks</h4>
              <div class=" m-b">
                <div class="m-b">
                  <span class="label text-base bg-warning pos-rlt m-r"><i class="arrow right arrow-warning"></i> 19:30</span>
                  <a href="">Feed cat</a>
                </div>
                <div class="m-b">
                  <span class="label text-base bg-info pos-rlt m-r"><i class="arrow right arrow-info"></i> 12:30</span>
                  <a href="">Fishing Time</a>
                </div>
                <div class="m-b">
                  <span class="label text-base bg-primary pos-rlt m-r"><i class="arrow right arrow-primary"></i> 10:30</span>
                  <a href="">Kick-off meeting</a>
                </div>
                <div class="m-b">
                  <span class="label text-base bg-light pos-rlt m-r"><i class="arrow right arrow-light"></i> 07:30</span>
                  <a href="">Morning running</a>
                </div>
              </div>
            </div>
            <div class="col-md-6">            
              <div class="row row-sm">
                <div class="col-xs-6 text-center">
                  <div ui-jq="easyPieChart" ui-options="{
                      percent: 75,
                      lineWidth: 4,
                      trackColor: '#e8eff0',
                      barColor: '#7266ba',
                      scaleColor: false,
                      size: 115,
                      rotate: 90,
                      lineCap: 'butt'
                    }" class="inline m-t easyPieChart" style="width: 115px; height: 115px; line-height: 115px;">
                    <div>
                      <span class="text-primary h4">75%</span>
                    </div>
                  <canvas width="115" height="115"></canvas></div>
                  <div class="text-muted font-bold text-xs m-t m-b">Work Done</div>
                </div>
                <div class="col-xs-6 text-center">
                  <div ui-jq="easyPieChart" ui-options="{
                      percent: 50,
                      lineWidth: 4,
                      trackColor: '#e8eff0',
                      barColor: '#23b7e5',
                      scaleColor: false,
                      size: 115,
                      rotate: 180,
                      lineCap: 'butt'
                    }" class="inline m-t easyPieChart" style="width: 115px; height: 115px; line-height: 115px;">
                    <div>
                      <span class="text-info h4">50%</span>
                    </div>
                  <canvas width="115" height="115"></canvas></div>
                  <div class="text-muted font-bold text-xs m-t m-b">Started</div>
                </div>
              </div>            
            </div>
          </div>
        </div>
        <!-- / tasks -->

        <!-- tasks -->
        <div class="row">
          <div class="col-md-6">
            <div class="panel no-border">
              <div class="panel-heading wrapper b-b b-light">
                <span class="text-xs text-muted pull-right">
                  <i class="fa fa-circle text-primary m-r-xs"></i> 12
                  <i class="fa fa-circle text-info m-r-xs m-l-sm"></i> 30
                  <i class="fa fa-circle text-warning m-r-xs m-l-sm"></i> 98
                </span>
                <h4 class="font-thin m-t-none m-b-none text-muted">Teammates</h4>              
              </div>
              <ul class="list-group list-group-lg m-b-none">
                <li class="list-group-item">
                  <a href="" class="thumb-sm m-r">
                    <img src="img/a1.jpg" class="r r-2x">
                  </a>
                  <span class="pull-right label bg-primary inline m-t-sm">Admin</span>
                  <a href="">Damon Parker</a>
                </li>
                <li class="list-group-item">
                  <a href="" class="thumb-sm m-r">
                    <img src="img/a2.jpg" class="r r-2x">
                  </a>
                  <span class="pull-right label bg-info inline m-t-sm">Member</span>
                  <a href="">Joe Waston</a>
                </li>
                <li class="list-group-item">
                  <a href="" class="thumb-sm m-r">
                    <img src="img/a3.jpg" class="r r-2x">
                  </a>
                  <span class="pull-right label bg-warning inline m-t-sm">Editor</span>
                  <a href="">Jannie Dvis</a>
                </li>
                <li class="list-group-item">
                  <a href="" class="thumb-sm m-r">
                    <img src="img/a4.jpg" class="r r-2x">
                  </a>
                  <span class="pull-right label bg-warning inline m-t-sm">Editor</span>
                  <a href="">Emma Welson</a>
                </li>
              </ul>
              <div class="panel-footer">
                <span class="pull-right badge badge-bg m-t-xs">32</span>
                <button class="btn btn-primary btn-addon btn-sm"><i class="fa fa-plus"></i>Add Teammate</button>
              </div>
            </div>
          </div>
          <div class="col-md-6">            
            <div class="list-group list-group-lg list-group-sp">
              <a herf="" class="list-group-item clearfix">
                <span class="pull-left thumb-sm avatar m-r">
                  <img src="img/a4.jpg" alt="...">
                  <i class="on b-white right"></i>
                </span>
                <span class="clear">
                  <span>Chris Fox</span>
                  <small class="text-muted clear text-ellipsis">What's up, buddy</small>
                </span>
              </a>
              <a herf="" class="list-group-item clearfix">
                <span class="pull-left thumb-sm avatar m-r">
                  <img src="img/a5.jpg" alt="...">
                  <i class="on b-white right"></i>
                </span>
                <span class="clear">
                  <span>Amanda Conlan</span>
                  <small class="text-muted clear text-ellipsis">Come online and we need talk about the plans that we have discussed</small>
                </span>
              </a>
              <a herf="" class="list-group-item clearfix">
                <span class="pull-left thumb-sm avatar m-r">
                  <img src="img/a6.jpg" alt="...">
                  <i class="busy b-white right"></i>
                </span>
                <span class="clear">
                  <span>Dan Doorack</span>
                  <small class="text-muted clear text-ellipsis">Hey, Some good news</small>
                </span>
              </a>
              <a herf="" class="list-group-item clearfix">
                <span class="pull-left thumb-sm avatar m-r">
                  <img src="img/a7.jpg" alt="...">
                  <i class="busy b-white right"></i>
                </span>
                <span class="clear">
                  <span>Lauren Taylor</span>
                  <small class="text-muted clear text-ellipsis">Nice to talk with you.</small>
                </span>
              </a>
              <a herf="" class="list-group-item clearfix">
                <span class="pull-left thumb-sm avatar m-r">
                  <img src="img/a8.jpg" alt="...">
                  <i class="away b-white right"></i>
                </span>
                <span class="clear">
                  <span>Mike Jackson</span>
                  <small class="text-muted clear text-ellipsis">This is nice</small>
                </span>
              </a>
            </div>
          </div>
        </div>
        <!-- / tasks -->
      </div>
    </div>
    <!-- / main -->
    <!-- right col -->
    <div class="col w-md bg-white-only b-l bg-auto bg-auto-right no-border-xs">
      <div class="nav-tabs-alt ng-isolate-scope" justified="true">
    <ul class="nav nav-tabs nav-justified" ng-class="{'nav-stacked': vertical, 'nav-justified': justified}" ng-transclude="">
        <li ng-class="{active: active, disabled: disabled}" class="ng-isolate-scope active">
    <a ng-click="select()" tab-heading-transclude="" class="ng-binding"><tab-heading class="ng-scope">
            <i class="glyphicon glyphicon-user text-md text-muted wrapper-sm"></i>
          </tab-heading></a>
  </li>
        <li ng-class="{active: active, disabled: disabled}" class="ng-isolate-scope">
    <a ng-click="select()" tab-heading-transclude="" class="ng-binding"><tab-heading class="ng-scope">
            <i class="glyphicon glyphicon-comment text-md text-muted wrapper-sm"></i>
          </tab-heading></a>
  </li>
        <li ng-class="{active: active, disabled: disabled}" class="ng-isolate-scope">
    <a ng-click="select()" tab-heading-transclude="" class="ng-binding"><tab-heading class="ng-scope">
            <i class="glyphicon glyphicon-transfer text-md text-muted wrapper-sm"></i>
          </tab-heading></a>
  </li>      
      </ul>
    <div class="tab-content">
      <!-- ngRepeat: tab in tabs --><div class="tab-pane ng-scope active" ng-repeat="tab in tabs" ng-class="{active: tab.active}" tab-content-transclude="tab">
      
          
          <div class="wrapper-md ng-scope">
            <div class="m-b-sm text-md">Who to follow</div>
            <ul class="list-group no-bg no-borders pull-in">
              <li class="list-group-item">
                <a herf="" class="pull-left thumb-sm avatar m-r">
                  <img src="img/a4.jpg" alt="..." class="img-circle">
                  <i class="on b-white bottom"></i>
                </a>
                <div class="clear">
                  <div><a href="">Chris Fox</a></div>
                  <small class="text-muted">Designer, Blogger</small>
                </div>
              </li>
              <li class="list-group-item">
                <a herf="" class="pull-left thumb-sm avatar m-r">
                  <img src="img/a5.jpg" alt="..." class="img-circle">
                  <i class="on b-white bottom"></i>
                </a>
                <div class="clear">
                  <div><a href="">Mogen Polish</a></div>
                  <small class="text-muted">Writter, Mag Editor</small>
                </div>
              </li>
              <li class="list-group-item">
                <a herf="" class="pull-left thumb-sm avatar m-r">
                  <img src="img/a6.jpg" alt="..." class="img-circle">
                  <i class="busy b-white bottom"></i>
                </a>
                <div class="clear">
                  <div><a href="">Joge Lucky</a></div>
                  <small class="text-muted">Art director, Movie Cut</small>
                </div>
              </li>
              <li class="list-group-item">
                <a herf="" class="pull-left thumb-sm avatar m-r">
                  <img src="img/a7.jpg" alt="..." class="img-circle">
                  <i class="away b-white bottom"></i>
                </a>
                <div class="clear">
                  <div><a href="">Folisise Chosielie</a></div>
                  <small class="text-muted">Musician, Player</small>
                </div>
              </li>
              <li class="list-group-item">
                <a herf="" class="pull-left thumb-sm avatar m-r">
                  <img src="img/a8.jpg" alt="..." class="img-circle">
                  <i class="away b-white bottom"></i>
                </a>
                <div class="clear">
                  <div><a href="">Aron Gonzalez</a></div>
                  <small class="text-muted">Designer</small>
                </div>
              </li>
            </ul>
            <div class="text-center">
              <a href="" class="btn btn-sm btn-primary padder-md m-b">More Connections</a>
            </div>
          </div>
        </div><!-- end ngRepeat: tab in tabs --><div class="tab-pane ng-scope" ng-repeat="tab in tabs" ng-class="{active: tab.active}" tab-content-transclude="tab">
      
          
          <div class="wrapper-md ng-scope">
            <div class="m-b-sm text-md">Chat</div>
            <ul class="list-group no-borders pull-in auto">
              <li class="list-group-item">
                <span class="pull-left thumb-sm m-r"><img src="img/a1.jpg" alt="..." class="img-circle"></span>
                <a href="" class="text-muted" ui-toggle-class="show" target=".app-aside-right"><i class="fa fa-comment-o pull-right m-t-sm text-sm"></i></a>
                <div class="clear">
                  <div><a href="">Chris Fox</a></div>
                  <small class="text-muted">about 2 minutes ago</small>
                </div>
              </li>
              <li class="list-group-item">
                <span class="pull-left thumb-sm m-r"><img src="img/a2.jpg" alt="..." class="img-circle"></span>
                <a href="" class="text-muted" ui-toggle-class="show" target=".app-aside-right"><i class="fa fa-comment-o pull-right m-t-sm text-sm"></i></a>
                <div class="clear">
                  <div><a href="">Amanda Conlan</a></div>
                  <small class="text-muted">about 2 hours ago</small>
                </div>
              </li>
              <li class="list-group-item">
                <span class="pull-left thumb-sm m-r"><img src="img/a3.jpg" alt="..." class="img-circle"></span>
                <a href="" class="text-muted" ui-toggle-class="show" target=".app-aside-right"><i class="fa fa-comment-o pull-right m-t-sm text-sm"></i></a>
                <div class="clear">
                  <div><a href="">Dan Doorack</a></div>
                  <small class="text-muted">3 days ago</small>
                </div>
              </li>
              <li class="list-group-item">
                <span class="pull-left thumb-sm m-r"><img src="img/a4.jpg" alt="..." class="img-circle"></span>
                <a href="" class="text-muted" ui-toggle-class="show" target=".app-aside-right"><i class="fa fa-comment-o pull-right m-t-sm text-sm"></i></a>
                <div class="clear">
                  <div><a href="">Lauren Taylor</a></div>
                  <small class="text-muted">about 2 minutes ago</small>
                </div>
              </li>
            </ul>
          </div>
        </div><!-- end ngRepeat: tab in tabs --><div class="tab-pane ng-scope" ng-repeat="tab in tabs" ng-class="{active: tab.active}" tab-content-transclude="tab">
      
          
          <div class="wrapper-md ng-scope">
            <div class="m-b-sm text-md">Transaction</div>
            <ul class="list-group list-group-sm list-group-sp list-group-alt auto m-t">
              <li class="list-group-item">
                <span class="text-muted">Transfer to Jacob at 3:00 pm</span>
                <span class="block text-md text-info">B 15,000.00</span>
              </li>
              <li class="list-group-item">
                <span class="text-muted">Got from Mike at 1:00 pm</span>
                <span class="block text-md text-primary">B 23,000.00</span>
              </li>
              <li class="list-group-item">
                <span class="text-muted">Sponsored ORG at 9:00 am</span>
                <span class="block text-md text-warning">B 3,000.00</span>
              </li>
              <li class="list-group-item">
                <span class="text-muted">Send to Jacob at 8:00 am</span>
                <span class="block text-md">B 11,000.00</span>
              </li>
            </ul>
          </div>
        </div><!-- end ngRepeat: tab in tabs -->
    </div>
  </div>
      <div class="padder-md">      
        <!-- streamline -->
        <div class="m-b text-md">Recent Activity</div>
        <div class="streamline b-l m-b">
          <div class="sl-item">
            <div class="m-l">
              <div class="text-muted">2 minutes ago</div>
              <p><a href="" class="text-info">God</a> is now following you.</p>
            </div>
          </div>
          <div class="sl-item">
            <div class="m-l">
              <div class="text-muted">11:30</div>
              <p>Join comference</p>
            </div>
          </div>
          <div class="sl-item b-success b-l">
            <div class="m-l">
              <div class="text-muted">10:30</div>
              <p>Call to customer <a href="" class="text-info">Jacob</a> and discuss the detail.</p>
            </div>
          </div>
          <div class="bg-info wrapper-sm m-l-n m-r-n m-b r r-2x">
            Create tasks for the team
          </div>
          <div class="sl-item b-primary b-l">
            <div class="m-l">
              <div class="text-muted">Wed, 25 Mar</div>
              <p>Finished task <a href="" class="text-info">Testing</a>.</p>
            </div>
          </div>
          <div class="sl-item b-warning b-l">
            <div class="m-l">
              <div class="text-muted">Thu, 10 Mar</div>
              <p>Trip to the moon</p>
            </div>
          </div>
          <div class="sl-item b-info b-l">
            <div class="m-l">
              <div class="text-muted">Sat, 5 Mar</div>
              <p>Prepare for presentation</p>
            </div>
          </div>
          <div class="sl-item b-l">
            <div class="m-l">
              <div class="text-muted">Sun, 11 Feb</div>
              <p><a href="" class="text-info">Jessi</a> assign you a task <a href="" class="text-info">Mockup Design</a>.</p>
            </div>
          </div>
          <div class="sl-item b-l">
            <div class="m-l">
              <div class="text-muted">Thu, 17 Jan</div>
              <p>Follow up to close deal</p>
            </div>
          </div>
        </div>
        <!-- / streamline -->
      </div>
    </div>
    <!-- / right col -->
  </div></div>    
    </div>
    <!-- /content -->

    <!-- aside right -->
    <div class="app-aside-right pos-fix no-padder w-md w-auto-xs bg-white b-l animated fadeInRight hide ng-scope">
      <div class="vbox">
        <div class="wrapper b-b b-light m-b">
          <a href="" class="pull-right text-muted text-md" ui-toggle-class="show" target=".app-aside-right"><i class="icon-close"></i></a>
          Chat
        </div>
        <div class="row-row">
          <div class="cell">
            <div class="cell-inner padder">
              <!-- chat list -->
              <div class="m-b">
                <a href="" class="pull-left thumb-xs avatar"><img src="img/a2.jpg" alt="..."></a>
                <div class="clear">
                  <div class="pos-rlt wrapper-sm b b-light r m-l-sm">
                    <span class="arrow left pull-up"></span>
                    <p class="m-b-none">Hi John, What's up...</p>
                  </div>
                  <small class="text-muted m-l-sm"><i class="fa fa-ok text-success"></i> 2 minutes ago</small>
                </div>
              </div>
              <div class="m-b">
                <a href="" class="pull-right thumb-xs avatar"><img src="img/a3.jpg" class="img-circle" alt="..."></a>
                <div class="clear">
                  <div class="pos-rlt wrapper-sm bg-light r m-r-sm">
                    <span class="arrow right pull-up arrow-light"></span>
                    <p class="m-b-none">Lorem ipsum dolor :)</p>
                  </div>
                  <small class="text-muted">1 minutes ago</small>
                </div>
              </div>
              <div class="m-b">
                <a href="" class="pull-left thumb-xs avatar"><img src="img/a2.jpg" alt="..."></a>
                <div class="clear">
                  <div class="pos-rlt wrapper-sm b b-light r m-l-sm">
                    <span class="arrow left pull-up"></span>
                    <p class="m-b-none">Great!</p>
                  </div>
                  <small class="text-muted m-l-sm"><i class="fa fa-ok text-success"></i>Just Now</small>
                </div>
              </div>
              <!-- / chat list -->
            </div>
          </div>
        </div>
        <div class="wrapper m-t b-t b-light">
          <form class="m-b-none ng-pristine ng-valid">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Say something">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">SEND</button>
              </span>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- / aside right -->

    <!-- footer -->
    <div class="app-footer wrapper b-t bg-light ng-scope">
      <span class="pull-right ng-binding">1.1.3 <a href="" ui-scroll="app" class="m-l-sm text-muted"><i class="fa fa-long-arrow-up"></i></a></span>
      © 2014 Copyright.
    </div>
    <!-- / footer -->

    <!-- ngInclude: 'tpl/blocks/settings.html' --><div data-ng-include=" 'tpl/blocks/settings.html' " class="settings panel panel-default ng-scope"><!-- settings -->
    <button class="btn btn-default no-shadow pos-abt ng-scope" ui-toggle-class="active" target=".settings"><i class="fa fa-gear"></i></button>
    <div class="panel-heading ng-scope">
      Settings
    </div>
    <div class="panel-body ng-scope"> 
      <div class="m-b-sm">
        <label class="i-switch bg-info pull-right">
          <input type="checkbox" ng-model="app.settings.headerFixed" class="ng-pristine ng-valid">
          <i></i>
        </label>
        Fixed header 
      </div>
      <div class="m-b-sm">
        <label class="i-switch bg-info pull-right">
          <input type="checkbox" ng-model="app.settings.asideFixed" class="ng-pristine ng-valid">
          <i></i>
        </label>
        Fixed aside 
      </div>
      <div>
        <label class="i-switch bg-info pull-right">
          <input type="checkbox" ng-model="app.settings.asideFolded" class="ng-pristine ng-valid">
          <i></i>
        </label>
        Folded aside 
      </div>
    </div>
    <div class="wrapper b-t b-light bg-light lter r-b ng-scope">
      <div class="row row-sm">
        <div class="col-xs-6">
          <label class="i-checks block m-b" ng-click="
            app.settings.navbarHeaderColor='bg-black'; 
            app.settings.navbarCollapseColor='bg-white-only'; 
            app.settings.asideColor='bg-black';
           ">
            <input type="radio" name="a" ng-model="app.settings.themeID" value="1" class="ng-pristine ng-valid">
            <span class="block bg-light clearfix pos-rlt">
              <span class="active pos-abt w-full h-full bg-black-opacity text-center">
                <i class="glyphicon glyphicon-ok text-white m-t-xs"></i>
              </span>
              <b class="bg-black header"></b>
              <b class="bg-white header"></b>
              <b class="bg-black"></b>
            </span>
          </label>

          <label class="i-checks block m-b" ng-click="
            app.settings.navbarHeaderColor='bg-white-only'; 
            app.settings.navbarCollapseColor='bg-white-only'; 
            app.settings.asideColor='bg-black';
           ">
            <input type="radio" ng-model="app.settings.themeID" value="2" class="ng-pristine ng-valid" name="06I">
            <span class="block bg-light clearfix pos-rlt">
              <span class="active pos-abt w-full h-full bg-black-opacity text-center">
                <i class="glyphicon glyphicon-ok text-white m-t-xs"></i>
              </span>
              <b class="bg-white header"></b>
              <b class="bg-white header"></b>
              <b class="bg-black"></b>
            </span>
          </label>

          <label class="i-checks block m-b" ng-click="
            app.settings.navbarHeaderColor='bg-primary'; 
            app.settings.navbarCollapseColor='bg-white-only'; 
            app.settings.asideColor='bg-dark';
           ">
            <input type="radio" ng-model="app.settings.themeID" value="3" class="ng-pristine ng-valid" name="06J">
            <span class="block bg-light clearfix pos-rlt">
              <span class="active pos-abt w-full h-full bg-black-opacity text-center">
                <i class="glyphicon glyphicon-ok text-white m-t-xs"></i>
              </span>
              <b class="bg-primary header"></b>
              <b class="bg-white header"></b>
              <b class="bg-dark"></b>
            </span>
          </label>

          <label class="i-checks block m-b" ng-click="
            app.settings.navbarHeaderColor='bg-info'; 
            app.settings.navbarCollapseColor='bg-white-only'; 
            app.settings.asideColor='bg-black';
           ">
            <input type="radio" ng-model="app.settings.themeID" value="4" class="ng-pristine ng-valid" name="06K">
            <span class="block bg-light clearfix pos-rlt">
              <span class="active pos-abt w-full h-full bg-black-opacity text-center">
                <i class="glyphicon glyphicon-ok text-white m-t-xs"></i>
              </span>
              <b class="bg-info header"></b>
              <b class="bg-white header"></b>
              <b class="bg-black"></b>
            </span>
          </label>

          <label class="i-checks block m-b" ng-click="
            app.settings.navbarHeaderColor='bg-success'; 
            app.settings.navbarCollapseColor='bg-white-only'; 
            app.settings.asideColor='bg-dark';
           ">
            <input type="radio" ng-model="app.settings.themeID" value="5" class="ng-pristine ng-valid" name="06L">
            <span class="block bg-light clearfix pos-rlt">
              <span class="active pos-abt w-full h-full bg-black-opacity text-center">
                <i class="glyphicon glyphicon-ok text-white m-t-xs"></i>
              </span>
              <b class="bg-success header"></b>
              <b class="bg-white header"></b>
              <b class="bg-dark"></b>
            </span>
          </label>

          <label class="i-checks block" ng-click="
            app.settings.navbarHeaderColor='bg-danger'; 
            app.settings.navbarCollapseColor='bg-white-only'; 
            app.settings.asideColor='bg-dark';
           ">
            <input type="radio" ng-model="app.settings.themeID" value="6" class="ng-pristine ng-valid" name="06M">
            <span class="block bg-light clearfix pos-rlt">
              <span class="active pos-abt w-full h-full bg-black-opacity text-center">
                <i class="glyphicon glyphicon-ok text-white m-t-xs"></i>
              </span>
              <b class="bg-danger header"></b>
              <b class="bg-white header"></b>
              <b class="bg-dark"></b>
            </span>
          </label>
        </div>
        <div class="col-xs-6">
          <label class="i-checks block m-b" ng-click="
            app.settings.navbarHeaderColor='bg-primary'; 
            app.settings.navbarCollapseColor='bg-primary'; 
            app.settings.asideColor='bg-white b-r';
           ">
            <input type="radio" ng-model="app.settings.themeID" value="7" class="ng-pristine ng-valid" name="06N">
            <span class="block bg-light clearfix pos-rlt">
              <span class="active pos-abt w-full h-full bg-black-opacity text-center">
                <i class="glyphicon glyphicon-ok text-white m-t-xs"></i>
              </span>
              <b class="bg-primary header"></b>
              <b class="bg-primary header"></b>
              <b class="bg-white"></b>
            </span>
          </label>

          <label class="i-checks block m-b" ng-click="
            app.settings.navbarHeaderColor='bg-info dker'; 
            app.settings.navbarCollapseColor='bg-info dker'; 
            app.settings.asideColor='bg-light dker b-r';
           ">
            <input type="radio" ng-model="app.settings.themeID" value="8" class="ng-pristine ng-valid" name="06O">
            <span class="block bg-light clearfix pos-rlt">
              <span class="active pos-abt w-full h-full bg-black-opacity text-center">
                <i class="glyphicon glyphicon-ok text-white m-t-xs"></i>
              </span>
              <b class="bg-info dker header"></b>
              <b class="bg-info dker header"></b>
              <b class="bg-light dker"></b>
            </span>
          </label>

          <label class="i-checks block m-b" ng-click="
            app.settings.navbarHeaderColor='bg-primary'; 
            app.settings.navbarCollapseColor='bg-primary'; 
            app.settings.asideColor='bg-dark';
           ">
            <input type="radio" ng-model="app.settings.themeID" value="9" class="ng-pristine ng-valid" name="06P">
            <span class="block bg-light clearfix pos-rlt">
              <span class="active pos-abt w-full h-full bg-black-opacity text-center">
                <i class="glyphicon glyphicon-ok text-white m-t-xs"></i>
              </span>
              <b class="bg-primary header"></b>
              <b class="bg-primary header"></b>
              <b class="bg-dark"></b>
            </span>
          </label>

          <label class="i-checks block m-b" ng-click="
            app.settings.navbarHeaderColor='bg-info dker'; 
            app.settings.navbarCollapseColor='bg-info dk'; 
            app.settings.asideColor='bg-black';
           ">
            <input type="radio" ng-model="app.settings.themeID" value="10" class="ng-pristine ng-valid" name="06Q">
            <span class="block bg-light clearfix pos-rlt">
              <span class="active pos-abt w-full h-full bg-black-opacity text-center">
                <i class="glyphicon glyphicon-ok text-white m-t-xs"></i>
              </span>
              <b class="bg-info dker header"></b>
              <b class="bg-info dk header"></b>
              <b class="bg-black"></b>
            </span>
          </label>

          <label class="i-checks block m-b" ng-click="
            app.settings.navbarHeaderColor='bg-success'; 
            app.settings.navbarCollapseColor='bg-success';
            app.settings.asideColor='bg-dark';
            ">
            <input type="radio" ng-model="app.settings.themeID" value="11" class="ng-pristine ng-valid" name="06R">
            <span class="block bg-light clearfix pos-rlt">
              <span class="active pos-abt w-full h-full bg-black-opacity text-center">
                <i class="glyphicon glyphicon-ok text-white m-t-xs"></i>
              </span>
              <b class="bg-success header"></b>
              <b class="bg-success header"></b>
              <b class="bg-dark"></b>
            </span>
          </label>
          
          <label class="i-checks block" ng-click="
            app.settings.navbarHeaderColor='bg-danger dker bg-gd'; 
            app.settings.navbarCollapseColor='bg-danger dker bg-gd'; 
            app.settings.asideColor='bg-dark';
           ">
            <input type="radio" ng-model="app.settings.themeID" value="12" class="ng-pristine ng-valid" name="06S">
            <span class="block bg-light clearfix pos-rlt">
              <span class="active pos-abt w-full h-full bg-black-opacity text-center">
                <i class="glyphicon glyphicon-ok text-white m-t-xs"></i>
              </span>
              <b class="bg-danger dker header"></b>
              <b class="bg-danger dker header"></b>
              <b class="bg-dark"></b>
            </span>
          </label>
        </div>
      </div>
    </div>
  <!-- /settings --></div></div>
  <!-- jQuery -->
  <script src="js/jquery/jquery.min.js"></script>
  <!-- Angular -->
  
  <!-- Lazy loading -->
</body>
</html>