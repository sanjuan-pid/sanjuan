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
.as::before{
  content: '';
  width: 98%;
  height: 101%;
  background:white;
  position: absolute;
  top: -3px;
  left:15px;
  animation: animate 4s forwards;
}
@keyframes animate {
  0%{
     width: 100%;
     z-index: 1;
  }
  50%{
     width: 0%;
     z-index: 1;
  }
  51%{
     width: 0%;
     z-index: -1;
  }
  100%{
     width: 100%;
     z-index: -1;
  }

}

@media screen and (min-device-width: 1601px) and (max-device-width: 1920px)  {
  div#gov {
    max-width: 70% !important;
    width: 70% !important;
    flex: 0 0 100%;
  }
  #gov p{
      font-size: 20px !important;
  }
  #gov h1{
      font-size: 55px !important;
  }
  #gov h3{
      font-size: 30px !important;
  }
}
@media screen and (min-device-width: 1551px) and (max-device-width: 1600px)  {
  div#gov {
    max-width: 70% !important;
    width: 70% !important;
    flex: 0 0 100%;
  }
  #gov p{
      font-size: 15px !important;
  }
  #img1{
    width:  580px !important;
    margin-top: -110px !important;
    margin-left: 0 !important;
  }
  #gov h1{
      font-size: 50px !important;
  }
  #gov h3{
      font-size: 20px !important;
  }
}
@media screen and (min-device-width: 1367px) and (max-device-width: 1500px)  {
  div#gov {
    max-width: 70% !important;
    width: 70% !important;
    flex: 0 0 100%;
  }
  #gov p{
      font-size: 15px !important;
  }
  #img1{
    width:  600px !important;
    margin-top: -110px !important;
    margin-left: 0 !important;
  }
  #gov h1{
      font-size: 50px !important;
  }
  #gov h3{
      font-size: 20px !important;
  }
}
@media screen and (min-device-width: 1205px) and (max-device-width: 1366px)  {
  div#gov {
    max-width: 80% !important;
    width: 80% !important;
    flex: 0 0 100%;
  }
  #gov p{
      font-size: 15px !important;
  }
  #img1{
    width:  580px !important;
    margin-top: -110px !important;
    margin-left: 0 !important;
  }
  #gov h1{
      font-size: 50px !important;
  }
  #gov h3{
      font-size: 20px !important;
  }
}
@media screen and (max-width: 766px) and (min-width: 200px) {

  div#gov {
    max-width: 100% !important;
    width:100% !important;
    margin-top: -50px !important;
  }
   #gov .col-6.col-sm-6.col-md-6.col-lg-6, #gov .col-8.col-sm-8.col-md-8.col-lg-8{
    max-width: 100% !important;
    width:100% !important;
    flex: 0 0 100%;

  }
  #gov .col-4.col-sm-4.col-md-4.col-lg-4.mt-5{
   max-width: 100% !important;
    width:100% !important;
    flex: 0 0 100%;
  }

  #gov h1{
      font-size: 25px !important;
  }
  #gov h3{
      font-size: 20px !important;
  }
  #gov p{
      font-size: 14px !important;
  }
  #img1 {
    width: 100% !important;
    margin-top: 0 !important;
    margin-left: 0  !important;
}
}
#img1{
  width:  866px;
  margin-top: -160px;
  margin-left: -90px;
}
.gp{
  background-color: rgb(0,0,0); /* Fallback color */
 background-color: rgba(255,255,255, 0.6); /* Black w/opacity/see-through */
 color: white;
 font-weight: bold;

 position: absolute !important;
 top: 50% !important;
 left: 25% !important;
 transform: translate(-50%, -50%);
 z-index: 2 !important;
 width: 35% !important;
 height: 35% !important;
 padding: 20px !important;
 border-radius: 10px;
 text-align: center !important;
 text-shadow: 2px 2px white;
}
.gp2{
  background-color: rgb(0,0,0); /* Fallback color */
 background-color: rgba(255,255,225, 0.6); /* Black w/opacity/see-through */
 color: white;

 border-color: black;
 position: absolute !important;
 top: 50% !important;
 left: 75% !important;
 width: 35% !important;
 height: 35% !important;
 transform: translate(-50%, -50%);
 z-index: 2 !important;
 padding: 20px !important;
 text-align: center !important;
 text-shadow: 2px 2px white;
}

</style>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- <div class="ar" style="position: relative; text-align: center;  height: 150px;
          width: 100%;
          background-color: #000099">
            <!-- <img src="{{asset('assets/bantitle.png')}}"  style="width: 100%;height: 350px; border-radius: 5px;"/> -->
            <!-- <h3  id="h3dept" style="text-align: center; color: white; font-size: 60px; font-weight: 700; position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);">SAN JUAN CITY</h3>
        </div> -->

        <br>
        <!-- <div class="hi" id="imahe" style="position: relative; text-align: center; color: white;">
          <img src="{{asset('assets/SANJUAN2.png')}}"id="img1"/>
          <div class="he"style="">
            <!-- <h3 style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-weight:600; font-size:100px;text-shadow: 2px 2px 5px red; ">VISION</h3> -->

          <!-- </div>
        </div> -->
        <br>
        <div class="container" id="gov">
          <!-- <div class="row">

            <div class=" col-12 col-sm-12 col-md-12 col-lg-12">
               <div class="as"><img src="{{asset('assets/SANJUAN2.jpg')}}"  style="width: 100%; border-radius: 5px;"/></div>
            </div>
          </div> -->
          <br>
          <div class="row">
              <div class="col-sm-6 col-m-6 col-lg-6 ">
              <h3 style=" font-weight:bold; text-align:center; color: black !important; border-bottom: 5px solid red;">VISION</h3>
              <p style=" font-weight: 400; margin-top: 15px; text-align: justify; color:black !important;">A globally competitive communinity of dynamic, productive and empowered citizenry inspired by their rich historical and cultural heritage propelled by a sustainable and progressive economy in a healthy, peaceful, disaster-resilient and Eco-friendly environment.</p>
              <h3 style=" font-weight:bold; text-align:center; color: black !important;border-bottom: 5px solid red;">MISSION</h3>
              <p style=" font-weight: 400; margin-top: 15px; text-align: justify;  color:black !important;">To provide quality and effective social services, pursue sustainable, inclusive and equitable economic growth, and promote ecological balance through a responsive, transparent, efficient, and technologically advanced governance in partnership with an empowered people towards achieving the city of excellence.</p>
            </div>
            <div class="col-sm-6 col-m-6 col-lg-6">
                <img src="{{asset('assets/aa-min.png')}}"id="img1"/>
            </div>
          </div>

        </div>
        <br>
        <br>
        <br>
        <br>

@endsection
