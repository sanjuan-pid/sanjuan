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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    * {box-sizing: border-box}
    body {font-family: "Lato", sans-serif;}

    /* Style the tab */
    .tab {
      float: left;
      border: 1px solid #ccc;
      background-color: #f1f1f1;
      width: 30%;
      height: 512px;
    }

    /* Style the buttons inside the tab */
    .tab button {
      display: block;
      background-color: inherit;
      color: black;
      padding: 22px 16px;
      width: 100%;
      border: none;
      outline: none;
      text-align: left;
      cursor: pointer;
      transition: 0.3s;
      font-size: 17px;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
      background-color: #ddd;
    }

    /* Create an active/current "tab button" class */
    .tab button.active {
      background-color: #ccc;
    }

    /* Style the tab content */
    .tabcontent {
      float: left;
      padding: 0px 12px;
      width: 57%
      border-left: none;
      height: auto;
    }
    .tabcontent img{
      width:100% !important;
    }/* width */
    .agenda_::-webkit-scrollbar {
      width: 10px;

    }

    /* Track */
    .agenda_::-webkit-scrollbar-track {
      box-shadow: inset 0 0 5px grey;
      border-radius: 5px;
    }

    /* Handle */
    .agenda_::-webkit-scrollbar-thumb {
      background: blue;
      border-radius: 5px;
    }

    /* Handle on hover */
    .agenda_::-webkit-scrollbar-thumb:hover {
      background: #5fa3f5;
    }
    </style>
            <br>
            <div class="container" >
              <div class="row">
                <div class="col-12">
                  <div class="tab agenda_" style="height: 115px;overflow-x: scroll;width: 100%; white-space: nowrap;">
                      <button class="tablinks" style="width: 50%;display: inline-block;" onclick="openCity(event, 'two')" id="defaultOpen"><img src="{{asset('assets/BRGY/CORAZON.png')}}" style="width:18%;display: block; margin-left: auto; margin-right: auto;"/></button>
                      <button class="tablinks" style="width: 50%;display: inline-block;" onclick="openCity(event, 'three')"><img src="{{asset('assets/BRGY/ADDITIONHILLS.png')}}"style="width:18%;display: block; margin-left: auto; margin-right: auto;"/></button>
                      <button class="tablinks" style="width: 50%;display: inline-block;" onclick="openCity(event, 'four')"><img src="{{asset('assets/BRGY/little.png')}}"style="width:18%;display: block; margin-left: auto; margin-right: auto;"/></button>
                      <button class="tablinks" style="width: 50%;display: inline-block;" onclick="openCity(event, 'six')"><img src="{{asset('assets/BRGY/LUCIA.png')}}"style="width:18%;display: block; margin-left: auto; margin-right: auto;"/></button>
                      <button class="tablinks" style="width: 50%;display: inline-block;" onclick="openCity(event, 'eight')"><img src="{{asset('assets/BRGY/SALAPAN.png')}}"style="width:18%;display: block; margin-left: auto; margin-right: auto;"/></button>
                      <button class="tablinks" style="width: 50%;display: inline-block;" onclick="openCity(event, 'nine')"><img src="{{asset('assets/BRGY/TIBAGAN.png')}}"style="width:18%;display: block; margin-left: auto; margin-right: auto;"/></button>
                      <button class="tablinks" style="width: 50%;display: inline-block;" onclick="openCity(event, 'ten')"><img src="{{asset('assets/BRGY/STJOSEPH.png')}}"style="width:18%;display: block; margin-left: auto; margin-right: auto;"/></button>

                  </div>
                  <div id="two" class="tabcontent">
                  <br>
                  <div class="row">

                    <h1 style="text-align: center; font-size:40px;">BRGY. CORAZON DE JESUS </h1>
                    <h1 style="text-align: center; font-size:40px;">NEWS</h1>
                    <div class=" col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title">LATEST</h2>
                                    <div class="recent_big">
                                          <img src="{{asset('assets/brgypage/corazon.jpg')}}"  id="image_big" style="width:10%;" />
                                        <p class="card-text title_big"><a href="https://www.facebook.com/pg/vicemayorwarrenvilla/posts/?ref=page_internal">ON THE GROUND, HOUSE-TO-HOUSE COVID-19 VACCINE AWARENESS AND REGISTRATION SA BARANGAY CORAZON DE JESUS
                                        </p></a>
                                    </div>
                                    <br>
                                    <div class="recent_small">

                                        <div class="row">
                                            <div class="col-4 col-sm-4">
                                                <  <img src="{{asset('assets/brgypage/corazon.jpg')}}" style="width: 100%;" />
                                                <p class="recent_psmall">
                                                    <a href="https://www.facebook.com/vicemayorwarrenvilla/photos/pcb.4034476069898345/4034456809900271/?type=3&theater">ON THE GROUND, HOUSE-TO-HOUSE COVID-19 VACCINE AWARENESS AND REGISTRATION SA BARANGAY CORAZON DE JESUS </a>
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

                          <div class="col-sm-6">
                              <div class="card">
                                  <div class="card-body">
                                      <h2 class="card-title">RECENT</h2>
                                          <div class="recent_big">
                                              <img src="{{asset('assets/brgypage/corazon.jpg')}}"  id="image_big" style="width:10%;" />
                                              <p class="card-text title_big"><a href="https://www.facebook.com/pg/vicemayorwarrenvilla/posts/?ref=page_internal">ON THE GROUND, HOUSE-TO-HOUSE COVID-19 VACCINE AWARENESS AND REGISTRATION SA BARANGAY CORAZON DE JESUS
                                              </p></a>
                                          </div>
                                          <br>
                                          <div class="recent_small">

                                              <div class="row">
                                                  <div class="col-4 col-sm-4">
                                                      <img src="{{asset('assets/brgypage/corazon.jpg')}}"  style="width: 100%;" />
                                                      <p class="recent_psmall">
                                                          <a href="https://www.facebook.com/vicemayorwarrenvilla/photos/pcb.4034476069898345/4034456809900271/?type=3&theater">ON THE GROUND, HOUSE-TO-HOUSE COVID-19 VACCINE AWARENESS AND REGISTRATION SA BARANGAY CORAZON DE JESUS</a>
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
                              <br>
                              <div class="row">
                                <h1 style="text-align: center; font-size:40px;">PROJECTS</h1>
                                <div class=" col-sm-12">
                                    <div class="card">
                                        <div class="card-body">

                                                <div class="recent_big" id="b" style="display: block; margin-left: auto; margin-right: auto; width: 50%;">
                                                    <img src="{{asset('assets/brgypage/corazon.jpg')}}"  id="image_big" style="width:10%;" />
                                                    <p class="card-text title_big"><a href="https://www.facebook.com/pg/vicemayorwarrenvilla/posts/?ref=page_internal">San Juan City Covid-19 Vaccination Program Rollout for San Juan Medical Center and City Health Office FRONTLINERS with Dr. Joseph M Acosta and Dr. Rosalie Matubang Sto Domingo
                                                    </p></a>
                                                </div>
                                                <br>
                                                <div class="recent_small "id="s" style="display: block; margin-left: auto; margin-right: auto; width: 50%;">

                                                    <div class="row">
                                                        <div class="col-4 col-sm-4">
                                                            <img src="{{asset('assets/vice/second.png')}}"  style="width: 100%;" />
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
                                    <div class="row">
                                      <h1 style="text-align: center; font-size:40px;">ANNOUNCEMENT</h1>
                                      <div class=" col-sm-12">
                                          <div class="card">
                                              <div class="card-body">

                                                      <div class="recent_big" id="b" style="display: block; margin-left: auto; margin-right: auto; width: 50%;">
                                                          <img src="{{asset('assets/brgypage/corazon.jpg')}}"  id="image_big" style="width:10%;" />
                                                          <p class="card-text title_big"><a href="https://www.facebook.com/pg/vicemayorwarrenvilla/posts/?ref=page_internal">San Juan City Covid-19 Vaccination Program Rollout for San Juan Medical Center and City Health Office FRONTLINERS with Dr. Joseph M Acosta and Dr. Rosalie Matubang Sto Domingo
                                                          </p></a>
                                                      </div>
                                                      <br>
                                                      <div class="recent_small "id="s" style="display: block; margin-left: auto; margin-right: auto; width: 50%;">

                                                          <div class="row">
                                                              <div class="col-4 col-sm-4">
                                                                  <img src="{{asset('assets/vice/second.png')}}"  style="width: 100%;" />
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

                  <div id="three" class="tabcontent">
                    <br>
                    <br>
                    <img src="{{asset('assets/Agenda/3.png')}}"style="width:50%;display: block; margin-left: auto; margin-right: auto;"/>
                  </div>
                   <div id="four" class="tabcontent">
                    <br>
                    <br>
                      <img src="{{asset('assets/Agenda/4.png')}}"style="width:50%;display: block; margin-left: auto; margin-right: auto;"/>
                   </div>
                   <div id="six" class="tabcontent">
                    <br>
                    <br>
                    <img src="{{asset('assets/Agenda/6.png')}}"style="width:50%;display: block; margin-left: auto; margin-right: auto;"/>
                  </div>
                  <div id="eight" class="tabcontent">
                    <br>
                    <br>
                    <img src="{{asset('assets/Agenda/8.png')}}"style="width:50%;display: block; margin-left: auto; margin-right: auto;"/>
                  </div>
                  <div id="nine" class="tabcontent">
                    <br>
                    <br>
                    <img src="{{asset('assets/Agenda/9.png')}}"style="width:50%;display: block; margin-left: auto; margin-right: auto;"/>
                  </div>
                  <div id="ten" class="tabcontent">
                    <br>
                    <br>
                    <img src="{{asset('assets/Agenda/10.png')}}"style="width:50%;display: block; margin-left: auto; margin-right: auto;"/>
                  </div>
                </div>
               </div>
            </div>
            <br>
            <script>
                function openCity(evt, cityName) {
                  var i, tabcontent, tablinks;
                  tabcontent = document.getElementsByClassName("tabcontent");
                  for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                  }
                  tablinks = document.getElementsByClassName("tablinks");
                  for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                  }
                  document.getElementById(cityName).style.display = "block";
                  evt.currentTarget.className += " active";
                }

                // Get the element with id="defaultOpen" and click on it
                document.getElementById("defaultOpen").click();
           </script>



@endsection
