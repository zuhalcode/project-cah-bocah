@extends('layouts.main')

@section('container')
    <h1 class="mb=5">Post Category : {{ $category }}</h1>
    @foreach ($posts as $post)
    <article class="mb=5">
        {{-- <h2>
            <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
        </h2>
        <h5>{{ $post["name"] }}</h5>
        <p>{{ $post->excerpt }}</p>
        <img src={{ $post["image"] }} alt={{ $post["name"] }}> --}}
        
        <h2><a href="/posts/{{ $post->slug }}" class="text-black text-decoration-none"
            >{{ $post->title }}</a></h2>
        {{-- <img src="https://source.unsplash.com/500x200?{{ $post->category->name }}" 
        alt="{{ $post->category->name }}" class="img-fluid"/> --}}
        @if ($post->image)
        <div style="max-height: 350px; overflow:hidden;">
            <img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3"/>  
        </div>
        @else
            <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" 
            class="card-img-top" alt="{{ $post->category->name }}">
        @endif
        <h5>{{ $post["name"] }}</h5>
        <p>{{ $post["excerpt"] }}</p>
        <a href="/posts/{{ $post->slug }}" class="btn btn-secondary">Read more</a>
    </article>
    @endforeach
@endsection
