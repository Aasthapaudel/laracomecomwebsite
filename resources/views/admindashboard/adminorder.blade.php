@extends('adminlayout.index')
@section('content')
<div class="card-body">
    <p class="card-title mb-0">Order details</p>
    <button type="button" name="" id="" class="btn btn-primary" btn-lg btn-block">Add</button>

    <div class="table-responsive">
      <table class="table table-striped table-borderless">
        <thead>
          <tr>
            <th>ID</th>
            <th>User_id</th>
            <th>Bill</th>
            <th>Status</th>
            <th>User_name</th>
            <th>User_address</th>
            <th>phone_no</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach($order as $order)
          <tr>
            <td>{{$order->id}}</td>
            <td class="font-weight-bold">{{$order->user_id}}</td>
            <td>{{$order->bill}}</td>
            <td class="font-weight-medium"><div class="badge badge-success">{{$order->status}}</div></td>

            <td>{{$order->user_name}}</td>
            <td class="font-weight-bold">{{$order->user_address}}</td>
            <td>{{$order->phone_no}}</td>
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
