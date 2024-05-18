@extends('adminlayout.index')
@section('content')
<div class="card-body">
    <p class="card-title mb-0">Top Products</p>
    <div class="table-responsive">
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
                <td class="font-weight-bold"></td>
              </tr>
              @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
