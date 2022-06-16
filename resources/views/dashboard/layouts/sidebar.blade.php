<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark p-6 text-white bg-opacity-10 sidebar collapse">
    <div class="position-sticky pt-3 ">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('/dashboard*') ? 'active':''}}" aria-current="page" href="/dashboard">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active':''}}" href="/dashboard/posts">
            <span data-feather="shopping-cart"></span>
            Products
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/category*') ? 'active':''}}" aria-current="page" href="/dashboard/categories">
            <span data-feather="home"></span>
            Categories
          </a>
        </li>

        
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/order*') ? 'active':''}}" aria-current="page" href="/dashboard/order">
            <span data-feather="home"></span>
            Order
          </a>
        </li>


      </ul>
    </div>
  </nav>