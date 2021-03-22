<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    PID
                    {{-- {{ config('app.name', 'Laravel') }} --}}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto" style="margin: 0 auto;">
                        <li class="nav-item">
                            <a  class="nav-link " href="{{route('admin.dashboard')}}" >
                                Home
                                </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a  class="nav-link " href="{{route('admin.records_user.records')}}" >
                                Users
                            </a>
                        </li>
                        <li class="nav-item">
                            <a  class="nav-link " href="{{route('admin.records_admin.records')}}" >
                                Admin
                            </a>
                        </li> --}}
                        
                        <li class="nav-item dropdown" id="News">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                             Upload News
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" >
                                
                                <li><a class="dropdown-item" href="{{route('admin.announcment.announcement')}}">Announcement</a></li>
                                <li><a class="dropdown-item" href="{{route('admin.events.events_list')}}" >Events</a></li>
                                <li><a class="dropdown-item" href="{{route('admin.covid_update.list_MC')}}" >Covid Cases</a></li>
                                <li><a class="dropdown-item" href="{{route('admin.news.index')}}" >News</a></li>
                                <li><a class="dropdown-item" href="{{route('admin.qr.list_qr')}}" >Upload QR</a></li>
                                {{-- <li><a class="dropdown-item" href="{{route('admin.mayors.list_MC')}}" >Covid Cases</a></li> --}}
                                {{-- <li><a class="dropdown-item" href="{{route('admin.covid.brgy')}}" >Covid Cases - GRAPH</a></li> --}}
                            </ul>
                        </li>
 
                        <li class="nav-item dropdown" id="News">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                             Vice Mayor
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" >

                                <li><a class="dropdown-item" href="{{route('admin.vice-mayor.programs.prog_list')}}" >Programs</a></li>
                                <li><a class="dropdown-item" href="{{route('admin.vice-mayor.updates.updates_list')}}">Updates</a></li>
                                {{-- <li><a class="dropdown-item" href="{{route('admin.vice-mayor.vm-announcements.vm-announcements')}}" >Announcements</a></li> --}}
                                
                                {{-- <li><a class="dropdown-item" href="{{route('admin.mayors.list_MC')}}" >Covid Cases</a></li> --}}
                                {{-- <li><a class="dropdown-item" href="{{route('admin.covid.brgy')}}" >Covid Cases - GRAPH</a></li> --}}
                            </ul>
                        </li>                        
                        
                        </div>
                    </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            {{-- <li class="nav-item">
                                <a  class="nav-link " href="{{route('admin.dashboard')}}" >
                                    Home
                                 </a>
                            </li>
                            <li class="nav-item">
                                <a  class="nav-link " href="{{route('admin.records')}}" >
                                   Records
                                </a>
                            </li> --}}
                            {{-- <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a> --}}

                                {{-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"> --}}
                                    {{-- <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form> --}}
                                {{-- </div> --}}
                            {{-- </li> --}}
                            <li class="nav-item dropdown" id="News">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" >
                                    <li class="nav-item dropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>