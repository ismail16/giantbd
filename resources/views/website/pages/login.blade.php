<!DOCTYPE>

<html>
    <title>Giant login</title>
    <head>
        <link rel="stylesheet" href="{{asset('frontend_assets/assets/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
        <link href="{{asset('frontend_assets/css/login.css')}}" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div style="background-image:url('/frontend_assets/assets_front/images/Home-Page.jpg'); background-repeat:no-repeat; background-position:center; background-size:cover; padding:10px; height: 100vh; ">
            <div class="container">
                <div class="login-form">
                    <div class="main-div">
                        <div class="panel">
                           <h2>Admin Login</h2>
                           <p>Please enter your email and password</p>
                       </div>
                         <form action="{{route('login')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>