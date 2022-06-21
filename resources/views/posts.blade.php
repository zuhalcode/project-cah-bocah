@extends('layouts.main')

@section('container')
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
                <p class="card-title"><strong>Price : </strong> Rp.{{ $post->price }}</p>
                <p class="card-title"><strong>Stock : </strong> {{ $post->stock }}</p>
                <p class="card-text">{{ $post->excerpt }}</p>
                <a href="/posts/{{ $post->slug }}" class="btn btn-dark"> <i class="bi bi-cart"></i> Order</a>
              </div>
            </div>
      </div>
      @endforeach
  </div>
</div>
@endsection