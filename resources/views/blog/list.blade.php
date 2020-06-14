@extends('master');
@section('content')
    <div class="container-fluid">
        <ol class="breadcrumb mb-4 mt-4">
            <li class="breadcrumb-item"><a href="">Dash</a></li>
            <li class="breadcrumb-item"><a href="">Blogs</a></li>
            <li class="breadcrumb-item active">List</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i> <a href="{{route('blog.show-form')}}"
                                                                          class="btn btn-success">Create</a>
            </div>
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
                    @foreach($blogs as $key => $value)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $value->title}}</td>
                            <td>{{ $value->description}}</td>
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
