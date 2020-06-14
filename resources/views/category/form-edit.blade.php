@extends('master')
@section('content')
    <div class="container-fluid">
        <div class="card-body">
            <form method="post" action="{{route('category.edit',$category->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Category Name</label>
                    <input type="text" value="{{$category->name}}" name="name" class="form-control">
                    @if($errors)
                        <p class="text-danger">{{$errors->first('name')}}</p>
                    @endif
                </div>
                <div class="form-group">
                    <input type="submit" onclick="return confirm('Are you sure you changed ?')" value="Edit" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
@endsection
