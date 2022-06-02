@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Category </h1> 
</div>

@if(session()->has('sucess'))
<div class="alert alert-succes col-lg-8" role="alert">
  {{ session('succes') }}
</div>
@endif

<div class="table-responsive col-lg-8">
  <a href= "/dashboard/category/create" class="btn btn-dark mb-3">Create New Category</a>
  <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($categories as $post)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $post->name }}</td>
          
          <td>
              <a href="/dashboard/category/{{ $post->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
              <a href="/dashboard/category/{{ $post->slug }}/edit" class="badge bg-warning"><span 
              data-feather="edit"></span></a>
              <form action="/dashboard/category/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span></button>
              </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
</div>
@endsection