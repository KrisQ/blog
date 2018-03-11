<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css" type="text/css" rel="stylesheet"/>
        <!-- Sticky Footer -->
        <style>
            body {
                display: flex;
                min-height: 100vh;
                flex-direction: column;
            }

            main {
                flex: 1 0 auto;
            }
        </style>
    </head>
    <body>
        <nav class="amber darken-4" role="navigation">
            <div class="nav-wrapper container">
                <!-- Dropdown Button -->
                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
                <!-- Navigation Branding -->
                <a id="logo-container" href="{{ url('/') }}" class="brand-logo">Bitch</a>
                @guest
                    <!-- Expanded navigation -->
                    <ul class="right hide-on-med-and-down">
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    </ul>
                    <!-- Collapsed navigation -->
                    <ul id="nav-mobile" class="side-nav">
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    </ul>
                @else
                    <!-- Expanded navigation -->
                    <ul class="right hide-on-med-and-down">
                        <li>
                          <a class="waves-effect" href="/admin" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                              Admin
                          </a>
                            <a class="waves-effect" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                    <!-- Collapsed navigation -->
                    <ul id="nav-mobile" class="side-nav">
                        <li>
                            <a class="waves-effect" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                @endguest
            </div>
        </nav>
        <br>
        <main>
            @yield('content')
        </main>
        <footer class="page-footer amber darken-4">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Company Bio</h5>
                        <p class="grey-text text-lighten-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>


                    </div>
                    <div class="col l3 s12 offset-l3">
                        <h5 class="white-text">Connect</h5>
                        <ul>
                            <li><a class="white-text" href="#">Link 1</a></li>
                            <li><a class="white-text" href="#">Link 2</a></li>
                            <li><a class="white-text" href="#">Link 3</a></li>
                            <li><a class="white-text" href="#">Link 4</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    <span class="white-text">Template made by <a class="red-text text-lighten-4" href="http://Roderik-Rasterhoff.nl">Roderik Rasterhoff</a></span>
                </div>
            </div>
        </footer>
        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js" type="text/javascript"></script>
        <script>
            $(document).ready(function() {
                Materialize.updateTextFields();

                $(".button-collapse").sideNav();
            });
            @if(session('status'))
                Materialize.toast('{{ session("status") }}', 4000);
            @endif
        </script>
    </body>
</html>
