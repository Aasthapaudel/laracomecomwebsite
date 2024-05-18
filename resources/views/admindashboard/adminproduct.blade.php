@extends('adminlayout.index')
@section('content')
<div class="card-body">
    <p class="card-title mb-0">Top Products</p>
    <div class="table-responsive">
      <table class="table table-striped table-borderless">
        <thead>
          <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Price</th>
            <th>Picture</th>
            <th>Category_id</th>
            <th>Type</th>
            <th>Isadmin</th>
          </tr>
        </thead>
        <tbody>
            @foreach($product as $product)
          <tr>
            <td>{{$product->id}}</td>
            <td class="font-weight-bold">{{$product->title}}</td>
            <td>{{$product->price}}</td>
            <td class="font-weight-medium">{{$product->picture}}</></td>

            <td>{{$product->category_id}}</td>
            <td class="font-weight-bold">{{$product->type}}</td>
            <td>{{$product->isadmin}}</td>

          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
