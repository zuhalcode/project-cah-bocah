@extends('dashboard.layouts.main')
 
@section('container')
<div class="container">
    <div class="row ">
        <div class="col-lg-8">
            <article>
                <h5>{{ $post->name }}</h5>
                <a href="/dashboard/category" class="btn btn-success"><span data-feather="arrow-left">
                    </span>Back to all category</a>
                <a href="" class="btn btn-warning"><span data-feather="arrow-left"></span>Edit</a>
                <form action="/dashboard/category/{{ $post->slug }}" method="category" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger " onclick="return confirm('Are you sure?')"><span
                    data-feather="x-circle"></span>Delete</button>
                  </form>
 
                  @if ($category->image)
                    <img src={{ asset('storage/' . $category->image) }} alt="{{
                    $category->name }}" class="img-fluid"/>
                  @else
                    <img src="https://source.unsplash.com/1200x400?{{ $category->name }}" alt="{{
                    $category->name }}" class="img-fluid"/>
                  @endif
 
 
                <article class="my-3">
                {!! $post->body !!}
                </article>
            </article>
            <a href="/posts">Back to Category</a>
        </div>
    </div>
</div>
@endsection
