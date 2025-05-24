<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('start') }}">Start</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('kontakt') }}">Kontakt</a>
          </li>
          @auth
          <li class="nav-item">
            <a class="nav-link" href="{{ route('onas') }}">O nas</a>
          </li>            
          @endauth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Posty
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('post.index')}}">Lista postów</a></li>
              @auth
              <li><a class="dropdown-item" href="{{route('post.create')}}">Dodaj post</a></li>                
              @endauth
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
