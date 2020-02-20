  <li class="nav-item active{{(request()->is('inicio*')) ? 'active' : '' }}">
    <a class="nav-link" href="{{route('inicio')}}">Home <span class="sr-only">(current)</span></a>
  </li>
  <li class="nav-item {{(request()->is('usuarios*')) ? 'active' : '' }}">
    <!--podemos cambiar asset como aparece en home por route como aparece en usuarios asset('home') y quedara como route('inicio')-->
    <a class="nav-link" href="{{route('users')}}">Usuarios</a>
  </li>
  <li class="nav-item {{(request()->is('pasteles*')) ? 'active' : '' }}">
    <a class="nav-link" href="{{route('pasteles')}}" tabindex="-1" aria-disabled="true">Pasteles</a>
  </li>
  <li class="nav-item {{(request()->is('articulos*')) ? 'active' : '' }}">
    <a class="nav-link" href="{{asset('articulos')}}">Artículos</a>
  </li>
  <!-- incluimos asset para redireccionar a la dirección raiz y que al cambiar de página nos devuelta sin problema a la indicada desde la raiz -->
 