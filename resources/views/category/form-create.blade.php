@extends('master')
@section('content')
    <div class="container-fluid">
        <div class="card-body">
            <form method="post" action="{{route('category.create')}}" >
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1"> Category Name</label>
                    <input type="text" name="name" class="form-control">
                    @if($errors)
                        <p class="text-danger">{{$errors->first('name')}}</p>
                    @endif
                </div>
                <div class="form-group">
                    <input type="submit" value="Create" class="btn btn-success">
                    <a href="{{route('blog.index')}}" class="btn btn-warning">Cancel</a>

                </div>
            </form>
        </div>
    </div>
@endsection
