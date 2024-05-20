@extends('adminlayout.index')
@section('content')
<div class="card-body">
    <p class="card-title mb-0">Top Products</p>
    <div class="table-responsive">
        <button type="button" name="" id="" class="btn btn-primary" btn-lg btn-block">Add</button>

      <table class="table table-striped table-borderless">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>RememberToken</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach($user as $user)
              <tr>
                <td>{{$user->id}}</td>
                <td class="font-weight-bold">{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td class="font-weight-medium">{{$user->password}}</div></td>

                <td>{{$user->timestamps}}</td>
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
