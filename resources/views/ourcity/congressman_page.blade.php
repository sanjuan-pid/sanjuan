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
    <div id="side_prof" style="position: fixed;margin-top: 5%;">
        <a href="#" class="btn side_btn" id="profile_btn" style="background: rgb(49, 64, 150); color:#fff;display: block;">PROFILE <img src={{asset('assets/cv.svg')}} style="width: 13%; float: right;"/></a>
        <br>
        <br>
        <a href="#" class="btn side_btn" id="achievement_btn"  style="background: rgb(49, 64, 150); color:#fff;display: block;">ACHIEVEMENTS<img src={{asset('assets/achievement.svg')}} style="width: 13%; float: right;"/></a>
        <br>
        <br>
        <a href="#" class="btn side_btn" id="programs_btn"   style="background: rgb(49, 64, 150); color:#fff;display: block;">PROGRAMS<img src={{asset('assets/porfolio.svg')}} style="width: 13%; float: right;"/></a>
        <br>
        <br>
        <a href="#" class="btn side_btn" id="news_btn"   style="background: rgb(49, 64, 150); color:#fff;display: block;">NEWS<img src={{asset('assets/newspaper.svg')}} style="width: 13%; float: right;"/></a>
    </div>
        <div class="container" style="max-width: 100%;">
          <div class="row">
            <div class=" col-12 col-sm-12">
              <img src="{{asset('assets/congronny/congressman.jpg')}}"style="width:70%; height:90%; z-index:-1; display: block; margin-left: auto; margin-right: auto; border-radius: 10px;"/>
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
            <div class="row">
              <h1 style="text-align: center; font-size:40px;">NEWS</h1>
              <div class=" col-sm-8">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">LATEST</h2>
                              <div class="recent_big">
                                  <img src="{{asset('assets/congronny/news1.jpg')}}"  id="image_big" style="width: 100%;" />
                                  <p class="card-text title_big"><a href="https://metromanila.politics.com.ph/2020/03/24/ronny-zamora-does-the-fundraising-for-san-juans-covid-19-fight-at-home/">Ronny Zamora does the fundraising for San Juan’s COVID-19 fight at home
                                  </p></a>
                              </div>
                              <br>
                              <div class="recent_small">

                                  <div class="row">
                                      <div class="col-4 col-sm-4">
                                          <img src="{{asset('assets/congronny/news2.jpg')}}"  style="width: 100%;" />
                                          <p class="recent_psmall">
                                              <a href="https://www.facebook.com/CongRonnyZamora/photos/a.2076948352444420/3494690084003566/?type=3&theater">Pinangunahan ni Kong. Ronny Zamora ang pagpupulong ng Lupon ng Mababang Kapulungan para sa Komisyon </a>
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
                <div class=" col-sm-4">
                    <div class="card">
                            <div class="card-body" id="bulletin_sec">
                                <h2 class="card-title">RECENT</h2>
                                <div class="card">
                                    <div class="card-body" id="bulletin_bod">
                                        <div class="col-4 col-sm-4" style="float: left; display: inline-block;">
                                            <img src="{{asset('assets/bulletin-1.jpg')}}"  style="width: 100%;" />
                                        </div>
                                        <div class="col-8 col-sm-8" style="display: inline-block;">
                                                <a id="bulletin_desc" href="https://www.facebook.com/MayorFrancisZamora/photos/a.943044269123644/3693592554068788/?type=3&theater">LIBRENG SERBISYONG MEDIKAL para sa mga minamahal naming mga San Juaneño! 👍 Makipagugnayan po lamang sa ating Public Assistance Center sa San Juan City Hall upang kayo ay mabigyan namin ng endorsement at guarantee letter.</a>
                                                <br>
                                                <a id="bulletin_readmore" href="https://www.facebook.com/MayorFrancisZamora/photos/a.943044269123644/3693592554068788/?type=3&theater">readmore</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body" id="bulletin_bod">
                                        <div class="col-4 col-sm-4" style="float: left; display: inline-block;">
                                            <img src="{{asset('assets/bulletin-2.jpg')}}"  style="width: 100%;" />
                                        </div>
                                        <div class="col-8 col-sm-8" style="display: inline-block;">
                                                <a id="bulletin_desc" href="https://www.facebook.com/photo.php?fbid=10158228645913163&set=a.10150331644198163&type=3&theater">P100,000 CASH GRANT PARA SA COVID-19-FREE BARANGAY                                            City Ordinance No. 1 Series of 2021                                            Bibigyan ng Pamahalaang Lungsod ng San Juan ng P100,000 Cash Incentive ang mga barangay na makakapagtala ng zero (0) cases ng COVID-19 sa loob ng 100 araw. Magsisimula ito mula January 18, 2021 hanggang December 31, 2021...</a>
                                                <br>
                                                <a id="bulletin_readmore" href="https://www.facebook.com/photo.php?fbid=10158228645913163&set=a.10150331644198163&type=3&theater">readmore</a>

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
