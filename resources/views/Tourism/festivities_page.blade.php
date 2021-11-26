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

div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}

div.gallery2 {
  border: 1px solid #ccc;
}

div.gallery2 img {
  width: 100%;
  height: auto;
}

div.desc2 {
  padding: 15px;
  text-align: center;
}

.responsive2 {
  padding: 0 6px;
  float: left;
  width: 33%;
}

@media only screen and (max-width: 700px) {
  .responsive2 {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive2 {
    width: 100%;
  }
}

div.gallery3 {
  border: 1px solid #ccc;
}

div.gallery3 img {
  width: 100%;
  height: auto;
}

div.desc3 {
  padding: 15px;
  text-align: center;
}

.responsive3 {
  padding: 0 6px;
  float: left;
  width: 99%;
}

@media only screen and (max-width: 700px) {
  .responsive3 {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive3 {
    width: 100%;
  }
}

div.gallery4 {
  border: 1px solid #ccc;
}

div.gallery4 img {
  width: 100%;
  height: auto;
}

div.desc4 {
  padding: 15px;
  text-align: center;
}

.responsive4 {
  padding: 0 6px;
  float: left;
  width: 50%;
}

@media only screen and (max-width: 700px) {
  .responsive4 {
    width: 49.99999%;
    margin: 6px 0;
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

}

@media only screen and (max-width: 500px) {
  .responsive4 {
    width: 100%;
  }
}

</style>

<br>

<div class="container banner">

    <div class="row">
        <img src="{{asset('assets/Tourism/Festivities.gif')}}" style="width: 100%; margin: auto; padding-right: 0 !important; padding-left: 0 !important;">
    </div>

<br>

    <div class="row">       
        <img src="{{asset('assets/Tourism/Picture1.png')}}" style="width: 100%;">
        <div class="desc" style="text-align: justify;"><br>San Juan is one of the cities in the Philippines that values and preserves its very rich historical, religious and cultural heritage. Apart from being known for its Pinaglabanan Shrine where the first battle of the Katipunan against the Spaniards occurred in 1896 and its significant part in the eventual attainment of the Philippine Independence in 1898, San Juan is the only city in Metro Manila that retained its original name given during the Spanish Era, in honor of its patron saint, St. John the Baptist.  </div>
    </div>

<br>

    <div class="row">
        
            <div class="responsive">
                <div class="gallery">
                    <a target="_blank">
                    <img src="{{asset('assets/Tourism/Picture3.png')}}">
                    </a>
                    <div class="desc">The City of San Juan celebrates the feast of its Patron Saint, St. John the Baptist every 24th of June.</div>
                </div>
            </div>
        
            <div class="responsive">
                <div class="gallery">
                    <a target="_blank">
                    <img src="{{asset('assets/Tourism/Picture4.png')}}">
                    </a>
                    <div class="desc">The feast has been known not just as dousing, spraying of water for its “Basaan” tradition.</div>
                </div>
            </div>
        
            <div class="responsive">
                <div class="gallery">
                    <a target="_blank">
                    <img src="{{asset('assets/Tourism/Picture5.png')}}">
                    </a>
                    <div class="desc">A day to celebrate the “pouring of blessings” and San Juan’s continuous success and abundance.</div>
                </div>
            </div>
       
            <div class="responsive">
                <div class="gallery">
                    <a target="_blank">
                    <img src="{{asset('assets/Tourism/Picture6.png')}}">
                    </a>
                    <div class="desc">“Get Wet!” One of the main attractions during the Wattah! Wattah! Festival is the traditional “basaan”.</div>
                </div>
            </div>  

    </div>

    <div class="row">
        
        <div class="desc" style="text-align: justify;"><br>From the traditional “basaan”, novena mass and procession honoring the saint who baptized Jesus in the Jordan River, the feast evolved from a simple fiesta celebration into a world-class Wattah! Wattah! San Juan Festival. Wattah! Wattah!  is a youthful phonetic reference to Water.</div>

    </div>

    <div class="row">

        <div class="responsive2">
                <div class="gallery2">
                    <a target="_blank">
                    <img src="{{asset('assets/Tourism/Picture9.png')}}">
                    </a>
                    <div class="desc2">Cultural and modern street dancing competition is one of the most-awaited highlights of the festival.  Joined by local dancers from different barangays and public schools in San Juan, the street dancing has been a showcase of world-class  dance choreography and costumes.
                    <br><br><br>
                    </div>
                </div>
        </div>

        <div class="responsive2">
                <div class="gallery2">
                    <a target="_blank">
                    <img src="{{asset('assets/Tourism/Picture10.png')}}">
                    </a>
                    <div class="desc2">Dancing to the beat of Watttah! Wattah! San Juan Festival’s official jingle which was composed, arranged and recorded by the renowned composer and musician, Vehnee Saturno and re-mixed with a modern dance hit of the year.
                    <br>
                    <br>
                    <br>
                    </div>
                </div>
        </div>

        <div class="responsive2">
                <div class="gallery2">
                    <a target="_blank">
                    <img src="{{asset('assets/Tourism/Picture11.png')}}">
                    </a>
                    <div class="desc2">The street dancers’ cheerful and energetic choreography is enough to entice the people to dance along while getting wet through the continuous water falls and splashes coming from a stand-by snorkel fire truck.
                    <br>
                    <br>
                    <br>
                    </div>
                </div>
        </div>

    </div>

<br>
    
    <div class="row">
        
        <div class="responsive3">
                <div class="gallery3">
                    <a target="_blank">
                    <img src="{{asset('assets/Tourism/SantongTao.png')}}">
                    </a>
                    <div class="desc3">
                    “Santong Tao Float Parade, the religious essence does not fade”
                    <br>
                    <br>
                    Preserving the religious significance of the festival, the very core of the feast of  patron St. John the Baptist, the celebration is a fusion of merriment and religious tradition.
                    <br>
                    <br>
                    A Santong Tao Float Parade Competition is held every year to preserve the sanctity of the feast.  Each float is adorned with exquisite designs and artwork depicting the life and works of St. John the Baptist using the verses in the bible.
                    </div>
                </div>
        </div>
    </div>

<br>

<div class="row">

        <div class="responsive4">
                <div class="gallery4">
                    <a target="_blank">
                    <img src="{{asset('assets/Tourism/Picture14.png')}}">
                    </a>
                    <div class="desc4">In 2020, Mayor Francis Zamora ordered a solemn and toned-down fiesta celebration of the feast of St. John the Baptist  amidst the threat of the COVID-19 pandemic. The image of  St. John the Baptist was initially brought to the St. John the Baptist Parish for a blessing by its parish priest.
                    <br>
                    <br>
                    <br>
                    </div>
                </div>
        </div>

        <div class="responsive4">
                <div class="gallery4">
                    <a target="_blank">
                    <img src="{{asset('assets/Tourism/Picture15.png')}}">
                    </a>
                    <div class="desc4">“The San Juan City fiesta is an important cultural activity that we want to push through, because every year our constituents look forward to a festive celebration. However, precautionary measures against the spread of the virus in the city must take precedence this 2020. We will continue with our traditions but in a solemn and more relevant manner that is called for by the needs of the time.” 
                    — MAYOR FRANCIS ZAMORA
                    <br>
                    <br>
                    </div>
                </div>
        </div>

</div>

<br>

</div>

@endsection
