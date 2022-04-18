@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row ">
        <div class="col-lg-8">
            <article>
                <h2>{{ $post->title }}</h2>
                <h5>{{ $post->name }}</h5>
                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left">
                    </span>Back to all post</a>
                <a href="" class="btn btn-warning"><span data-feather="arrow-left"></span>Edit</a>
                <a href="" class="btn btn-danger"><span data-feather="arrow-left"></span>Delete</a>
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" 
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