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
      #title1{
        padding-top: 0;
        font-weight: 700;

      }
      h5#title1 {
          vertical-align: center !important;
          /* vertical-align: top; */
          font-size: 30px !important;
          margin: 2% 0;
      }
      #carddept{
        border-radius:5px !important;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
      }
      #carddept:hover #title1{
        color: red !important;
        transition: .7s !important;
      }
      #carddept:hover{
        box-shadow: 10px 10px 10px rgb(0 0 0 / 50%) !important;
      }
      a.department{
        text-decoration: none;
        color:inherit;
      }
      @media screen and (max-width: 766px) and (min-width: 200px) {
        div#deptpage {
          max-width: 100% !important;
          width:100% !important;
          flex: 0 0 100%;
        }
        #deptpage .row{
          flex-direction: column;
        }
        #deptpage .card-body .card-title{
         font-size: 15px !important;
       }
       #deptpage p{
         font-size: 12px !important;
       }
       #deptpageban img{
         width: 100% !important;
       }
      }

      @media only screen and (max-width: 1920px) and (min-width: 1601px)  {
        div#deptpage {
          max-width: 100% !important;
          width: 80% !important;
          flex: 0 0 100%;

        }

      }
      @media screen and (min-device-width: 1551px) and (max-device-width: 1600px)  {
        div#deptpage {
          max-width: 80% !important;
          width: 80% !important;
          flex: 0 0 100%;
        }
        #deptpageban img{
          max-width: 100% !important;
          width: 100% !important;
          flex: 0 0 100%;
        }
        h5#title1 {
            font-size: 25px !important;
        }
      }
      @media screen and (min-device-width: 1367px) and (max-device-width: 1500px)  {
        div#deptpage {
          max-width: 80% !important;
          width: 80% !important;
          flex: 0 0 100%;
        }
        #deptpageban img{
          max-width: 100% !important;
          width: 100% !important;
          flex: 0 0 100%;
        }
        h5#title1 {
            font-size: 22px !important;
        }
      }
      @media screen and (min-device-width: 1205px) and (max-device-width: 1366px){
        div#deptpage {
          max-width: 90% !important;
          width: 90% !important;
          flex: 0 0 100%;
        }
        #deptpageban img{
          max-width: 100% !important;
          width: 100% !important;
          flex: 0 0 100%;
        }
        h5#title1 {
            font-size: 22px !important;
        }
      }
      }
      @media only screen and (max-width: 1200px) and (min-width: 900px)  {
      h5#title1 {
        font-size: 25px !important;
      }
      div#dpcon {
          max-width: 100% !important;
          width: 100% !important;
          flex: 0 0 100%;
      }
      #deptpageban img{
        max-width: 100% !important;
        width: 100% !important;
        flex: 0 0 100%;
      }
      div#deptpage {
        max-width: 100% !important;
        width: 100% !important;
        flex: 0 0 100%;
      }
      #deptpage .card-body .card-title{
        font-size: 20px !important;
      }
    }
    .cc{
       border: 1px solid #dadada;
       box-shadow: 4px 4px 8px 0 rgba(0, 0, 0, 0.2);
       transition: 0.2s;
       padding:100px 10px 5px;
       width: 100%;
       background:
       linear-gradient(to bottom left,transparent 49.5%,#fff 50%) 0 50px/100% 100px,
       linear-gradient(#fff,#fff) bottom/100% calc(100% - 150px),
       url('/assets/deptbanner.png') top/100% auto no-repeat;
       background-repeat:no-repeat;
    }
    .cc .card-body{
      padding: 5px;
    }
    .cc2{
       border: 1px solid #dadada;
       box-shadow: 4px 4px 8px 0 rgba(0, 0, 0, 0.2);
       transition: 0.2s;
       padding:100px 10px 5px;
       width: 100%;
       background:
       linear-gradient(to bottom left,transparent 49.5%,#fff 50%) 0 50px/100% 100px,
       linear-gradient(#fff,#fff) bottom/100% calc(100% - 150px),
       url('/assets/deptbannerenvi.png') top/100% auto no-repeat;
       background-repeat:no-repeat;
    }
    .cc2 .card-body{
      padding: 5px;
    }
    .cc3{
       border: 1px solid #dadada;
       box-shadow: 4px 4px 8px 0 rgba(0, 0, 0, 0.2);
       transition: 0.2s;
       padding:100px 10px 5px;
       width: 100%;
       background:
       linear-gradient(to bottom left,transparent 49.5%,#fff 50%) 0 50px/100% 100px,
       linear-gradient(#fff,#fff) bottom/100% calc(100% - 150px),
       url('/assets/deptbannereco.png') top/100% auto no-repeat;
       background-repeat:no-repeat;
    }
    .cc3 .card-body{
      padding: 5px;
    }
    .cc4{
       border: 1px solid #dadada;
       box-shadow: 4px 4px 8px 0 rgba(0, 0, 0, 0.2);
       transition: 0.2s;
       padding:100px 10px 5px;
       width: 100%;
       background:
       linear-gradient(to bottom left,transparent 49.5%,#fff 50%) 0 50px/100% 100px,
       linear-gradient(#fff,#fff) bottom/100% calc(100% - 150px),
       url('/assets/deptbannersoc.png') top/100% auto no-repeat;
       background-repeat:no-repeat;
    }
    .cc4 .card-body{
      padding: 5px;
    }
    .cc5{
       border: 1px solid #dadada;
       box-shadow: 4px 4px 8px 0 rgba(0, 0, 0, 0.2);
       transition: 0.2s;
       padding:100px 10px 5px;
       width: 100%;
       background:
       linear-gradient(to bottom left,transparent 49.5%,#fff 50%) 0 50px/100% 100px,
       linear-gradient(#fff,#fff) bottom/100% calc(100% - 150px),
       url('/assets/deptbannerphy.png') top/100% auto no-repeat;
       background-repeat:no-repeat;
    }
    .cc5 .card-body{
      padding: 5px;
    }
    .headerdept {
      padding: 35px;
      text-align: center;
      background: linear-gradient(to bottom, #33ccff 0%, #003399 100%);
      color: white;
      font-size: 30px;
    }
    /* .zoomdept {
      transition: transform .2s;
      margin: 0 auto;
      padding: 22px;
    }

    .zoomdept:hover {
      -ms-transform: scale(1.1); /* IE 9 */
      /* -webkit-transform: scale(1.1); /* Safari 3-8 */ */
      /* transform: scale(1.1); */

    }
    /* customizable snowflake styling */


    </style>
    <div class="container" aria-hidden="true" id="deptpageban" style="width:100% !important; padding:0 !important;">
      <div class="row">
        <!-- <div class=" col-12 col-sm-12 col-md-12 col-lg-12 mt-2 headerdept">
          <h3  id="h3dept" style=" color: white !important; font-size: 50px; font-weight: 700; margin:2% 0;">DEPARTMENTS</h3>
        </div> -->
        <div class="col-12 mt-2" style=" width: 100% !important; padding-right: 0 !important; padding-left: 0 !important;">
          <h1 style="position: absolute; top: 50%; left: 35%;transform: translate(-50%, -50%); color:white !important; font-size:50px; text-shadow: 1px 1px 2px black, 0 0 1em blue, 0 0 0.2em darkblue;">DEPARTMENTS</h1>
          <img style=" width: 100%;" src="{{asset('assets/bandept2.png')}}" />
        </div>
      </div>
    </div>
    <br>
    <div class="container" id="deptpage" style="width:100%;">
      <div class="row">
        <div class=" col-6 col-sm-6 col-md-6 col-lg-6 zoomdept">

          <div class="dept_card" style="margin-bottom:2%;">
            <a class="department" href="{{route('cd')}}" id="butt1" onclick="myF()">
              <div class="card cc hehe1" id="carddept">
                <div class="card-body">
                  <h5 class="card-title" id="title1" style="font-size:25px;">INSTITUTIONAL DEVELOPMENT</h5>
                  <p style="font-size:14px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
              </div>
            </a>
          </div>
        </div>
        <br>
      <div class=" col-6 col-sm-6 col-md-6 col-lg-6 zoomdept">

          <div class="dept_card" style="margin-bottom:2%;">
            <a class="department" href="{{route('cd2')}}" id="btn2" onclick="myF2()">
              <div class="card cc3" id="carddept">
                <div class="card-body">
                  <h5 class="card-title" id="title1" style="font-size:25px;">ECONOMIC CENTER</h5>
                  <p style="font-size:14px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class=" col-6 col-sm-6 col-md-6 col-lg-6 zoomdept">

          <div class="dept_card" style="margin-bottom:2%;">
            <a class="department" href="{{route('cd3')}}">
              <div class="card cc2" id="carddept">
                <div class="card-body">
                  <h5 class="card-title" id="title1" style="font-size:25px;">ENVIRONMENTAL SECTOR</h5>
                  <p style="font-size:14px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
              </div>
            </a>
          </div>
        </div>
        <br>
        <div class=" col-6 col-sm-6 col-md-6 col-lg-6 zoomdept">

          <div class="dept_card" style="margin-bottom:2%;">
            <a class="department" href="{{route('cd4')}}">
              <div class="card cc4" id="carddept">
                <div class="card-body">
                  <h5 class="card-title" id="title1" style="font-size:25px;">SOCIAL SERVICES</h5>
                  <p style="font-size:14px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class=" col-6 col-sm-6 col-md-6 col-lg-6 zoomdept" style="margin:auto;">

          <div class="dept_card" style="margin-bottom:2%;">
            <a class="department" href="{{route('cd5')}}">
              <div class="card cc5" id="carddept">
                <div class="card-body">
                  <h5 class="card-title" id="title1" style="font-size:25px;">PHYSICAL / INFRASTRUCTURE</h5>
                  <p style="font-size:14px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
@endsection
