@extends('master')
@section('content')
    <div class="container-fluid">
        <ol class="breadcrumb mb-4 mt-4">
            <li class="breadcrumb-item"><a href="">Dash</a></li>
            <li class="breadcrumb-item"><a href="">Blogs</a></li>
            <li class="breadcrumb-item active">Result search</li>
            <li style="margin-left: 600px">
                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="get" action="{{route('blog.search')}}">
                    @csrf
                    <div class="input-group">
                        <input id="search-user" name="keyword" type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <table class="table table-bordered clone2" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Create by</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tfoot id="data-users">
                    @foreach($result as $key => $value)
{{--                        <tr>--}}
{{--                            <td>{{++$key}}</td>--}}
{{--                            <td>{{$value->name}}</td>--}}
{{--                            <td>{{count($value->name)}}</td>--}}
{{--                        </tr>--}}
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ Str::limit($value->title,20)}}</td>
                            <td><p>{{ Str::limit($value->description, 20)}}</p></td>
                            <td>
                                <img src="{{ asset('storage/'. $value->image) }}" alt="" style="width: 100px; height: 100px">
                            </td>
                            <td>{{ $value->category->name}}</td>
                            <td>{{ $value->user->name}}</td>
                            <td>
                                <a href="{{route('blog.show-form-edit',$value->id)}}" class="btn btn-primary">Edit</a>
                                <a href="{{route('blog.delete',$value->id)}}" onclick="return confirm('Warning, it will be delete')" class="btn btn-danger">Delete</a>
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