@section('estilos')
<link rel="stylesheet" href="{{URL::asset('css/nav.css') }}">
@endsection
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid">

  <a style="margin-left:2%; color:white; font-family:Poppins; font-weight:bold;" class="navbar-brand" href="#">KALPATARU</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul style="margin-left:60%;" class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a style="color:white; font-family:Poppins; font-weight:bold" onmouseover='this.style.color="red"' onmouseout='this.style.color="white"' class="nav-link" href="{{route('inicio.index')}}">Inicio</a>
        </li>

        @if(!Auth::check())
      <li class="nav-item">
        <a style="color:white; font-family:Poppins; font-weight:bold" onmouseover='this.style.color="red"' onmouseout='this.style.color="white"' class="nav-link" href="{{route('login')}}">Login</a>
      </li>
      <li class="nav-item">
        <a style="color:white; font-family:Poppins; font-weight:bold" onmouseover='this.style.color="red"' onmouseout='this.style.color="white"' class="nav-link" href="{{route('register')}}">Registrarse</a>
      </li>
      @else
        <li class="nav-item">
          <a style="color:white; font-family:Poppins; font-weight:bold" onmouseover='this.style.color="red"' onmouseout='this.style.color="white"' class="nav-link active" aria-current="page" href="" onclick="event.preventDefault(); document.getElementById('logout').submit();">Cerrar sesion</a>
          <!-- Solo usuarios identificados -->
          <form id="logout" action="{{route('logout')}}" method="POST" style="display:none;">
          @csrf
          </form>
        </li>
        <li class="nav-item">
          <a style="color:white; font-family:Poppins; font-weight:bold" onmouseover='this.style.color="red"' onmouseout='this.style.color="white"' class="nav-link" href="{{route('mensajes.index')}}">Mensajes</a>
        </li>
        @if(Auth::user()->role_id=="2")
        <li class="nav-item">
          
          <a style="color:white; font-family:Poppins; font-weight:bold" onmouseover='this.style.color="red"' onmouseout='this.style.color="white"' class="nav-link" href="{{route('voyager.dashboard')}}">Administrador</a>
          </li>
          @endif
      
      
        @endif
      

    </ul>

  </div>
</nav>
