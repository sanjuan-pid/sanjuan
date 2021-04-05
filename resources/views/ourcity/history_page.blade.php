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
/* .t1::before{
  content: '';
  width: 100%;
  height: 33%;
  background:white;
  position: absolute;
  top: 29px;
  left:0;
  animation: animate 4s forwards;

}
.t2::before{
  content: '';
  width: 100%;
  height: 7%;
  background:white;
  position: absolute;
  top: 29px;
  left:0;
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
} */
div#prgph1,div#prgph2,div#prgph3{
    display:none;
}
/* .t1:hover, .t1:active {border-bottom: 2px solid red;}
.t2:hover, .t2:active {border-bottom: 2px solid red;}
.t3:hover, .t3:active {border-bottom: 2px solid red;}
.t4:hover, .t4:active {border-bottom: 2px solid red;} */
h1::after{
  content: '';
  height: 3px;
  width: 0;
  background: red;
  position: absolute;
  left:0;
  bottom: 2px;
  transition: 2s;


}
h1:hover::after{
  width: 75%;

}
.item {
   position : sticky;
  top : 0;
  width: 100%;
}
</style>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <div class="container" id="con1" style="max-width: 70%; background-color:white;">
          <div class="row">
            <div class=" col-12 col-sm-12 col-md-12 col-lg-12" class="block">
              <div class="row" style="cursor:pointer;">
                <div class=" col-6 col-sm-6 col-md-6 col-lg-6" class="block">
                  <br>
                  <br>
                  <br>
                  <h1 class="t1" style=" font-weight:bold; color: #000;font-size: 45px;">History of San Juan</h1>
                    <div id="prgph0">
                      <br>
                      <br>
                      <p style=" font-weight: 500; margin-top: 15px;text-indent: 50px;line-height: 200%; text-align: justify;">Nestled in the heart of Metro Mania, between Manila, Pasig, Mandaluyong, and Quezon City is a city rich in history. With a land area of merely 5.94 square kilometers and the shape of a heart, San Juan City is the smallest city in Metro Manila, Philippines. It has 21 barangays and a population of over 122,000 based on the 2015 census. </p>
                    </div>
                </div>
                <div class=" col-6 col-sm-6 col-md-6 col-lg-6 mt-5" class="block">
                  <br>
                  <div id="h" class="item" style="margin-left:-7%;"><img style=" width:130%; "src="{{asset('assets/mapa.png')}}"/></div>
                </div>

              </div>
              <div class="row" style="cursor:pointer;">
                <div class=" col-8 col-sm-8 col-md-8 col-lg-8">
                  <br>
                  <h1 class="t2" style=" font-weight:bold;  color: #000;font-size: 45px;">The Rise of San Juan</h1>
                  <div id="prgph1" >
                      <p style=" font-weight: 500; margin-top: 15px;text-indent: 50px;line-height: 200%; text-align: justify;">San Juan’s long history pre-dates the Spanish colonial period. According to historians, it was last known to be under the rule of Lacantagean and Bouan under the Kingdom of Namayan, currently known as Santa Ana, Manila. Namayan is part of the federation of kingdoms comprising Maynilad, an extensive settlement in the Manila Bay and Laguna de Bay areas. Lacantagean answered to rajahs Soliman, Matanda, and Lakandula who ruled Maynilad. Native Filipinos and Malays grew rice, sugar, and tobacco along with fruits and vegetables.</p>
                      <p style=" font-weight: 500; margin-top: 15px;text-indent: 50px;line-height: 200%; text-align: justify;">After Manila was established in 1571 under the Spanish colonial period, the kingdom of Namayan became the parish of Santa Ana ruled by Franciscan friars. It was then renamed San Juan del Monte after its “hilly, wooded, deserted place, to the East, up the Pasig River, one league from Manila, with some few huts or native houses scattered here and there.” Its patron saint is John the Baptist, probably because of its terrain and proximity to the river.</p>
                      <p style=" font-weight: 500; margin-top: 15px;text-indent: 50px;line-height: 200%; text-align: justify;">San Juan del Monte’s growth can be largely attributed to when Dominican friars settled in the area. By 1616, the community grew, as well as the presence of priests and churches. There have been setbacks during the Chinese insurrection in 1639 and the British Occupation in 1762-1764 but the barrio of San Juan managed to rebuild itself from the ground up.</p>
                      <p style=" font-weight: 500; margin-top: 15px;text-indent: 50px;line-height: 200%; text-align: justify;">In 1783, from a barrio, it was reclassified as a municipality of the province of Tondo due to its growing reputation as a place of peace and rest, its bountiful supply of good drinking water, its popular Santuario del Santo Cristo (a miraculous image of the crucified Christ), and the construction of a gunpowder depot within its borders. With its civil matters managed by its municipal government, San Juan del Monte could finally take the reins and control its own destiny. </p>
                      <p style=" font-weight: 500; margin-top: 15px;text-indent: 50px;line-height: 200%; text-align: justify;">Long before the ‘basaan’ became a ritual in San Juan fiesta, San Juan del Monte had already been known for its clean, spring-fed waterways uncontaminated by seawater or the sewage of the nearby city. When its neighboring communities struggled to find potable drinking water, San Juan enjoyed sweet drinking water – some even said it had medicinal properties. Because of this, San Juan’s washerwomen became popular since they wash their clients’ clothes with the cleanest water available. The municipality quickly became known as the “city’s laundry.”</p>
                      <p style=" font-weight: 500; margin-top: 15px;text-indent: 50px;line-height: 200%; text-align: justify;">At some point, different solutions to the water problem of Manila were developed to address the needs of the city. A water system was developed and construction began in 1878. The Carriedo Water System was inaugurated in 1882 and the San Juan reservoir, known as the El Deposito, became a tourist attraction.”</p>
                  </div>
                </div>
                <div class=" col-4 col-sm-4 col-md-4 col-lg-4 mt-5">
                  <div id="t" class="item" style="margin-left:25%; display:none;"><img style=" width:100%; "src="{{asset('assets/oldsj.jpg')}}" /></div>
                </div>
              </div>

              <div class="row" style="cursor:pointer;">
               <div class=" col-8 col-sm-8 col-md-8 col-lg-8">
                  <br>
                  <h1 style=" font-weight:bold;  color: #000;font-size: 45px;" class="t3">Ground Zero of Revolution</h1>
                  <div id="prgph2" >
                    <br>
                      <p style=" font-weight: 500; margin-top: 15px;text-indent: 50px;line-height: 200%; text-align: justify;">Aside from playing a huge role in solving the water problem in Manila, San Juan was much more notable in its importance during the start of the Philippine revolution. A week after the historical Cry of Pugadlawin, Andres Bonifacio and the Katipunan launched an attack at El Deposito and El Polvorin to cripple the city. El Deposito supplied water to the city while El Polvorin was the main storage facility of the Spaniards’ weapons and gunpowder. This was the first armed encounter between the Filipinos and Spaniards in 1896.</p>
                      <p style=" font-weight: 500; margin-top: 15px;text-indent: 50px;line-height: 200%; text-align: justify;">The Battle of Pinaglabanan marked the start of the revolution. Although Bonifacio was defeated, this event signaled the beginning of battles in seven other parts of the country. San Juaneños continued to participate in the efforts of the Katipunan, directly and indirectly, until the Spanish government was successfully overthrown and Philippine independence from Spain was declared in 1898.</p>
                      <p style=" font-weight: 500; margin-top: 15px;text-indent: 50px;line-height: 200%; text-align: justify;">The present-day Pinaglabanan Street in San Juan marks the progress of the battle, which began at the intersection of the Marikina Road (now N. Domingo Street) and the Santolan Road (now Pinaglabanan), near which El Polvorin was located.</p>
                  </div>
               </div>
               <div class=" col-4 col-sm-4 col-md-4 col-lg-4 mt-5">
                 <div id="g" class="item" style="margin-left:25%;display:none;"><img style=" width:100%; "src="{{asset('assets/oldsj2.jpg')}}"/></div>
               </div>
              </div>

              <div class="row" style="cursor:pointer;">
                <div class=" col-8 col-sm-8 col-md-8 col-lg-8 ">
                  <br>
                  <h1 style=" font-weight:bold;  color: #000;font-size: 45px;" class="t4">Rebuilding San Juan</h1>
                  <div id="prgph3" >
                      <p style=" font-weight: 500; margin-top: 15px;text-indent: 50px;line-height: 200%; text-align: justify;">In the years following World War II, San Juan busied itself with its own growth and development. Its population grew as more and more of Manila’s elite made the vacation homes they had built in San Juan into primary residences as Manila and its surrounding districts grew more congested. From the late 1960s to the early 1980s, San Juan underwent a phenomenal development after roads were constructed, making traveling to and within the municipio more efficient. Public services were improved and schools and hospitals were established to serve the growing number of residents.</p>
                      <p style=" font-weight: 500; margin-top: 15px;text-indent: 50px;line-height: 200%; text-align: justify;">The construction of Greenhills Shopping Center and Virra Mall on the eastern, more modern side of San Juan turned the municipality into a destination for outsiders and attracted entrepreneurs to set up shop there. By the 1980s, San Juan had become a thriving residential and commercial hub of the city, earning the moniker, “tiangge capital of the Philippines”.</p>
                      <p style=" font-weight: 500; margin-top: 15px;text-indent: 50px;line-height: 200%; text-align: justify;">A few meters from Greenhills Shopping Center, stood the iconic Club Filipino. Established in 1898, it was originally an exclusive gentlemen’s country club but was chosen as the venue for the inauguration of President Corazon Aquino on Feb. 25, 1986. This event came after People Power Revolution, where the Filipinos ended the 20-year dictatorship of Ferdinand Marcos.</p>
                      <p style=" font-weight: 500; margin-top: 15px;text-indent: 50px;line-height: 200%; text-align: justify;">On June 16, 2007, San Juan was converted from a municipality into a highly urbanized city, pursuant to Republic Act No. 9388 ("An Act Converting the Municipality of San Juan into a Highly Urbanized City to be known as the City of San Juan"). Congressman Ronaldo B. Zamora sponsored the Cityhood Bill at the House of Representatives and worked for its approval.</p>
                      <p style=" font-weight: 500; margin-top: 15px;text-indent: 50px;line-height: 200%; text-align: justify;">From a mere town under the Rizal Province, San Juan City has become a hub of history, culture, and heritage that shaped its identity. Today, the city has also cemented itself as a hub of economic progress and a historical tourist destination.</p>
                  </div>
                </div>
                <div class=" col-4 col-sm-4 col-md-4 col-lg-4 mt-5">
                  <div id="r" class="item" style="margin-left:25%;display:none;"><img style=" width:100%; "src="{{asset('assets/oldsj3.jpg')}}"/></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <br><br><br><br>
@endsection
