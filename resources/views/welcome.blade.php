<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
            </div>
        </div>
    </body><!--Footer-->
    <footer class="page-footer font-small blue pt-4 mt-4">
    
        <!--Footer Links-->
        <div class="container-fluid text-center text-md-left">
            <div class="row">
    
                <!--First column-->
                <div class="col-md-6">
                    <h5 class="text-uppercase">Footer Content</h5>
                    <p>Here you can use rows and columns here to organize your footer content.</p>
                </div>
                <!--/.First column-->
    
                <!--Second column-->
                <div class="col-md-6">
                    <h5 class="text-uppercase">Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#!">Link 1</a></li>
                        <li><a href="#!">Link 2</a></li>
                        <li><a href="#!">Link 3</a></li>
                        <li><a href="#!">Link 4</a></li>
                    </ul>
                </div>
                <!--/.Second column-->
            </div>
        </div>
        <!--/.Footer Links-->
    
        <!--Copyright-->
        <div class="footer-copyright py-3 text-center">
            <div class="container-fluid">
                © 2015 Copyright: <a href="https://mdbootstrap.com/material-design-for-bootstrap/"> MDBootstrap.com </a>
    
            </div>
        </div>
        <!--/.Copyright-->
    
    </footer>
    <!--/.Footer-->
</html>
