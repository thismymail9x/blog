<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="{{asset('css/login.css')}}">
<!------ Include the above in your HEAD tag ---------->
<div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Tabs Titles -->

        <!-- Icon -->
        <div class="fadeIn first">
            <img src="https://www.esa.int/var/esa/storage/images/esa_multimedia/images/2013/11/security/14429033-1-eng-GB/Security_pillars.jpg" id="icon" alt="User Icon" />
            <h3>Login</h3>
        </div>

        <!-- Login Form -->
        <form method="post" action="{{route('login')}}">
            @csrf
            <input type="text" id="login" class="fadeIn second" name="email" placeholder="username">
            <input type="password" id="password" class="fadeIn second" name="password" placeholder="password">
            <input type="submit" class="fadeIn fourth" value="Log In">
        </form>
        <!-- Remind Passowrd -->
        <div id="formFooter">
            <a class="underlineHover" href="{{route('case')}}">Go to the Site</a>
        </div>

    </div>
</div>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>