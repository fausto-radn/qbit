<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('titulo')</title>
  <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css') }}">

  @yield('styles')

</head>
<body>

  @include('plantilla.navbar')

  <div class=" container mt-4">
    <div class="row">
      <div class="col">

        @if (session('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Cerrar">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif

        @if (session('error'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Cerrar">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif

        @yield('contenido')

      </div>
    </div>
  </div>

  <script src="{{ asset('assets/jquery/jquery-3.3.1.min.js') }}" charset="utf-8"></script>
  <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}" charset="utf-8"></script>
  <script src="{{ asset('assets/sweetalert/dist/sweetalert.min.js')}}" charset="utf-8"></script>
  <script src="{{ asset('js/main.js')}}" charset="utf-8"></script>

  @yield('scripts')

</body>
</html>
