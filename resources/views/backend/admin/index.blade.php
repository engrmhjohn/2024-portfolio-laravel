@extends('backend.master')
@section('title')
Admin :: User Management
@endsection
@section('content')
<div class="row">
    @if (Session::has('message'))
    <div class="col-lg-12">
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ Session::get('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
    @endif


    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Admin :: User Management
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Role</th>
                                <th class="text-center bg-warning text-white">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>
                                    @if($user->role == 2)
                                    Super Admin
                                    @elseif($user->role == 1)
                                    Admin
                                    @else
                                    Not Admin
                                    @endif
                                </td>
                                <td class="d-flex">
                                    @if($user->role == 0)
                                    <a class="btn btn-success" href="{{ route('role', ['id' => $user->id, 'newRole' => 1]) }}">Make Admin</a>
                                    <a class="btn btn-primary" href="{{ route('role', ['id' => $user->id, 'newRole' => 2]) }}">Make Super Admin</a>
                                    @elseif($user->role == 1)
                                    <a class="btn btn-secondary" href="{{ route('role', ['id' => $user->id, 'newRole' => 0]) }}">Remove Admin</a>
                                    <a class="btn btn-primary" href="{{ route('role', ['id' => $user->id, 'newRole' => 2]) }}">Make Super Admin</a>
                                    @elseif($user->role == 2)
                                    <a class="btn btn-danger" href="{{ route('role', ['id' => $user->id, 'newRole' => 0]) }}">Remove Super Admin</a>
                                    <a class="btn btn-success" href="{{ route('role', ['id' => $user->id, 'newRole' => 1]) }}">Make Admin</a>
                                    @endif
                                    <form action="{{ route('delete_admin',['id'=>$user->id]) }}" method="post">
                                        <button class="btn btn-danger text-white" onclick="return confirm('Are you sure?');" type="submit">Delete Admin</button>
                                        @csrf
                                        @method('delete')
                                    </form>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection