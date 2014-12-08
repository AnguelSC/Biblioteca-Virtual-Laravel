<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Login | VirtualBook</title>
  <meta name="description" content="app, web app, responsive, responsive layout, admin, admin panel, admin dashboard, flat, flat ui, ui kit, AngularJS, ui route, charts, widgets, components">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
  <link rel="stylesheet" href="css/animate.css" type="text/css">
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="css/simple-line-icons.css" type="text/css">
  <link rel="stylesheet" href="css/font.css" type="text/css">
  <link rel="stylesheet" href="css/app.css" type="text/css">
</head>
<body>
  <!-- uiView:  -->
  <div class="app app-header-fixed app-aside-fixed" id="app"><!-- uiView:  -->
  <div class="fade-in-right-big smooth ng-scope">
  <div class="container w-xxl w-auto-xs ng-scope">
  <a href="" class="navbar-brand block m-t ng-binding">VirtualBook</a>
  <div class="m-b-lg">
    <div class="wrapper text-center">
      <strong>Sign in to get in touch</strong>
    </div>
    {{Form::open(array('url'=>'login','class'=>'form-validation','name'=>'form'))}}
      <div class="text-danger wrapper text-center">
        @if(isset($error))
        {{$errors}}
        @endif
      </div>
      <div class="list-group list-group-sm">
        <div class="list-group-item">
          <input type="text" placeholder="Email" class="form-control no-border" name="username" focus="" required="">
        </div>
        <div class="list-group-item">
           <input type="password" placeholder="Password" class="form-control no-border" name="password" required="">
        </div>
      </div>
      <button type="submit" class="btn btn-lg btn-primary btn-block">Log in</button>
      <div class="text-center m-t m-b"><a ui-sref="access.forgotpwd" href="#/access/forgotpwd">Forgot password?</a></div>
      <div class="line line-dashed"></div>
      <p class="text-center"><small>Do not have an account?</small></p>
      <a class="btn btn-lg btn-default btn-block" href="access/signup">Create an account</a>
    {{Form::close()}}
  </div>
  <div class="text-center">
    <p>
      <small class="text-muted">Web app framework base on Bootstrap and AngularJS<br>© 2014</small>
    </p>
  </div>
</div></div></div>
  <!-- jQuery -->
  <script src="js/jquery/jquery.min.js"></script>
  <!-- Angular -->
</body>
</html>