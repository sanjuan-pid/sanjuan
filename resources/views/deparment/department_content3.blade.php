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
    #a1{
      padding-top: 20px;
      font-weight: 700;
      font-size: 20px;
    }
    #carddept{
      border-radius:5px !important;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
      height: 100%;
      background-color: #eff1ff;
    }
    #carddept:hover #a1{
      color: red  !important;
      transition: .7s !important;
    }
    #carddept:hover{
      background-color: white !important;
      transition: .7s !important;
    }
    a.department{
      text-decoration: none !important;
      color:inherit !important;
    }
    .deptbtn{
      border-style:solid;
      border-width:5px;
      border-color: blue;
      height: 50%;
    }
    .deptside {
      left: 10%;
      position: absolute;
      margin-top: 3%;
    }


    .buttondept span {
      cursor: pointer;
      display: inline-block;
      position: relative;
      transition: 0.2s;
    }

    .buttondept span:after {
      content: '\22D9';
      position: absolute;
      opacity: 0;
      top: 0;
      right: -10px !important;
      transition: 0.1s;

    }

    .buttondept:hover span {
      padding-right: 25px;
    }

    .buttondept:hover span:after {
      opacity: 1;
      right: 0;
    }
    .buttondept:hover{
      background-color: blue;
      color: white;
    }


    .buttondept {
      border-radius: 4px;
      background-color: #fff;
      border-style: solid !important;
      border-color: blue !important;
      font-weight: 700;
      border: none;
      color: blue;
      text-align: center;
      font-size: 18px;
      padding: 15px;
      width: 240px;
      transition: all 0.5s;
      cursor: pointer;
      margin: 5px;
    }
    .dt .active span:after {
      opacity: 1;
      right: 0;
    }
    .dt .active span{
      padding-right: 25px;
    }
    .dt .active{
      background-color: blue;
      color: white;
    }
  @media screen and (min-device-width: 1601px) and (max-device-width: 1920px)  {
      div#dpcon {
        max-width: 100% !important;
        width: 100% !important;``
        flex: 0 0 100%;
      }
      #deptone{
        margin-left: 5rem!important;
        padding-left: 0 !important;
        padding-right: 0 !important;
        width: 100% !important;
        margin-top: 1rem !important;
        padding-bottom: 5%;
      }
      #depttwo{
        margin-left: 18rem!important;
        padding-left: 0 !important;
        padding-right: 0 !important;
        width: 87% !important;
        margin-top: 1rem !important;
        padding-bottom: 5%;
      }
      #deptthree{
        margin-left: 18rem!important;
        padding-left: 0 !important;
        padding-right: 0 !important;
        width: 87% !important;
        margin-top: 1rem !important;
        padding-bottom: 15%;
      }
      #deptfour{
        margin-left: 18rem!important;
        padding-left: 0 !important;
        padding-right: 0 !important;
        width: 87% !important;
        margin-top: 1rem !important;
        padding-bottom: 5%;
      }
      #deptfive{
        margin-left: 18rem!important;
        padding-left: 0 !important;
        padding-right: 0 !important;
        width: 87% !important;
        margin-top: 1rem !important;
        padding-bottom: 5%;
      }
    }
  @media screen and (min-device-width: 1551px) and (max-device-width: 1600px) {
      div#dpcon {
        max-width: 100% !important;
        width: 100% !important;
        flex: 0 0 100%;
      }
      .deptside{
        margin-top: 1%;
        width: 50%;
      }
      .deptside button{
        width: 30%;
        font-size: 15px;
        padding-top: 4px;
        padding-bottom: 4px;
      }
      #deptone .ins h1{
      font-size: 28px !important;
      left: 35% !important;
     }
      #depttwo .ins h1{
      font-size: 28px !important;
      left: 35% !important;
     }
       #deptthree .ins h1{
       font-size: 28px !important;
       left: 35% !important;
      }
        #deptfour .ins h1{
        font-size: 28px !important;
        left: 35% !important;
       }
       #deptfive .ins h1{
       font-size: 28px !important;
       left: 35% !important;
      }
      #deptone{
        margin-left: 3rem!important;
        padding-left: 0 !important;
        padding-right: 0 !important;
        width: 80% !important;
        margin-top: 0 !important;
      }
      #depttwo{
        margin-left: 17rem!important;
        padding-left: 0 !important;
        padding-right: 0 !important;
        width: 83% !important;
        margin-top: 0 !important;
      }
      #deptthree{
        margin-left: 17rem!important;
        padding-left: 0 !important;
        padding-right: 0 !important;
        width: 83% !important;
        margin-top: 0 !important;
      }
      #deptfour{
        margin-left: 17rem!important;
        padding-left: 0 !important;
        padding-right: 0 !important;
        width: 83% !important;
        margin-top: 0 !important;
      }
      #deptfive{
        margin-left: 17rem!important;
        padding-left: 0 !important;
        padding-right: 0 !important;
        width: 83% !important;
        margin-top: 0 !important;
      }
    }
    @media screen and (min-device-width: 1367px) and (max-device-width: 1500px){
      div#dpcon {
        max-width: 90% !important;
        width: 90% !important;
        flex: 0 0 100%;
      }
      .deptside{
        margin-top: 1%;
        width: 50%;
      }
      .deptside button{
        width: 30%;
        font-size: 15px;
        padding-top: 4px;
        padding-bottom: 4px;
      }
      #deptone .ins h1{
      font-size: 30px !important;
      left: 35% !important;
     }
      #depttwo .ins h1{
      font-size: 30px !important;
      left: 35% !important;
     }
     #deptthree .ins h1{
     font-size: 30px !important;
     left: 35% !important;
    }
    #deptfour .ins h1{
    font-size: 30px !important;
    left: 35% !important;
   }
   #deptfive .ins h1{
   font-size: 30px !important;
   left: 35% !important;
  }
      #deptone{
        margin-left: 3rem!important;
        padding-left: 0 !important;
        padding-right: 0 !important;
        width: 80% !important;
        margin-top: 0 !important;
      }
      #depttwo{
        margin-left: 17rem!important;
        padding-left: 0 !important;
        padding-right: 0 !important;
        width: 80% !important;
        margin-top: 0 !important;
      }
      #deptthree{
        margin-left: 17rem!important;
        padding-left: 0 !important;
        padding-right: 0 !important;
        width: 80% !important;
        margin-top: 0 !important;
      }
      #deptfour{
        margin-left: 17rem!important;
        padding-left: 0 !important;
        padding-right: 0 !important;
        width: 80% !important;
        margin-top: 0 !important;
      }
      #deptfive{
        margin-left: 17rem!important;
        padding-left: 0 !important;
        padding-right: 0 !important;
        width: 80% !important;
        margin-top: 0 !important;
      }
    }
    @media screen and (min-device-width: 1205px) and (max-device-width: 1366px){
      div#dpcon {
        max-width: 90% !important;
        width: 90% !important;
        flex: 0 0 100%;
      }
      .deptside{
        margin-top: 0;
        width: 50%;
      }
      .deptside button{
        width: 35%;
        font-size: 10px;
        padding-top: 2px;
        padding-bottom: 2px;
      }
      .department .card-title{
        font-size: 12px !important;
      }
      .department .card-text{
        font-size: 10px !important;
      }
      #deptone .ins h1{
      font-size: 25px !important;
      left: 35% !important;
     }
      #depttwo .ins h1{
      font-size: 25px !important;
      left: 35% !important;
     }
     #deptthree .ins h1{
     font-size: 25px !important;
     left: 35% !important;
    }
    #deptfour .ins h1{
    font-size: 25px !important;
    left: 35% !important;
   }
   #deptfive .ins h1{
   font-size: 25px !important;
   left: 35% !important;
  }
      #deptone{
        margin-left: 3rem!important;
        padding-left: 0 !important;
        padding-right: 0 !important;
        width: 83% !important;
        margin-top: 0 !important;
      }
      #depttwo{
        margin-left: 17rem!important;
        padding-left: 0 !important;
        padding-right: 0 !important;
        width: 80% !important;
        margin-top: 0 !important;
      }
      #deptthree{
        margin-left: 17rem!important;
        padding-left: 0 !important;
        padding-right: 0 !important;
        width: 80% !important;
        margin-top: 0 !important;
      }
      #deptfour{
        margin-left: 17rem!important;
        padding-left: 0 !important;
        padding-right: 0 !important;
        width: 80% !important;
        margin-top: 0 !important;
      }
      #deptfive{
        margin-left: 17rem!important;
        padding-left: 0 !important;
        padding-right: 0 !important;
        width: 80% !important;
        margin-top: 0 !important;
      }
    }
    @media screen and (max-width: 766px) and (min-width: 200px) {
      div#dpcon {
        max-width: 100% !important;
        width:100% !important;
        flex: 0 0 100%;
        padding: 0 !important;
      }
      #deptone{
        margin-left: 0rem!important;
        padding-left: 0 !important;
        padding-right: 0 !important;
        width: 100% !important;
        margin-top: 0 !important;
      }
      #deptone .ins img{
        max-width: 100% !important;
        width: 500px !important;
        flex: 0 0 100%;
        border-radius: 5px !important;
      }
      #deptone .row{
        flex-direction: column !important;
      }
       #deptone .ins h1{
       font-size: 14px !important;
       left: 34% !important;
      }
      #deptone #a1{
        font-size: 18px !important;
      }
      .card-text{
        font-size: 13px !important;
      }
      #dtpage{
        padding-left: 0 !important;
        padding-right: 0 !important;
        margin-top: 2%;
      }
      .deptside{
        display: none;
        z-index: 100;
        background-color: white;
        width: 72%;
        border-radius: 8px;
        padding-left: 30px;
        padding-right: 0px;
      }
      .deptside button{
        width: 80%;
        font-size: 13px;
      }
      .deptside button .ekis{
        font-size: 100px;
      }
      #dtpage .w3-container {
          margin-top: 0;
      }
      #depttwo{
        margin-left: 0rem!important;
        padding-left: 0 !important;
        padding-right: 0 !important;
        width: 100% !important;
        margin-top: 0 !important;
      }
      #depttwo .ins img{
        max-width: 100% !important;
        width: 100% !important;
        flex: 0 0 100%;
        border-radius: 5px !important;
      }
      #depttwo .row{
        flex-direction: column !important;
      }
       #depttwo .ins h1{
       font-size: 18px !important;
       left: 34% !important;
      }
      #depttwo #a1{
        font-size: 18px !important;
      }

      #deptthree{
        margin-left: 0rem!important;
        padding-left: 0 !important;
        padding-right: 0 !important;
        width: 100% !important;
        margin-top: 0 !important;
      }
      #deptthree .ins img{
        max-width: 100% !important;
        width: 100% !important;
        flex: 0 0 100%;
        border-radius: 5px !important;
      }
      #deptthree .row{
        flex-direction: column !important;
      }
       #deptthree .ins h1{
       font-size: 15px !important;
       left: 34% !important;
      }
      #deptthree #a1{
        font-size: 18px !important;
      }

      #deptfour{
        margin-left: 0rem!important;
        padding-left: 0 !important;
        padding-right: 0 !important;
        width: 100% !important;
        margin-top: 0 !important;
      }
      #deptfour .ins img{
        max-width: 100% !important;
        width: 100% !important;
        flex: 0 0 100%;
        border-radius: 5px !important;
      }
      #deptfour .row{
        flex-direction: column !important;
      }
       #deptfour .ins h1{
       font-size: 18px !important;
       left: 34% !important;
      }
      #deptfour #a1{
        font-size: 18px !important;
      }

      #deptfive{
        margin-left: 0rem!important;
        padding-left: 0 !important;
        padding-right: 0 !important;
        width: 100% !important;
        margin-top: 0 !important;
      }
      #deptfive .ins img{
        max-width: 100% !important;
        width: 100% !important;
        flex: 0 0 100%;
        border-radius: 5px !important;
      }
      #deptfive .row{
        flex-direction: column !important;
      }
       #deptfive .ins h1{
       font-size: 15px !important;
       left: 34% !important;
      }
      #deptfive #a1{
        font-size: 18px !important;
      }
      button.w3-button.w3-teal.w3-xlarge.w3-hide-large.deptmenu {
          font-size: 15px !important;
          padding-left: 12px;
      }
    }

    </style>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <div class="container hahahe">
      <div class="deptside  dt" id="mysb">
        <button class="w3-bar-item w3-button w3-large w3-hide-large" style="font-weight:7s00;color:red;" onclick="w3_close()">Close &times;</button>
        <br>
        <button class="buttondept deptlinks" onclick="deptcon(event, 'deptone')"><span>INSTITUTIONAL<br>DEVELOPMENT</span></button>
        <br>
        <button class="buttondept deptlinks" onclick="deptcon(event, 'depttwo')"><span>ECONOMIC<br>CENTER</span></button>
        <br>
        <button class="buttondept deptlinks" onclick="deptcon(event, 'deptthree')" id="defaultOpen1"><span>ENVIRONMENTAL SECTOR</span></button>
        <br>
        <button class="buttondept deptlinks" onclick="deptcon(event, 'deptfour')" ><span>SOCIAL <br> SERVICES</span></button>
        <br>
        <button class="buttondept deptlinks" onclick="deptcon(event, 'deptfive')" ><span>PHYSICAL <br> INFRASTRUCTURE</span></button>
      </div>
    </div>
  <div class="container" id="dpcon">
    <div class="container" id="dtpage">
      <div class="w3-main" style="margin-left:200px">
        <div class="w3-teal">
          <button class="w3-button w3-teal w3-xlarge w3-hide-large deptmenu" style="font-size:5px;"onclick="w3_open()">&#9776; MENU</button>
        </div>

          <div class="w3-container deptcontent ml-5 mt-3" id="deptone" style="width:100% !important;">
            <div class="row">
            <!-- <h3 id="h3con" style="text-align: center; color: #1f1c4b; font-size: 50px; font-weight: 700;">INSTITUTIONAL DEVELOPMENT</h3> -->
              <div class="col-12 col-sm-12 col-md-12 col-lg-12 ins mt-2" style=" width: 100% !important; padding-right: 0 !important; padding-left: 0 !important;">
                <h1 style="position: absolute; top: 50%; left: 30%;transform: translate(-50%, -50%); color:white !important; font-size:35px;font-weight:700;">INSTITUTIONAL DEVELOPMENT</h1>
                <img style=" width: 100%; border-radius: 10px !important;" src="{{asset('assets/bandept2.png')}}" />
              </div>
            </div>
            <br>
                <div class="row">
                    <div class=" col-6 col-sm-6 col-md-6 col-lg-6">
                      <a class="department"href="{{route('announce')}}">
                        <div class="card" id="carddept">
                          <div class="card-body">
                            <div class="row">
                              <div class=" col-9 col-sm-9 col-md-9 col-lg-9">
                                <h5 class="card-title" id="a1">Office of the Mayor</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                              </div>
                              <div class=" col-3 col-sm-3 col-md-3 col-lg-3">
                                <img style=" width:80%; "src="{{asset('assets/makabago.png')}}"/>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class=" col-6 col-sm-6 col-md-6 col-lg-6">
                      <a class="department"href="{{route('announce')}}">
                        <div class="card" id="carddept">
                          <div class="card-body">
                            <div class="row">
                              <div class=" col-9 col-sm-9 col-md-9 col-lg-9">
                                <h5 class="card-title" id="a1">Office of the Vice Mayor</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                              </div>
                              <div class=" col-3 col-sm-3 col-md-3 col-lg-3">
                                <img style=" width:80%; "src="{{asset('assets/makabago.png')}}"/>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class=" col-6 col-sm-6 col-md-6 col-lg-6">
                      <a class="department"href="{{route('Admin')}}">
                        <div class="card" id="carddept">
                          <div class="card-body">
                            <div class="row">
                              <div class=" col-9 col-sm-9 col-md-9 col-lg-9">
                                <h5 class="card-title" id="a1">Office of the City Admin</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                              </div>
                              <div class=" col-3 col-sm-3 col-md-3 col-lg-3">
                                <img style=" width:80%; "src="{{asset('assets/makabago.png')}}"/>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class=" col-6 col-sm-6 col-md-6 col-lg-6">
                      <a class="department" href="{{route('announce')}}" >
                        <div class="card" id="carddept">
                          <div class="card-body">
                            <div class="row">
                              <div class=" col-9 col-sm-9 col-md-9 col-lg-9">
                                <h5 class="card-title" id="a1">City Accounting Department</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                              </div>
                              <div class=" col-3 col-sm-3 col-md-3 col-lg-3">
                                <img style=" width:80%; "src="{{asset('assets/makabago.png')}}"/>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class=" col-6 col-sm-6 col-md-6 col-lg-6">
                      <a class="department"href="{{route('announce')}}">
                        <div class="card" id="carddept">
                          <div class="card-body">
                            <div class="row">
                              <div class=" col-9 col-sm-9 col-md-9 col-lg-9">
                                <h5 class="card-title" id="a1">City Assessment Department</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                              </div>
                              <div class=" col-3 col-sm-3 col-md-3 col-lg-3">
                                <img style=" width:80%; "src="{{asset('assets/makabago.png')}}"/>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class=" col-6 col-sm-6 col-md-6 col-lg-6">
                      <a class="department" href="{{route('announce')}}">
                        <div class="card" id="carddept">
                          <div class="card-body">
                            <div class="row">
                              <div class=" col-9 col-sm-9 col-md-9 col-lg-9">
                                <h5 class="card-title" id="a1">City Treasury Department</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                              </div>
                              <div class=" col-3 col-sm-3 col-md-3 col-lg-3">
                                <img style=" width:80%;"src="{{asset('assets/makabago.png')}}"/>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class=" col-6 col-sm-6 col-md-6 col-lg-6">
                      <a class="department"href="{{route('announce')}}">
                        <div class="card" id="carddept">
                          <div class="card-body">
                            <div class="row">
                              <div class=" col-9 col-sm-9 col-md-9 col-lg-9">
                                <h5 class="card-title" id="a1">City Human Resources and Development Department</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                              </div>
                              <div class=" col-3 col-sm-3 col-md-3 col-lg-3">
                                <img style=" width:80%; "src="{{asset('assets/makabago.png')}}"/>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class=" col-6 col-sm-6 col-md-6 col-lg-6">
                      <a class="department"href="{{route('announce')}}">
                        <div class="card" id="carddept">
                          <div class="card-body">
                            <div class="row">
                              <div class=" col-9 col-sm-9 col-md-9 col-lg-9">
                                <h5 class="card-title" id="a1">City Legal Department</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                              </div>
                              <div class=" col-3 col-sm-3 col-md-3 col-lg-3">
                                <img style=" width:80%; "src="{{asset('assets/makabago.png')}}"/>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class=" col-6 col-sm-6 col-md-6 col-lg-6">
                      <a class="department"href="{{route('announce')}}">
                        <div class="card" id="carddept">
                          <div class="card-body">
                            <div class="row">
                              <div class=" col-9 col-sm-9 col-md-9 col-lg-9">
                                <h5 class="card-title" id="a1">Public Information Department</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                              </div>
                              <div class=" col-3 col-sm-3 col-md-3 col-lg-3">
                                <img style=" width:80%; "src="{{asset('assets/makabago.png')}}"/>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class=" col-6 col-sm-6 col-md-6 col-lg-6">
                      <a class="department"href="{{route('budget')}}">
                        <div class="card" id="carddept">
                          <div class="card-body">
                            <div class="row">
                              <div class=" col-9 col-sm-9 col-md-9 col-lg-9">
                                <h5 class="card-title" id="a1">City Budget Department</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                              </div>
                              <div class=" col-3 col-sm-3 col-md-3 col-lg-3">
                                <img style=" width:80%; "src="{{asset('assets/makabago.png')}}"/>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class=" col-6 col-sm-6 col-md-6 col-lg-6">
                      <a class="department"href="{{route('announce')}}">
                        <div class="card" id="carddept">
                          <div class="card-body">
                            <div class="row">
                              <div class=" col-9 col-sm-9 col-md-9 col-lg-9">
                                <h5 class="card-title" id="a1">City Development and Planning Department</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                              </div>
                              <div class=" col-3 col-sm-3 col-md-3 col-lg-3">
                                <img style=" width:80%; "src="{{asset('assets/makabago.png')}}"/>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class=" col-6 col-sm-6 col-md-6 col-lg-6">
                      <a class="department"href="{{route('announce')}}">
                        <div class="card" id="carddept">
                          <div class="card-body">
                            <div class="row">
                              <div class=" col-9 col-sm-9 col-md-9 col-lg-9">
                                <h5 class="card-title" id="a1">General Services Department</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                              </div>
                              <div class=" col-3 col-sm-3 col-md-3 col-lg-3">
                                <img style=" width:80%; "src="{{asset('assets/makabago.png')}}"/>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class=" col-6 col-sm-6 col-md-6 col-lg-6">
                      <a class="department"href="{{route('announce')}}">
                        <div class="card" id="carddept">
                          <div class="card-body">
                            <div class="row">
                              <div class=" col-9 col-sm-9 col-md-9 col-lg-9">
                                <h5 class="card-title" id="a1">Information and Communications Technology Office</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                              </div>
                              <div class=" col-3 col-sm-3 col-md-3 col-lg-3">
                                <img style=" width:80%; "src="{{asset('assets/makabago.png')}}"/>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class=" col-6 col-sm-6 col-md-6 col-lg-6">
                      <a class="department"href="{{route('announce')}}">
                        <div class="card" id="carddept">
                          <div class="card-body">
                            <div class="row">
                              <div class=" col-9 col-sm-9 col-md-9 col-lg-9">
                                <h5 class="card-title" id="a1">Barangay Operations Center</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                              </div>
                              <div class=" col-3 col-sm-3 col-md-3 col-lg-3">
                                <img style=" width:80%; "src="{{asset('assets/makabago.png')}}"/>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class=" col-6 col-sm-6 col-md-6 col-lg-6">
                      <a class="department"href="{{route('announce')}}">
                        <div class="card" id="carddept">
                          <div class="card-body">
                            <div class="row">
                              <div class=" col-9 col-sm-9 col-md-9 col-lg-9">
                                <h5 class="card-title" id="a1">Internal Audit Services</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                              </div>
                              <div class=" col-3 col-sm-3 col-md-3 col-lg-3">
                                <img style=" width:80%; "src="{{asset('assets/makabago.png')}}"/>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class=" col-6 col-sm-6 col-md-6 col-lg-6">
                      <a class="department"href="{{route('announce')}}">
                        <div class="card" id="carddept">
                          <div class="card-body">
                            <div class="row">
                              <div class=" col-9 col-sm-9 col-md-9 col-lg-9">
                                <h5 class="card-title" id="a1">BAC Secretariat</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                              </div>
                              <div class=" col-3 col-sm-3 col-md-3 col-lg-3">
                                <img style=" width:80%; "src="{{asset('assets/makabago.png')}}"/>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>

        </div>

          <div class="w3-container ml-5 deptcontent" id="depttwo">
            <div class="col-12 ins mt-3" style=" width: 100% !important; padding-right: 0 !important; padding-left: 0 !important;">
              <h1 style="position: absolute; top: 50%; left: 30%;transform: translate(-50%, -50%); color:white !important; font-size:35px;font-weight:700;">ECONOMIC CENTER</h1>
              <img style=" width: 100%; border-radius: 10px !important;" src="{{asset('assets/bandept2.png')}}" />
            </div>
            <br>
                    <div class="row">
                      <div class=" col-6 col-sm-6 col-md-6 col-lg-6">
                        <a class="department"href="{{route('bplo')}}">
                          <div class="card" id="carddept">
                            <div class="card-body">
                              <div class="row">
                                <div class=" col-9 col-sm-9 col-md-9 col-lg-9">
                                  <h5 class="card-title" id="a1">Business Permit and Licensing Office</h5>
                                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                                <div class=" col-3 col-sm-3 col-md-3 col-lg-3">
                                  <img style=" width:80%; "src="{{asset('assets/makabago.png')}}"/>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>

                    <br>

                      <div class=" col-6 col-sm-6 col-md-6 col-lg-6">
                        <a class="department"href="{{route('announce')}}">
                          <div class="card" id="carddept">
                            <div class="card-body">
                              <div class="row">
                                <div class=" col-9 col-sm-9 col-md-9 col-lg-9">
                                  <h5 class="card-title" id="a1">City Cooperative Development Department</h5>
                                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                                <div class=" col-3 col-sm-3 col-md-3 col-lg-3">
                                  <img style=" width:80%; "src="{{asset('assets/makabago.png')}}"/>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class=" col-6 col-sm-6 col-md-6 col-lg-6">
                        <a class="department"href="{{route('announce')}}">
                          <div class="card" id="carddept">
                            <div class="card-body">
                              <div class="row">
                                <div class=" col-9 col-sm-9 col-md-9 col-lg-9">
                                  <h5 class="card-title" id="a1">City Tourism and Cultural Affairs Office</h5>
                                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                                <div class=" col-3 col-sm-3 col-md-3 col-lg-3">
                                  <img style=" width:80%; "src="{{asset('assets/makabago.png')}}"/>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>

                    <br>

                      <div class=" col-6 col-sm-6 col-md-6 col-lg-6">
                        <a class="department"href="{{route('announce')}}">
                          <div class="card" id="carddept">
                            <div class="card-body">
                              <div class="row">
                                <div class=" col-9 col-sm-9 col-md-9 col-lg-9">
                                  <h5 class="card-title" id="a1">Local Civil Registry</h5>
                                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                                <div class=" col-3 col-sm-3 col-md-3 col-lg-3">
                                  <img style=" width:80%; "src="{{asset('assets/makabago.png')}}"/>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class=" col-6 col-sm-6 col-md-6 col-lg-6">
                        <a class="department"href="{{route('announce')}}">
                          <div class="card" id="carddept">
                            <div class="card-body">
                              <div class="row">
                                <div class=" col-9 col-sm-9 col-md-9 col-lg-9">
                                  <h5 class="card-title" id="a1">City Investments Promotion Center</h5>
                                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                                <div class=" col-3 col-sm-3 col-md-3 col-lg-3">
                                  <img style=" width:80%; "src="{{asset('assets/makabago.png')}}"/>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>

                    <br>

                      <div class=" col-6 col-sm-6 col-md-6 col-lg-6">
                        <a class="department"href="{{route('announce')}}">
                          <div class="card" id="carddept">
                            <div class="card-body">
                              <div class="row">
                                <div class=" col-9 col-sm-9 col-md-9 col-lg-9">
                                  <h5 class="card-title" id="a1">Market Administration</h5>
                                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                                <div class=" col-3 col-sm-3 col-md-3 col-lg-3">
                                  <img style=" width:80%; "src="{{asset('assets/makabago.png')}}"/>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class=" col-6 col-sm-6 col-md-6 col-lg-6">
                        <a class="department"href="{{route('announce')}}">
                          <div class="card" id="carddept">
                            <div class="card-body">
                              <div class="row">
                                <div class=" col-9 col-sm-9 col-md-9 col-lg-9">
                                  <h5 class="card-title" id="a1">Public Employment and Services Office</h5>
                                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                                <div class=" col-3 col-sm-3 col-md-3 col-lg-3">
                                  <img style=" width:80%; "src="{{asset('assets/makabago.png')}}"/>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>

                    <br>

                      <div class=" col-6 col-sm-6 col-md-6 col-lg-6">
                        <a class="department"href="{{route('announce')}}">
                          <div class="card" id="carddept">
                            <div class="card-body">
                              <div class="row">
                                <div class=" col-9 col-sm-9 col-md-9 col-lg-9">
                                  <h5 class="card-title" id="a1">Skills and Livelihood Center</h5>
                                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                                <div class=" col-3 col-sm-3 col-md-3 col-lg-3">
                                  <img style=" width:80%; "src="{{asset('assets/makabago.png')}}"/>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
          </div>

          <div class="w3-container ml-5 deptcontent" id="deptthree">
            <div class="col-12 ins mt-3" style=" width: 100% !important; padding-right: 0 !important; padding-left: 0 !important;">
              <h1 style="position: absolute; top: 50%; left: 30%;transform: translate(-50%, -50%); color:white !important; font-size:35px; font-weight:700;">ENVIRONMENTAL SECTOR</h1>
              <img style=" width: 100%; border-radius: 10px !important;" src="{{asset('assets/bandept2.png')}}" />
            </div>
            <br>
                    <div class="row">
                      <div class=" col-6 col-sm-6 col-md-6 col-lg-6">
                        <a class="department"href="{{route('announce')}}">
                          <div class="card" id="carddept">
                            <div class="card-body">
                              <div class="row">
                                <div class=" col-9 col-sm-9 col-md-9 col-lg-9">
                                  <h5 class="card-title" id="a1">City Environment and Natural Resources Department</h5>
                                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                                <div class=" col-3 col-sm-3 col-md-3 col-lg-3">
                                  <img style=" width:80%; "src="{{asset('assets/makabago.png')}}"/>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>

                    <br>

                      <div class=" col-6 col-sm-6 col-md-6 col-lg-6">
                        <a class="department"href="{{route('announce')}}">
                          <div class="card" id="carddept">
                            <div class="card-body">
                              <div class="row">
                                <div class=" col-9 col-sm-9 col-md-9 col-lg-9">
                                  <h5 class="card-title" id="a1">City Disaster Risk Reduction and Management Office</h5>
                                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                                <div class=" col-3 col-sm-3 col-md-3 col-lg-3">
                                  <img style=" width:80%; "src="{{asset('assets/makabago.png')}}"/>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
        </div>

        <div class="w3-container ml-5 deptcontent" id="deptfour">
          <div class="col-12 ins mt-3" style=" width: 100% !important; padding-right: 0 !important; padding-left: 0 !important;">
            <h1 style="position: absolute; top: 50%; left: 30%;transform: translate(-50%, -50%); color:white !important; font-size:35px; font-weight:700;">SOCIAL SERVICES</h1>
            <img style=" width: 100%; border-radius: 10px !important;" src="{{asset('assets/bandept2.png')}}" />
          </div>
          <br>
                  <div class="row">
                    <div class=" col-6 col-sm-6 col-md-6 col-lg-6">
                      <a class="department"href="{{route('announce')}}">
                        <div class="card" id="carddept">
                          <div class="card-body">
                            <div class="row">
                              <div class=" col-9 col-sm-9 col-md-9 col-lg-9">
                                <h5 class="card-title" id="a1">City Health Department</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                              </div>
                              <div class=" col-3 col-sm-3 col-md-3 col-lg-3">
                                <img style=" width:80%; "src="{{asset('assets/makabago.png')}}"/>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>

                  <br>

                    <div class=" col-6 col-sm-6 col-md-6 col-lg-6">
                      <a class="department"href="{{route('announce')}}">
                        <div class="card" id="carddept">
                          <div class="card-body">
                            <div class="row">
                              <div class=" col-9 col-sm-9 col-md-9 col-lg-9">
                                <h5 class="card-title" id="a1">City Social Welfare and Development Department</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                              </div>
                              <div class=" col-3 col-sm-3 col-md-3 col-lg-3">
                                <img style=" width:80%; "src="{{asset('assets/makabago.png')}}"/>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <br>
                          <div class="row">
                            <div class=" col-6 col-sm-6 col-md-6 col-lg-6">
                              <a class="department"href="{{route('announce')}}">
                                <div class="card" id="carddept">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class=" col-9 col-sm-9 col-md-9 col-lg-9">
                                        <h5 class="card-title" id="a1">San Juan Medical Center</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                      </div>
                                      <div class=" col-3 col-sm-3 col-md-3 col-lg-3">
                                        <img style=" width:80%; "src="{{asset('assets/makabago.png')}}"/>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </a>
                            </div>

                          <br>

                            <div class=" col-6 col-sm-6 col-md-6 col-lg-6">
                              <a class="department"href="{{route('announce')}}">
                                <div class="card" id="carddept">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class=" col-9 col-sm-9 col-md-9 col-lg-9">
                                        <h5 class="card-title" id="a1">City Population Development Office</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                      </div>
                                      <div class=" col-3 col-sm-3 col-md-3 col-lg-3">
                                        <img style=" width:80%; "src="{{asset('assets/makabago.png')}}"/>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </a>
                            </div>
                          </div>
                          <br>
                                  <div class="row">
                                    <div class=" col-6 col-sm-6 col-md-6 col-lg-6">
                                      <a class="department"href="{{route('announce')}}">
                                        <div class="card" id="carddept">
                                          <div class="card-body">
                                            <div class="row">
                                              <div class=" col-9 col-sm-9 col-md-9 col-lg-9">
                                                <h5 class="card-title" id="a1">Public Order and Safety Office</h5>
                                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                              </div>
                                              <div class=" col-3 col-sm-3 col-md-3 col-lg-3">
                                                <img style=" width:80%; "src="{{asset('assets/makabago.png')}}"/>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </a>
                                    </div>

                                  <br>

                                    <div class=" col-6 col-sm-6 col-md-6 col-lg-6">
                                      <a class="department"href="{{route('announce')}}">
                                        <div class="card" id="carddept">
                                          <div class="card-body">
                                            <div class="row">
                                              <div class=" col-9 col-sm-9 col-md-9 col-lg-9">
                                                <h5 class="card-title" id="a1">Public Information Department</h5>
                                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                              </div>
                                              <div class=" col-3 col-sm-3 col-md-3 col-lg-3">
                                                <img style=" width:80%; "src="{{asset('assets/makabago.png')}}"/>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </a>
                                    </div>
                                  </div>
                                  <br>
                                          <div class="row">
                                            <div class=" col-6 col-sm-6 col-md-6 col-lg-6">
                                              <a class="department"href="{{route('announce')}}">
                                                <div class="card" id="carddept">
                                                  <div class="card-body">
                                                    <div class="row">
                                                      <div class=" col-9 col-sm-9 col-md-9 col-lg-9">
                                                        <h5 class="card-title" id="a1">City Anti-Drug Abuse Council Office</h5>
                                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                      </div>
                                                      <div class=" col-3 col-sm-3 col-md-3 col-lg-3">
                                                        <img style=" width:80%; "src="{{asset('assets/makabago.png')}}"/>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </a>
                                            </div>

                                          <br>

                                            <div class=" col-6 col-sm-6 col-md-6 col-lg-6">
                                              <a class="department"href="{{route('announce')}}">
                                                <div class="card" id="carddept">
                                                  <div class="card-body">
                                                    <div class="row">
                                                      <div class=" col-9 col-sm-9 col-md-9 col-lg-9">
                                                        <h5 class="card-title" id="a1">Traffic and Parking Management Office</h5>
                                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                      </div>
                                                      <div class=" col-3 col-sm-3 col-md-3 col-lg-3">
                                                        <img style=" width:80%; "src="{{asset('assets/makabago.png')}}"/>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </a>
                                            </div>
                                          </div>
                                          <br>
                                          <div class="row">
                                            <div class=" col-6 col-sm-6 col-md-6 col-lg-6">
                                              <a class="department"href="{{route('announce')}}">
                                                <div class="card" id="carddept">
                                                  <div class="card-body">
                                                    <div class="row">
                                                      <div class=" col-9 col-sm-9 col-md-9 col-lg-9">
                                                        <h5 class="card-title" id="a1">Transport Regulatory Board</h5>
                                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                      </div>
                                                      <div class=" col-3 col-sm-3 col-md-3 col-lg-3">
                                                        <img style=" width:80%; "src="{{asset('assets/makabago.png')}}"/>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </a>
                                            </div>

                                          <br>

                                            <div class=" col-6 col-sm-6 col-md-6 col-lg-6">
                                              <a class="department"href="{{route('announce')}}">
                                                <div class="card" id="carddept">
                                                  <div class="card-body">
                                                    <div class="row">
                                                      <div class=" col-9 col-sm-9 col-md-9 col-lg-9">
                                                        <h5 class="card-title" id="a1">Task Force Disiplina</h5>
                                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                      </div>
                                                      <div class=" col-3 col-sm-3 col-md-3 col-lg-3">
                                                        <img style=" width:80%; "src="{{asset('assets/makabago.png')}}"/>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </a>
                                            </div>
                                          </div>
                                          <br>
                                          <div class="row">
                                            <div class=" col-6 col-sm-6 col-md-6 col-lg-6">
                                              <a class="department"href="{{route('announce')}}">
                                                <div class="card" id="carddept">
                                                  <div class="card-body">
                                                    <div class="row">
                                                      <div class=" col-9 col-sm-9 col-md-9 col-lg-9">
                                                        <h5 class="card-title" id="a1">Sports Development Office</h5>
                                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                      </div>
                                                      <div class=" col-3 col-sm-3 col-md-3 col-lg-3">
                                                        <img style=" width:80%; "src="{{asset('assets/makabago.png')}}"/>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </a>
                                            </div>
                                            <div class=" col-6 col-sm-6 col-md-6 col-lg-6">
                                              <a class="department"href="{{route('announce')}}">
                                                <div class="card" id="carddept">
                                                  <div class="card-body">
                                                    <div class="row">
                                                      <div class=" col-9 col-sm-9 col-md-9 col-lg-9">
                                                        <h5 class="card-title" id="a1">Urban Poor Affairs Office</h5>
                                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                      </div>
                                                      <div class=" col-3 col-sm-3 col-md-3 col-lg-3">
                                                        <img style=" width:80%; "src="{{asset('assets/makabago.png')}}"/>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </a>
                                            </div>
                                          </div>


                                          <br>
                                          <div class="row">
                                            <div class=" col-6 col-sm-6 col-md-6 col-lg-6">
                                              <a class="department"href="{{route('announce')}}">
                                                <div class="card" id="carddept">
                                                  <div class="card-body">
                                                    <div class="row">
                                                      <div class=" col-9 col-sm-9 col-md-9 col-lg-9">
                                                        <h5 class="card-title" id="a1">Office of the Senior Citizen Affairs</h5>
                                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                      </div>
                                                      <div class=" col-3 col-sm-3 col-md-3 col-lg-3">
                                                        <img style=" width:80%; "src="{{asset('assets/makabago.png')}}"/>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </a>
                                            </div>
                                            <div class=" col-6 col-sm-6 col-md-6 col-lg-6">
                                              <a class="department"href="{{route('announce')}}">
                                                <div class="card" id="carddept">
                                                  <div class="card-body">
                                                    <div class="row">
                                                      <div class=" col-9 col-sm-9 col-md-9 col-lg-9">
                                                        <h5 class="card-title" id="a1">Persons with Disability Affairs Office</h5>
                                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                      </div>
                                                      <div class=" col-3 col-sm-3 col-md-3 col-lg-3">
                                                        <img style=" width:80%; "src="{{asset('assets/makabago.png')}}"/>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </a>
                                            </div>
                                          </div>

                                          <br>
                                          <div class="row">
                                            <div class=" col-6 col-sm-6 col-md-6 col-lg-6">
                                              <a class="department"href="{{route('announce')}}">
                                                <div class="card" id="carddept">
                                                  <div class="card-body">
                                                    <div class="row">
                                                      <div class=" col-9 col-sm-9 col-md-9 col-lg-9">
                                                        <h5 class="card-title" id="a1">Public Assistance Center</h5>
                                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                      </div>
                                                      <div class=" col-3 col-sm-3 col-md-3 col-lg-3">
                                                        <img style=" width:80%; "src="{{asset('assets/makabago.png')}}"/>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </a>
                                            </div>
                                            <div class=" col-6 col-sm-6 col-md-6 col-lg-6">
                                              <a class="department"href="{{route('announce')}}">
                                                <div class="card" id="carddept">
                                                  <div class="card-body">
                                                    <div class="row">
                                                      <div class=" col-9 col-sm-9 col-md-9 col-lg-9">
                                                        <h5 class="card-title" id="a1">Cemetery</h5>
                                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                      </div>
                                                      <div class=" col-3 col-sm-3 col-md-3 col-lg-3">
                                                        <img style=" width:80%; "src="{{asset('assets/makabago.png')}}"/>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </a>
                                            </div>
                                          </div>
                                          <br>
                                          <div class="row">
                                            <div class=" col-6 col-sm-6 col-md-6 col-lg-6">
                                              <a class="department"href="{{route('announce')}}">
                                                <div class="card" id="carddept">
                                                  <div class="card-body">
                                                    <div class="row">
                                                      <div class=" col-9 col-sm-9 col-md-9 col-lg-9">
                                                        <h5 class="card-title" id="a1">Educational Support Services / School Board</h5>
                                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                      </div>
                                                      <div class=" col-3 col-sm-3 col-md-3 col-lg-3">
                                                        <img style=" width:80%; "src="{{asset('assets/makabago.png')}}"/>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </a>
                                            </div>
                                            <div class=" col-6 col-sm-6 col-md-6 col-lg-6">
                                              <a class="department"href="{{route('announce')}}">
                                                <div class="card" id="carddept">
                                                  <div class="card-body">
                                                    <div class="row">
                                                      <div class=" col-9 col-sm-9 col-md-9 col-lg-9">
                                                        <h5 class="card-title" id="a1">Office of the Veterinary Services</h5>
                                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                      </div>
                                                      <div class=" col-3 col-sm-3 col-md-3 col-lg-3">
                                                        <img style=" width:80%; "src="{{asset('assets/makabago.png')}}"/>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </a>
                                            </div>
                                          </div>
                                          <br>
                                          <div class="row">
                                            <div class=" col-6 col-sm-6 col-md-6 col-lg-6">
                                              <a class="department"href="{{route('announce')}}">
                                                <div class="card" id="carddept">
                                                  <div class="card-body">
                                                    <div class="row">
                                                      <div class=" col-9 col-sm-9 col-md-9 col-lg-9">
                                                        <h5 class="card-title" id="a1">City Library</h5>
                                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                      </div>
                                                      <div class=" col-3 col-sm-3 col-md-3 col-lg-3">
                                                        <img style=" width:80%; "src="{{asset('assets/makabago.png')}}"/>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </a>
                                            </div>
                                            <div class=" col-6 col-sm-6 col-md-6 col-lg-6">
                                              <a class="department"href="{{route('announce')}}">
                                                <div class="card" id="carddept">
                                                  <div class="card-body">
                                                    <div class="row">
                                                      <div class=" col-9 col-sm-9 col-md-9 col-lg-9">
                                                        <h5 class="card-title" id="a1">City Youth Development Office</h5>
                                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                      </div>
                                                      <div class=" col-3 col-sm-3 col-md-3 col-lg-3">
                                                        <img style=" width:80%; "src="{{asset('assets/makabago.png')}}"/>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </a>
                                            </div>
                                          </div>

      </div>

      <div class="w3-container ml-5 deptcontent" id="deptfive">
            <div class="col-12 ins mt-3" style=" width: 100% !important; padding-right: 0 !important; padding-left: 0 !important;">
              <h1 style="position: absolute; top: 50%; left: 30%;transform: translate(-50%, -50%); color:white !important; font-size:35px; font-weight:700;">PHYSICAL / INFRASTRUCTURE</h1>
              <img style=" width: 100%; border-radius: 10px !important;" src="{{asset('assets/bandept2.png')}}" />
            </div>
            <br>
                <div class="row">
                  <div class=" col-6 col-sm-6 col-md-6 col-lg-6">
                    <a class="department"href="{{route('announce')}}">
                      <div class="card" id="carddept">
                        <div class="card-body">
                          <div class="row">
                            <div class=" col-9 col-sm-9 col-md-9 col-lg-9">
                              <h5 class="card-title" id="a1">City Architecture Department</h5>
                              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                            <div class=" col-3 col-sm-3 col-md-3 col-lg-3">
                              <img style=" width:80%; "src="{{asset('assets/makabago.png')}}"/>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class=" col-6 col-sm-6 col-md-6 col-lg-6">
                    <a class="department"href="{{route('obo')}}">
                      <div class="card" id="carddept">
                        <div class="card-body">
                          <div class="row">
                            <div class=" col-9 col-sm-9 col-md-9 col-lg-9">
                              <h5 class="card-title" id="a1">City Building Official</h5>
                              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                            <div class=" col-3 col-sm-3 col-md-3 col-lg-3">
                              <img style=" width:80%; "src="{{asset('assets/makabago.png')}}"/>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class=" col-6 col-sm-6 col-md-6 col-lg-6">
                    <a class="department"href="{{route('announce')}}">
                      <div class="card" id="carddept">
                        <div class="card-body">
                          <div class="row">
                            <div class=" col-9 col-sm-9 col-md-9 col-lg-9">
                              <h5 class="card-title" id="a1">City Engineering Department</h5>
                              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                            <div class=" col-3 col-sm-3 col-md-3 col-lg-3">
                              <img style=" width:80%; "src="{{asset('assets/makabago.png')}}"/>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class=" col-6 col-sm-6 col-md-6 col-lg-6">
                    <a class="department"href="{{route('announce')}}">
                      <div class="card" id="carddept">
                        <div class="card-body">
                          <div class="row">
                            <div class=" col-9 col-sm-9 col-md-9 col-lg-9">
                              <h5 class="card-title" id="a1">Zoning Administration Office</h5>
                              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                            <div class=" col-3 col-sm-3 col-md-3 col-lg-3">
                              <img style=" width:80%; "src="{{asset('assets/makabago.png')}}"/>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>

              </div>
            </div>



      </div>
    </div>
  </div>
<br>
<br>
<!-- <script>
function w3_open() {
  document.getElementById("mysb").style.display = "block";
}

function w3_close() {
  document.getElementById("mysb").style.display = "none";
}
function deptcon(dp, deptname) {
  var d, deptcontent, deptlinks;
  deptcontent = document.getElementsByClassName("deptcontent");
  for (d = 0; d < deptcontent.length; d++) {
    deptcontent[d].style.display = "none";
  }
  deptlinks = document.getElementsByClassName("deptlinks");
  for (d = 0; d < deptlinks.length; d++) {
    deptlinks[d].className = deptlinks[d].className.replace(" active", "");
  }
  document.getElementById(deptname).style.display = "block";
  dp.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it

  document.getElementById("defaultOpen").click();
</script> -->
@endsection
