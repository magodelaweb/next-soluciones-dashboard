@extends('layouts.base')
@section('body')
<body class="mai-splash-screen">
  <div class="mai-wrapper mai-login">
    <div class="main-content container">
      <div class="splash-container row">
        <div class="col-md-6 user-message"><span class="splash-message text-right">¡Hola!<br> es bueno<br> verte de nuevo</span><span class="alternative-message text-right">¿No tienes una cuenta? <a href="pages-sign-up.html">Regístrate</a></span></div>
        <div class="col-md-6 form-message"><img class="logo-img mb-4" src="{{asset('img/logo_blanco.png')}}" alt="logo" width="" height="67"><span class="splash-description text-center mb-4">Ingresa en tu cuenta</span>
          <form id="frmLogin" action="{{route('authenticate')}}" method="post">
            @csrf
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend"><i class="icon s7-user"></i></div>
                <input parsley-trigger="change" class="form-control pl-3" name="email" id="username" type="text" placeholder="Username" autocomplete="off">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend"><i class="icon s7-lock"></i></div>
                <input parsley-trigger="change" class="form-control pl-3" name="password" id="password" type="password" placeholder="Password">
              </div>
            </div>
            <div class="form-group login-submit"><a class="btn btn-lg btn-primary btn-block" href="#" onclick="submit(event);" data-dismiss="modal">Iniciar Sesión</a></div>
            <button type="submit" name="btnSubmit" id="btnSubmit" style="display:none;"></button>
            <div class="form-group row login-tools">
              <div class="col-sm-6 login-remember">
                <label class="custom-control custom-checkbox mt-2">
                  <input class="custom-control-input" name="remember" type="checkbox"><span class="custom-control-label">Recordarme en este equipo</span>
                </label>
              </div>
              <div class="col-sm-6 pt-2 text-sm-right login-forgot-password"><a href="pages-forgot-password.html">¿Haz olvidado tu password?</a></div>
            </div>
          </form>
          <div class="out-links"><a href="#">© 2021 Next Soluciones</a></div>
        </div>
      </div>
    </div>
  </div>
  @include('snippets.scripts')
  <script src="{{asset("assets/lib/parsley/parsley.min.js")}}" type="text/javascript"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('form').parsley();
    });
    function submit(event){
      event.preventDefault();
      $("#btnSubmit").trigger('click');
      // $("#frmLogin")[0].submit();
    }
  </script>
</body>
