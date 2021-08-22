@extends('layouts.app')
@section('content')
  @include('snippets.nav')
  <div class="main-content container">
    <div class="row page-head">
      {{-- <div class="col-md-4 page-head-heading">
        <h1>Page Header</h1>
      </div> --}}
      <div class="col-md-12 page-head">
        <h3>
        Lógica de cambio de contraseña</h3>
        <a href="https://accounts.zoho.com/home#security/security_pwd" target="_blank">Link de cambio de contraseña en Zoho</a>
      </div>
    </div>
  </div>
@endsection
