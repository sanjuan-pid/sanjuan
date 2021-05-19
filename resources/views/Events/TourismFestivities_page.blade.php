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
    
.flip-card {
  background-color: transparent;
  width: 700px;
  height: 400px;
  border: 1px solid #f1f1f1;
  perspective: 1000px; /* Remove this if you don't want the 3D effect */
}

/* This container is needed to position the front and back side */
.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

/* Do an horizontal flip when you move the mouse over the flip box container */
.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

/* Position the front and back side */
.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden; /* Safari */
  backface-visibility: hidden;
}

/* Style the front side (fallback if image is missing) */
.flip-card-front {
  background-color: #bbb;
  color: black;
}

/* Style the back side */
.flip-card-back {
  background-color: #1b2560;
  color: white;
  font-size: 25px;
  word-spacing: 2.5px;
  transform: rotateY(180deg);
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 600px;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}

.card1 {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 1060px;
}

.card1:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
.container1 {
  padding: 2px 16px;
}

.flip-card1 {
  background-color: transparent;
  width: 510px;
  height: 350px;
  border: 1px solid #f1f1f1;
  perspective: 1000px; /* Remove this if you don't want the 3D effect */
}

/* This container is needed to position the front and back side */
.flip-card-inner1 {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

/* Do an horizontal flip when you move the mouse over the flip box container */
.flip-card1:hover .flip-card-inner1 {
  transform: rotateY(180deg);
}

/* Position the front and back side */
.flip-card-front1, .flip-card-back1 {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden; /* Safari */
  backface-visibility: hidden;
}

/* Style the front side (fallback if image is missing) */
.flip-card-front1 {
  background-color: #bbb;
  color: black;
}

/* Style the back side */
.flip-card-back1 {
  background-color: #1b2560;
  color: white;
  font-size: 20px;
  word-spacing: 2.5px;
  transform: rotateY(180deg);
}

.flip-card2 {
  background-color: transparent;
  width: 510px;
  height: 350px;
  border: 1px solid #f1f1f1;
  perspective: 1000px; /* Remove this if you don't want the 3D effect */
}

/* This container is needed to position the front and back side */
.flip-card-inner2 {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

/* Do an horizontal flip when you move the mouse over the flip box container */
.flip-card2:hover .flip-card-inner2 {
  transform: rotateY(180deg);
}

/* Position the front and back side */
.flip-card-front2, .flip-card-back2 {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden; /* Safari */
  backface-visibility: hidden;
}

/* Style the front side (fallback if image is missing) */
.flip-card-front2 {
  background-color: #bbb;
  color: black;
}

/* Style the back side */
.flip-card-back2 {
  background-color: #1b2560;
  color: white;
  font-size: 20px;
  word-spacing: 2.5px;
  transform: rotateY(180deg);
}

</style>

<br>

<div class="container tourism" >

    <div class="row">
        <img src="{{asset('assets/Events/Tourism.gif')}}" style="width: 1090px; height: 200px; border-radius: 10px; ">
    </div>

<br>

    <div class="row">
            <div class="col-sm-8">
                 <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                           <img src="{{asset('assets/Events/Picture2.png')}}" style="width: 700px; height: 400px;"> 
                        </div>
                        <div class="flip-card-back">
                        <h4 style="font-size: 50px;">WATTAH WATTAH!</h4>
                        <p style="color: white !important; ">The City of San Juan celebrates the feast of its Patron Saint, St. John the Baptist every 24th of June. The feast has been known not just as dousing, spraying of water for its “Basaan” tradition that commemorates Jesus Christ’s baptism by St. John, but also a day to celebrate the “pouring of blessings” and San Juan’s continuous success and abundance.
                        </p>    
                        </div>
                    </div>
                     
                 </div>
            </div>

        <div class="col-sm-4">
            <img src="{{asset('assets/Events/Picture5.png')}}" style="width: 320px; height: 400px;"> 
        </div> 

    </div>    

<br>

    <div class="row">

        <div class="col-sm">
            <div class="card">
              <img src="{{asset('assets/Events/Picture6.png')}}" style="width: 598px; height: 400px;">
              <div class="container">
                <br>
                <p style="text-align: justify;color:#000 !important;">Dancing to the beat of Watttah! Wattah! San Juan Festival’s official jingle which was composed, arranged and recorded by the renowned composer and musician, Vehnee Saturno and re-mixed with a modern dance hit of the year, the street dancers’ cheerful and energetic choreography is enough to entice the people to dance along while getting wet through the continuous water falls and splashes coming from a stand-by snorkel fire truck.  
                </p> 
              </div>
            </div> 
        </div>
        
        <div class="col-sm">
            <img src="{{asset('assets/Events/Picture7.png')}}" style="width: 430px; height: 615px;"> 
        </div> 

    </div>

<br>
    
    <div class="row">

        <div class="col-sm">
            <div class="card1">
              <img src="{{asset('assets/Events/Picture8.png')}}" style="width: 100%; height: 100%;">
              <div class="container">
                <br>
                <p style="text-align: justify; color:#000 !important;">Reviving The Tourism Industry
                Amidst the COVID-19 pandemic, San Juan City unveiled a Historical Bike Tour featuring the city’s most historic sites and landmarks. Stops include the Pinaglabanan Shrine, Museo ng Katipunan, El Deposito Museum, El Deposito Underground Tunnel, Pinaglabanan Church, the Marcos Mansion, the Iglesia ni Cristo former headquarters, the Kabayanan Church and Club Filipino.
                <br>
                <br>
                The Historical Bike Tour is part of the city’s step in boosting historical tourism in San Juan and in slowly bringing back normalcy in the city. Touring the city via bike is more sustainable during the pandemic since it follows minimum public health standards.  
                </p> 
              </div>
            </div> 
        </div>
         
    </div>

<br>
    
    <div class="row">

        <div class="col-sm-6">
                 <div class="flip-card1">
                    <div class="flip-card-inner1">
                        <div class="flip-card-front1">
                           <img src="{{asset('assets/Events/Picture10.png')}}" style="width: 510px; height: 350px;"> 
                        </div>
                        <div class="flip-card-back1">
                        <h4 style="font-size: 35px;">CITY GOVERNMENT OF <br> SAN JUAN</h4>
                        <p style="color: white !important; ">The new San Juan City Hall stands adjacent from the Pinaglabanan Shrine. The new city hall resembles old Spanish buildings. It has four floors and equipped with a helipad. Inside, the spacious lobby is adorned with paintings that depicts the Battle of San Juan del Monte. 
                        </p>    
                        </div>
                    </div>
                     
                 </div>

        </div>

        <div class="col-sm-6">
                 <div class="flip-card2">
                    <div class="flip-card-inner2">
                        <div class="flip-card-front2">
                           <img src="{{asset('assets/Events/Picture11.png')}}" style="width: 510px; height: 350px;"> 
                        </div>
                        <div class="flip-card-back2">
                        <h4 style="font-size: 35px;">PINAGLABAN SHRINE</h4>
                        <p style="color: white !important; ">The five-hectare Pinaglabanan Shrine commemorates the martyrs of the Battle of San Juan Del Monte on August 30, 1896, where Andres Bonifacio led hundreds of Katipuneros to cut the water supply of Intramuros. They were defeated, but it sounded the start of revolution in the country.
                        </p>    
                        </div>
                    </div>     
                 </div>

        </div>

    </div>

<br>

    <div class="row">

        <div class="col-sm-6">
                 <div class="flip-card1">
                    <div class="flip-card-inner1">
                        <div class="flip-card-front1">
                           <img src="{{asset('assets/Events/Picture12.png')}}" style="width: 510px; height: 350px;"> 
                        </div>
                        <div class="flip-card-back1">
                        <h4 style="font-size: 35px;">MUSEO NG KATIPUNAN</h4>
                        <p style="color: white !important; ">The Museo ng Katipunan showcases and pays tribute to the significant contributions of the KKK (Kataastaasang Kagalanggalangang Katipunan ng mga Anak ng Bayan) to the Philippine Independence. <br>
                        Situated within the grounds of the memorial shrine, it is built to showcase the story of Bonifacio and the secret movement he founded. 
                        </p>    
                        </div>
                    </div>
                     
                 </div>

        </div>

        <div class="col-sm-6">
                 <div class="flip-card2">
                    <div class="flip-card-inner2">
                        <div class="flip-card-front2">
                           <img src="{{asset('assets/Events/Picture13.png')}}" style="width: 510px; height: 350px;"> 
                        </div>
                        <div class="flip-card-back2">
                        <h4 style="font-size: 35px;">MUSEO EL DEPOSITO</h4>
                        <p style="color: white !important; ">Museo El Deposito is a two-storey museum that contains a replica of a Carriedo waterworks hydrant, a detailed scale model of the aqueducts, and a visual history of the place. It also has an interactive gallery where visitors can use virtual reality headsets to watch a recreation of the Battle of San Juan Del Monte. 
                        </p>    
                        </div>
                    </div>     
                 </div>

        </div>

    </div>

</div>

<br>


@endsection
