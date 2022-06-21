@extends('layouts.main')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-md-12 mb-5">
      <div class="card">
        <div class="card-body">
          <h3 class=""><i class="bi bi-cart-fill me-2"></i>Checkout</h3>
          <table class="table table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Product</th>
                <th>Quantity</th>
                <th>Product price</th>
                <th>Total</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @if($checkouts)
              @foreach($checkouts as $checkout)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $checkout->post->title }}</td>
                <td>{{ $checkout->quantity }}</td>
                <td>{{ $checkout->post->price }}</td>
                <td>{{ $checkout->price }}</td>
                <td>
                  <form action="/orders/{{ $checkout->id }}" method="POST">
                    @csrf  
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
                  </form>
                </td>
              </tr>              
              @endforeach
              <tr>
                <td colspan="4" align="right">Total harga : </td>
                <td>Rp. {{ number_format($orders->total_price) }}</td>
                <td>
                  <a href="/confirm" class="btn btn-success">
                    <i class="bi bi-cart-fill"></i>
                    Checkout
                  </a>
                </td>
              </tr>
              
              @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection