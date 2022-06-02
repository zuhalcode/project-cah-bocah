<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cah Bocah Official</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/templatemo.css">
    <link rel="stylesheet" href="css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="css/fontawesome.min.css">
<!--
    
-->
</head>

<body>
    <!-- Start Top Nav -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <a class="text-light" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter fa-sm fa-fw me-2"></i></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Top Nav -->


    <!-- Header -->
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
                            <a class="nav-link {{ ($active === "home") ? 'active' : '' }}"  href="/">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link {{ ($active === "product") ? 'active' : '' }}" href="/posts">Product</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link {{ ($active === "categories") ? 'active' : '' }}" href="/categories">Category</a>
                          </li>
                          <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                          @auth
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#dashboard" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Welcome back, {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
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
                          <a href="/login" class="nav-link {{ ($active === "login") ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                        </li>
                        @endauth
                      </ul>
                    </ul>
                </div>
    </nav>

    

    
    <!-- Close Header -->