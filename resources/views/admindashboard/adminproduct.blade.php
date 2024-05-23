@extends('adminlayout.index')
@section('content')
<div class="card-body">
    <p class="card-title mb-0">Top Products</p>
    <div class="table-responsive">
<form action="{{ url('productcreate') }}" method="get">
    <button type="submit" class="btn btn-primary  btn-block">Add</button>
</form>
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
            <td class="font-weight-medium"><img src="{{URL::asset($product->picture)}}" alt="pic" srcset="" width="80"></td>

            <td>{{$product->category_id}}</td>
            <td class="font-weight-bold">{{$product->type}}</td>
            <td>{{$product->isadmin}}</td>
            <td class="font-weight-bold">
                <a href="{{ route('adminproducts.edit', $product->id) }}" class="btn btn-success" btn-lg btn-block">Edit</a>
                        <form action="{{ route('adminproducts.destroy', $product->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" btn-lg btn-block onclick="return confirm('Are you sure you want to delete this product?');">Delete</button>
                        {{-- </form>               <button type="button" name="" id="" class="btn btn-danger" btn-lg btn-block">Delete</button> --}}
            </td>

          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
