@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Product </h1> 
</div>

<div class="col -lg-8">
    <form method="category" action="/dashboard/category/{{ $post->slug }}" class="mb-5" 
      enctype="multipart/form-data">
      @method('put')
      @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control @error('title') is invalid @enderror" id="title" 
        name="title" required autofocus value="{{ old('title', $post->title) }}">
        @error('title')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
    <div class="mb-3">
      <label for="slug" class="form-label">Slug</label>
      <input type="text" class="form-control @error('slug') is invalid @enderror" id="slug" 
      name="slug" name="slug" required value="{{ old('slug', $post->slug) }}">
      @error('slug')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
       @enderror
    </div>


      <div class="mb-3">
        <label for="image" class="form-label mb-3">Upload Image</label>
        <br>
        <input type="hidden" name="oldImage" value="{{ $post->image }}">
        @if($post->image)
        <img src="{{ asset('storage/post-images/'.$post->image) }}" class="img-preview img-fluid mb-3"
        d-block>
        @else
          <img class="img-preview img-fluid mb-3">
        @endif
        <img class="img-preview img-fluid">
        <input class="form-control @error('image') is invalid @enderror" type="file" id="image" 
        name="image" onchange="previewImage">
        @error('image')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
      </div>

      <button type="submit" class="btn btn-dark">Update Category</button>
    </form>

  <script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');
  
   title.addEventListener('change', function(){
     fetch('/dashboard/posts/checkSlug?title=' + title.value)
      .then(response => response.json())
      .then(data => slug.value = data.slug)
   });

  document.addEventListener('trix-file-accept', function(e){
    e.preventDefault();
});

function previewImage(){
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent) {
      imgPreview.src = oFREvent.target.result;

    }
  }
 
  </script>
@endsection