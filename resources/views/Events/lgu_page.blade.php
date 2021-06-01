@extends('layouts.nav-bar')

@section('content')
    {{-- <div class="flex-center position-ref full-height">
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
                 SAN JUAN CITY
            </div>


        </div>
    </div> --}}

    <div class="container 1st_cont" id="Department">
        <br>
        <div class="row">
            <img src="{{asset('assets/advisory.gif')}}" style="width: 50%;margin: 0 auto;display: block; margin-top: -165px;"/>
        </div>
        <br>
    </div>

@endsection
