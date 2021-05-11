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
.vm{
  border: 15px solid #B88846;
  border-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='75' height='75'%3E%3Cg fill='none' stroke='%23B88846' stroke-width='2'%3E%3Cpath d='M1 1h73v73H1z'/%3E%3Cpath d='M8 8h59v59H8z'/%3E%3Cpath d='M8 8h16v16H8zM51 8h16v16H51zM51 51h16v16H51zM8 51h16v16H8z'/%3E%3C/g%3E%3Cg fill='%23B88846'%3E%3Ccircle cx='16' cy='16' r='2'/%3E%3Ccircle cx='59' cy='16' r='2'/%3E%3Ccircle cx='59' cy='59' r='2'/%3E%3Ccircle cx='16' cy='59' r='2'/%3E%3C/g%3E%3C/svg%3E") 25;
}
@media only screen and (max-width: 1920px) and (min-width: 1080px)  {
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
@media only screen and (max-width: 1600px) and (min-width: 900px)  {
  div#gov {
    max-width: 60% !important;
    width: 60% !important;
    flex: 0 0 100%;
  }
  #gov p{
      font-size: 15px !important;
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
}


</style>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <div class="container" id="gov" style="max-width: 60%; background-color:white;">
          <div class="row">
            <h1 style="margin-top: 25px; text-align: center; font-size:50px;">SAN JUAN CITY</h1>
            <div class=" col-12 col-sm-12 col-md-12 col-lg-12">
               <div class="as"><img src="{{asset('assets/SANJUAN.jpg')}}"  style="width: 100%; border-radius: 5px;"/></div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class=" col-6 col-sm-6 col-md-6 col-lg-6 vm">
                  <br>
              <!-- <div class="q"><img src="{{asset('assets/gold.png')}}"  style="width: 540px; border-radius: 5px; z-index:-1"/></div> -->
                    <h3 style=" font-weight:bold; text-align:center; color: #1f1c4b; border-bottom: 5px solid red;">VISION</h3>
                    <p style=" font-weight: 500; margin-top: 15px; text-align: justify;">A globally competitive communinity of dynamic, productive and empowered citizenry inspired by their rich historical and cultural heritage propelled by a sustainable and progressive economy in a healthy, peaceful, disaster-resilient and eco-friendly environment.</p>
                    <br>
            </div>
            <div class=" col-6 col-sm-6 col-md-6 col-lg-6 vm">
              <br>
              <!-- <div class="q"><img src="{{asset('assets/gold.png')}}"  style="width: 540px; border-radius: 5px; z-index:-1"/></div> -->
              <!-- <div class="vision" style="position: relative;top: auto;width: 80%;left: 11%;"> -->
              <h3 style=" font-weight:bold; text-align:center; color: #1f1c4b;border-bottom: 5px solid red;">MISSION</h3>
              <p style=" font-weight: 500; margin-top: 15px; text-align: justify;">To provide quality and effective social services, pursue sustainable, inclusive and equitable economic growth, and promote ecological balance through a responsive, transparent, efficient, and technologically advanced governance in partnership an empowered people towards achieving the city of excellence.</p>
            <br>
          </div>
       </div>
     </div>
        <br>
@endsection
