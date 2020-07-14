<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
<aside id="colorlib-aside" role="complementary" class="js-fullheight">
    <nav id="colorlib-main-menu" role="navigation">
        <ul>
            <li><a href="{{route('case')}}">Home</a></li>
            <li><a href="{{route('layout.list-blog')}}">Fashion</a></li>
            {{--            <li class="colorlib-active"><a href="">Travel</a></li>--}}
            <li><a href="{{route('login')}}">Login</a></li>
        </ul>
    </nav>
    <div class="colorlib-footer">
        <h1 id="colorlib-logo" class="mb-4"><a href="{{route('case')}}index.html"
                                               style="background-image: url({{asset('andrea/images/image_1.jpg')}});">Hùng<span>Blog</span></a>
        </h1>
        <div class="mb-4">
            <h3>Search blogs</h3>
            <form action="{{route('layout.search')}}" class="search-form">
                <div class="form-group d-flex">
                    <div class="icon"><span><button class="icon-paper-plane" type="submit"></button></span></div>
                    <input type="text" class="form-control" name="keyword" placeholder="search for...">
                </div>
            </form>
        </div>
        <p class="pfooter"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script>
            All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a
                    href="https://colorlib.com" target="_blank">RebelVN</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
    </div>
</aside>