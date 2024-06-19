@extends('adminlayout.index')
@section('content')
<div class="card-body">
    <p class="card-title mb-0">Order details</p>

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
                @if($order->status !== 'approved')
                <form action="{{ route('orders.approve', $order->id) }}" method="POST" id="approve-form-{{ $order->id }}" style="display: inline;">
                    @csrf
                    @method('PUT')
                    <button type="button" class="btn btn-success" onclick="document.getElementById('approve-form-{{ $order->id }}').submit();">
                        Approve
                    </button>
                </form>
            @else
                <button class="btn btn-secondary" disabled>Approved</button>
            @endif                <form action="{{ route('adminorders.destroy', $order->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" btn-lg btn-block onclick="return confirm('Are you sure you want to delete this product?');">Delete</button>
                </form>            </td>
          </tr>
          @endforeach
                   </tbody>
      </table>
    </div>
  </div>
@endsection
