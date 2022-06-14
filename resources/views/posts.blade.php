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
                                 

   
   
</body>

</html>
@endsection