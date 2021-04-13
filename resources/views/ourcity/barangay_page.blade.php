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
    <style>
    @media screen and (max-width: 766px) and (min-width: 200px) {
      div#brgypage {
        max-width: 100% !important;
        width:100% !important;
        flex: 0 0 100%;
      }
     #brgypage .col-12 .col-sm-12 .col-md-12 .col-lg-12 h1{
       font-size: 5px !important;
     }

    }


    </style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <div class="container"style="width:60%;" id="brgypage">
    <div class="row">
      <div class=" col-12 col-sm-12 col-md-12 col-lg-12">
        <h1 style="margin-top: 25px; text-align: center; font-size:50px;">SAN JUAN CITY</h1>
        <p style=" font-weight: 500; margin-top: 15px; text-align: justify;">  <p style=" font-weight: 500; margin-top: 15px; text-align: justify;">"San Juan City" is a contraction of the city's traditional name of "San Juan del Monte" (lit. 'Saint John of the Mountain'). As with numerous other places in the Philippines, the name combines a patron saint and a toponym; in this case Saint John the Baptist with the locale's hilly terrain and relatively higher elevation compared to surrounding areas. The city's official name is "Dakilang Lungsód ng San Juan" (lit. 'Great City of San Juan').</p>
      </div>
      <h1 style="margin-top: -2%; text-align: center; font-size:30px;">THE BARANGAYS</h1>
    </div>
    <br>
    @include('layouts.index.map')
  </div>
    <br>
    <br>


@endsection
