@extends('adminlayout.index')
@section('content')
<div class="card-body">
    <p class="card-title mb-0">Carts detail</p>
    <div class="table-responsive">
      <table class="table table-striped table-borderless">
        <thead>
            <tr>
                <th>ID</th>
                <th>Quantity</th>
                <th>Product_id</th>
                <th>User_id</th>

              </tr>
            </thead>
            <tbody>
                @foreach($cart as $cart)
              <tr>
                <td>{{$cart->id}}</td>
                <td class="font-weight-bold">{{$cart->quantity}}</td>
                <td>{{$cart->product_id}}</td>
                <td class="font-weight-medium">{{$cart->user_id}}</></td>


              </tr>
              @endforeach
            </tbody>
      </table>
    </div>
  </div>
@endsection
