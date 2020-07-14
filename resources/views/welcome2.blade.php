<!DOCTYPE html>
<html lang="en">
<head>
    <title>Andrea - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('andrea/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('andrea/css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('andrea/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('andrea/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('andrea/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('andrea/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('andrea/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('andrea/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('andrea/css/jquery.timepicker.css')}}">
    <link rel="stylesheet" href="{{asset('andrea/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('andrea/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('andrea/css/style.css')}}">
</head>
<body>

<div id="colorlib-page">
    <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
    <aside id="colorlib-aside" role="complementary" class="js-fullheight">
        <nav id="colorlib-main-menu" role="navigation">
            <ul>
                <li class="colorlib-active"><a href="{{route('case')}}">Home</a></li>
                <li><a href="{{route('layout.list-blog')}}">Fashion</a></li>
{{--                <li><a href="">Travel</a></li>--}}
                <li><a href="{{route('login')}}">Login</a></li>
            </ul>
        </nav>

        <div class="colorlib-footer">
            <h1 id="colorlib-logo" class="mb-4"><a href="{{route('case')}}index.html" style="background-image: url({{asset('andrea/images/image_1.jpg')}});">Hùng<span>Blog</span></a></h1>
            <div class="mb-4">
                <h3>Search blogs</h3>
                <form action="{{route('layout.search')}}" class="search-form">
                    <div class="form-group d-flex">
                        <div class="icon"><span><button class="icon-paper-plane" type="submit"></button></span></div>
                        <input type="text" class="form-control" name="keyword"  placeholder="search for...">
                    </div>
                </form>
            </div>
            <p class="pfooter"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">RebelVN</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        </div>
    </aside> <!-- END COLORLIB-ASIDE -->
    <div id="colorlib-main">
        <section class="ftco-section ftco-no-pt ftco-no-pb">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-xl-8 py-5 px-md-5">
                        <div class="row pt-md-4">
                            @foreach($blogs as $key =>$blog)
                            <div class="col-md-12">
                                <div class="blog-entry ftco-animate d-md-flex">
                                    <a href="{{route('layout.blog-information',$blog->id)}}" class="img img-2" style="background-image: url({{asset('storage/'.$blog->image)}});"></a>
                                    <div class="text text-2 pl-md-4">
                                        <h3 class="mb-2"><a href="{{route('layout.blog-information',$blog->id)}}">{{\Illuminate\Support\Str::limit($blog->title,30)}}</a></h3>
                                        <div class="meta-wrap">
                                            <p class="meta">
                                                <span><i class="icon-calendar mr-2"></i>{{$blog->category->name}}</span>
                                                <span><a href="{{route('layout.list-blog')}}"><i class="icon-folder-o mr-2"></i>Travel</a></span>
                                                <span><i class="icon-comment2 mr-2"></i>Comment</span>
                                            </p>
                                        </div>
                                        <p class="mb-4">{{\Illuminate\Support\Str::limit($blog->description,100)}}</p>
                                        <p><a href="{{route('layout.blog-information',$blog->id)}}" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a></p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div><!-- END-->
                        <div class="row">
                            <div class="col">
                                <div class="block-27">
                                    <ul>
                                        <li><a href="#">&lt;</a></li>
                                        <li class="active"><span>1</span></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#">&gt;</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 sidebar ftco-animate bg-light pt-5">
                        <div class="sidebar-box ftco-animate">
                            <h3 class="sidebar-heading">Categories</h3>
                            <ul class="categories">
                                @foreach($categories as $key => $category)
                                <li><a href="{{route('layout.list-blog-of-category',$category->id)}}">{{$category->name}} <span>{{count($category->blogs)}}</span></a></li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="sidebar-box ftco-animate">
                            <h3 class="sidebar-heading">Popular Articles</h3>
                            <div class="block-21 mb-4 d-flex">
                                <a class="blog-img mr-4" style="background-image: url({{asset('andrea/images/image_1.jpg')}});"></a>
                                <div class="text">
                                    <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control</a></h3>
                                    <div class="meta">
                                        <div><a href="#"><span class="icon-calendar"></span> June 28, 2019</a></div>
                                        <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
                                        <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-21 mb-4 d-flex">
                                <a class="blog-img mr-4" style="background-image: url({{asset('andrea/images/image_2.jpg')}});"></a>
                                <div class="text">
                                    <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control</a></h3>
                                    <div class="meta">
                                        <div><a href="#"><span class="icon-calendar"></span> June 28, 2019</a></div>
                                        <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
                                        <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-21 mb-4 d-flex">
                                <a class="blog-img mr-4" style="background-image: url({{asset('andrea/images/image_3.jpg')}});"></a>
                                <div class="text">
                                    <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control</a></h3>
                                    <div class="meta">
                                        <div><a href="#"><span class="icon-calendar"></span> June 28, 2019</a></div>
                                        <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
                                        <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="sidebar-box ftco-animate">
                            <h3 class="sidebar-heading">Tag Cloud</h3>
                            <ul class="tagcloud">
                                <a href="#" class="tag-cloud-link">animals</a>
                                <a href="#" class="tag-cloud-link">human</a>
                                <a href="#" class="tag-cloud-link">people</a>
                                <a href="#" class="tag-cloud-link">cat</a>
                                <a href="#" class="tag-cloud-link">dog</a>
                                <a href="#" class="tag-cloud-link">nature</a>
                                <a href="#" class="tag-cloud-link">leaves</a>
                                <a href="#" class="tag-cloud-link">food</a>
                            </ul>
                        </div>

                        <div class="sidebar-box subs-wrap img py-4" style="background-image: url({{asset('andrea/images/image_4.jpg')}});">
                            <div class="overlay"></div>
                            <h3 class="mb-4 sidebar-heading">Newsletter</h3>
                            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia</p>
                            <form action="#" class="subscribe-form">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email Address">
                                    <input type="submit" value="Subscribe" class="mt-2 btn btn-white submit">
                                </div>
                            </form>
                        </div>

                        <div class="sidebar-box ftco-animate">
                            <h3 class="sidebar-heading">Archives</h3>
                            <ul class="categories">
                                <li><a href="#">Decob14 2018 <span>(10)</span></a></li>
                                <li><a href="#">September 2018 <span>(6)</span></a></li>
                                <li><a href="#">August 2018 <span>(8)</span></a></li>
                                <li><a href="#">July 2018 <span>(2)</span></a></li>
                                <li><a href="#">June 2018 <span>(7)</span></a></li>
                                <li><a href="#">May 2018 <span>(5)</span></a></li>
                            </ul>
                        </div>


                        <div class="sidebar-box ftco-animate">
                            <h3 class="sidebar-heading">Paragraph</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut.</p>
                        </div>
                    </div><!-- END COL -->
                </div>
            </div>
        </section>
    </div><!-- END COLORLIB-MAIN -->
</div><!-- END COLORLIB-PAGE -->

<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
<script src="{{asset('andrea/js/jquery.min.js')}}"></script>
<script src="{{asset('andrea/js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('andrea/js/popper.min.js')}}"></script>
<script src="{{asset('andrea/js/bootstrap.min.js')}}"></script>
<script src="{{asset('andrea/js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('andrea/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('andrea/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('andrea/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('andrea/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('andrea/js/aos.js')}}"></script>
<script src="{{asset('andrea/js/jquery.animateNumber.min.js')}}"></script>
<script src="{{asset('andrea/js/scrollax.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false')}}"></script>
<script src="{{asset('andrea/js/google-map.js')}}"></script>
<script src="{{asset('andrea/js/main.js')}}"></script>
</body>
</html>