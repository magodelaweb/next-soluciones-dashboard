@extends('layouts.base')
@section('body')
<body class="mai-splash-screen">
  <div class="mai-wrapper mai-forgot-password">
    <div class="main-content container">
      <div class="splash-container row">
        <div class="col-md-6 user-message"><span class="splash-message text-right"> Esto podría tomar<br> sólo un momento.</span><span class="alternative-message text-right"><span class="alternative-message text-right">¿No tienes una cuenta? <a href="{{route("register")}}">Regístrate</a></span></div>
        <div class="col-md-6 form-message"><img class="logo-img mb-4" src="{{asset('img/logo_blanco.png')}}" alt="logo" width="" height="67"><span class="splash-description text-center mb-4">No te preocupes, te enviaremos un correo electrónico para restablecer tu contraseña.</span>
          <form class="form-forgot-password">
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend"><i class="icon s7-mail"></i></div>
                <input class="form-control" type="text" placeholder="Your Email">
              </div>
            </div>
            <p class="contact mt-4">No recuerdas tu correo? <a href="#" onclick="event.preventDefault();">Contacta a soporte</a>.</p>
            <div class="form-group login-submit"><a class="btn btn-lg btn-primary btn-block" href="{{route("password.request")}}" data-dismiss="modal">Reset Password</a></div>
          </form>
          <div class="out-links"><a href="#" onclick="event.preventDefault();">© 2021 Next Soluciones</a></div>
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
@endsection
