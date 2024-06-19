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
                <th>Action</th>

              </tr>
            </thead>
            <tbody>
                @foreach($cart as $cart)
              <tr>
                <td>{{$cart->id}}</td>
                <td class="font-weight-bold">{{$cart->quantity}}</td>
                <td>{{$cart->product_id}}</td>
                <td class="font-weight-medium">{{$cart->user_id}}</td>
                <td class="font-weight-bold">
                    <a href="{{ route('admincart.edit', $cart->id) }}" class="btn btn-success" btn-lg btn-block">Edit</a>
                    <form action="{{ route('admincart.destroy', $cart->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" btn-lg btn-block onclick="return confirm('Are you sure you want to delete this product?');">Delete</button>
                    </form>                </td>


              </tr>
              @endforeach
            </tbody>
      </table>
    </div>
  </div>
@endsection
