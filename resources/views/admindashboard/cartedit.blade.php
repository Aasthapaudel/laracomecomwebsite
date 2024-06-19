<x-crudheader/>
    <p class="card-title mb-0">Edit Product</p>
    <a href="{{route('admincart.index')}}"  class="btn btn-dark">Back</a>



    <!-- resources/views/records/edit.blade.php -->


    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('admincart.update', $cart->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="id">ID</label>
            <input type="text" class="form-control" id="id" name="id" value="{{ $cart->id }}" readonly>
        </div>

        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $cart->quantity }}">
        </div>

        <div class="form-group">
            <label for="product_id">Product ID</label>
            <input type="text" class="form-control" id="product_id" name="product_id" value="{{ $cart->product_id }}">
        </div>

        <div class="form-group">
            <label for="user_id">User ID</label>
            <input type="text" class="form-control" id="user_id" name="user_id" value="{{ $cart->user_id }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>


<x-crudfooter/>
