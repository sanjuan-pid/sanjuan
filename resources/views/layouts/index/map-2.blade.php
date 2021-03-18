
<style>
.sc::-webkit-scrollbar {
  width: 10px;

}

/* Track */
.sc::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey;
  border-radius: 5px;
}

/* Handle */
.sc::-webkit-scrollbar-thumb {
  background: blue;
  border-radius: 5px;
}

/* Handle on hover */
.sc::-webkit-scrollbar-thumb:hover {
  background: #5fa3f5;
}
</style>

<div class="container" id="mayorqr" style="box-shadow: 0px 3px 3px #cccccc; padding: 0;">
   <div class="row justify-content-md-center mt-xl-5" style="position:relative;">
        <div class="col-3">
            <div class="card" id="news_card">
                <h2 class="card-title" style="text-align:center;">ANNOUNCEMENTss</h2>
                <div class="card-body sc" style="overflow-y: scroll; direction:rtl;">

                    @foreach($announcement as $row)

                        @if($row['show'] == 1)
                            <div class="recent_big">
                                <img src="{{asset("uploads/" . $row['filename']) }}"  id="image_big" style="width: 100%;" />
                                <p class="card-text title_big"><a href="#"><?php echo $row['title'] ?></p></a>
                            </div>

                        @endif
                    @endforeach
                        <br>

                        <div class="recent_small">

                            <div class="row">
                                <?php $i=0; ?>
                                @foreach($announcement as $row)
                                    @if($row['show'] != 1)
                                        <?php $i++; ?>
                                        <div class="col-12 col-sm-12">

                                            <img src="{{asset("uploads/" . $row['filename']) }}"  style="width: 100%; height: 250px !important; margin-bottom:2%;" />
                                            <p class="recent_psmall">
                                                <a href="{{action( 'Pages@news_contents', $row->id )}}" target="_blank" ><?php echo $row['title'] ?> </a>
                                            </p>
                                        </div>
                                        @if ($i == 10)
                                            @break
                                        @endif
                                    @endif
                                @endforeach

                            </div>
                        </div>
                        {{-- <div id="_viewmore">
                            <a  href="#">view more articles</a>
                        </div> --}}
                </div>

            </div>
         </div>
         <div class="col-9">
           <div class="card" id="qr" style="width: 100%; border: 0px solid;">
            <br>
             <img class="card-img-top" style="width:50%; height:70%; position: relative; margin:0 auto;" src="{{asset('assets/v.png')}}" alt="Card image cap">
             <div class="card-body">
             </div>
         </div>
       </div>

   </div>
</div>


<div class="container" id="covid_updates" style="max-width: 90% !important;">
    <div class="row justify-content-md-center mt-xl-5" style="position:relative;">
        <div class=" col-sm-12">
            <div class=" col-sm-4" style="float: left;">
                <div class="card">
                    @foreach($mayors as $row)
                        @if($row["type"] == 1)
                                <div class="card-body" id="bulletin_bod" style="padding-top:0px;padding-right:0px;padding-left:0px;height: 550px; overflow: hidden;">
                                    <div class="col-12 col-sm-12 covid_date" style="display: inline-block;    padding: 0;">
                                            @if($row["type"] == 1)
                                                <a  id="bulletin_desc" href="#" class="blue" style="text-align: center !important; color:white;"><h4>Daily Update</h4></a>
                                            @endif
                                    </div>
                                    <div class="col-12 col-sm-12" style="float: left; display: inline-block;">
                                        <img class="covid_img" src="{{asset("uploads/" . $row['filename']) }}"  style="width: 100%;height: 500px !important;" />
                                    </div>
                                </div>
                        @endif

                    @endforeach
                </div>
            </div>
            <div class=" col-sm-4" style="float: left;">
                <div class="card">
                    @foreach($mayors as $row)
                        @if($row["type"] == 2)
                                <div class="card-body" id="bulletin_bod" style="padding-top:0px;padding-right:0px;padding-left:0px;height: 550px; overflow: hidden;">
                                    <div class="col-12 col-sm-12 covid_date" style="display: inline-block;    padding: 0;">
                                            @if($row["type"] == 2)
                                                <a  id="bulletin_desc" href="#" class="blue" style="text-align: center !important; color:white;"><h4>Vaccination Registration</h4></a>
                                            @endif
                                    </div>
                                    <div class="col-12 col-sm-12" style="float: left; display: inline-block;">
                                        <img class="covid_img" src="{{asset("uploads/" . $row['filename']) }}"  style="width: 100%; height: 500px !important;" />
                                    </div>
                                </div>
                        @endif

                    @endforeach
                </div>
            </div>
            <div class=" col-sm-4" style="float: left;">
                <div class="card">
                    @foreach($mayors as $row)
                        @if($row["type"] == 3)
                                <div class="card-body" id="bulletin_bod" style="padding-top:0px;padding-right:0px;padding-left:0px;height: 550px; overflow: hidden;">
                                    <div class="col-12 col-sm-12 covid_date" style="display: inline-block;    padding: 0;">
                                            @if($row["type"] == 3)
                                                <a  id="bulletin_desc" href="#" class="blue" style="text-align: center !important; color:white;"><h4>Vaccination Updates</h4></a>
                                            @endif
                                    </div>
                                    <div class="col-12 col-sm-12" style="float: left; display: inline-block;">
                                        <img class="covid_img" src="{{asset("uploads/" . $row['filename']) }}"  style="width: 100%; height: 500px !important;" />
                                    </div>
                                </div>
                        @endif

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>







<!-- <div class="container 1st_cont" id="map" style="box-shadow: 0px 3px 0px #cccccc; padding: 0;">

    <div class="row" style="">
      <div class="col-sm-3">
            <div id="sj" style="text-align:center; display:block;"  class="descriptionsss">
                <br><h1>VISION</h1>
                <br>
                <div class="contentss">
                    <img src="{{asset('assets/img/city-hall.png')}}" style="margin:0 auto; width: 100px; height: 100px;">
                    <p> A globally competitive communicability of dynamic, productive and empowered citizenry inspired by their rich historical and cultural heritage propelled by a sustainable and progressive economy in a healthy, peaceful, disaster-resilient  and Eco-friendly environment.</p>
                    <br>
                </div>
            </div>
            <div id="crame_con" style="text-align:center;" class="descriptionsss">
                <br><h1>WEST CRAME</h1>
                <br>
                <div class="contentss">
                    <img src="{{asset('assets/BRGY/WESTCRAME_updated.png')}}" style="margin:0 auto; width: 100px; height: 100px;">
                    <p><a href="#">West Crame Barangay Hall</a></p>
                    <br>
                </div>
            </div>
            <div id="gh_con" style="text-align:center;" class="descriptionsss">
                <br><h1>GREENHILLS</h1>
                <br>
                <div class="contentss">
                    <img src="{{asset('assets/BRGY/GREENHILLS_updated.png')}}" style="margin:0 auto; width: 100px; height: 100px;">
                    <p></p>
                    <br>
                </div>
            </div>
            <div id="ah_con" style="text-align:center;" class="descriptionsss">
                <br><h1>ADDITION HILLS</h1>
                <br>
                <div class="contentss">
                    <img src="{{asset('assets/BRGY/ADDITIONHILLS.png')}}" style="margin:0 auto; width: 100px; height: 100px;">
                    <p> Our barangay was an agricultural land that belonged to the municipality of San Felipe Neri. In the 1930’s it was converted to a residential subdivision by a group of American businessmen. The majority of the original lot buyers were their friends. And up to 70’s many American families still resided in our barangay.</p>
                    <br>
                </div>
            </div>
            <div id="lb_con" style="text-align:center;" class="descriptionsss">
                <br><h1>LITTLE BAGUIO</h1>
                <br>
                <div class="contentss">
                    <img src="{{asset('assets/BRGY/little.png')}}" style="margin:0 auto; width: 100px; height: 100px;">
                    <p> In 1946, Ortigas Madrigal y Compania opened for sale the Sta. Lucia Subdivision. The area is about 40 hectares consisted mostly of rice paddies, bamboo groves and fruit trees. The road were of the macadam type. However, the original name Sta. Lucia Subdivision did not gain acceptance. When the people started populating the subdivision, they adopted the name Little Baguio, because of the road where similar to the zigzag road going to Baguio City. Likewise, the 240 feet above sea-level elevation and the greenery lent themselves to contributing to little Baguio being the little summer capital of San Juan.</p>
                    <br>
                </div>
            </div>
            <div id="maytunas_con" style="text-align:center;" class="descriptionsss">
                <br><h1>MAYTUNAS</h1>
                <br>
                <div class="contentss">
                    <img src="{{asset('assets/BRGY/MAYTUNAS_updated.png')}}" style="margin:0 auto; width: 130px; height: 100px;">
                    <p></p>
                    <br>
                </div>
            </div>
            <div id="sl_con" style="text-align:center;" class="descriptionsss">
                <br><h1>ST. LUCIA</h1>
                <br>
                <div class="slucia">
                    <img src="{{asset('assets/BRGY/LUCIA.png')}}" style="margin:0 auto; width: 100px; height: 100px;">
                    <p> In the past, Sta. Lucia was the center of the town of San Juan. This place could be easily reached that time for there where many good roads leading to it. The place was also the center of business. A church, a market, and a school were built there. This was first inhabited by people from Mandaluyong.</p>
                    <br>
                </div>
            </div>
            <div id="Onse_con" style="text-align:center;" class="descriptionsss">
                <br><h1>ONSE</h1>
                <br>
                <div class="Onse">
                    <img src="{{asset('assets/BRGY/ONSE_updated.png')}}" style="margin:0 auto; width: 100px; height: 100px;">
                    <p> Barangay Onse was established in 1916. The name “ONSE” was derived from the concept that there were only eleven houses as far as they can remember. The people living in these houses were considered the first inhabitants of the place, and as one might have guessed it, Spanish term for eleven is “ONSE”. Now, the land area of Barangay Onse is 9.6684 hectares with a total population of 4,065 as of FY 2015 as per NSO record.</p>
                    <br>
                </div>
            </div>
            <div id="mayt_con" style="text-align:center;" class="descriptionsss">
                <br><h1>MAYTUNAS</h1>
                <br>
                <div class="st joseph">
                    <img src="{{asset('assets/img/city-hall.png')}}" style="margin:0 auto; width: 100px; height: 100px;">
                    <p> </p>
                    <br>
                </div>
            </div>
            <div id="isb_con" style="text-align:center;" class="descriptionsss">
                <br><h1>ISABELITA</h1>
                <br>
                <div class="isbelita">
                    <img src="{{asset('assets/BRGY/BARANGAYISABELITA_updated.png')}}" style="margin:0 auto; width: 100px; height: 100px;">
                    <p> It used to be known as Isablita Heights Subdivision, 3.4 hectares lot area owned and developed by the Barredo family. The subdivision has all quick and easy access to San Juan’s public market, church and public schools.</p>
                    <br>
                </div>
            </div>
            <div id="kab_con" style="text-align:center;" class="descriptionsss">
                <br><h1>KABAYANAN</h1>
                <br>
                <div class="kabayanan">
                    <img src="{{asset('assets/BRGY/KABAYANAN_updated.png')}}" style="margin:0 auto; width: 100px; height: 100px;">
                    <p> </p>
                    <br>
                </div>
            </div>
            <div id="tib_con" style="text-align:center;" class="descriptionsss">
                <br><h1>TIBAGAN</h1>
                <br>
                <div class="tibagan">
                    <img src="{{asset('assets/BRGY/TIBAGAN.png')}}" style="margin:0 auto; width: 100px; height: 100px;">
                    <p> Barangay Tibagan is a small community bounded by A. Bonifacio st. , and J Arellano St., where Mini Park is located. The other streets comprising this Barangay are F. Roxas, T. Kalaw, Villamor, Jose Gil formerly Valenzuela St., Regidor, Dr. A J. Ejercito St., and reaching upward the next barangay are J.V Alvior formerly Florante St. and Laura Streets.</p>
                    <br>
                </div>
            </div>
            <div id="bat_con" style="text-align:center;" class="descriptionsss">
                <br><h1>BATIS</h1>
                <br>
                <div class="batis">
                    <img src="{{asset('assets/BRGY/BATIS_updated.png')}}" style="margin:0 auto; width: 100px; height: 100px;">
                    <p>Current Barangay residents are not aware of the any spring of clear water that can account for name of BATIS. According the old residents, the area had creeks and rivulets during their time, wherein clean water flowed. Actually bordering San Juan River as it does, it is not at all unlikely that the area had rivulets and creeks feeding in the water way. People neigh boring Barangay especially on high land are coming here because of the clear water.</p>
                    <br>
                </div>
            </div>
            <div id="sp_con" style="text-align:center;" class="descriptionsss">
                <br><h1>SAN PERFECTO</h1>
                <br>
                <div class="pecto">
                    <img src="{{asset('assets/BRGY/SANPERFECTO_updated.png')}}" style="margin:0 auto; width: 100px; height: 100px;">
                    <p> Barangay San Perfecto is strategically located in the center Of Metro Manila. An almost perfect triangle in shape, it is bounded in the northwest by N. Domingo Street, in the northwest by F. Blumentritt Street, and in the south by Tuberias Street, also known as “ Tubo”, the pipeline of the Metropolitan Waterworks and Sewerage Authority.</p>
                    <br>
                </div>
            </div>
            <div id="prog_con" style="text-align:center;" class="descriptionsss">
                <br><h1>PROGRESO</h1>
                <br>
                <div class="prog">
                    <img src="{{asset('assets/BRGY/PROGRESONEW.png')}}"  style="margin:0 auto; width: 100px; height: 100px;">
                    <p> During the Spanish regime, this place was then called a “ balangay “ or “ barangay “ which was the headed by
                       “cabeza de barangay “. However, when the Americans came I, this place was then change from “ Barangay” to “ barrio” and is headed by a “ Tenyente del Baryo “. During the Pre-Spanish times, Progreso and Rivera as one small village found in San Juan which became a small encomienda in 1950.</p>
                    <br>
                </div>
            </div>
            <div id="riv_con" style="text-align:center;" class="descriptionsss">
                <br><h1>RIVERA</h1>
                <br>
                <div class="rivera">
                    <img src="{{asset('assets/BRGY/RIVERA.png')}}"  style="margin:0 auto; width: 125px; height: 100px;">
                    <p> </p>
                    <br>
                </div>
            </div>
            <div id="PC_con" style="text-align:center;" class="descriptionsss">
                <br><h1>PEDRO CRUZ</h1>
                <br>
                <div class="pedro">
                    <img src="{{asset('assets/BRGY/PEDROCRUZ_updated.png')}}" style="margin:0 auto; width: 100px; height: 100px;">
                    <p></p>
                    <br>
                </div>
            </div>
            <div id="bb_con" style="text-align:center;" class="descriptionsss">
                <br><h1>BALONG-BATO</h1>
                <br>
                <div class="balongbato">
                    <img src="{{asset('assets/BRGY/BALONGBATO_updated.png')}}" style="margin:0 auto; width: 100px; height: 100px;">
                    <p> Barangay Balong-Bato is strategically located at the center of Metro Manila. Bounded in the north of N. Domingo Street in the South of Aurora Blvd. Being situated in the center of Metro Manila, Barangay Balong –Bato streets are being utilized by motorists as alternative routes going to and from Quezon City, Mandaluyong City, Makati City and City of Manila. Barangay Balong-Bato has always been mabato. Old times residents recall, the area used to have many trees- bananas, mostly, below feet of soil adobe and more adobe. In some spots, there were natural wells, hence the name Balon na Bato.</p>
                    <br>
                </div>
            </div>
            <div id="ermi_con" style="text-align:center;" class="descriptionsss">
                <br><h1>ERMITAÑO</h1>
                <br>
                <div class="ermitano">
                    <img src="{{asset('assets/BRGY/ERMITAÑO_updated.png')}}" style="margin:0 auto; width: 100px; height: 100px;">
                    <p> Barangay Ermitaño is located in the north-eastern part of San Juan City. It is surrounded by Ermitaño creek in the east and south-east. It is bounded by Salapan on the north, Balong-bato on the north-west, Pasadeña and Corazon de Jesus on the east.</p>
                    <br>
                </div>
            </div>
            <div id="pas_con" style="text-align:center;" class="descriptionsss">
                <br><h1>PASADEÑA</h1>
                <br>
                <div class="Pasadeña">
                    <img src="{{asset('assets/BRGY/PASADENA_updated.png')}}" style="margin:0 auto; width: 100px; height: 100px;">
                    <p> The word PASADENA came from the name of the flower Cadena de Amor. During the earlier times it has been said that the streets of Brgy. Pasadena were filled with cadena de amor, a certain Spanish person created the name for Pasadena which means “way of the cadena de amor” PASA is a Spanish word which means “daan” in Filipino language. PASA = Daan & DENA = short for the flower cadena de amor.The word PASADENA came from the name of the flower Cadena de Amor.</p>
                    <br>
                </div>
            </div>
            <div id="sa_con" style="text-align:center;" class="descriptionsss">
                <br><h1>SALAPAN</h1>
                <br>
                <div class="salapan">
                    <img src="{{asset('assets/BRGY/SALAPAN.png')}}" style="margin:0 auto; width: 100px; height: 100px;">
                    <p> Barangay Salapan was named after the word “Salapang”, a bamboo stick with pointed end in the bottom and tied like a cone. Use by early settlers to catch fish in the creek of Salapan with 16 inches in diameter at the bottom and 7 inches on top of enable the hand and arm of the fisherman to enter inside the salapang to get caught fish.</p>
                    <br>
                </div>
            </div>
            <div id="cora_con" style="text-align:center;" class="descriptionsss">
                <br><h1>CORAZON DE JESUS</h1>
                <br>
                <div class="corazon">
                    <img src="{{asset('assets/BRGY/CORAZON.png')}}" style="margin:0 auto; width: 100px; height: 100px;">
                    <p> Barangay Corazon de Jesus was established in the early 1940’s. The former name of Corazon de Jesus was “EL DEPOSITO” because of a myth that there is a hidden treasure inside the tunnel. Behind the San Juan Post Office in Pinaglabanan St., is an opening that leads to a long tunnel going to different parts of Metro Manila.</p>
                    <br>
                </div>
            </div>
            <div id="stjo_con" style="text-align:center;" class="descriptionsss">
                <br><h1>ST. JOSEPH</h1>
                <br>
                <div class="corazon">
                    <img src="{{asset('assets/BRGY/STJOSEPH.png')}}" style="margin:0 auto; width: 100px; height: 100px;">
                    <p></p>
                    <br>
                </div>
            </div>
            <a href="#" id="mayors_link" style="visibility:hidden;">Explore more</a>
      </div>
      <div class="col-sm-9 mapppy"  >
        <img src="{{asset('assets/img/sjcity.png')}}" id="map" style=" width: 900px;">
        <div class="brgy_links">
            <button class="btn map_b crame" id="crame" style="right:10%;top:22%;position: absolute;">West Crame</button>

            <button class="btn map_b gh" id="gh" style="right:22%;top:35%;position: absolute;">Greenhills</button>
            <button class="btn map_b gh" id="gh" style="right:22%;top:45%;position: absolute;">Greenhills</button>

            <button class="btn map_b ah" id="ah" style="right:41%;top:77%;position: absolute;">Addition Hills</button>
            <button class="btn map_b lb" id="lb" style="right:42%;top:45%;position: absolute;">Little <br>Baguio</button>
            <button class="btn map_b lb" id="lb" style="right:52%;top:40%;position: absolute;">......</button>
            <button class="btn map_b maytunas" id="maytunas" style="right:51%;top:71%;position: absolute;">Maytunas</button>
            <button class="btn map_b sl" id="sl" style="right:51%;top:55%;position: absolute;">Sta. <br> Lucia</button>
            <button class="btn map_b Onse" id="Onse" style="right:60%;top:49%;position: absolute;">Onse</button>
            <button class="btn map_b stjo" id="stjo" style="right:55%;top:40%;position: absolute;">St. Joseph</button>
            <button class="btn map_b isb" id="isb" style="right:61%;top:41%;position: absolute;">Isabelita</button>
            <button class="btn map_b kab" id="kab" style="right:62%;top:62%;position: absolute;">Kabayanan</button>
            <button class="btn map_b tib" id="tib" style="right:63%;top:49%;position: absolute;">Tibagan</button>
            <button class="btn map_b bat" id="bat" style="right:74%;top:49%;position: absolute;">Batis</button>
            <button class="btn map_b sp" id="sp" style="right:73%;top:38%;position: absolute;">San Perfecto</button>
            <button class="btn map_b prog" id="prog" style="right:83%;top:38%;position: absolute;">Progreso</button>
            <button class="btn map_b riv" id="riv" style="right:82%;top:31%;position: absolute;">Rivera</button>
            <button class="btn map_b PC" id="PC" style="right:69%;top:34%;position: absolute;">Pedro Cruz</button>
            <button class="btn map_b CDJ" id="CDJ" style="right:51%;top:30%;position: absolute;">Corazon De Jesus</button>
            <button class="btn map_b Pas" id="Pas" style="right:51%;top:23%;position: absolute;">Pasadeña</button>
            <button class="btn map_b BB" id="BB" style="right:69%;top:21%;position: absolute;">Balong-Bato</button>
            <button class="btn map_b Sa" id="Sa" style="right:73%;top:11%;position: absolute;">Salapan</button>
            <button class="btn map_b Erm" id="Erm" style="right:61%;top:11%;position: absolute;">Ermitaño</button>
        </div>
        <br>

    </div>

    </div>
</div> -->
