<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        
    <!-- Bootstrap core CSS -->
    <link href = {{ asset("bootstrap/css/bootstrap.css") }} rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href = {{ asset("bootstrap/css/sticky-footer-navbar.css") }} rel="stylesheet" />

    <!-- Optional theme -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap-theme.min.css') }}">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
        <div>
            <div class="container"><h1>Bootstrap  tab panel example (using nav-pills)  </h1></div>
            <div id="exTab1" class="container">	
            <ul  class="nav nav-pills">
                        <li class="active">
                    <a  href="#1a" data-toggle="tab">Overview</a>
                        </li>
                        <li><a href="#2a" data-toggle="tab">Using nav-pills</a>
                        </li>
                        <li><a href="#3a" data-toggle="tab">Applying clearfix</a>
                        </li>
                      <li><a href="#4a" data-toggle="tab">Background color</a>
                        </li>
                    </ul>
            
                        <div class="tab-content clearfix">
                          <div class="tab-pane active" id="1a">
                      <h3>Content's background color is the same for the tab</h3>
                            </div>
                            <div class="tab-pane" id="2a">
                      <h3>We use the class nav-pills instead of nav-tabs which automatically creates a background color for the tab</h3>
                            </div>
                    <div class="tab-pane" id="3a">
                      <h3>We applied clearfix to the tab-content to rid of the gap between the tab and the content</h3>
                            </div>
                      <div class="tab-pane" id="4a">
                      <h3>We use css to change the background color of the content to be equal to the tab</h3>
                            </div>
                        </div>
              </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </body>
</html>
