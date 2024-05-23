@extends('adminlayout.index')

@section('content')
<div class="card-body">
    <p class="card-title mb-0">Edit Product</p>
    <form action="{{ route('productcrud.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $product->title }}" required>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}" required>
        </div>
        <div class="form-group">
            <label for="picture">Picture</label>
            <input type="file" class="form-control" id="picture" name="picture">
            @if($product->picture)
                <img src="{{ URL::asset($product->picture) }}" alt="pic" width="80">
            @endif
        </div>
        <div class="form-group">
            <label for="category_id">Category ID</label>
            <input type="number" class="form-control" id="category_id" name="category_id" value="{{ $product->category_id }}" required>
        </div>
        <div class="form-group">
            <label for="type">Type</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ $product->type }}" required>
        </div>
        <div class="form-group">
            <label for="isadmin">Is Admin</label>
            <select class="form-control" id="isadmin" name="isadmin" required>
                <option value="1" {{ $product->isadmin ? 'selected' : '' }}>Yes</option>
                <option value="0" {{ !$product->isadmin ? 'selected' : '' }}>No</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update Product</button>
    </form>
</div>
@endsection
