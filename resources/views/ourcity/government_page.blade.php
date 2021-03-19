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
@media only screen and (max-width: 768px) {
#id{
  max-width: 100%;
}

}
</style>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <div class="container" id="con1" style="max-width: 60%; background-color:white;">
          <div class="row">
            <h1 style="margin-top: 25px; text-align: center; border-bottom: 5px solid #1b2560;">SAN JUAN CITY</h1>
            <div class=" col-6 col-sm-6 col-md-6 col-lg-6">
              <br>
              <br>
              <br>
              <br>
              <img src="{{asset('assets/SANJUAN.jpg')}}"  style="width: 100%; border-radius: 5px;"/>
            </div>
            <div class=" col-6 col-sm-6 col-md-6 col-lg-6">
              <br>
              <h3 style=" font-weight:bold; text-align:center; color: #1f1c4b;">VISION</h3>

              <p style=" font-weight: 500; margin-top: 15px;">A globally competitive communicability of dynamic, productive and empowered citizenry inspired by their rich historical and cultural heritage propelled by a sustainable and progressive economy in a healthy, peaceful, disaster-resilient and Eco-friendly environment.</p>
              <br>
              <h3 style=" font-weight:bold; text-align:center;  color: #1f1c4b;">MISSION</h3>
              <p style=" font-weight: 500; margin-top: 15px;">To provide quality and effective asocial services, pursue sustainable, inclusive and equitable economic growth, and promote ecological balance through a responsive, transparent, efficient, and technologically advanced governance in partnership an empowered people towards achieving the city of excellence.</p>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-12">
              <div class="sj" style="margin-top: 0; text-align: center;">
                <h1>HISTORY</h1>
                </div>
                  <p style=" font-weight: 500; margin-top: 15px;">Before the Spaniards came, San Juan was just a village and was part of the Kingdom of Namayan and ruled by King Lacantagean and his wife Bouan. When the Spaniards took possession of the kingdom, they renamed it to Sta. Ana de Sapa, the village was still a part of it but became a small encomienda by 1590.
                  <br><br>The first battle of the Philippine Revolution that achieved independence from Spain, began in San Juan in 1898.
                  <br><br>On June 16, 2007, voters in San Juan ratified the conversion of the municipality into a highly urbanised city, pursuant to Republic Act No. 9388 (“An Act Converting the Municipality of San Juan into a Highly Urbanized City to be known as the City of San Juan”). Then congressman Ronaldo B. Zamora sponsored the Cityhood Bill at the House of Representatives and worked for its approval.</p>
            </div>
          </div>
        </div>
        <br>
@endsection
