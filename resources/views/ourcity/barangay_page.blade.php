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
    #bsj{
      margin-top: 25px;
      text-align: center;
      font-size:40px;"
    }
    #the{
      margin-top: 0;
      text-align: center;
      font-size:30px;
    }
    .h2brgy{
      font-weight: bolder;
      font-size: 22px;
      border-bottom: solid;
      border-color: black;
    }
    .brgymobile{
      font-weight: bold;
    }
    @media only screen and (max-width: 1920px) and (min-width: 1080px)  {
      div#brgypage {
        max-width: 60% !important;
        width: 60% !important;
        flex: 0 0 100%;
      }
    }
    @media only screen and (max-width: 1600px) and (min-width: 900px)  {
      div#brgypage {
        max-width: 60% !important;
        width: 60% !important;
        flex: 0 0 100%;

      }
      #brgypage p{
        font-size: 15px !important;
      }

    }
    @media only screen and (max-width: 1366px) {
      div#brgypage {
        max-width: 80% !important;
        width: 80% !important;
      }
    }
    @media screen and (max-width: 766px) and (min-width: 200px) {
      #brgypage {
        max-width: 100% !important;
        width:100% !important;
        flex: 0 0 100%;
      }
      div#brgypage {
        max-width: 100% !important;
        width: 100% !important;
      }
      #brgypage #bsj{
        font-size: 25px !important;
      }
      #brgypage #the{
        font-size: 24px !important;
      }
      #brgypage p{
        font-size: 14px !important;
      }
      #mapmobile{
        display: block !important;
      }
      #mapmobile h1{
        font-size: 20px;
      }
      #mapmobile h3{
        font-size: 18px;
      }
      #mapmobile a{
        color:blue;
        font-weight: 500;
        border-bottom: solid;
        border-color: blue;
        border-width: thin;
      }

    }


    </style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="css/modal-box.min.css" rel="stylesheet">
  <div class="container"style="width:60%;" id="brgypage">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-12 col-lg-12">
        <h1 id="bsj">SAN JUAN CITY</h1>
        <p style=" font-weight: 500; margin-top: 15px; text-align: justify; font-size:18px;">"San Juan City" is a contraction of the city's traditional name of "San Juan del Monte" (lit. 'Saint John of the Mountain'). As with numerous other places in the Philippines, the name combines a patron saint and a toponym; in this case Saint John the Baptist with the locale's hilly terrain and relatively higher elevation compared to surrounding areas. The city's official name is "Dakilang Lungsód ng San Juan" (lit. 'Great City of San Juan').</p>
      </div>

      <h1 id="the" style="">THE BARANGAYS</h1>

    </div>
    <div class="container" id="mapmobile" style="display:none;">
      <div class="row">
        <div class="col-12">
          <h2 class="h2brgy"> District I </h2>
          <a class="brgymobile" data-toggle="modal" data-target=".salapan">Salapan</a>
          <br>
          <a class="brgymobile" data-toggle="modal" data-target=".Balong">Balong-bato</a>
          <br>
          <a class="brgymobile" data-toggle="modal" data-target=".Batis">Batis</a>
          <br>
          <a class="brgymobile" data-toggle="modal" data-target=".Corazon">Corazon De Jesus</a>
          <br>
          <a class="brgymobile" data-toggle="modal" data-target=".Ermitaño">Ermitaño</a>
          <br>
          <a class="brgymobile" data-toggle="modal" data-target=".Pasadena">Pasadena</a>
          <br>
          <a class="brgymobile" data-toggle="modal" data-target=".Pedro">Pedro Cruz</a>
          <br>
          <a class="brgymobile" data-toggle="modal" data-target=".Progreso">Progreso</a>
          <br>
          <a class="brgymobile" data-toggle="modal" data-target=".Rivera">Rivera</a>
          <br>
          <a class="brgymobile" data-toggle="modal" data-target=".Perfecto">San Perfecto</a>
          <br>
          <br>
          <h2 class="h2brgy"> District II </h2>
          <a class="brgymobile" data-toggle="modal" data-target=".Addition">Addition Hills</a>
          <br>
          <a class="brgymobile" data-toggle="modal" data-target=".Greenhills">Greenhills</a>
          <br>
          <a class="brgymobile" data-toggle="modal" data-target=".Isabelita">Isabelita</a>
          <br>
          <a class="brgymobile" data-toggle="modal" data-target=".Kabayanan">Kabayanan</a>
          <br>
          <a class="brgymobile" data-toggle="modal" data-target=".Little">Little Baguio</a>
          <br>
          <a class="brgymobile" data-toggle="modal" data-target=".Maytunas">Maytunas</a>
          <br>
          <a class="brgymobile" data-toggle="modal" data-target=".Onse">Onse</a>
          <br>
          <a class="brgymobile" data-toggle="modal" data-target=".Joseph">St. Joseph</a>
          <br>
          <a class="brgymobile" data-toggle="modal" data-target=".Lucia">Santa Lucia</a>
          <br>
          <a class="brgymobile" data-toggle="modal" data-target=".Tibagan">Tibagan</a>
          <br>
          <a class="brgymobile" data-toggle="modal" data-target=".Crame">West Crame</a>



          <div class="modal fade salapan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <img src="{{asset('assets/BRGY/SALAPAN.png')}}" style="display: block; margin-left: auto; margin-right: auto;width: 100px; height: 100px;">
                  <h1 style="text-align:center;">SALAPAN</h1>
                  <p style="text-align: justify;">Barangay Salapan was named after the word “Salapang”, a bamboo stick with pointed end in the bottom and tied like a cone. Use by early settlers to catch fish in the creek of Salapan with 16 inches in diameter at the bottom and 7 inches on top of enable the hand and arm of the fisherman to enter inside the salapang to get caught fish..</p>
                  <h3 style=" font-weight:bold; text-align:center; color: #1f1c4b;">Organization Chart</h3>
                  <h5 style=" font-weight:bold; text-align:center; color: #1f1c4b;">Contact Info</h5>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-12" style="margin-top: -4%;">
            <div class="modal fade Crame" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <img src="{{asset('assets/BRGY/WESTCRAME_updated.png')}}" style="display: block; margin-left: auto; margin-right:auto; width: 100px; height: 100px;">
                    <h1 style="text-align:center;">BRGY. WESTCRAME</h1>
                    <p style="text-align: justify;">WESTCRAME</p>
                    <h3 style=" font-weight:bold; text-align:center; color: #1f1c4b;">Organization Chart</h3>
                    <h5 style=" font-weight:bold; text-align:center; color: #1f1c4b;">Contact Info</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>

            <div class="modal fade Greenhills" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <img src="{{asset('assets/BRGY/GREENHILLS_updated.png')}}" style="display: block; margin-left: auto; margin-right:auto; width: 100px; height: 100px;">
                    <h1 style="text-align:center;">BRGY. GREENHILLS</h1>
                    <p style="text-align: justify;">Greenhills</p>
                    <h3 style=" font-weight:bold; text-align:center; color: #1f1c4b;">Organization Chart</h3>
                    <h5 style=" font-weight:bold; text-align:center; color: #1f1c4b;">Contact Info</h5>
                  </div>
                </div>
              </div>
            </div>

            <div class="modal fade Addition" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <img src="{{asset('assets/BRGY/ADDITIONHILLS.png')}}" style="display: block; margin-left: auto;   margin-right: auto; width: 100px; height: 100px;">
                    <h1 style="text-align:center;">ADDITION HILLS</h1>
                    <p style="text-align: justify;"> Our barangay was an agricultural land that belonged to the municipality of San Felipe Neri. In the 1930’s it was converted to a residential subdivision by a group of American businessmen. The majority of the original lot buyers were their friends. And up to 70’s many American families still resided in our barangay.</p>
                    <h3 style=" font-weight:bold; text-align:center; color: #1f1c4b;">Organization Chart</h3>
                    <h5 style=" font-weight:bold; text-align:center; color: #1f1c4b;">Contact Info</h5>
                  </div>
                </div>
              </div>
            </div>


          <div class="modal fade Maytunas" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <img src="{{asset('assets/BRGY/MAYTUNAS_updated.png')}}"style="display: block; margin-left: auto;   margin-right: auto; width: 18%;">
                  <h1 style="text-align:center;">MAYTUNAS</h1>
                  <p style="text-align: justify;">MAYTUNAS</p>
                  <h3 style=" font-weight:bold; text-align:center; color: #1f1c4b;">Organization Chart</h3>
                  <h5 style=" font-weight:bold; text-align:center; color: #1f1c4b;">Contact Info</h5>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade Little" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
               <img src="{{asset('assets/BRGY/little.png')}}" style="display: block; margin-left: auto; margin-right: auto;width: 100px; height: 100px;">
                  <h1 style="text-align:center;">LITTLE BAGUIO</h1>
                  <p style="text-align: justify;">LITTLE BAGUIO</p>
                  <h3 style=" font-weight:bold; text-align:center; color: #1f1c4b;">Organization Chart</h3>
                  <h5 style=" font-weight:bold; text-align:center; color: #1f1c4b;">Contact Info</h5>
                  </div>
              </div>
            </div>
          </div>

          <div class="modal fade Lucia" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
              <img src="{{asset('assets/BRGY/LUCIA.png')}}" style="display: block; margin-left: auto; margin-right: auto;width: 100px; height: 100px;">
                  <h1 style="text-align:center;">STA. LUCIA</h1>
                  <p style="text-align: justify;">In the past, Sta. Lucia was the center of the town of San Juan. This place could be easily reached that time for there where many good roads leading to it. The place was also the center of business. A church, a market, and a school were built there. This was first inhabited by people from Mandaluyong.</p>
                  <h3 style=" font-weight:bold; text-align:center; color: #1f1c4b;">Organization Chart</h3>
                  <h5 style=" font-weight:bold; text-align:center; color: #1f1c4b;">Contact Info</h5>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade Kabayanan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <img src="{{asset('assets/BRGY/KABAYANAN_updated.png')}}" style="display: block; margin-left: auto; margin-right: auto;width: 100px; height: 100px;">
                  <h1 style="text-align:center;">KABAYANAN</h1>
                  <p style="text-align: justify;">KABAYANAN</p>
                  <h3 style=" font-weight:bold; text-align:center; color: #1f1c4b;">Organization Chart</h3>
                  <h5 style=" font-weight:bold; text-align:center; color: #1f1c4b;">Contact Info</h5>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade Onse" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                <img src="{{asset('assets/BRGY/ONSE_updated.png')}}" style="display: block; margin-left: auto; margin-right: auto;width: 100px; height: 100px;">
                  <h1 style="text-align:center;">ONSE</h1>
                  <p style="text-align: justify;">Barangay Onse was established in 1916. The name “ONSE” was derived from the concept that there were only eleven houses as far as they can remember. The people living in these houses were considered the first inhabitants of the place, and as one might have guessed it, Spanish term for eleven is “ONSE”. Now, the land area of Barangay Onse is 9.6684 hectares with a total population of 4,065 as of FY 2015 as per NSO record.</p>
                  <h3 style=" font-weight:bold; text-align:center; color: #1f1c4b;">Organization Chart</h3>
                  <h5 style=" font-weight:bold; text-align:center; color: #1f1c4b;">Contact Info</h5>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade Joseph" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                <img src="{{asset('assets/BRGY/STJOSEPH.png')}}" style="display: block; margin-left: auto; margin-right: auto;width: 100px; height: 100px;">
                  <h1 style="text-align:center;">ST. JOSEPH</h1>
                  <p style="text-align: justify;">st.joseph</p>
                  <h3 style=" font-weight:bold; text-align:center; color: #1f1c4b;">Organization Chart</h3>
                  <h5 style=" font-weight:bold; text-align:center; color: #1f1c4b;">Contact Info</h5>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade Isabelita" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <img src="{{asset('assets/BRGY/BARANGAYISABELITA_updated.png')}}"style="display: block; margin-left: auto; margin-right: auto;width: 100px; height: 100px;">
                  <h1 style="text-align:center;">ISABELITA</h1>
                  <p style="text-align: justify;">It used to be known as Isabilita Heights Subdivision, 3.4 hectares lot area owned and developed by the Barredo family. The subdivision has all quick and easy access to San Juan’s public market, church and public schools.</p>
                  <h3 style=" font-weight:bold; text-align:center; color: #1f1c4b;">Organization Chart</h3>
                  <h5 style=" font-weight:bold; text-align:center; color: #1f1c4b;">Contact Info</h5>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade Tibagan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                   <img src="{{asset('assets/BRGY/TIBAGAN.png')}}" style="display: block; margin-left: auto; margin-right: auto;width: 100px; height: 100px;">
                  <h1 style="text-align:center;">TIBAGAN</h1>
                  <p style="text-align: justify;">Barangay Tibagan is a small community bounded by A. Bonifacio st. , and J Arellano St., where Mini Park is located. The other streets comprising this Barangay are F. Roxas, T. Kalaw, Villamor, Jose Gil formerly Valenzuela St., Regidor, Dr. A J. Ejercito St., and reaching upward the next barangay are J.V Alvior formerly Florante St. and Laura Streets.</p>
                  <h3 style=" font-weight:bold; text-align:center; color: #1f1c4b;">Organization Chart</h3>
                  <h5 style=" font-weight:bold; text-align:center; color: #1f1c4b;">Contact Info</h5>
                </div>
              </div>
            </div>
          </div>


          <div class="modal fade Batis" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <img src="{{asset('assets/BRGY/BATIS_updated.png')}}" style="display: block; margin-left: auto; margin-right: auto;width: 100px; height: 100px;">
                  <h1 style="text-align:center;">BATIS</h1>
                  <p style="text-align: justify;">Current Barangay residents are not aware of the any spring of clear water that can account for name of BATIS. According the old residents, the area had creeks and rivulets during their time, wherein clean water flowed. Actually bordering San Juan River as it does, it is not at all unlikely that the area had rivulets and creeks feeding in the water way. People neigh boring Barangay especially on high land are coming here because of the clear water.</p>
                  <h3 style=" font-weight:bold; text-align:center; color: #1f1c4b;">Organization Chart</h3>
                  <h5 style=" font-weight:bold; text-align:center; color: #1f1c4b;">Contact Info</h5>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade Perfecto" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <img src="{{asset('assets/BRGY/SANPERFECTO_updated.png')}}"  style="display: block; margin-left: auto; margin-right: auto;width: 100px; height: 100px;">
                  <h1 style="text-align:center;">SAN PERFECTO</h1>
                  <p style="text-align: justify;">Barangay San Perfecto is strategically located in the center Of Metro Manila. An almost perfect triangle in shape, it is bounded in the northwest by N. Domingo Street, in the northwest by F. Blumentritt Street, and in the south by Tuberias Street, also known as “ Tubo”, the pipeline of the Metropolitan Waterworks and Sewerage Authority.</p>
                  <h3 style=" font-weight:bold; text-align:center; color: #1f1c4b;">Organization Chart</h3>
                  <h5 style=" font-weight:bold; text-align:center; color: #1f1c4b;">Contact Info</h5>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade Progreso" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <img src="{{asset('assets/BRGY/PROGRESONEW.png')}}" style="display: block; margin-left: auto; margin-right: auto;width: 100px; height: 100px;">
                  <h1 style="text-align:center;">PROGRESO</h1>
                  <p style="text-align: justify;">During the Spanish regime, this place was then called a “ balangay “ or “ barangay “ which was the headed by
                           “cabeza de barangay “. However, when the Americans came I, this place was then change from “ Barangay” to “ barrio” and is headed by a “ Tenyente del Baryo “. During the Pre-Spanish times, Progreso and Rivera as one small village found in San Juan which became a small encomienda in 1950.</p>
                  <h3 style=" font-weight:bold; text-align:center; color: #1f1c4b;">Organization Chart</h3>
                  <h5 style=" font-weight:bold; text-align:center; color: #1f1c4b;">Contact Info</h5>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade Rivera" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <img src="{{asset('assets/BRGY/RIVERA.png')}}" style="display: block; margin-left: auto; margin-right: auto;width: 100px; height: 100px;">
                  <h1 style="text-align:center;">Rivera</h1>
                  <p style="text-align: justify;">Brgy. Rivera</p>
                  <h3 style=" font-weight:bold; text-align:center; color: #1f1c4b;">Organization Chart</h3>
                  <h5 style=" font-weight:bold; text-align:center; color: #1f1c4b;">Contact Info</h5>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade Pedro" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <img src="{{asset('assets/BRGY/PEDROCRUZ_updated.png')}}" style="display: block; margin-left: auto; margin-right: auto;width: 100px; height: 100px;">
                  <h1 style="text-align:center;">Pedro Cruz</h1>
                  <p style="text-align: justify;">Brgy. Pedro Cruz</p>
                  <h3 style=" font-weight:bold; text-align:center; color: #1f1c4b;">Organization Chart</h3>
                  <h5 style=" font-weight:bold; text-align:center; color: #1f1c4b;">Contact Info</h5>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade Balong" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <img src="{{asset('assets/BRGY/BALONGBATO_updated.png')}}" style="display: block; margin-left: auto; margin-right: auto;width: 125px; height: 100px;">
                  <h1 style="text-align:center;">BALONG-BATO</h1>
                  <p style="text-align: justify;">Barangay Balong-Bato is strategically located at the center of Metro Manila. Bounded in the north of N. Domingo Street in the South of Aurora Blvd. Being situated in the center of Metro Manila, Barangay Balong –Bato streets are being utilized by motorists as alternative routes going to and from Quezon City, Mandaluyong City, Makati City and City of Manila. Barangay Balong-Bato has always been mabato. Old times residents recall, the area used to have many trees- bananas, mostly, below feet of soil adobe and more adobe. In some spots, there were natural wells, hence the name Balon na Bato.</p>
                  <h3 style=" font-weight:bold; text-align:center; color: #1f1c4b;">Organization Chart</h3>
                  <h5 style=" font-weight:bold; text-align:center; color: #1f1c4b;">Contact Info</h5>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade Corazon" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <img src="{{asset('assets/BRGY/CORAZON.png')}}" style="display: block; margin-left: auto; margin-right: auto;width: 100px; height: 100px;">
                  <h1 style="text-align:center;">CORAZON DE JESUS</h1>
                  <p style="text-align: justify;">Barangay Corazon de Jesus was established in the early 1940’s. The former name of Corazon de Jesus was “EL DEPOSITO” because of a myth that there is a hidden treasure inside the tunnel. Behind the San Juan Post Office in Pinaglabanan St., is an opening that leads to a long tunnel going to different parts of Metro Manila.</p>
                  <h3 style=" font-weight:bold; text-align:center; color: #1f1c4b;">Organization Chart</h3>
                  <h5 style=" font-weight:bold; text-align:center; color: #1f1c4b;">Contact Info</h5>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade Pasadena" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <img src="{{asset('assets/BRGY/PASADENA_updated.png')}}" style="display: block; margin-left: auto; margin-right: auto;width: 100px; height: 100px;">
                  <h1 style="text-align:center;">PASADEnA</h1>
                  <p style="text-align: justify;">The word PASADENA came from the name of the flower Cadena de Amor. During the earlier times it has been said that the streets of Brgy. Pasadena were filled with cadena de amor, a certain Spanish person created the name for Pasadena which means “way of the cadena de amor” PASA is a Spanish word which means “daan” in Filipino language. PASA = Daan & DENA = short for the flower cadena de amor.The word PASADENA came from the name of the flower Cadena de Amor.</p>
                  <h3 style=" font-weight:bold; text-align:center; color: #1f1c4b;">Organization Chart</h3>
                  <h5 style=" font-weight:bold; text-align:center; color: #1f1c4b;">Contact Info</h5>
                </div>
              </div>
            </div>
          </div>



          <div class="modal fade Ermitaño" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <img src="{{asset('assets/BRGY/ERMITAÑO_updated.png')}}" style="display: block; margin-left: auto; margin-right: auto;width: 100px; height: 100px;">
                  <h1 style="text-align:center;">ERMITÑO</h1>
                  <p style="text-align: justify;">Barangay Ermitaño is located in the north-eastern part of San Juan City. It is surrounded by Ermitaño creek in the east and south-east. It is bounded by Salapan on the north, Balong-bato on the north-west, Pasadena and Corazon de Jesus on the east.</p>
                  <h3 style=" font-weight:bold; text-align:center; color: #1f1c4b;">Organization Chart</h3>
                  <h5 style=" font-weight:bold; text-align:center; color: #1f1c4b;">Contact Info</h5>
                </div>
              </div>
            </div>
          </div>




        </div>
      </div>
    </div>
    <br>
    @include('layouts.index.map')
  </div>
    <br>
    <br>




@endsection
