    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.php">DISCOVER EGYPT</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="{{ url('/profile') }}" class="nav-link">profile</a></li>

            <li class="nav-item"><a href="{{ url('rooms') }}" class="nav-link">Rooms</a></li>

            <li class="nav-item"><a href="{{ url('restaurants') }}" class="nav-link">Restaurants</a></li>
            <li class="nav-item"><a href="{{ url('amenities') }}" class="nav-link">Amenities</a></li>
            <li class="nav-item"><a href="{{ url('booking') }}" class="nav-link">Booking</a></li>
            <li class="nav-item"><a href="{{ url('offers') }}" class="nav-link">Offers</a></li>
            <li class="nav-item"><a href="{{ url('about') }}" class="nav-link">About us</a></li>
            <li class="nav-item"><a href="{{ url('contact') }}" class="nav-link">Contact</a></li>
          </ul>
        </div>
      </div>
      
    </nav>
    <!-- END nav -->
