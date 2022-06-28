<nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
    <div class="container text-light">
        <div class="w-100 d-flex justify-content-between">
        </div>
    </div>
</nav>
 

<nav class="navbar navbar-expand-lg navbar-light shadow">
  <div class="container d-flex justify-content-between align-items-center">
    <a class="navbar-brand text-dark logo h1 align-self-center" href="index.html">
      Cah Bocah Official
    </a>
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
      <div class="flex-fill">
        <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('/') ? 'active' : '' }}"  href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  {{ Request::is('posts') ? 'active' : '' }}" href="/posts">Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('categories') ? 'active' : '' }}" href="/categories">Category</a>
              </li>
              {{-- <li class="nav-item">
                <a class="nav-link {{ Request::is('history') ? 'active' : '' }}" href="/history">History</a>
              </li> --}}
              <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
              @auth
              <li class="nav-item">
                @php
                
                  $current_order = \App\Models\Order::where('user_id', auth()->user()->id)->where('status', 0)->first();
                  if($current_order) $notification = \App\Models\Checkout::where('order_id', $current_order->id)->count();
                @endphp
                <a href="/orders" class=" btn nav-link position-relative">
                  <h5><i class="bi bi-cart-fill text-dark"></i></h5>
                  <span style="top:8px; left:27px;" class="position-absolute translate-middle badge rounded-pill bg-danger">
                    {{ $notification ?? 0 }}
                    <span class="visually-hidden">unread messages</span>
                  </span>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#dashboard" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Welcome back, {{ Auth::user()->name }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li>
                    <a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a>
                  </li>
                  <li><hr class="dropdown-divider"></li>
                  <li>
                    <form action="/logout" method="post">
                        @csrf
                      <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                    </form>
                </ul>
              </li>
            @else
            <li class="nav-item">
              <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i> Login</a>
            </li>
            @endauth
          </ul>
        </ul>
      </div>
    </div>
  </div>
</nav>

    

