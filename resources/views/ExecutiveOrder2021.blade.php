
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
    @media only screen and (max-width: 1449px) and (min-width: 1201px){
      #executive img.card-img-top {
          height: 100%!important;
      }
      #executive img.card-img-top{
        height: 100% !important;
      }
      #executive .card-body h4{
        font-size: 18px !important;
        font-weight: bold;
      }
      #executive .card-body button{
        font-size: 15px !important;
        padding-top: 5%;
        padding-bottom: 5%;
        padding-left: 5%;
        padding-right: 5%;
      }
    }
    @media only screen and (max-width: 1920px) and (min-width: 1601px){
      #executive{
        max-width: 100% !important;
        width: 100% !important;
        flex: 0 0 100%;
      }
      #executive img.card-img-top{
        height: 100% !important;
      }
      #executive .card-body h4{
        font-size: 23px !important;
        font-weight: 600;
      }
      #executive .card-body button{
        font-size: 15px !important;
        padding-top: 5%;
        padding-bottom: 5%;
        padding-left: 5%;
        padding-right: 5%;
      }
      #executive .card-body .btnv{
        font-size: 15px !important;
        padding-top: 5%;
        padding-bottom: 5%;
        padding-left: 12%;
        padding-right: 12%;
      }

    }
    @media screen and (min-device-width: 1205px) and (max-device-width: 1366px){
      #executive{
        max-width: 100% !important;
        width: 100% !important;
        flex: 0 0 100%;
      }
      #executive img.card-img-top{
        height: 100% !important;
      }
      #executive .card-body h4{
        font-size: 15px !important;
      }
      #executive .card-body button{
        font-size: 10px !important;
        padding-top: 3%;
        padding-bottom: 3%;
        padding-left: 3%;
        padding-right: 3%;
      }
      .navbar-nav li {
          list-style: none;
          display: inline-block;
          margin: 0px -4px;
          position: relative;
      }
    }
    @media screen and (max-width: 766px) and (min-width: 200px) {
    #executive .modalss{
      width: 100% !important;
      max-width: 100% !important;
    }
    #executive .exebanner h1{
      font-size: 15px !important;
    }
    #executive .card-body button{
      font-size: 15px !important;
      padding-top: 3%;
      padding-bottom: 3%;
      padding-left: 3%;
      padding-right: 3%;
    }
    #executive .card-body h4{
      font-size: 15px !important;
    }
  }
    </style>
    <div class="container" id="executive" style="padding-right: 0 !important; padding-left: 0 !important;">
        <div class="row">
            <div class="col-12 exebanner mt-2" style=" width: 100% !important; padding-right: 0 !important; padding-left: 0 !important;">
              <h1 style="position: absolute; top: 50%; left: 35%;transform: translate(-50%, -50%); color:white !important; font-size:50px; text-shadow: 1px 1px 2px black, 0 0 1em blue, 0 0 0.2em darkblue;">EXECUTIVE ORDER SERIES OF 2021</h1>
              <img style=" width: 100%;" src="{{asset('assets/bandept2.png')}}" />
            </div>
          </div>

          <div class="row mt-3 mb-2 d-flex justify-content-center">
          @foreach($trans as $row)
            <div class="col-md-3 clearfix d-md-block">
              <a target="_blank" href="{{asset("uploads/" . $row->trans_pdf) }}">
              <div class="card mb-2">
                <img class="card-img-top" src="{{asset("uploads/" . $row->trans_image) }}" alt="Card image cap"/>
                <div class="card-body">
                  <h4>{{$row->trans_title}}</h4>
                </div>
              </div>
            </a>
            </div>
          @endforeach
          </div>

      </div>

@endsection
