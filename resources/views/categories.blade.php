@extends('layouts.main')


@section('container')
    <div class="container">
        <div class="row">
            {{-- @foreach( $categories as $category) --}}
                <div class="col-md-4 mt-5">
                    <a href="/categories/{{ $categories[0]->slug}}">
                        <div class="card bg-dark text-white">
                            <img src="Gambar/dr.png"
                                class="card-img" alt="{{ $categories[0]->name }}">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                            <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0,0,0,0.7)">
                                {{ $categories[0]->name }}</h5>  
                            </div>
                        </div> 
                    </a>               
                </div>
            {{-- @endforeach --}}
        </div>
    </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            {{-- @foreach( $categories as $category) --}}
                <div class="col-md-4 mt-5">
                    <a href="/categories/{{ $categories[1]->slug}}">
                        <div class="card bg-dark text-white">
                            <img src="Gambar/ruffle.jpg"
                                class="card-img" alt="{{ $categories[1]->name }}">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                            <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0,0,0,0.7)">
                                {{ $categories[1]->name }}</h5>  
                            </div>
                        </div> 
                    </a>               
                </div>
            {{-- @endforeach --}}
        </div>
    </div>
        </div>
    </div>
    
@endsection
