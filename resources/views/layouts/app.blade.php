<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'smArt') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!--CSS Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"
            defer>
    </script>
    <script type="text/javascript" src={{ asset('js/app.js') }} defer>
    </script>
</head>

<body>
<main>
    <header style="background-color: white; margin: 0 0 0 0; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);" class="card-header">
        <nav class="navbar navbar-expand-md justify-content-between">
            <ul class="navbar-nav">
                <form id="searchData_icon" action="{{url('search')}}">
                    <li ><input  style="margin-top: 0;" type="register_text" placeholder="Search..." name="searchData"></li>
                </form>
            </ul>
            <a style="color: #637CFF; font-weight: bold" class=" navbar-brand" href="{{route('catalog')}}">smART</a>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a style="color: black" class="nav-link dropdown-toggle" href="#" id="navbarDropdown_icon" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('/images/profile.png') }}" width="30" height="30" alt="Profile"></img>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @if (Auth::check())
                            <li><a class="dropdown-item" href="../myprofile">My Profile</a></li>
                            @if(Auth()->user()->is_admin)
                            <li><a class="dropdown-item" href="../admin_manage_users">Manage</a></li>
                            @endif
                            <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>

                        @else
                            <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
                            <li><a class="dropdown-item" href="{{route('register')}}">Register</a></li>
                        @endif
                    </ul>
                </li>
                @if (Auth::check())
                    @if(Auth()->user()->is_admin == FALSE) 
                        <li class="nav-item">
                            <a class="nav-link" href="/cartlist" id="navbar_icon" role="button" aria-expanded="false">
                                <img src="{{ asset('/images/cart.png') }}" height="25vw" width="25vw" alt="Cart"></img>
                            </a>
                        </li>
                    @endif
                @endif
            </ul>
        </nav>
    </header>
    <section id="content">
        @yield('content')
    </section>

    <footer class="footer">
        <nav style="background-color: #C4C4C4" class="navbar navbar-expand-md">
            <div class="navbar w-100 order-1 order-md-0">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a style="color: white" class="nav-link" href="#">@2021 Copyright All Rights
                            Reserved</a>
                    </li>

                </ul>
            </div>
            <div class="mx-auto order-0">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/homepage') }}"><img src="{{ asset('images/logo.png') }}"
                                                                               width="150" height="25"
                                                                               alt="Profile"></a>
                    </li>
                </ul>
            </div>
            <div class="navbar w-100 order-3" style="padding-right: 1rem;">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a style="color: white" class="nav-link" href="{{ url('/aboutus') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: white" class="nav-link" href="{{ url('/contacts') }}">Contacts</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: white" class="nav-link" href="{{ url('/faq') }}">FAQ</a>
                    </li>
                </ul>
            </div>
        </nav>
    </footer>
</main>
</body>

</html>
