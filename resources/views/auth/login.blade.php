
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in (v2)</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css') }}">
  
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/modopago.css" class="rel">
  
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="container-fluid d-flex flex-row">
    <div class="card  mx-auto" style="width: 32rem;">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12 titulo c-a text-center h2 pt-3">Ingresa a tu RepuestoExpres</div>
                <p class="text-center textoreg">¿Todavía no te has registrado? <span><a href="#" class="c-n">Crea tu cuenta Aquí</a></span></p>
            </div>
    
            <form action="{{ route('login') }}" method="POST">
              @csrf
              
    
                <div class="form-group">
                    <div class="row mx-auto" >
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <label for="email">Correo Electrónico</label>
                            <input type="email" name="email" class="form-control inputForm" placeholder="Correo Electrónico" id="email">
                        </div>
                    </div>
                    @error('email')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
    
                <div class="form-group">
                    <div class="row mx-auto">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <label for="password">Contraseña</label>
                            <input type="password" name="password" id="password-field" class="form-control inputForm" placeholder="Contraseña" value="12345678"/>
                        </div>
                    </div>                
                </div>
                
                <div class="form-group">
                    <div class="row mx-auto my-3">
                        <div class="col-xs-12 col-sm-12 col-md-12 d-flex">
                            <button class="btn btn-app w-100 mx-auto">Iniciar Sesión</button>
                        </div>
                    </div>                
                </div>
                <p class="text-center c-a texto"><a href="#">¿Olvidé mi contraseña?</a></p>
                
            </form>
        </div>
    </div>
</div>   
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('backend/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
