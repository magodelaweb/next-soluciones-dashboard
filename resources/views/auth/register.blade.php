@extends('layouts.base')
@section('body')
<body class="mai-splash-screen">
  <div class="mai-wrapper mai-sign-up">
    <div class="main-content container">
      <div class="splash-container row">
        <div class="col-md-6 form-message"><img class="logo-img mb-4" src="{{asset('img/logo_blanco.png')}}" alt="logo" width="" height="67"><span class="splash-description text-center mb-4">Registro</span>
          <form class="sign-up-form" id="frmRegister" action="{{route('registrate')}}" method="post">
            @csrf
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend"><i class="icon s7-user"></i></div>
                <input parsley-trigger="change" data-parsley-errors-container="#name-errors" data-parsley-required-message="Es necesario ingresar su nombre y apellido." class="form-control pl-3" id="name" name="name" type="text" placeholder="Nombre y Apellido" autocomplete="off" required>
              </div>
              <div id="name-errors"></div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend"><i class="icon s7-mail"></i></div>
                <input parsley-trigger="change" data-parsley-errors-container="#email-errors" data-parsley-required-message="Es necesario ingresar un correo." data-parsley-type-message="Es necesario ingresar un correo válido." class="form-control pl-3" id="email" name="email" type="email" placeholder="Email" required>
              </div>
              <div id="email-errors"></div>
            </div>
            <div class="form-group inline row">
              <div class="col-sm-6">
                <div class="input-group">
                  <div class="input-group-prepend"><i class="icon s7-lock"></i></div>
                  <input parsley-trigger="change" data-parsley-errors-container="#password-errors" data-parsley-required-message="Es necesario ingresar una clave." class="form-control pl-3" id="pass1" name="password" type="password" placeholder="Password" required>
                </div>
                <div id="password-errors"></div>
              </div>
              <div class="col-sm-6">
                <div class="input-group">
                  <div class="input-group-prepend"><i class="icon s7-lock"></i></div>
                  <input data-parsley-equalto="#pass1" data-parsley-errors-container="#confirm-errors" data-parsley-required-message="Es necesario volver a ingresar la clave."
                  data-parsley-equalto-message="La clave ingresada debe ser la misma." class="form-control pl-3" type="password" name="confirm" placeholder="Confirm" required>
                </div>
                <div id="confirm-errors"></div>
              </div>
            </div>
            <div class="form-group sign-up-submit"><a class="btn btn-lg btn-primary btn-block" href="#" onclick="submit(event);" data-dismiss="modal">Registrar</a></div>
            <button type="submit" name="btnSubmit" id="btnSubmit" style="display:none;"></button>
            {{-- <div class="title mb-4"><span>O</span></div>
            <div class="form-group row social-signup mb-4">
              <div class="col-6">
                <button class="btn btn-block btn-social btn-color btn-facebook" type="button"><i class="fa fa-facebook icon icon-left"></i> Facebook</button>
              </div>
              <div class="col-6">
                <button class="btn btn-block btn-social btn-color btn-google-plus" type="button"><i class="fa fa-google-plus icon icon-left"></i> Google plus</button>
              </div>
            </div> --}}
            <p class="conditions">Para crear una cuenta, debes estar de acuerdo con los <a href="#" onclick="event.preventDefault();">Términos y Condiciones</a>.</p>
          </form>
          <div class="out-links"><a href="#" onclick="event.preventDefault();">© 2021 Next Soluciones</a></div>
        </div>
        <div class="col-md-6 user-message"><span class="splash-message text-left">Bienvenido a <br> Next Soluciones<br> Disfruta</span><span class="alternative-message text-right">¿Ya tienes una cuenta? <a href="{{route("login")}}">Inicia Sesión</a></span></div>
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
      // $("#frmRegister")[0].submit();
    }
  </script>
</body>
@endsection
