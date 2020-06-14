@extends('master');
@section('content')
    <div class="container-fluid">
        <ol class="breadcrumb mb-4 mt-4">
            <li class="breadcrumb-item"><a href="">Dash</a></li>
            <li class="breadcrumb-item"><a href="">Categories</a></li>
            <li class="breadcrumb-item active">List</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i> <a href="{{route('category.show-form')}}" class="btn btn-success">Create</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered clone2" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Name</th>
                        <th>Blog Posts</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tfoot id="data-users">
                    @foreach($categories as $key => $category)
                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{ $category->name}}</td>
                            <td>{{count($category->blogs)}}</td>
                            <td>
                                <a href="{{route('category.show-form-edit',$category->id)}}" class="btn btn-primary">Edit</a>
                                <a href="{{route('category.delete',$category->id)}}" onclick="return confirm('Warning, it will be delete')" class="btn btn-danger">Delete</a>
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
