
@extends('adminlayout.index')
@section('content')
<div class="card-body">
    <p class="card-title mb-0">Carts detail</p>
    <div class="table-responsive">
      <table class="table table-striped table-borderless">
        <button type="button" name="" id="" class="btn btn-primary" btn-lg btn-block">Add</button>

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
              <tr>
                <td></td>
                <td class="font-weight-bold"></td>
                <td></td>
                <td class="font-weight-medium"></td>
                <td class="font-weight-bold">
                    <button type="button" name="" id="" class="btn btn-success" btn-lg btn-block">Edit</button>
                    <button type="button" name="" id="" class="btn btn-danger" btn-lg btn-block">Delete</button>
                </td>


              </tr>
            </tbody>
      </table>
    </div>
  </div>
@endsection
