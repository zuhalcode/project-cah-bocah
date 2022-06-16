@extends('layouts.main')

@section('container')
    <!-- Open Content -->
    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
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
                                <a href="/posts">Back to Posts</a>
                            </div>
                        </div>
                </div>


                <div class="col-auto">
                    <ul class="list-inline pb-3">
                        <li class="list-inline-item text-right">
                            Quantity
                            <input type="hidden" name="product-quanity" id="product-quanity" value="1">
                        </li>
                        <li class="list-inline-item"><span class="btn btn-success" id="btn-minus">-</span></li>
                        <li class="list-inline-item"><span class="badge bg-secondary" id="var-value">1</span></li>
                        <li class="list-inline-item"><span class="btn btn-success" id="btn-plus">+</span></li>
                    </ul>
                </div>
            </div>

            <div class="row pb-3">
                <div class="col d-grid">
                    <button type="submit" class="btn btn-success btn-lg" name="submit" value="buy">Buy</button>
                </div>
                <div class="col d-grid">
                    <button type="submit" class="btn btn-success btn-lg" name="submit" value="addtocard">Add To Cart</button>
                </div>
            </div>
            
        </div>
    </section>

<!-- Start Footer -->
<footer class="bg-dark" id="tempaltemo_footer">
    <div class="container">
        <div class="row">

            <div class="col-md-4 pt-5">
                <h2 class="h2 text-success border-bottom pb-3 border-light logo">Cah Bocah</h2>
                <ul class="list-unstyled text-light footer-link-list">
                    <li>
                        <i class="fas fa-map-marker-alt fa-fw"></i>
                        Bungurasih Dalam, Waru, Sidoarjo
                    </li>
                    <li>
                        <i class="fa fa-phone fa-fw"></i>
                        <a class="text-decoration-none" href="tel:010-020-0340">08972135728</a>
                    </li>
                    <li>
                        <i class="fa fa-envelope fa-fw"></i>
                        <a class="text-decoration-none" href="mailto:info@company.com">cahbocah@gmail.com</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-4 pt-5">
                <h2 class="h2 text-light border-bottom pb-3 border-light">Products</h2>
                <ul class="list-unstyled text-light footer-link-list">
                    <li><a class="text-decoration-none" href="#">Dress</a></li>
                    <li><a class="text-decoration-none" href="#">T-Shirt</a></li>
                </ul>
            </div>

            <div class="col-md-4 pt-5">
                <h2 class="h2 text-light border-bottom pb-3 border-light">Further Info</h2>
                <ul class="list-unstyled text-light footer-link-list">
                    <li><a class="text-decoration-none" href="#">Home</a></li>
                    <li><a class="text-decoration-none" href="#">About Us</a></li>
                    <li><a class="text-decoration-none" href="#">Shop Locations</a></li>
                    <li><a class="text-decoration-none" href="#">Contact</a></li>
                </ul>
            </div>

        </div>

        <div class="row text-light mb-4">
            <div class="col-12 mb-3">
                <div class="w-100 my-3 border-top border-light"></div>
            </div>
            <div class="col-auto me-auto">
                <ul class="list-inline text-left footer-icons">
                    <li class="list-inline-item border border-light rounded-circle text-center">
                        <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/cahbocah.yr/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                    </li>
                    <li class="list-inline-item border border-light rounded-circle text-center">
                        <a class="text-light text-decoration-none" target="_blank" href="https://shopee.co.id/cahbocahofficial"><i class="fab fa-shopee fa-lg fa-fw"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection