@extends('adminlayout.index')
@section('content')
<div class="card-body">
    <p class="card-title mb-0">User Profile </p>
    <div class="table-responsive">

      <table class="table table-striped table-borderless">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach($user as $user)
              <tr>
                <td>{{$user->id}}</td>
                <td class="font-weight-bold">{{$user->name}}</td>
                <td>{{$user->email}}</td>

                <td class="font-weight-bold">
                    {{-- <button type="button" name="" id="" class="btn btn-success" btn-lg btn-block">Edit</button> --}}
                    <form action="{{ route('adminusers.destroy', $user->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" btn-lg btn-block onclick="return confirm('Are you sure you want to delete this product?');">Delete</button>
                    </form>                </td>
              </tr>
              @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
