<x-crudheader />
            <p class="card-title mb-0">Add New Product</p>
            <a href="{{route('productcrud.index')}}"  class="btn btn-dark">Back</a>
            <form action="{{ route('productcrud.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" id="price" name="price" required>
                </div>
                <div class="form-group">
                    <label for="picture">Picture</label>
                    <input type="file" class="form-control" id="picture" name="picture" required>
                </div>
                <div class="form-group">
                    <label for="category_id">Category ID</label>
                    <input type="number" class="form-control" id="category_id" name="category_id" required>
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" class="form-control" id="type" name="type" required>
                </div>
                <div class="form-group">
                    <label for="isadmin">Is Admin</label>
                    <select class="form-control" id="isadmin" name="isadmin" required>
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Add Product</button>
            </form>

<x-crudfooter />
