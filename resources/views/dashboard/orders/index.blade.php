@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Orders </h1> 
</div>

@if(session()->has('sucess'))
<div class="alert alert-succes col-lg-8" role="alert">
  {{ session('success') }}
</div>
@endif
<div class="table-responsive col-lg-8">
  <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Name</th>
          <th scope="col">Total Price</th>
          <th scope="col">Payment Status</th>
          <th scope="col">Status</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($orders as $order)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $order->user->name }}</td>
          <td>{{ $order->total_price }}</td>
          <td>{{ $order->status ? 'Paid' : 'Unpaid' }}</td>
          <td>{{ $order->status ? 'Complete' : 'Canceled' }}</td>
    
        </tr>
        @endforeach
      </tbody>
    </table>
</div>
@endsection