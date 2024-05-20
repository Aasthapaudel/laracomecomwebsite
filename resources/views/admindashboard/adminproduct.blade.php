@extends('adminlayout.index')
@section('content')
<div class="card-body">
    <p class="card-title mb-0">Top Products</p>
    <div class="table-responsive">
        <button type="button" name="" id="" class="btn btn-primary" btn-lg btn-block">Add</button>

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
            <th>Action</th>
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
            <td class="font-weight-bold">
                <button type="button" name="" id="" class="btn btn-success" btn-lg btn-block">Edit</button>
                <button type="button" name="" id="" class="btn btn-danger" btn-lg btn-block">Delete</button>
            </td>

          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
