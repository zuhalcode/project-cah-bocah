@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row ">
        <div class="col-lg-8 mb-3">
            <article>
                <h2>{{ $post->title }}</h2>
                <h5>{{ $post->name }}</h5>
                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left">
                    </span>Back to all post</a>
                <a href="" class="btn btn-warning"><span data-feather="arrow-left"></span>Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger " onclick="return confirm('Are you sure?')"><span 
                    data-feather="x-circle"></span>Delete</button>
                  </form>

                  @if ($post->image)
                    <img src={{ asset('storage/' . $post->image) }} alt="{{ 
                    $post->category->name }}" class="img-fluid mt-3"/>
                  @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ 
                    $post->category->name }}" class="img-fluid"/>
                  @endif

                  <h5>{{ $post->harga}}</h5>


                <article class="my-3">
                {!! $post->body !!}
                </article>
            </article>
            <a href="/posts">Back to Posts</a>
        </div>
    </div>
</div>
@endsection