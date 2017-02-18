<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>aside - Bootstrap 4 web application</title>
  <meta name="description" content="Responsive, Bootstrap, BS4" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- for ios 7 style, multi-resolution icon of 152x152 -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
  <link rel="apple-touch-icon" href="/images/logo.png">
  <meta name="apple-mobile-web-app-title" content="Flatkit">
  <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="shortcut icon" sizes="196x196" href="/images/logo.png">

  <!-- style -->
  <link rel="stylesheet" href="/css/animate.css/animate.min.css" type="text/css" />
  <link rel="stylesheet" href="/css/glyphicons/glyphicons.css" type="text/css" />
  <link rel="stylesheet" href="/css/font-awesome/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="/css/material-design-icons/material-design-icons.css" type="text/css" />
  <link rel="stylesheet" href="/css/ionicons/css/ionicons.min.css" type="text/css" />
  <link rel="stylesheet" href="/css/simple-line-icons/css/simple-line-icons.css" type="text/css" />
  <link rel="stylesheet" href="/css/bootstrap/dist/css/bootstrap.min.css" type="text/css" />

  <!-- build:css css/styles/app.min.css -->
  <link rel="stylesheet" href="/css/styles/app.css" type="text/css" />
  <link rel="stylesheet" href="/css/styles/style.css" type="text/css" />
  <!-- endbuild -->
  <link rel="stylesheet" href="/css/styles/font.css" type="text/css" />
</head>
<body>
  <div class="app" id="app">

    <!-- ############ LAYOUT START-->

    <div class="padding" style="padding: 8%;">
      <div class="navbar">
        <div class="pull-center">
          <!-- brand -->
          <div class="text-center">
            <img src="/images/logoProesthetic1.png" alt="...">
          </div>
          <!-- / brand -->
        </div>
      </div>
    </div>
    <div class="b-t">
      <div class="center-block w-xxl w-auto-xs p-y-md text-center">
        <div class="p-a-md">
          <div>

            <form name="form" action="/login" method="post">
              {{ csrf_field() }}
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Usuario" required name="username">
                @if ($errors->has('usuario'))
                <span class="help-block">
                  <strong>{{ $errors->first('usuario') }}</strong>
                </span>
                @endif
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Contraseña" required name="password">
                @if ($errors->has('password'))
                <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
              </div>
              <div class="m-b-md">
                <label class="md-check">
                  <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> <i class="primary"></i>  Recordarme
                </label>
              </div>
              <button type="submit" class="btn btn-lg black p-x-lg">Entrar</button>
            </form>
            <div class="m-y">
              <a href="/forgot-password.html" class="_600">¿Olvidaste tu contraseña?</a>
            </div>
          </div>
        </div>
      </div>

      <!-- ############ LAYOUT END-->
    </div>

    <!-- build:js scripts/app.min.js -->
    <!-- jQuery -->
    <script src="/libs/jquery/dist/jquery.js"></script>
    <!-- Bootstrap -->
    <script src="/libs/tether/dist/js/tether.min.js"></script>
    <script src="/libs/bootstrap/dist/js/bootstrap.js"></script>
    <!-- core -->
    <script src="/libs/jQuery-Storage-API/jquery.storageapi.min.js"></script>
    <script src="/libs/PACE/pace.min.js"></script>
    <script src="/libs/jquery-pjax/jquery.pjax.js"></script>
    <script src="/libs/blockUI/jquery.blockUI.js"></script>
    <script src="/libs/jscroll/jquery.jscroll.min.js"></script>

    <script src="/scripts/config.lazyload.js"></script>
    <script src="/scripts/ui-load.js"></script>
    <script src="/scripts/ui-jp.js"></script>
    <script src="/scripts/ui-include.js"></script>
    <script src="/scripts/ui-device.js"></script>
    <script src="/scripts/ui-form.js"></script>
    <script src="/scripts/ui-modal.js"></script>
    <script src="/scripts/ui-nav.js"></script>
    <script src="/scripts/ui-list.js"></script>
    <script src="/scripts/ui-screenfull.js"></script>
    <script src="/scripts/ui-scroll-to.js"></script>
    <script src="/scripts/ui-toggle-class.js"></script>
    <script src="/scripts/ui-taburl.js"></script>
    <script src="/scripts/app.js"></script>
    <script src="/scripts/ajax.js"></script>
    <!-- endbuild -->
  </body>
  </html>
