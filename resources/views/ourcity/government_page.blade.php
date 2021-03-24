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

</style>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <div class="container" id="con1" style="max-width: 60%; background-color:white;">
          <div class="row">
            <h1 style="margin-top: 25px; text-align: center; font-size:50px;">SAN JUAN CITY</h1>
            <div class=" col-12 col-sm-12 col-md-12 col-lg-12">
               <div class="as"><img src="{{asset('assets/SANJUAN.jpg')}}"  style="width: 100%; border-radius: 5px;"/></div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class=" col-6 col-sm-6 col-md-6 col-lg-6">
              <div class="card">
                <div class="card-body">
                  <br>
              <!-- <div class="q"><img src="{{asset('assets/gold.png')}}"  style="width: 540px; border-radius: 5px; z-index:-1"/></div> -->
                    <h3 style=" font-weight:bold; text-align:center; color: #1f1c4b; border-bottom: 5px solid red;">VISION</h3>
                    <p style=" font-weight: 500; margin-top: 15px; text-align: justify;">A globally competitive communinity of dynamic, productive and empowered citizenry inspired by their rich historical and cultural heritage propelled by a sustainable and progressive economy in a healthy, peaceful, disaster-resilient and Eco-friendly environment.</p>
                    <br>
                </div>
              </div>
            </div>
            <div class=" col-6 col-sm-6 col-md-6 col-lg-6">
              <div class="card">
                <div class="card-body">
              <br>
              <!-- <div class="q"><img src="{{asset('assets/gold.png')}}"  style="width: 540px; border-radius: 5px; z-index:-1"/></div> -->
              <!-- <div class="vision" style="position: relative;top: auto;width: 80%;left: 11%;"> -->
              <h3 style=" font-weight:bold; text-align:center; color: #1f1c4b;border-bottom: 5px solid red;">MISSION</h3>
              <p style=" font-weight: 500; margin-top: 15px; text-align: justify;">To provide quality and effective asocial services, pursue sustainable, inclusive and equitable economic growth, and promote ecological balance through a responsive, transparent, efficient, and technologically advanced governance in partnership an empowered people towards achieving the city of excellence.</p>
              </div>
            </div>
            <br>
          </div>
       </div>
     </div>
        <br>
@endsection
