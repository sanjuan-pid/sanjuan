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
    <br>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <div class="container" style="max-width: 100%;">
          <div class="row">
            <div class=" col-12 col-sm-12">
              <img src="{{asset('assets/vice/vicemayor.jpg')}}"style="width:70%; height:90%; z-index:-1; display: block; margin-left: auto; margin-right: auto;border-radius: 10px;"/>
            </div>
          </div>
        </div>

        <div class="container" style="max-width: 60%; z-index: 4; margin-top: -13.8%;">
          <div class="row">
            <div class=" col-6 col-sm-6">
              <div class="card">
                <div class="card-body">
                  <div class="sj" style="margin-top: 0; text-align: center;">
                    <h1 style="font-size:40px;">AGENDA</h1>
                  </div>
                </div>
             </div>
           </div>



           <div class=" col-6 col-sm-6">
             <div class="card">
               <div class="card-body">
                 <div class="sj" style="margin-top: 0; text-align: center;">
                   <h1 style="font-size:40px;">PROGRAMS</h1>
                 </div>
               </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class=" col-12 col-sm-12 mt-2">
            <div class="row" >
              <!-- <h1 style="text-align: center; font-size:40px;">NEWS</h1> -->
              <div class=" col-sm-6">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title"> <h1 style="font-size:40px; margin-top: 0; text-align: center;">NEWS</h1></h2>
                              <div class="recent_big">
                                  <img src="{{asset('assets/vice/vm.jpg')}}"  id="image_big" style="width: 100%;" />
                                  <p class="card-text title_big"style="white-space: nowrap; width: 458px; overflow: hidden; text-overflow: ellipsis;"><a href="https://www.facebook.com/photo.php?fbid=10159303444986477&set=pcb.10159303483126477&type=3&theater">San Juan City Covid-19 Vaccination Program Rollout for San Juan Medical Center and City Health Office FRONTLINERS with Dr. Joseph M Acosta and Dr. Rosalie Matubang Sto Domingo
                                  </p></a>
                              </div>
                              <br>
                              <div class="recent_small">

                                  <div class="row">
                                      <div class="col-4 col-sm-4">
                                          <img src="{{asset('assets/vice/vm.jpg')}}"  style="width: 100%;" />
                                          <p class="recent_psmall">
                                              <a href="https://www.facebook.com/vicemayorwarrenvilla/photos/pcb.4034476069898345/4034456809900271/?type=3&theater"></a>
                                          </p>
                                      </div>
                                  </div>
                              </div>
                              <div id="_viewmore">
                                  <a  href="#">view more articles</a>
                              </div>
                          </div>
                      </div>
                    </div>
                    <div class=" col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title"><h1 style="font-size:40px; margin-top: 0; text-align: center;">ANNOUNCEMENT</h1></h2>
                                    <div class="recent_big">
                                        <img src="{{asset('assets/vice/an.png')}}"  id="image_big" style="width: 72%;" />
                                        <p class="card-text title_big" style="white-space: nowrap; width: 458px; overflow: hidden; text-overflow: ellipsis;"><a href="https://www.facebook.com/vicemayorwarrenvilla/photos/a.118327924846532/4111478462198105/?type=3&theater" >Due to delays in the delivery of our medicines, we are temporarily suspending the releasing of medicines.</p></a>
                                    </div>
                                    <br>
                                    <div class="recent_small">

                                        <div class="row">
                                            <div class="col-4 col-sm-4">
                                                <img src="{{asset('assets/vice/an2.png')}}"  style="width: 100%;" />
                                                <p class="recent_psmall">
                                                    <a href="https://www.facebook.com/vicemayorwarrenvilla/photos/pcb.4034476069898345/4034456809900271/?type=3&theater">LIBRENG GAMOT! </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="_viewmore">
                                        <a  href="#">view more articles</a>
                                    </div>
                                </div>
                            </div>
                          </div>
                </div>
            </div>
        </div>
     </div>
     <br>
@endsection
