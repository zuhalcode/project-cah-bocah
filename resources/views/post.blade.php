@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <article>
                <h2>{{ $post["title"] }}</h2>
                <h5>{{ $post["name"] }}</h5>
                <p>Kategori: <a href="/categories/{{ $post->category->slug }}">
                    {{ $post->category->name }}</a>
                </p>
                <img src="https://source.unsplash.com/1200x400? {{ $post->category->name }}" 
                alt="{{ $post->category->name }}" class="img-fluid"/>

                <article class="my-3">
                {!! $post->body !!}
                </article>
            </article>
            <a href="/posts">Back to Posts</a>
        </div>
    </div>
</div>

@endsection