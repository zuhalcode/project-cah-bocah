@extends('layouts.main')

@section('container')

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cah Bocah Official - Product Listing Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/templatemo.css">
    <link rel="stylesheet" href="css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
</head>


                
        </div>
    </nav>
    <!-- Close Header -->
         {{-- @if ($posts[0]->count())
        <div class="card mb-3">
        @if ($posts[0]->image)
          <img src={{ asset('storage/' . $posts[0]->image) }} alt="{{
          $posts[0]->category->name }}" class="img-fluid" />
        @else
        <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top"
        alt="{{ $posts[0]->category->name }}">
        @endif
            <div class="card-body text-center">
                <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
                <p>
                    <small class="text-muted">
                    Kategori : <a href="/categories/{{ $posts[0]->category->slug}}" class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                    </small>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}
                </p>
                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-dark">Check Out</a>
                <p class="card-text"><small class="text-muted">{{ $posts[0]->created_at->diffForHumans() }}</small></p>
            </div>
        </div>
    @else
        <p class="text-center fs-4">No post found.</p>
 
    @endif --}}
 
<div class="container">
  <div class="row">
      @foreach ($posts as $post)
      <div class="col-md-4 mb-3 mt-5">
          <div class="card">
              <div class="position-absolute px-3 py-2 " style="background-color: rgba(0, 0, 0, 0.7)">
              <a href="/categories/{{ $post->category->slug}}" class="text-white
              text-decoration-none">{{ $post->category->name }}</a></div>
            @if ($post->image)
              <img src={{ asset('storage/' . $post->image) }} alt="{{
              $post->category->name }}" class="img-fluid" />
            @else
              <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}"
              class="card-img-top" alt="{{ $post->category->name }}">
            @endif

              <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">
                  <small class="text-muted">                          
                    {{ $post->created_at->diffForHumans() }}
                  </small>
                  </p>
                <p class="card-text">{{ $post->excerpt }}</p>
                <h5 class="card-title">{{ $post->harga }}</h5>
                <a href="/posts/{{ $post->slug }}" class="btn btn-dark">Check Out</a>
              </div>
            </div>
      </div>
      @endforeach
  </div>
</div>
                                 

   
    <!-- Start Footer -->
    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-success border-bottom pb-3 border-light logo">Cah Bocah</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                            Bungurasih Dalam, Waru, Sidoarjo
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="tel:010-020-0340">08972135728</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="mailto:info@company.com">cahbocah@gmail.com</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Products</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Dress</a></li>
                        <li><a class="text-decoration-none" href="#">T-Shirt</a></li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Further Info</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Home</a></li>
                        <li><a class="text-decoration-none" href="#">About Us</a></li>
                        <li><a class="text-decoration-none" href="#">Shop Locations</a></li>
                        <li><a class="text-decoration-none" href="#">Contact</a></li>
                    </ul>
                </div>

            </div>

            <div class="row text-light mb-4">
                <div class="col-12 mb-3">
                    <div class="w-100 my-3 border-top border-light"></div>
                </div>
                <div class="col-auto me-auto">
                    <ul class="list-inline text-left footer-icons">
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/cahbocah.yr/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://shopee.co.id/cahbocahofficial"><i class="fab fa-shopee fa-lg fa-fw"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    <!-- End Footer -->

    <!-- Start Script -->
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/templatemo.js"></script>
    <script src="js/custom.js"></script>
    <!-- End Script -->
</body>

</html>
@endsection