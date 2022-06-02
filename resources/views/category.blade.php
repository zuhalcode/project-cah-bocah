@extends('layouts.main')

@section('container')
    <h1 class="mb=5">Post Category : {{ $category }}</h1>
    @foreach ($posts as $post)
    <article class="mb=5">
        <h2>
            <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
        </h2>
        <h5>{{ $post->name }}</h5>
        <p>{{ $post->excerpt }}</p>
        <img src={{ $post->image }} alt={{ $post->name }}>
    </article>
    @endforeach
@endsection