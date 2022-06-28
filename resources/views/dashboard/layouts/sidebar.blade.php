<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark p-6 text-white bg-opacity-10 sidebar collapse">
    <div class="position-sticky pt-3 ">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active':''}}" aria-current="page" href="/dashboard">
            <i class="bi bi-house"></i>
            Dashboard
          </a>
        </li>
        
        @can('admin')
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active':''}}" href="/dashboard/posts">
            <span data-feather="shopping-cart"></span>
            Products
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" aria-current="page" href="/dashboard/categories">
            <span data-feather="map"></span>
            Categories
          </a>
        </li>
        @endcan

        
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/orders*') ? 'active':''}}" aria-current="page" href="/dashboard/orders">
            <span data-feather="inbox"></span>
            Orders
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/">
            <span data-feather="home"></span>
            Home
          </a>
        </li>
        
      </ul>
    </div>
  </nav>