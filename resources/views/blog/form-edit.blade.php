@extends('master')
@section('content')
    <div class="container-fluid">
        <div class="card-body">
            <form method="post" action="{{route('blog.edit',$blog->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Tittle</label>
                    <input type="text" value="{{$blog->title}}" name="title" class="form-control">
                    @if($errors)
                        <p class="text-danger">{{$errors->first('title')}}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Description</label>
                    <input type="text" value="{{$blog->description}}" name="description" class="form-control">
                    @if($errors)
                        <p class="text-danger">{{$errors->first('description')}}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Categories</label>
                    <select class="form-control" name="category" id="exampleFormControlSelect1">
                        @foreach($categories as $key)
                            <option value="{{$key->id}}" @if($blog->category_id == $key->id) selected @endif>{{$key->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Content</label>
                    <textarea class="form-control"  name="content" id="editor" rows="3"></textarea>
                    @if($errors)
                        <p class="text-danger">{{$errors->first('content')}}</p>
                    @endif
                </div>
                <div class="form-group">
                    <input type="submit" onclick="return confirm('Are you sure you changed ?')" value="Edit" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
@endsection
