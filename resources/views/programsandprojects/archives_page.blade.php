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
    <div class="container">
      <div class="row">
        <div class=" col-12 col-sm-12">
          <div class="card">
            <div class="card-body">
              <div class="sj">
                <h1 style="font-size:40px; margin-top: 0; text-align: center;">Finished Projects</h1>
              </div>
            </div>
          </div>
        </div>
        <div class=" col-12 col-sm-12">
          <div class="card">
            <div class="card-body">
              <div class="sj">
                <h1 style="font-size:40px; margin-top: 0; text-align: center;">Finished Programs</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
