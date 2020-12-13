    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        
        <a class="navbar-brand" href="index.php">DISCOVER EGYPT
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="{{ url('rooms') }}" class="nav-link">Rooms</a></li>

            <li class="nav-item"><a href="{{ url('restaurants') }}" class="nav-link">Restaurants</a></li>
            <li class="nav-item"><a href="{{ url('booking') }}" class="nav-link">Flights</a></li>
            <li class="nav-item"><a href="{{ url('offers') }}" class="nav-link">Trips</a></li>
            <li class="nav-item"><a href="{{ url('about') }}" class="nav-link">About us</a></li>
            <li class="nav-item"><a href="{{ url('contact') }}" class="nav-link">Contact</a></li>
            @auth
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle profile-name" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ auth('web')->user()->getFullName() }}
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{ url('profile') }}">Profile</a></li>
                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                 {{ __('Logout') }}
             </a>

             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                 @csrf
             </form>
              </ul>
            </li>
            @endauth
            @guest
            <li class="nav-item"><a href="{{ url('/login') }}" class="nav-link main-color">Login</a></li>
            @endguest
          </ul>
        </div>
      </div>
      
    </nav>