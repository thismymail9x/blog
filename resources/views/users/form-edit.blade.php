@extends('master');
@section('content')
    <div class="container-fluid">
        <div class="card-body">
            <form method="post" action="{{route('user.edit',$user->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Name</label>
                    <input type="text" value="{{$user->name}}" name="name" class="form-control">
                    @if($errors)
                        <p class="text-danger">{{$errors->first('name')}}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Username</label>
                    <input type="text" value="{{$user->email}}" name="email" class="form-control">
                    @if($errors)
                        <p class="text-danger">{{$errors->first('email')}}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Image</label>
                    <input type="file"  name="image" class="form-control">
                    @if($errors)
                        <p class="text-danger">{{$errors->first('image')}}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Password</label>
                    <input type="text"  name="password" class="form-control">
                    @if($errors)
                        <p class="text-danger">{{$errors->first('password')}}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Role</label>
                    <input type="text" value="{{$user->role}}" name="role" class="form-control">
                    @if($errors)
                        <p class="text-danger">{{$errors->first('role')}}</p>
                    @endif
                </div>

                <div class="form-group">
                    <input type="submit" onclick="return confirm('Are you sure you changed ?')" value="Edit" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
    @toastr_render
@endsection
