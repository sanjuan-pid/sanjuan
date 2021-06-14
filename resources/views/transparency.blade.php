
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

    <div class="container 1st_cont" id="Transparency">
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
                    <h2>BAYANIHAN GRANT 1 OF 2</h2>
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
            <center>
                <h1 style="margin:2% 0; ">Transparency</h1>
            </center>
            <div class="row" style="margin-bottom: 5%;">
                <div class="col-md-6 clearfix d-md-block">
                    <div class="card mb-2">
                      <img class="card-img-top" src="{{asset('assets/transparency/Financial Assistance.jpg')}}"
                           alt="Card image cap">
                      <div class="card-body">
                        <h4>FINANCIAL ASSISTANCE</h4>
                        <br>
                        <button type="button" class="btn btn-info btn-lg" id="optic_btn" data-toggle="modal" data-target="#myModal" style="float: right; font-size:18px;" >VIEW</button>
                        {{-- <img class="card-img-top" src="{{asset('assets/play-button.svg')}}" style="width: 5%;" > --}}
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 clearfix d-md-block">
                    <div class="card mb-2">
                      <img class="card-img-top" src="{{asset('assets/transparency/Bayanihan Grant 1 of 2.jpg')}}"
                           alt="Card image cap">
                      <div class="card-body">
                        <h4>BAYANIHAN GRANT</h4>
                        <br>
                        <button type="button" class="btn btn-info btn-lg" id="optic_btn" data-toggle="modal" data-target="#myModal2" style="float: right; font-size:18px;" >VIEW</button>
                        {{-- <img class="card-img-top" src="{{asset('assets/play-button.svg')}}" style="width: 5%;" > --}}
                      </div>
                    </div>
                  </div>
                  {{-- <div class="col-md-4 clearfix d-md-block">
                      <div class="card mb-2">
                        <img class="card-img-top" src="{{asset('assets/transparency/Bayanihan Grant 2 of 2.jpg')}}"
                             alt="Card image cap" />
                        <div class="card-body">
                            <h4>BAYANIHAN GRANT 2 OF 2</h4>
                            <br>
                            <button type="button" class="btn btn-info btn-lg" id="dangling_btn" data-toggle="modal" data-target="#myModal3" style="float: right; font-size:18px;" >VIEW</button>
                        </div>
                      </div>
                    </div> --}}
            </div>
        </div>
    </div>

@endsection
