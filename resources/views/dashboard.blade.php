@extends('layouts.app')
@section('content')
  <nav class="navbar navbar-expand-lg mai-sub-header">
    <div class="container">
                <nav class="navbar navbar-expand-md">
                  <button class="navbar-toggler hidden-md-up collapsed" type="button" data-toggle="collapse" data-target="#mai-navbar-collapse" aria-controls="mai-navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">       <span class="icon-bar"><span></span><span></span><span></span></span></button>
                  <div class="navbar-collapse collapse mai-nav-tabs" id="mai-navbar-collapse">
                    <ul class="nav navbar-nav">
                                <li class="nav-item parent open"><a class="nav-link" href="#" role="button" aria-expanded="false"><span class="icon s7-home"></span><span>Home</span></a>
                                  <ul class="mai-nav-tabs-sub mai-sub-nav nav">
                                              <li class="nav-item"><a class="nav-link active" href="index.html"><span class="name">Blank Page Header</span></a>
                                              </li>
                                              <li class="nav-item"><a class="nav-link" href="pages-blank.html"><span class="name">Blank Page</span></a>
                                              </li>
                                              <li class="nav-item"><a class="nav-link" href="pages-login.html"><span class="name">Login</span></a>
                                              </li>
                                              <li class="nav-item"><a class="nav-link" href="pages-sign-up.html"><span class="name">Sign Up</span></a>
                                              </li>
                                              <li class="nav-item"><a class="nav-link" href="pages-forgot-password.html"><span class="name">Forgot Password</span></a>
                                              </li>
                                              <li class="nav-item"><a class="nav-link" href="pages-404.html"><span class="name">404</span></a>
                                              </li>
                                  </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#.html"><span class="icon s7-tools"></span><span>Settings</span></a></li>
                    </ul>
                  </div>
                </nav>
      <div class="search">
        <input type="text" placeholder="Buscar..." name="q"><span class="s7-search"></span>
      </div>
    </div>
  </nav>
  <div class="main-content container">
    <div class="row page-head">
      <div class="col-md-4 page-head-heading">
        <h1>Page Header</h1>
      </div>
      <div class="col-md-8 page-head-desc">
        <h3>Morbi purus nisi, porttitor a sodales at, consectetur sit auctor<br> efficitur nisi. Aliquam erat volutpat. Morbi lobortis odio sem<br> lieto justo</h3>
      </div>
    </div>
  </div>
@endsection
