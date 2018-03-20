@php
  use Illuminate\Support\Facades\Auth;
  $user = Auth::user();
@endphp
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
    <body class="light-blue lighten-3">
      <aside id="left-sidebar-nav">
                <ul id="slide-out" class="side-nav fixed leftside-navigation ps-container ps-active-y light-blue lighten-1" style="transform: translateX(0px);">
                  <li>
                    <ul class="collapsible" data-collapsible="accordion">
                      <li class="bold">
                      </div>
                        <a class="waves-effect waves-cyan collapsible-header">
                          @if ($user)
                              <div class="chip light-blue lighten-3">
                                  {{-- <img src="https://images.unsplash.com/photo-1496134732667-ae8d2853a045?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=e4dd1c9106a69065ccfa21a36cfb53b1&auto=format&fit=crop&w=2850&q=80" alt="Contact Person"> --}}
                                  {{$user->name}}
                              </div>
                          @else
                              <div class="chip light-blue lighten-3">
                                Welcome
                              </div>

                          @endif
                        </a>
                        <div class="collapsible-body light-blue lighten-4">
                          <ul>
                            <li>
                              <a href="user-profile-page.html">
                                <i class="material-icons">keyboard_arrow_right</i>
                                <span>User Profile</span>
                              </a>
                            </li>
                            <li>
                              <a href="user-login.html">
                                <i class="material-icons">keyboard_arrow_right</i>
                                <span>Login</span>
                              </a>
                            </li>
                            <li>
                              <a href="/home">
                                <i class="material-icons">keyboard_arrow_right</i>
                                <span>Home</span>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <li class="no-padding">
                    <ul class="collapsible" data-collapsible="accordion">
                      <li class="bold">
                        <a class="collapsible-header waves-effect waves-cyan">
                          <i class="material-icons">dashboard</i>
                          <span class="nav-text">Dashboard</span>
                        </a>
                      </li>
                      <li class="bold">
                        <a class="collapsible-header waves-effect waves-cyan">
                          <i class="material-icons">account_circle</i>
                          <span class="nav-text">Users</span>
                        </a>
                        <div class="collapsible-body light-blue lighten-4">
                          <ul>
                            <li>
                              <a href="{{route('users.index')}}">
                                <i class="material-icons">keyboard_arrow_right</i>
                                <span>All Users</span>
                              </a>
                            </li>
                            <li>
                              <a href="{{route('users.create')}}">
                                <i class="material-icons">keyboard_arrow_right</i>
                                <span>Create User</span>
                              </a>
                            </li>
                            {{-- <li>
                              <a href="{{route('users.edit')}}">
                                <i class="material-icons">keyboard_arrow_right</i>
                                <span>Edit Users</span>
                              </a>
                            </li> --}}
                          </ul>
                        </div>
                      </li>
                      <li class="bold">
                        <a class="collapsible-header waves-effect waves-cyan">
                          <i class="material-icons">edit</i>
                          <span class="nav-text">Posts</span>
                        </a>
                        <div class="collapsible-body light-blue lighten-4">
                          <ul>
                            <li>
                              <a href="user-profile-page.html">
                                <i class="material-icons">keyboard_arrow_right</i>
                                <span>User Profile</span>
                              </a>
                            </li>
                            <li>
                              <a href="user-login.html">
                                <i class="material-icons">keyboard_arrow_right</i>
                                <span>Login</span>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </li>
                      <li class="bold">
                        <a class="collapsible-header waves-effect waves-cyan">
                          <i class="material-icons">format_list_bulleted</i>
                          <span class="nav-text">Categories</span>
                        </a>
                        <div class="collapsible-body light-blue lighten-4">
                          <ul>
                            <li>
                              <a href="user-profile-page.html">
                                <i class="material-icons">keyboard_arrow_right</i>
                                <span>User Profile</span>
                              </a>
                            </li>
                            <li>
                              <a href="user-login.html">
                                <i class="material-icons">keyboard_arrow_right</i>
                                <span>Login</span>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </li>
                    </ul>
                  </li>
                <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: -623px;"><div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 626px; height: 743px; right: 3px;"><div class="ps-scrollbar-y" style="top: 325px; height: 386px;"></div></div></ul>
              </aside>
              <section class="content">
                  <div style="margin-right: 100px" class="container">
                      <div class="row">
                        <br>
                          <div class="card col l12 s12">
                            <div class="card-content">
                              @yield('content')
                            </div>
                          </div>
                      </div>
                  </div>
              </section>
        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js" type="text/javascript"></script>
        <script>
            $(document).ready(function() {
                Materialize.updateTextFields();

                $(".button-collapse").sideNav();
            });

            $('select').material_select();


            @if(session('status'))
                Materialize.toast('{{ session("status") }}', 4000);
            @endif
        </script>
    </body>
</html>
