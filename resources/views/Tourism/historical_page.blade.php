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

* {box-sizing: border-box;}

.container1 {
  position: relative;
  width: 50%;
  max-width: 300px;
}

.image {
  display: block;
  width: 200%;
  height: auto;
}

.overlay {
  position: absolute; 
  bottom: 0; 
  background: rgb(0, 0, 0);
  background: rgba(0, 0, 0, 0.5); /* Black see-through */
  color: #f1f1f1; 
  width: 200%;
  height: 100%;
  transition: .5s ease;
  opacity:0;
  color: white;
  font-size: 20px;
  padding: 20px;
  text-align: center;
}

.container1:hover .overlay {
  opacity: 1;
}

div.a{
    line-height: 200% !important;
}

div.b{
    line-height: 170% !important;
}

div.c{
    line-height: 200% !important;
}

div.d{
    line-height: 180% !important;
}

div.e{
    line-height: 190% !important;
}

div.f{
    line-height: 180% !important;
}

div.g{
    line-height: 170% !important;
}

div.h{
    line-height: 200% !important;
}

div.i{
    line-height: 200% !important;
}

div.j{
    line-height: 180% !important;
}

.responsive4 {
  padding: 5px;
  float: left;
  width: 50%;
}
@media only screen and (max-width: 1920px) and (min-width: 1601px)  {
        div#histo {
          max-width: 100% !important;
          width: 100% !important;
          flex: 0 0 100%;
        }
        #histo .una .container1{
          display: block;
          margin-right: auto;
          margin-left: auto;
        }

      }
@media screen and (max-width: 766px) and (min-width: 200px){
  #histo{
    max-width: 100% !important;
    width:100% !important;
   flex: 0 0 100%;
  }

  .responsive4 {
    width: 100%;
    display: block;
    margin-right: auto;
    margin-left: auto;
        
  }

  .container1 img
  {
      width: 200% !important;
  }

  .banner{
      padding-right: 0 !important;
    padding-left: 0 !important;
    width: 100% !important;
  }
.banner img{
   padding-right: 0 !important;
    padding-left: 0 !important;
}
  

  h4{
    font-size: 10px !important;
  }
  .a{
    font-size: 9px !important;
  }

  .b{
    font-size: 9px !important;
  }

  .c{
    font-size: 9px !important;
  }

  .d{
    font-size: 8px !important;
  }

  .e{
    font-size: 9px !important;
  }

  .f{
    font-size: 10px !important;
  }

  .g{
    font-size: 9px !important;
  }

  .h{
    font-size: 9px !important;
  }

  .i{
    font-size: 9px !important;
  }

  .j{
    font-size: 8px !important;
  }
}


}
</style>
<br>

<div class="container banner">

    <div class="row rr">
        <img src="{{asset('assets/Tourism/HistoricalPlaces.gif')}}" style="width: 100%; margin: auto; padding-right: 0 !important; padding-left: 0 !important;">
    </div>
</div>

<br>

<div class="container" id="histo">

    <div class="row">
        
        <div class="responsive4 una">
            <div class="col">
                <div class="container1" >
                    <img src="{{asset('assets/Tourism/Picture21.png')}}" class="image">
                    <div class="overlay">
                        <h4 style="font-weight: 100px;">SAN JUAN CITY HALL</h4>
                        <div style="color: white !important; text-align: justify;" class="a">The new San Juan City Hall stands adjacent from the Pinaglabanan Shrine. The new city hall resembles old Spanish buildings. It has four floors and equipped with a helipad. Inside, the spacious lobby is adorned with paintings that depicts the Battle of San Juan del Monte.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="responsive4">
            <div class="col">
                    <div class="container1">
                        <img src="{{asset('assets/Tourism/Picture22.png')}}" class="image">
                        <div class="overlay">
                            <h4 style="font-weight: 100px;">PINAGLABANAN SHRINE</h4>
                            <div style="color: white !important; text-align: justify;" class="b">The five-hectare Pinaglabanan Shrine commemorates the martyrs of the Battle of San Juan Del Monte on August 30, 1896, where Andres Bonifacio led hundreds of Katipuneros to cut the water supply of Intramuros. They were defeated, but it sounded the start of revolution in the country.
                            </div>
                        </div>
                    </div>
            </div>
        </div>

    </div>

<br>

    <div class="row">
        
        <div class="responsive4 una">
            <div class="col">
                <div class="container1"  >
                    <img src="{{asset('assets/Tourism/Picture23.png')}}" class="image">
                    <div class="overlay">
                        <h4 style="font-weight: 100px;">MUSEO NG KATIPUNAN</h4>
                        <div style="color: white !important; text-align: justify;" class="c">The Museo ng Katipunan showcases and pays tribute to the significant contributions of the KKK (Kataastaasang Kagalanggalangang Katipunan ng mga Anak ng Bayan) to the Philippine Independence.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="responsive4">
            <div class="col">
                <div class="container1">
                    <img src="{{asset('assets/Tourism/Picture25.png')}}" class="image">
                    <div class="overlay">
                        <h4 style="font-weight: 100px;">MUSEO EL DEPOSITO</h4>
                        <div style="color: white !important; text-align: justify;" class="d">Museo El Deposito is a two-storey museum that contains a replica of a Carriedo waterworks hydrant, a detailed scale model of the aqueducts, and a visual history of the place. It also has an interactive gallery where visitors can use virtual reality headsets to watch a recreation of the Battle of San Juan Del Monte. 
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

<br>

    <div class="row">

        <div class="responsive4 una">
            <div class="col">
                <div class="container1" >
                    <img src="{{asset('assets/Tourism/Picture26.png')}}" class="image">
                    <div class="overlay">
                        <h4 style="font-weight: 100px;">EL DEPOSITO UNDERGROUND TUNNEL</h4>
                        <div style="color: white !important; text-align: justify;" class="e">The El Deposito Underground Tunnel is a 150-meter-long underground water reservoir that played an important role in Metro Manila’s water supply during the Spanish era and the country's history through to the Japanese occupation.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="responsive4">
            <div class="col">
                <div class="container1">
                    <img src="{{asset('assets/Tourism/Picture27.png')}}" class="image">
                    <div class="overlay">
                        <h4 style="font-weight: 100px;">ST. JOHN THE BAPTIST CHURCH</h4>
                        <div style="color: white !important; text-align: justify;" class="f">Deriving its name from John the Baptist, St. John the Baptist Church stands a few meters away from the city hall and Pinaglabanan Shrine. Built in 1894, the church is a silent witness to the historical events that happened in the city. 
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

<br>

    <div class="row">
        
        <div class="responsive4 una">
            <div class="col">
                <div class="container1" >
                    <img src="{{asset('assets/Tourism/Picture28.png')}}" class="image">
                    <div class="overlay">
                        <h4 style="font-weight: 100px;">IGLESIA NI CRISTO CHURCH</h4>
                        <div style="color: white !important; text-align: justify;" class="g">The Iglesia ni Cristo Locale of F. Manalo is an art deco chapel and former central office of the Christian sect, Iglesia ni Cristo. It was designed by national artist of architecture Juan Nakpil and was built in 1952. Formerly known as Locale of Riverside, it was patterned on theaters on which architect Nakpil worked.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="responsive4">
            <div class="col">
                <div class="container1">
                    <img src="{{asset('assets/Tourism/Picture29.png')}}" class="image">
                    <div class="overlay">
                        <h4 style="font-weight: 100px;">SANTUARIO DEL SANTO CRISTO PARISH CHURCH</h4>
                        <div style="color: white !important; text-align: justify;" class="h">Located in Blumentritt Street in San Juan City, Santuario del Santo Cristo is one of the oldest churches in the city. It was built in 1602 – 1604 by the Dominicans but it was burnt and destroyed by the Chinese insurrection in 1639.
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

<br>

    <div class="row">
        
        <div class="responsive4 una">
            <div class="col">
                <div class="container1" >
                    <img src="{{asset('assets/Tourism/Picture30.png')}}" class="image">
                    <div class="overlay">
                        <h4 style="font-weight: 100px;">GREENHILLS LOOP</h4>
                        <div style="color: white !important; text-align: justify;" class="i">Considered as the “Tiangge Capital” of the Philippines,” the Greenhills Shopping Center is a shopping hub that offers affordable bazaars and thrift shops for rare-finds and novelty merchandises to shoppers. 
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="responsive4">
            <div class="col">
                <div class="container1">
                    <img src="{{asset('assets/Tourism/Picture31.png')}}" class="image">
                    <div class="overlay">
                        <h4 style="font-weight: 100px;">CLUB FILIPINO</h4>
                        <div style="color: white !important; text-align: justify;" class="j">Club Filipino was the first exclusive social club in the Philippines established in 1898. Originally an elite Filipino country gentlemen’s organization, the club is known as a meeting ground for Filipino political progressives but is now popularly known as the venue for the inauguration of President Cory Aquino.
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



<br>

</div>

@endsection
