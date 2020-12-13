  <aside class="main-sidebar sidebar-dark-warning elevation-4">
    <a href="{{ url('/') }}" class="brand-link">
      <img src="" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Back To Site</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('admin_panel') }}/dist/img/AdminLTELogo.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">SuperAdmin </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview">
            <a href="{{ url('/admin') }}" class="nav-link {{ request()->is('admin') ? 'active' : '' }}">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
              </p>
            </a>
          </li>


            <!--mails-->
          <li class="nav-item has-treeview {{ request()->segment(2) == 'Contact' ? 'menu-open' : ''}}">
            <a href="{{ url('/admin/contact') }}" class="nav-link {{ \Route::current()->getName() == 'contact.index' ? 'active' : ''}}">
              <i class="fas fa-envelope-open-text nav-icon"></i>
              <p>contact</p>
            </a>
          </li>


          <!--Rooms-->
          <li class="nav-item has-treeview {{ request()->segment(2) == 'rooms' ? 'menu-open' : ''}}">
            <a href="#" class="nav-link">
              <i class="fas fa-bed nav-icon"></i>
              <p>
                Rooms
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/admin/rooms') }}" class="nav-link {{ \Route::current()->getName() == 'rooms.index' ? 'active' : ''}}">
                  <i class="fas fa-eye nav-icon"></i>
                  <p>View</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/admin/rooms/create') }}" class="nav-link {{ \Route::current()->getName() == 'rooms.create' ? 'active' : ''}}">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Create</p>
                </a>
              </li>
            </ul>
          </li>

          <!--Restaurants -->
          <li class="nav-item has-treeview {{ request()->segment(2) == 'restaurants' ? 'menu-open' : ''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-utensils"></i>
              <p>
                Foods
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/admin/restaurants') }}" class="nav-link {{ \Route::current()->getName() == 'restaurants.index' ? 'active' : ''}}">
                  <i class="fas fa-eye nav-icon"></i>
                  <p>View</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/admin/restaurants/create') }}" class="nav-link {{ \Route::current()->getName() == 'restaurants.create' ? 'active' : ''}}">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Create</p>
                </a>
              </li>
            </ul>
          </li>

          
          <!--Offers -->
          <li class="nav-item has-treeview {{ request()->segment(2) == 'offers' ? 'menu-open' : ''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-fire"></i>
              <p>
                Offers
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/admin/offers') }}" class="nav-link {{ \Route::current()->getName() == 'offers.index' ? 'active' : ''}}">
                  <i class="fas fa-eye nav-icon"></i>
                  <p>View</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('/admin/offers/create') }}" class="nav-link {{ \Route::current()->getName() == 'offers.create' ? 'active' : ''}}">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Create</p>
                </a>
              </li>

            

            </ul>
          </li>

          <!--Booking flights -->
          <li class="nav-item has-treeview {{ request()->segment(2) == 'booking' ? 'menu-open' : ''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-plane"></i>
              <p>
                Booking
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/admin/booking') }}" class="nav-link {{ \Route::current()->getName() == 'booking.index' ? 'active' : ''}}">
                  <i class="fas fa-eye nav-icon"></i>
                  <p>View</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('/admin/booking/create') }}" class="nav-link {{ \Route::current()->getName() == 'booking.create' ? 'active' : ''}}">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Create</p>
                </a>
              </li>
            </ul>
          </li>


{{--  
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Layout Options
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation + Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/boxed.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Boxed</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-topnav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Navbar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-footer.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Footer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Collapsed Sidebar</p>
                </a>
              </li>
            </ul>
          </li>  --}}

        </ul>
      </nav>
    </div>
  </aside>