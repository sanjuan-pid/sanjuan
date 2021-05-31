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
  <link rel="stylesheet" type="text/css" href="/css/dev_h.css">
    <div class="container" id="council" style="max-width: 60%;">
      <h3 style="text-align: center; color: #1f1c4b; font-size: 50px; font-weight: 700;">COUNCILORS</h3>
        <div class="row">
          <div class="col-2">
            <div class="tab">
                  <button class="tablinks button" onmouseover="openCity(event, 'two')"><img src="{{asset('assets/konsehal/AQUINO.png')}}"style="width:100%;display: block; margin-left: auto; margin-right: auto;border-radius: 10px !important; margin-top:2%;"/></button>
                  <button class="tablinks button" onmouseover="openCity(event, 'three')"><img src="{{asset('assets/konsehal/ARTADI.png')}}"style="width:100%;display: block; margin-left: auto; margin-right: auto;border-radius: 10px !important; margin-top:2%;"/></button>
                  <button class="tablinks button" onmouseover="openCity(event, 'four')"><img src="{{asset('assets/konsehal/ATAD.png')}}"style="width:100%;display: block; margin-left: auto; margin-right: auto;border-radius: 10px !important;margin-top:2%;"/></button>
                  <button class="tablinks button" onmouseover="openCity(event, 'six')"><img src="{{asset('assets/konsehal/CHUA.png')}}"style="width:100%;display: block; margin-left: auto; margin-right: auto;border-radius: 10px !important;margin-top:2%;"/></button>
                  <button class="tablinks button" onmouseover="openCity(event, 'eight')"><img src="{{asset('assets/konsehal/PACHECO.png')}}"style="width:100%;display: block; margin-left: auto; margin-right: auto;border-radius: 10px !important;margin-top:2%;"/></button>
                  <button class="tablinks button" onmouseover="openCity(event, 'nine')"><img src="{{asset('assets/konsehal/REYES.png')}}"style="width:100%;display: block; margin-left:auto; margin-right: auto;border-radius: 10px !important;margin-top:2%;"/></button>
                  <button class="tablinks button" onmouseover="openCity(event, 'ten')"><img src="{{asset('assets/konsehal/SUBIJANO.png')}}"style="width:100%;display: block; margin-left: auto; margin-right: auto;border-radius: 10px !important;margin-top:2%;"/></button>

              </div>
            </div>

          <div class="col-8">
            <div id="two" class="tabcontent">
              <br>
              <br>
              <img src="{{asset('assets/konsehal/AQUINO.png')}}"style="width:50%;display: block; margin-left: auto; margin-right: auto;border-radius: 10px !important;"/>
              <h1 style="text-align:center;">Coun. Arthur Alfredo E. Aquino</h1>
            </div>
            <div id="three" class="tabcontent">
              <br>
              <br><img src="{{asset('assets/konsehal/ARTADI.png')}}"style="width:50%;display: block; margin-left: auto; margin-right: auto; border-radius: 10px !important;"/>
              <h1 style="text-align:center;">Coun. Paul Anthony D. Artadi</h1>
            </div>
             <div id="four" class="tabcontent">
              <br>
              <br>
                <img src="{{asset('assets/konsehal/ATAD.png')}}"style="width:50%;display: block; margin-left: auto; margin-right: auto; border-radius: 10px !important;"/>
                <h1 style="text-align:center;">SK Federation President: Coun. Ariel I. Atad<h1>
             </div>
              <div id="six" class="tabcontent">
              <br>
              <br>
              <img src="{{asset('assets/konsehal/CHUA.png')}}"style="width:50%;display: block; margin-left: auto; margin-right: auto; border-radius: 10px !important;"/>
              <h1 style="text-align:center;">Liga ng mga Barangay President: Coun. Herbert O. Chua<h1>
            </div>
            <div id="eight" class="tabcontent">
              <br>
              <br>
              <img src="{{asset('assets/konsehal/PACHECO.png')}}" style="width:50%;display: block; margin-left: auto; margin-right: auto;border-radius: 10px !important;"/>
              <h1 style="text-align:center;">Coun. Vincent Rainier M. Pacheco</h1>
            </div>
            <div id="nine" class="tabcontent">
              <br>
              <br>
              <img src="{{asset('assets/konsehal/REYES.png')}}"style="width:50%;display: block; margin-left: auto; margin-right: auto;border-radius: 10px !important;"/>
              <h1 style="text-align:center;"> Coun. Victor Jose L. Reyes</h1>
            </div>
            <div id="ten" class="tabcontent">
              <br>
              <br>
              <img src="{{asset('assets/konsehal/SUBIJANO.png')}}"style="width:50%;display: block; margin-left: auto; margin-right: auto;border-radius: 10px !important;"/>
              <h1 style="text-align:center;"> Coun. Raissa H. Laurel-Subijano</h1>
            </div>
            <div id="ele" class="tabcontent">
              <br>
              <br>
              <img src="{{asset('assets/konsehal/VELASCO.png')}}"style="width:50%;display: block; margin-left: auto; margin-right: auto; border-radius: 10px !important;"/>
              <h1 style="text-align:center;">Coun. Franchesco Paul R. Velasco</h1>
            </div>
            <div id="a" class="tabcontent">
              <br>
              <br>
              <img src="{{asset('assets/konsehal/bernardo.png')}}"style="width:50%;display: block; margin-left: auto; margin-right: auto;border-radius: 10px !important;"/>
              <h1 style="text-align:center;">Coun. Rolando M. Bernardo</h1>
            </div>
            <div id="b" class="tabcontent">
              <br>
              <br>
              <img src="{{asset('assets/konsehal/deguzman.png')}}"style="width:50%;display: block; margin-left: auto; margin-right: auto;border-radius: 10px !important;"/>
              <h1 style="text-align:center;">Coun. Bea Celine D. De Guzman</h1>
           </div>
            <div id="c" class="tabcontent">
              <br>
              <br>
              <img src="{{asset('assets/konsehal/ejercito.png')}}"style="width:50%;display: block; margin-left: auto; margin-right: auto;border-radius: 10px !important;"/>
              <h1 style="text-align:center;">Coun. Jannah A. Ejercito</h1>
            </div>
            <div id="d" class="tabcontent">
              <br>
              <br>
              <img src="{{asset('assets/konsehal/mathay.png')}}"style="width:50%;display: block; margin-left: auto; margin-right: auto;border-radius: 10px !important;"/>
              <h1 style="text-align:center;">Coun. Michael Cristopher R. Mathay</h1>
            </div>
            <div id="ee" class="tabcontent">
              <br>
              <br>
              <img src="{{asset('assets/konsehal/mj.png')}}"style="width:50%;display: block; margin-left: auto; margin-right: auto;border-radius: 10px !important;"/>
              <h1 style="text-align:center;"> Coun. Mary Joy A. Ibuna-Leoy</h1>
            </div>
            <div id="f" class="tabcontent">
              <br>
              <br>
              <img src="{{asset('assets/konsehal/peralta.png')}}"style="width:50%;display: block; margin-left: auto; margin-right: auto;border-radius: 10px !important;"/>
              <h1 style="text-align:center;"> Coun. Francis Keith R. Peralta</h1>
            </div>
          </div>
          <div class="col-2">
            <div class="tab2">
                <button class="tablinks button" onmouseover="openCity(event, 'a')" id="defaultOpen"> <img src="{{asset('assets/konsehal/bernardo.png')}}" style="width:100%;display: block; margin-left: auto; margin-right: auto; border-radius: 10px !important; "/></button>
                <button class="tablinks button" onmouseover="openCity(event, 'b')"><img src="{{asset('assets/konsehal/deguzman.png')}}"style="width:100%;display: block; margin-left: auto; margin-right: auto;border-radius: 10px !important;margin-top:2%;"/></button>
                <button class="tablinks button"  onmouseover="openCity(event, 'c')"><img src="{{asset('assets/konsehal/ejercito.png')}}"style="width:100%;display: block; margin-left: auto; margin-right: auto;border-radius: 10px !important;margin-top:2%;"/></button>
                <button class="tablinks button" onmouseover="openCity(event, 'd')"><img src="{{asset('assets/konsehal/mathay.png')}}"style="width:100%;display: block; margin-left: auto; margin-right: auto;border-radius: 10px !important;margin-top:2%;"/></button>
                <button class="tablinks button" onmouseover="openCity(event, 'ee')"><img src="{{asset('assets/konsehal/mj.png')}}"style="width:100%;display: block; margin-left: auto; margin-right: auto;border-radius: 10px !important;margin-top:2%;"/></button>
                <button class="tablinks button" onmouseover="openCity(event, 'f')"><img src="{{asset('assets/konsehal/peralta.png')}}"style="width:100%;display: block; margin-left: auto; margin-right: auto;border-radius: 10px !important;margin-top:2%;"/></button>
                <button class="tablinks button" onmouseover="openCity(event, 'ele')"><img src="{{asset('assets/konsehal/VELASCO.png')}}"style="width:100%;display: block; margin-left: auto; margin-right: auto;border-radius: 10px !important;margin-top:2%;"/></button>
            </div>
          </div>
        </div>
      </div>
    </div>
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
            document.getElementById("defaultOpen").onmouseover();
       </script>
       <br>


@endsection
