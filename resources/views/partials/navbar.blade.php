<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Cah Bocah Official</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}"  href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Product") ? 'active' : '' }}" href="/posts">Product</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link {{ ($title === "Category") ? 'active' : '' }}"" href="/categories">Category</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "About") ? 'active' : '' }}"" href="/about">About</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <a href="#" class="btn btn-outline-dark">Search</a> 
          &nbsp;
          <a href="#" class="btn btn-outline-dark">Login</a>
        </form>
      </div>
    </div>
  </nav>
  