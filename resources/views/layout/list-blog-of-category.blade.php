@extends('layout.master')
@section('content')
    <div class="col-lg-8 px-md-5 py-5">
        <div class="row pt-md-4">
            @foreach($blogs as $key =>$blog)
                <div class="col-md-12">
                    <div class="blog-entry-2 ftco-animate">
                        <a href="{{route('layout.blog-information',$blog->id)}}" class="img"
                           style="background-image: url({{asset('storage/'.$blog->image)}});"></a>
                        <div class="text pt-4">
                            <h3 class="mb-4"><a
                                        href="{{route('layout.blog-information',$blog->id)}}">{{$blog->title}}</a></h3>
                            <p class="mb-4">{{$blog->description}}</p>
                            <div class="author mb-4 d-flex align-items-center">
                                <a href="{{route('layout.blog-information',$blog->id)}}" class="img"
                                   style="background-image: url({{asset('andrea/images/person_1.jpg')}}"></a>
                                <div class="ml-3 info">
                                    <span>Written by</span>
                                    <h3><a href="#">Admin</a>, <span></span></h3>
                                </div>
                            </div>
                            <div class="meta-wrap d-md-flex align-items-center">
                                <div class="half order-md-last text-md-right">
                                    <p class="meta">
                                        <span><i class="icon-heart"></i>50</span>
                                        <span><i class="icon-eye"></i>100</span>
                                        <span><i class="icon-comment"></i>5</span>
                                    </p>
                                </div>
                                <div class="half">
                                    <p><a href="{{route('layout.blog-information',$blog->id)}}" class="btn btn-primary p-3 px-xl-4 py-xl-3">Continue Reading</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div><!-- END-->
    </div>
@endsection