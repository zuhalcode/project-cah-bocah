@extends('layouts.main')

@section('container')
    <!-- Open Content -->
    {{-- <section class="">
        <form class="pb-5" action="/orders" method="POST">
            @csrf
            <div class="row d-flex justify-content-center">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        <article class="">
                            <h2>{{ $post["title"] }}</h2>
                            <h5>{{ $post["name"] }}</h5>
                            <p>Kategori: <a href="/categories/{{ $post->category->slug }}">
                                {{ $post->category->name }}</a>
                            </p>
                            @if ($post->image)
                                <img src={{ asset('storage/' . $post->image) }} alt="{{
                                $post->category->name }}" class="img-fluid"/>
                            @else
                                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{
                                $post->category->name }}" class="img-fluid"/>
                            @endif
                        </article>

                        <div class="card">
                            <div class="card-body mb-3">
                                <article class="my-3">
                                    {!! $post->body !!}
                                    </article>
                                </article>
                                <a href="/posts">Back to Product</a>
                            </div>
                        </div>
                </div>
            </div>

            <div class="row pb-3">
                <div class="col d-grid">
                    <button type="submit" class="btn btn-success btn-md" name="submit" value="addtocard">Add To Cart</button>
                </div>
            </div>
            
        </form>
    </section> --}}

    <section class="container mb-5">
        <div class="row">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/posts">Product</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $post->title }}</li>
                    </ol>
                </nav>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                @if ($post->image)
                                    <img src={{ asset('storage/' . $post->image) }} alt="{{
                                    $post->category->name }}" class="img-fluid"/>
                                @else
                                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{
                                    $post->category->name }}" class="img-fluid"/>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <h2>{{ $post->title }}</h2>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Price</td>
                                            <td>:</td>
                                            <td>Rp. {{ number_format($post->price) }}</td>
                                        </tr>
                                        <tr>
                                            <td>Stock</td>
                                            <td>:</td>
                                            <td>{{ number_format($post->stock) }}</td>
                                        </tr>
                                        <tr>
                                            <td>Description</td>
                                            <td>:</td>
                                            <td>{!! $post->body !!}</td>
                                        </tr>
                                        
                                            <tr>
                                                <td>Amount</td>
                                                <td>:</td>
                                                <td>
                                                    <form action="/orders/{{ $post->id }}" method="post">
                                                        @csrf
                                                        <input type="text" name="quantity" class="form-control" autocomplete="off">
                                                        <button type="submit" class="btn btn-success mt-2"><i class="bi bi-cart"></i>Add to cart</button>
                                                    </form>
                                                </td>
                                            </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection