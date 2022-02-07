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

p{
  font-size: 18px;
  font-weight: 400;
  text-align: justify;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}
.red{
    background-color: #b2505c;
    background-image: linear-gradient(315deg, #ff1616 0%, #1b2560 74%);
}
.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
}

.card1 {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 30%;
}

.card1:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding:0
}
@media screen and (min-device-width: 1601px) and (max-device-width: 1920px) {
  .ourserve .capbody h4{
      font-size: 20px;
  }
  .ourserve .card{
    height: 100%;
  }
}

</style>
<div class="container">
    <div class="row">
        <img src="{{asset('assets/Department/CityAdmin1.png')}}" style="width: 100%; margin: auto; padding-right: 0 !important; padding-left: 0 !important; ">
    </div>
</div>

<br>

<div class="container" style="width: 95%;">
  <div class="row">
    <div class="col-6">
      <h3><a class="deptlink" href="/">HOME</a> <a style="font-size: 18px !important; font-weight: 600 !important;" href=""> ></a> <a class="deptlink" href="{{route('department')}}"> DEPARTMENTS</a> <a style="font-size: 18px !important; font-weight: 600 !important;" href=""> ></a> <a class="deptlink" href="{{route('cd')}}"> INSTITUTIONAL DEVELOPMENT</a></h3>
    </div>
  </div>
<div class="row">
            <div class="col-sm-6">
              <div class="card" style="height: 100%;">
                      <div class="card-body"style="border: 3px solid #003471;">
                        <h2 class="card-title red" style="color:#fff !important; padding: 0 !important; text-align: center; font-weight: 700;">DESCRIPTION OF THE OFFICE</h2>
                        <p>The Office of the City Administrator, through its ceaseless determination for better governance of the City of San Juan, devises strategic plans of action and initiatives to bolster management within the City Government and to improve the delivery of various government services. It resolves day-to-day complaints, evaluates departmental performance, coordinates interoffice activities, and implements mayoral directives to fulfill its mission and vision, all in the service of the San Juaneño and in the name of the Office of the City Mayor. </p>
                      </div>
              </div>
            </div>

            <div class="col-sm-6">
              <div class="card" style="height: 100%;">
                      <div class="card-body"style="border: 3px solid #003471;">
                        <h2 class="card-title red" style="color:#fff !important; padding: 0 !important; text-align: center; font-weight: 700;">OFFICE SCHEDULE</h2>
                        <p>The Office of the City Administrator is open from Monday to Friday, 8:00 A.M. to 5:00 P.M., with no noon breaks.</p>
                      </div>
              </div>
            </div>
</div>

<br>

<div class="row">
            <div class="col-sm-6">
              <div class="card" style="height: 100%;">
                      <div class="card-body"style="border: 3px solid #003471;">
                        <h2 class="card-title red" style="color:#fff !important; padding: 0 !important; text-align: center; font-weight: 700;">MISSION STATEMENT</h2>
                        <p>The Office of the City Administrator endeavors to provide quality public service by instilling a culture of excellence and industry in all departments of the San Juan City Government. It also aims to build strong partnerships with the national government and the private sector. </p>
                      </div>
              </div>
            </div>

            <div class="col-sm-6">
              <div class="card" style="height: 100%;">
                      <div class="card-body"style="border: 3px solid #003471;">
                        <h2 class="card-title red" style="color:#fff !important; padding: 0 !important; text-align: center; font-weight: 700;">VISION STATEMENT</h2>
                        <p>The Office of the City Administrator envisions a San Juan City that thrives on sustainable human, economic, and environmental development as an outcome of effective communication and cooperation among the units of the San Juan City Government, the national government, and the private sector.</p>
                      </div>
              </div>
            </div>
</div>

<br>

  <div class="row">
    <div class="col">
      <div class="card" style="height: 100%;">
        <div class="card-body"style="border: 3px solid #003471;">
          <h2 class="card-title red" style="color:#fff !important; padding: 0 !important; text-align: center; font-weight: 700;">PHILOSOPHY</h2>
            <p>Towards a more progressive San Juan City, the Office of the City Administrator believes that it must exercise its internal and external responsibilities in accordance with the pillars of good governance and the laws of the land, both of which should never be infringed to reach a compromise or to achieve personal gain.
            </p>
        </div>
      </div>
    </div>
  </div>

<br>

<h2 class="card-title red" style="color:#fff !important; padding: 0 !important; text-align: center; color: #1f1c4b;font-weight: 700;">OUR SERVICES</h2>

<br>
<div class="container ourserve" style="padding-right: 0 !important; padding-left: 0 !important; width:60%;">
      <div class="modal fade" id="uno" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg modalss" style="width: 90%; max-width: 90%;">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="btn btn-default close_pause"  data-dismiss="modal" style="background-color:red; float:right; font-weight:900; font-size:15px;">X</button>
                <img class="card-img-top" src="{{asset('assets/Department/service1.png')}}"/>
            </div>
            <div class="modal-footer">
            </div>
          </div>

        </div>
      </div>
      <div class="modal fade" id="dos" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg modalss" style="width: 80%; max-width: 80%;">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="btn btn-default close_pause"  data-dismiss="modal" style="background-color:red; float:right; font-weight:900; font-size:15px;">X</button>
                <img class="card-img-top" src="{{asset('assets/Department/service2.png')}}"/>
            </div>
            <div class="modal-footer">
            </div>
          </div>

        </div>
      </div>
    <div class="row">
          <div class="row" style="margin-bottom: 2%;">
              <div class="col-6 clearfix d-md-block">
                <a data-toggle="modal" data-target="#uno">
                  <div class="card mb-2 hovcard">
                    <img class="card-img-top" src="{{asset('assets/Department/service1.png')}}"
                         alt="Card image cap">
                    <div class="card-body capbody">
                      <h4>REVIEW / APPROVAL OF VARIOUS DOCUMENTS</h4>
                    </div>
                  </div>
              </a>
              </div>
            <div class="col-6 clearfix d-md-block">
              <a data-toggle="modal" data-target="#dos">
                <div class="card mb-2 hovcard">
                  <img class="card-img-top" src="{{asset('assets/Department/service2.png')}}"
                       alt="Card image cap">
                  <div class="card-body capbody">
                    <h4>REVIEW OF VOUCHERS / ALOBS AND OTHER RELATED DOCUMENTS</h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
      </div>
    </div>
</div>

<h2 class="card-title red" style="color:#fff !important; padding: 0 !important; text-align: center; color: #1f1c4b;font-weight: 700;">ORGANIZATIONAL CHART</h2>

<br>

<div class="row">
        <img src="{{asset('assets/Department/AdminOrgChart2.jpg')}}" style="width: 50%; margin: auto; padding-right: 0 !important; padding-left: 0 !important; border: 4px solid #003471;">
</div>

<br>

</div>

@endsection
