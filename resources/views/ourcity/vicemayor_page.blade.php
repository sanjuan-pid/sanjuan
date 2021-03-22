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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
           <div class=" col-12 col-sm-12">
            <div class="c">
              <div class="cbody">
              <h1 style="font-size:40px;" onclick="document.getElementById('id01').style.display='block'">VICE MAYOR WARREN VILLA</h1>
               <div id="id01" class="w3-modal">
               <div class="w3-modal-content" style="margin-top: 10%;">
                 <div class="w3-container">
                   <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                    <h1 style="font-size:40px;">PROFILE</h1>
                    <p style=" font-weight: 500; margin-top: 15px;">Hon. Warren Villa is a man known for his strong faith and belief in God. He is also known for his dedication and passion to be of service to the city of San Juan, and is commonly known for being the public servant who gives free medicines to his constituents. He is the eldest son of Enriqueta and Eduardo Villa. And he is happily married to Regina Villa, and a father to their only son Nathanael Habakkuk.
                    <br><br>What others might not know is that from the year 1989 to 1997, he was the Assistant Program Director of Magic 89.9 DWTM-FM. And by the year 1997 to 2003, he became the Program Director of Smooth Jazz Citylite 88.3 DWCT-FM.
                    <br><br>He served as the Chairman of Kristiyanong kabataan para sa Bayan, San Juan Chapter, in the year 1999 to 2004. He also became the NCR Chairman of Bangon Kabataan in the year 2004. He was involved in a local organization in San Juan which is the JCI San Juan “Pinaglabanan” Chapter where he became the President in the year 2005. Two years later, he was elected as the Regional Vice President of the JCI Philippines.
                   </p>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
           <div class=" col-12 col-sm-12">
             <div class="card">
               <div class="card-body">
                 <div class="sj">
                   <h1 style="font-size:40px; margin-top: 0; text-align: center;">PROGRAMS</h1>
                   @foreach($programs as $row)
                    <div class=" col-12 col-sm-12">
                      <h1 style="font-size:25px;">{{$row['title']}}</h1>
                    </div>
                   @endforeach

                    {{-- 
                    <div class=" col-12 col-sm-12">
                      <h1 style="font-size:25px;">Medical Assistant</h1>
                    </div>
                    <div class=" col-12 col-sm-12">
                      <h1 style="font-size:25px;">Medical Equipments</h1>
                    </div> --}}
                 </div>
               </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class=" col-12 col-sm-12 mt-2">
            <div class="row" >

              <div class=" col-sm-6">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title"> <h1 style="font-size:40px; margin-top: 0; text-align: center;">UPDATES</h1></h2>
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
                          <div class=" col-6 col-sm-6">
                            <div class="card">
                              <div class="card-body">
                                <div class="sj" style="margin-top: 0; text-align: center;">
                                  <h1 style="font-size:30px;">FACEBOOK</h1>
                                  <div id="fb-root"></div>
                                    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0" nonce="Q2u8vjt1"></script>
                                  <div class="fb-page" data-href="https://www.facebook.com/CityofSanJuanNCRPhilippines/" data-tabs="timeline" data-width="" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/CityofSanJuanNCRPhilippines/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/CityofSanJuanNCRPhilippines/">San Juan City, Philippines</a></blockquote></div>
                                </div>
                              </div>
                           </div>
                         </div>
                         <div class=" col-6 col-sm-6">
                           <div class="card">
                             <div class="card-body">
                               <div class="sj" style="margin-top: 0; text-align: center;">
                                 <h1 style="font-size:30px;">INSTAGRAM</h1>
                                 <div class="fb-page"
                                    data-tabs="events"
                                    data-href="https://www.facebook.com/YoloBookStore"
                                    data-width="380">
                                </div>
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
