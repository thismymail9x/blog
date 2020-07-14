@extends('layout.master')
@section('content')
    <div class="col-xl-12 py-5 px-md-5">
        <div class="row pt-md-8">
            @foreach($blogs as $key =>$blog)
                <div class="col-md-12">
                    <div class="blog-entry ftco-animate d-md-flex">
                        <a href="{{route('layout.blog-information',$blog->id)}}" class="img img-2"
                           style="background-image: url({{asset('storage/'.$blog->image)}})"></a>
                        <div class="text text-2 pl-md-4">
                            <h3 class="mb-2"><a
                                        href="{{route('layout.blog-information',$blog->id)}}">{{$blog->title}}</a></h3>
                            <div class="meta-wrap">
                                <p class="meta">
                                    <span><i class="icon-calendar mr-2"></i>June 28, 2019</span>
                                    <span><a href="single.html"><i class="icon-folder-o mr-2"></i>Travel</a></span>
                                    <span><i class="icon-comment2 mr-2"></i>Comment</span>
                                </p>
                            </div>
                            <p class="mb-4">{{$blog->description}}</p>
                            <p><a href="{{route('layout.blog-information',$blog->id)}}" class="btn-custom">Read More
                                    <span
                                            class="ion-ios-arrow-forward"></span></a></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div><!-- END-->
    </div>
@endsection