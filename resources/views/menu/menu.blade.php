  <li class="nav-item active">
    <a class="nav-link" href="{{route('inicio')}}">Home <span class="sr-only">(current)</span></a>
  </li>
  <li class="nav-item"><!--podemos cambiar asset como aparece en home por route como aparece en usuarios asset('home') y quedara como route('inicio')-->
    <a class="nav-link" href="{{route('users')}}">Usuarios</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{route('pasteles')}}" tabindex="-1" aria-disabled="true">Pasteles</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{route('articulos')}}">Articulos</a>
  </li>
  <!-- incluimos asset para redireccionar a la dirección raiz y que al cambiar de página nos devuelta sin problema a la indicada desde la raiz -->