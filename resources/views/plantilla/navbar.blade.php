<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">testQbit</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="">Inico</a>
      </li>
      <li class="nav-item {{ Request::is('proveedores*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('proveedores.index') }}">Proveedores</a>
      </li>
      <li class="nav-item {{ Request::is('productos*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('productos.index') }}">Productos</a>
      </li>
      <li class="nav-item {{ Request::is('servicios*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('servicios.index') }}">Servicos</a>
      </li>
      <li class="nav-item {{ Request::is('anuncios*') ? 'active' : '' }}">
        <a class="nav-link" href="#">Anuncios</a>
      </li>
    </ul>
  </div>
</nav>
