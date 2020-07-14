@extends('master')
@section('content')
    <div class="container-fluid">
        <ol class="breadcrumb mb-4 mt-4">
            <li class="breadcrumb-item"><a href="">Dash</a></li>
            <li class="breadcrumb-item"><a href="">Categories</a></li>
            <li class="breadcrumb-item active">List</li>
            <li style="margin-left: 600px"><form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="get" action="{{route('blog.search')}}">
                    <div class="input-group">
                        <input type="text" name="keyword" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </li>

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
                        <th>ID category</th>
                        <th>Blog Posts</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tfoot id="data-users">
                    @foreach($categories as $key => $category)
                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{ $category->name}}</td>
                            <td>{{$category->id}}</td>
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
