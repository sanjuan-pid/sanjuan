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
  width: 15%;
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
  border: 1px solid #ccc;
  width: 70%;
  border-left: none;
  height: 600px;
}
</style>


        <h3 style="text-align: center; color: #1f1c4b; font-size: 60px; font-weight: 700;">CHOOSE YOUR COUNCILOR</h3>
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="tab" style="height: 600px; overflow-y: scroll;">
                  <button class="tablinks" onclick="openCity(event, 'two')"> <img src="{{asset('assets/konsehal/AQUINO.png')}}" style="width:60%;display: block; margin-left: auto; margin-right: auto; border-radius: 5px;"/></button>
                  <button class="tablinks" onclick="openCity(event, 'three')"><img src="{{asset('assets/konsehal/ARTADI.png')}}"style="width:60%;display: block; margin-left: auto; margin-right: auto;border-radius: 5px;"/></button>
                  <button class="tablinks" onclick="openCity(event, 'four')"><img src="{{asset('assets/konsehal/ATAD.png')}}"style="width:60%;display: block; margin-left: auto; margin-right: auto;border-radius: 5px;"/></button>
                  <button class="tablinks" onclick="openCity(event, 'six')"><img src="{{asset('assets/konsehal/CHUA.png')}}"style="width:60%;display: block; margin-left: auto; margin-right: auto;border-radius: 5px;"/></button>
                  <button class="tablinks" onclick="openCity(event, 'eight')"><img src="{{asset('assets/konsehal/PACHECO.png')}}"style="width:60%;display: block; margin-left: auto; margin-right: auto;border-radius: 5px;"/></button>
                  <button class="tablinks" onclick="openCity(event, 'nine')"><img src="{{asset('assets/konsehal/REYES.png')}}"style="width:60%;display: block; margin-left: auto; margin-right: auto;border-radius: 5px;"/></button>
                  <button class="tablinks" onclick="openCity(event, 'ten')"><img src="{{asset('assets/konsehal/SUBIJANO.png')}}"style="width:60%;display: block; margin-left: auto; margin-right: auto;border-radius: 5px;"/></button>
                  <button class="tablinks" onclick="openCity(event, 'ele')"><img src="{{asset('assets/konsehal/VELASCO.png')}}"style="width:60%;display: block; margin-left: auto; margin-right: auto;border-radius: 5px;"/></button>

              </div>
              <div class="tab" style="height: 600px; overflow-y: scroll;">
                  <button class="tablinks" onclick="openCity(event, 'a')" id="defaultOpen"> <img src="{{asset('assets/konsehal/bernardo.png')}}" style="width:60%;display: block; margin-left: auto; margin-right: auto; border-radius: 5px;"/></button>
                  <button class="tablinks" onclick="openCity(event, 'b')"><img src="{{asset('assets/konsehal/deguzman.png')}}"style="width:60%;display: block; margin-left: auto; margin-right: auto;border-radius: 5px;"/></button>
                  <button class="tablinks" onclick="openCity(event, 'c')"><img src="{{asset('assets/konsehal/ejercito.png')}}"style="width:60%;display: block; margin-left: auto; margin-right: auto;border-radius: 5px;"/></button>
                  <button class="tablinks" onclick="openCity(event, 'd')"><img src="{{asset('assets/konsehal/mathay.png')}}"style="width:60%;display: block; margin-left: auto; margin-right: auto;border-radius: 5px;"/></button>
                  <button class="tablinks" onclick="openCity(event, 'e')"><img src="{{asset('assets/konsehal/mj.png')}}"style="width:60%;display: block; margin-left: auto; margin-right: auto;border-radius: 5px;"/></button>
                  <button class="tablinks" onclick="openCity(event, 'f')"><img src="{{asset('assets/konsehal/peralta.png')}}"style="width:60%;display: block; margin-left: auto; margin-right: auto;border-radius: 5px;"/></button>
              </div>
              <div id="two" class="tabcontent">
                <br>
                <br>
                <img src="{{asset('assets/konsehal/AQUINO.png')}}"style="width:50%;display: block; margin-left: auto; margin-right: auto;border-radius: 5px;"/>
              </div>
              <div id="three" class="tabcontent">
                <br>
                <br><img src="{{asset('assets/konsehal/ARTADI.png')}}"style="width:50%;display: block; margin-left: auto; margin-right: auto; border-radius: 5px;"/>
              </div>
               <div id="four" class="tabcontent">
                <br>
                <br>
                  <img src="{{asset('assets/konsehal/ATAD.png')}}"style="width:50%;display: block; margin-left: auto; margin-right: auto; border-radius: 5px;"/>
               </div>
               <div id="six" class="tabcontent">
                <br>
                <br>
                <img src="{{asset('assets/konsehal/CHUA.png')}}"style="width:50%;display: block; margin-left: auto; margin-right: auto; border-radius: 5px;"/>
              </div>
              <div id="eight" class="tabcontent">
                <br>
                <br>
                <img src="{{asset('assets/konsehal/PACHECO.png')}}" style="width:50%;display: block; margin-left: auto; margin-right: auto;border-radius: 5px;"/>
              </div>
              <div id="nine" class="tabcontent">
                <br>
                <br>
                <img src="{{asset('assets/konsehal/REYES.png')}}"style="width:50%;display: block; margin-left: auto; margin-right: auto;border-radius: 5px;"/>
              </div>
              <div id="ten" class="tabcontent">
                <br>
                <br>
                <img src="{{asset('assets/konsehal/SUBIJANO.png')}}"style="width:50%;display: block; margin-left: auto; margin-right: auto;border-radius: 5px;"/>
              </div>
              <div id="ele" class="tabcontent">
                <br>
                <br>
                <img src="{{asset('assets/konsehal/VELASCO.png')}}"style="width:50%;display: block; margin-left: auto; margin-right: auto; border-radius: 5px;"/>
              </div>
              <div id="a" class="tabcontent">
                <br>
                <br>
                <img src="{{asset('assets/konsehal/bernardo.png')}}"style="width:50%;display: block; margin-left: auto; margin-right: auto;border-radius: 5px;"/>
              </div>
              <div id="b" class="tabcontent">
                <br>
                <br>
                <img src="{{asset('assets/konsehal/deguzman.png')}}"style="width:50%;display: block; margin-left: auto; margin-right: auto;border-radius: 5px;"/>
              </div>
              <div id="c" class="tabcontent">
                <br>
                <br>
                <img src="{{asset('assets/konsehal/ejercito.png')}}"style="width:50%;display: block; margin-left: auto; margin-right: auto;border-radius: 5px;"/>
              </div>
              <div id="d" class="tabcontent">
                <br>
                <br>
                <img src="{{asset('assets/konsehal/mathay.png')}}"style="width:50%;display: block; margin-left: auto; margin-right: auto;border-radius: 5px;"/>
              </div>
              <div id="e" class="tabcontent">
                <br>
                <br>
                <img src="{{asset('assets/konsehal/mj.png')}}"style="width:50%;display: block; margin-left: auto; margin-right: auto;border-radius: 5px;"/>
              </div>
              <div id="f" class="tabcontent">
                <br>
                <br>
                <img src="{{asset('assets/konsehal/peralta.png')}}"style="width:50%;display: block; margin-left: auto; margin-right: auto;border-radius: 5px;"/>
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
            document.getElementById("defaultOpen").click();
       </script>
       <br>
@endsection
