<!DOCTYPE html>
<html lang="es">
  @include('snippets.head')
  <body>
    @include('snippets.header1')
    <div class="mai-wrapper">
      @yield('content')
    </div>
    @include('snippets.scripts')
  </body>
</html>
