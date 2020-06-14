@extends('master')
@section('content')
    <div class="container-fluid">
        <ol class="breadcrumb mb-4 mt-4">
            <li class="breadcrumb-item"><a href="">Dash</a></li>
            <li class="breadcrumb-item"><a href="">Users</a></li>
            <li class="breadcrumb-item active">List</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i> <a href="{{route('user.show-form')}}" class="btn btn-success">Create</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered clone2" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Image</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tfoot id="data-users">
                    @foreach($users as $key => $user)
                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->username}}</td>
                            <td>
                                <img src="{{ asset('storage/'. $user->image) }}" alt="" style="width: 100px; height: 100px">
                            </td>
                            <td>{{ $user->role}}</td>
                            <td>
                                <a href="{{route('user.show-form-edit',$user->id)}}" class="btn btn-primary">Edit</a>
                                <a href="{{route('user.delete',$user->id)}}" onclick="return confirm('Warning, User and Blogs of User will be delete!')" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    @toastr_render
@endsection
