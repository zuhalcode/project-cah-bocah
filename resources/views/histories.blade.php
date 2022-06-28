@extends('layouts.main')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-md-12 mb-5">
      <div class="card">
        <div class="card-body">
          <h3 class=""><i class="bi bi-clock-history me-2"></i>Purchase History</h3>
          <table class="table table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total Price</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @if($histories)
                @foreach($histories as $history)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $history->title }}</td>
                    <td>{{ $history->quantity }}</td>
                    <td>{{ $history->price }}</td>
                    <td>{{ $history->price * $history->quantity }}</td>
                    <td>
                      <form action="/history/{{ $history->id }}" method="POST">
                          @csrf  
                          {{ method_field('DELETE') }}
                          <button type="submit" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
                      </form>
                    </td>
                </tr>              
                @endforeach
              @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection