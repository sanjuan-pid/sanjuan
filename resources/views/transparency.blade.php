
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
    @media screen and (min-device-width: 1205px) and (max-device-width: 1366px){
      #Transparency{
        max-width: 100% !important;
        width: 100% !important;
        flex: 0 0 100%;
      }
      #Transparency img.card-img-top{
        height: 100% !important;
      }
      #Transparency .card-body h4{
        font-size: 15px !important;
      }
      #Transparency .card-body button{
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
    </style>
    <div class="container 1st_cont" id="Transparency" style="padding-right: 0 !important; padding-left: 0 !important;">
        <div class="modal fade" id="myModal" data-keyboard="false" data-backdrop="static">

            <div class="modal-dialog modal-lg modalss" style="width: 100%; max-width: 100%;">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-body">
                    <h2>FINANCIAL ASSISTANCE</h2>
                    <img class="card-img-top" src="{{asset('assets/transparency/Financial Assistance.jpg')}}" />
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default close_pause" data-dismiss="modal">Close</button>
                </div>
              </div>

            </div>
          </div>
          <div class="modal fade" id="myModal2" data-keyboard="false" data-backdrop="static">
            <div class="modal-dialog modal-lg modalss" style="width: 100%; max-width: 100%;">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-body">
                    <h2>BAYANIHAN GRANT FOR THE MONTH OF NOVEMBER 2020</h2>
                    <img class="card-img-top" src="{{asset('assets/transparency/BAYANIHAN GRANT 1 OF 2.jpg')}}" />
                    <img class="card-img-top" src="{{asset('assets/transparency/BAYANIHAN GRANT 2 OF 2.jpg')}}" />
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default close_pause"  data-dismiss="modal">Close</button>
                </div>
              </div>

            </div>
          </div>
          <div class="modal fade" id="myModal3" data-keyboard="false" data-backdrop="static">
            <div class="modal-dialog modal-lg modalss" style="width: 100%; max-width: 100%;">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-body">
                    <h2>BAYANIHAN GRANT FOR THE MONTH OF DECEMBER 2020</h2>
                    <img class="card-img-top" src="{{asset('assets/reports/dec1.jpg')}}" />
                    <img class="card-img-top" src="{{asset('assets/reports/dec2.jpg')}}" />
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default close_pause"  data-dismiss="modal">Close</button>
                </div>
              </div>

            </div>
          </div>
          <div class="modal fade" id="myModal4" data-keyboard="false" data-backdrop="static">
            <div class="modal-dialog modal-lg modalss" style="width: 100%; max-width: 100%;">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-body">
                    <h2>FINANCIAL ASSISTANCE FOR THE MONTH OF MAY 2021</h2>
                    <img class="card-img-top" src="{{asset('assets/reports/may.jpg')}}" />
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default close_pause"  data-dismiss="modal">Close</button>
                </div>
              </div>

            </div>
          </div>
          <div class="modal fade" id="myModal5" data-keyboard="false" data-backdrop="static">
            <div class="modal-dialog modal-lg modalss" style="width: 100%; max-width: 100%;">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-body">
                    <h2>FINANCIAL ASSISTANCE FOR THE MONTH OF JUNE 2021</h2>
                    <img class="card-img-top" src="{{asset('assets/reports/june.jpg')}}" />
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default close_pause"  data-dismiss="modal">Close</button>
                </div>
              </div>

            </div>
          </div>
          <div class="modal fade" id="myModal3" data-keyboard="false" data-backdrop="static">
            <div class="modal-dialog modal-lg modalss" style="width: 100%; max-width: 100%;">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-body">
                    <h2>BAYANIHAN GRANT 2 OF 2</h2>
                    <img class="card-img-top" src="{{asset('assets/transparency/BAYANIHAN GRANT 2 OF 2.jpg')}}" />
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default close_pause"  data-dismiss="modal">Close</button>
                </div>
              </div>

            </div>
          </div>
        <div class="row">
            {{-- <img src="{{asset('assets/mock/SKILLS.jpg')}}" style="width: 100%;margin: 0 auto;display: block;"/>  --}}
            <br>
            <div class="col-12 mt-2" style=" width: 100% !important; padding-right: 0 !important; padding-left: 0 !important;">
              <h1 style="position: absolute; top: 50%; left: 35%;transform: translate(-50%, -50%); color:white !important; font-size:50px; text-shadow: 1px 1px 2px black, 0 0 1em blue, 0 0 0.2em darkblue;">REPORTS</h1>
              <img style=" width: 100%;" src="{{asset('assets/bandept2.png')}}" />
            </div>
            <div class="row mt-4" style="margin-bottom: 5%;">
               <!-- 7 -->
                  <div class="col-md-3 clearfix d-md-block">
                    <div class="card mb-2">
                      <img class="card-img-top" src="{{asset('assets/transparency/Bayanihan Grant 1 of 2.jpg')}}"
                           alt="Card image cap">
                      <div class="card-body">
                        <h4>BAYANIHAN GRANT FOR THE MONTH OF NOVEMBER 2020</h4>
                        <br>
                        <button type="button" class="btn btn-info btn-lg" id="optic_btn" data-toggle="modal" data-target="#myModal2" style="float: right; font-size:18px;" >VIEW</button>
                        {{-- <img class="card-img-top" src="{{asset('assets/play-button.svg')}}" style="width: 5%;" > --}}
                      </div>
                    </div>
                  </div>
                 <div class="col-md-3 clearfix d-md-block">
                      <div class="card mb-2">
                        <img class="card-img-top" src="{{asset('assets/reports/dec1.jpg')}}"
                             alt="Card image cap">
                        <div class="card-body">
                          <h4>BAYANIHAN GRANT FOR THE MONTH OF DECEMBER 2020</h4>
                          <br>
                          <button type="button" class="btn btn-info btn-lg" id="optic_btn" data-toggle="modal" data-target="#myModal3" style="float: right; font-size:18px;" >VIEW</button>
                          {{-- <img class="card-img-top" src="{{asset('assets/play-button.svg')}}" style="width: 5%;" > --}}
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 clearfix d-md-block">
                      <div class="card mb-2">
                        <img class="card-img-top" src="{{asset('assets/reports/may.jpg')}}"
                             alt="Card image cap">
                        <div class="card-body">
                          <h4>FINANCIAL ASSISTANCE FOR THE MONTH OF MAY 2021</h4>
                          <br>
                          <button type="button" class="btn btn-info btn-lg" id="optic_btn" data-toggle="modal" data-target="#myModal4" style="float: right; font-size:18px;" >VIEW</button>
                          {{-- <img class="card-img-top" src="{{asset('assets/play-button.svg')}}" style="width: 5%;" > --}}
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 clearfix d-md-block">
                      <div class="card mb-2">
                        <img class="card-img-top" src="{{asset('assets/reports/june.jpg')}}"
                             alt="Card image cap">
                        <div class="card-body">
                          <h4>FINANCIAL ASSISTANCE FOR THE MONTH OF JUNE 2021</h4>
                          <br>
                          <button type="button" class="btn btn-info btn-lg" id="optic_btn" data-toggle="modal" data-target="#myModal5" style="float: right; font-size:18px;" >VIEW</button>
                          {{-- <img class="card-img-top" src="{{asset('assets/play-button.svg')}}" style="width: 5%;" > --}}
                        </div>
                      </div>
                    </div>
            </div>
        </div>
    </div>

@endsection
