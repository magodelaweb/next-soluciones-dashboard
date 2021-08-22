<nav class="navbar navbar-expand-lg mai-sub-header">
  <div class="container">
              <nav class="navbar navbar-expand-md">
                <button class="navbar-toggler hidden-md-up collapsed" type="button" data-toggle="collapse" data-target="#mai-navbar-collapse" aria-controls="mai-navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">       <span class="icon-bar"><span></span><span></span><span></span></span></button>
                <div class="navbar-collapse collapse mai-nav-tabs" id="mai-navbar-collapse">
                  <ul class="nav navbar-nav">
                              <li class="nav-item parent open">
                                <a class="nav-link" href="#" role="button" aria-expanded="false"><span class="icon s7-key"></span><span>Seguridad</span></a>
                                <ul class="mai-nav-tabs-sub mai-sub-nav nav">
                                            <li class="nav-item">
                                              <a class="nav-link {{MB::menu("DASHBOARD")==$menu?"active":""}}" href="{{route("dashboard")}}" onclick=""><span class="name">Cambiar Contraseña</span></a>
                                            </li>
                                            {{-- <li class="nav-item">
                                              <a class="nav-link" href="#" onclick="event.preventDefault();"><span class="name">Componente 1</span></a>
                                            </li>
                                            <li class="nav-item">
                                              <a class="nav-link" href="pages-login.html" onclick="event.preventDefault();"><span class="name">Login</span></a>
                                            </li>
                                            <li class="nav-item">
                                              <a class="nav-link" href="pages-sign-up.html" onclick="event.preventDefault();"><span class="name">Sign Up</span></a>
                                            </li>
                                            <li class="nav-item">
                                              <a class="nav-link" href="pages-forgot-password.html" onclick="event.preventDefault();"><span class="name">Forgot Password</span></a>
                                            </li>
                                            <li class="nav-item">
                                              <a class="nav-link" href="pages-404.html" onclick="event.preventDefault();"><span class="name">404</span></a>
                                            </li> --}}
                                </ul>
                              </li>
                              <li class="nav-item">
                                {{-- <a class="nav-link" href="#.html" onclick="event.preventDefault();"><span class="icon s7-tools"></span><span>Settings</span></a></li> --}}
                  </ul>
                </div>
              </nav>
    <div class="search">
      {{-- <input type="text" placeholder="Buscar..." name="q"><span class="s7-search"></span> --}}
    </div>
  </div>
</nav>
