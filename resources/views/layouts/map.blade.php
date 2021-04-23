<style>
@media screen and (max-width: 766px) and (min-width: 200px) {

#map{
  display: none;
}

}

</style>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<div class="container 1st_cont" id="map" style="box-shadow: 0px 3px 0px #cccccc; padding: 0;">
    <div class="row" style="">
      <div class="col-sm-9 mapppy" style="margin-left:18%;margin-top: -5%; ">
        <img class="m" src="{{asset('assets/sjcity2.png')}}" id="map" style="width: 100%;">
        <div class="brgy_links">
            <a class="lahat" data-toggle="modal" data-target=".wcm" style="color:transparent; cursor: pointer;font-size: 13px; right:22%;top:25%;position: absolute;">West Crame</a>
            <a class="lahat" data-toggle="modal" data-target=".wcm" style="color:transparent; cursor: pointer;font-size: 6px; right:21%;top:31%;position: absolute;">West Crame</a>
            <a class="lahat" data-toggle="modal" data-target=".wcm" style="color:transparent; cursor: pointer;font-size: 6px; right:20.5%;top:33%;position: absolute;">West Crame</a>
            <a class="lahat" data-toggle="modal" data-target=".wcm" style="color:transparent; cursor: pointer;font-size: 6px; right:20%;top:36%;position: absolute;">West Crame</a>
            <a class="lahat" data-toggle="modal" data-target=".wcm" style="color:transparent; cursor: pointer;font-size: 6px; right:19%;top:38%;position: absolute;">West Crame</a>
            <a class="lahat" data-toggle="modal" data-target=".wcm" style="color:transparent; cursor: pointer;font-size: 20px; right:9%;top:28%;position: absolute;">We  st Crame</a>
            <h1 class="display" data-toggle="modal" data-target=".wcm" style="cursor: pointer; font-size: 20px !important; right:10%;top:28%;position: absolute;">West Crame</h1>

            <a class="lahat" data-toggle="modal" data-target=".ghm" style="cursor: pointer; font-size: 30px;right:31%;top:31%;position: absolute;color: transparent;">Greenhills</a>
            <a class="lahat" data-toggle="modal" data-target=".ghm" style="cursor: pointer; font-size:33px;right:20%;top:44%;position: absolute; color: transparent;">Greenhills</a>
            <a class="lahat" data-toggle="modal" data-target=".ghm" style="cursor: pointer; font-size: 25px;right:31%;top:64%;position: absolute;color: transparent;">Greenhills</a>
            <a class="lahat" data-toggle="modal" data-target=".ghm" style="cursor: pointer;font-size: 26px;right:27%;top:58%;position: absolute;color: transparent;">Greenhills</a>
            <a class="lahat" data-toggle="modal" data-target=".ghm" style="cursor: pointer; font-size: 29px;right:23%;top:51%;position: absolute;color: transparent;">Greenhills</a>
            <a class="lahat" data-toggle="modal" data-target=".ghm" style="cursor: pointer;font-size: 25px; right:25%;top:36%;position: absolute;color: transparent;">Greenhills</a>
            <a class="lahat" data-toggle="modal" data-target=".ghm" style="cursor: pointer;font-size: 21px; right:33%;top:27%;position: absolute;color: transparent;">Greenhills</a>
            <a class="lahat" data-toggle="modal" data-target=".ghm" style="cursor: pointer;font-size: 31px; right:4%;top:42%;position: absolute;color: transparent;">Greenhills</a>
            <a class="lahat" data-toggle="modal" data-target=".ghm" style="cursor: pointer;font-size: 21px;right: 35%; top: 40%; position: absolute;color: transparent;">Greenhills</a>
            <a class="lahat" data-toggle="modal" data-target=".ghm" style="cursor: pointer;font-size: 21px;right: 24%; top: 40%; position: absolute;color: transparent;">Greenhills</a>
            <a class="lahat" data-toggle="modal" data-target=".ghm" style="cursor: pointer; font-size: 9px;right:35%;top:74%;position: absolute;color: transparent;">Greenhills</a>
            <a class="lahat" data-toggle="modal" data-target=".ghm" style="cursor: pointer; font-size:25px;right:24%;top:44%;position: absolute; color: transparent;">Greenhills</a>
            <h1 class="display" data-toggle="modal" data-target=".ghm" style="cursor: pointer; font-size: 20px !important; right:24%;top:44%;position: absolute; ">Greenhills</h1>

            <a class="lahat" data-toggle="modal" data-target=".bd-example-modal-lg" style=" color:transparent; cursor: pointer; font-size: 12px; right: 41%; top: 74%; position: absolute;">Additon Hills</a>
            <a class="lahat" data-toggle="modal" data-target=".bd-example-modal-lg" style=" color:transparent; cursor: pointer; font-size: 12px; right: 41%; top: 78%; position: absolute;">Additon Hills</a>
            <a class="lahat" data-toggle="modal" data-target=".bd-example-modal-lg" style=" color:transparent; cursor: pointer; font-size: 22px; right: 43%; top: 82%; position: absolute;">Additon Hills</a>
            <h1 class="display" data-toggle="modal" data-target=".bd-example-modal-lg" style="cursor: pointer; font-size: 20px !important; right: 43%; top: 82%; position: absolute;">Additon Hills</h1>

            <a  class="lahat" data-toggle="modal" data-target=".mtm" style="color:transparent; cursor: pointer; font-size: 23px; right:52%;top:74%;position: absolute;">Maytunas</a>
            <h1  class="display" data-toggle="modal" data-target=".mtm" style="cursor: pointer; font-size: 20px !important;  right:52%;top:74%;position: absolute;">Maytunas</h1>

            <a  class="lahat" data-toggle="modal" data-target=".lbm" style="color:transparent; cursor: pointer;  font-size: 18px; right:46.3%; top:45% ;position: absolute;">Little <br>Baguio</a>
            <h1   class="display" data-toggle="modal" data-target=".lbm" style="cursor: pointer; font-size: 20px !important; right:46%; top:44% ;position: absolute; z-index:4;">Little <br>Baguio</h1>
            <a   class="lahat" data-toggle="modal" data-target=".lbm" style="color:transparent; cursor: pointer; font-size: 36px;right:51%; top:36% ;position: absolute;">..........</a>
            <a   class="lahat" data-toggle="modal" data-target=".lbm" style="color:transparent; cursor: pointer; font-size: 36px;right:43%; top:51% ;position: absolute;">..........</a>

            <a  class="lahat" data-toggle="modal" data-target=".stm" style="color:transparent; cursor: pointer; font-size: 80px;right:52.6%;top:49%;position: absolute;">O</a>
            <h1  class="display" data-toggle="modal" data-target=".stm" style="cursor: pointer; font-size: 20px !important; right:53%;top:57%;position: absolute;">Sta. <br> Lucia</h1>


            <a  class="lahat" data-toggle="modal" data-target=".kbm" style="color:transparent; cursor: pointer; font-size: 62px;right:65.5%;top:60%;position: absolute;">O</a>
            <h1  class="display" data-toggle="modal" data-target=".kbm" style=" cursor: pointer; font-size: 20px !important; right:63.5%;top:64%;position: absolute;z-index:4;">Kabayanan</h1>


            <a class="lahat" data-toggle="modal" data-target=".om" style="color:transparent; cursor: pointer; font-size: 42px;right:62%;top:49%;position: absolute;">O</a>
            <h1  class="display" data-toggle="modal" data-target=".om" style=" cursor: pointer; font-size: 20px !important; right:61.5%;top:53%;position: absolute;z-index:4;">Onse</h1>

            <a  class="lahat" data-toggle="modal" data-target=".sjm" style="color:transparent; cursor: pointer; font-size: 27px;right:61%;top:42%;position: absolute;">O</a>
            <h1  class="display" data-toggle="modal" data-target=".sjm" style=" cursor: pointer;font-size: 20px !important; right:55%;top:43%;position: absolute;z-index:4;">St. Joseph</h1>

            <a  class="lahat" data-toggle="modal" data-target=".ism" style="color:transparent; cursor: pointer; font-size: 23px;right:64.8%;top:44%; position: absolute;">O</a>
            <h1  class="display" data-toggle="modal" data-target=".ism" style=" cursor: pointer; font-size: 20px !important; right:63%;top:45%; position: absolute;z-index:4;">Isabelita</h1>

            <a  class="lahat" data-toggle="modal" data-target=".tbm" style="color:transparent; cursor: pointer; font-size: 11px; right:68%;top:51%; position: absolute;">Tibagan</a>
            <a  class="lahat" data-toggle="modal" data-target=".tbm" style="color:transparent; cursor: pointer; font-size: 47px; right:66.5%;top:52%; position: absolute;">O</a>
            <a  class="lahat" data-toggle="modal" data-target=".tbm" style="color:transparent; cursor: pointer; font-size: 49px; right:68.5%;top:41%; position: absolute;">O</a>
            <h1  class="display" data-toggle="modal" data-target=".tbm" style="cursor: pointer; font-size: 20px !important; right:66%;top:51%; position: absolute; z-index:4;">Tibagan</h1>


            <a  class="lahat" data-toggle="modal" data-target=".bm" style="color:transparent; cursor: pointer; font-size: 90px; right:73%;top:45%; position: absolute; z-index:0;">O</a>
            <h1  class="display" data-toggle="modal" data-target=".bm" style="cursor: pointer; font-size: 20px !important; right:75%;top:56%; position: absolute;">Batis</h1>

            <a  class="lahat" data-toggle="modal" data-target=".spm" style="color:transparent; cursor: pointer; font-size: 34px;right:82%;top:39%; position: absolute;">O</a>
            <h1  class="display" data-toggle="modal" data-target=".spm" style="cursor: pointer; font-size: 20px !important; right:73%;top:45%; position: absolute;">San Perfecto</h1>

            <a  class="lahat" data-toggle="modal" data-target=".pm" style="color:transparent; cursor: pointer; font-size: 35px; right:87.5%;top:40%; position: absolute;">O</a>
            <h1  class="display" data-toggle="modal" data-target=".pm" style=" cursor: pointer;font-size: 20px !important; right:86%;top:42%; position: absolute;">Progreso</h1>

            <a  class="lahat" data-toggle="modal" data-target=".rm" style="color:transparent; cursor: pointer; font-size: 10px; right:83.5%;top:34%; position: absolute;">Rivera</a>
            <h1  class="display" data-toggle="modal" data-target=".rm" style="cursor: pointer; font-size: 20px !important; right:83%;top:34%; position: absolute;">Rivera</h1>


            <a  class="lahat" data-toggle="modal" data-target=".pdm" style=" color:transparent; cursor: pointer; font-size: 69px; right:73%;top:28%; position: absolute;">O</a>
            <h1  class="display" data-toggle="modal" data-target=".pdm" style=" cursor: pointer; font-size: 20px !important; right:72%;top:34%; position: absolute;">Pedro Cruz</h1>

            <a  class="lahat" data-toggle="modal" data-target=".bbm" style=" color:transparent; cursor: pointer; font-size: 15px; right:72%;top:23%; position: absolute;">Balong-Bato</a>
            <h1  class="display" data-toggle="modal" data-target=".bbm" style=" cursor: pointer; font-size: 20px !important; right:72%;top:23%; position: absolute;">Balong-Bato</h1>
            <a  class="lahat" data-toggle="modal" data-target=".bbm" style=" color:transparent; cursor: pointer; font-size: 30px; right:79%;top:26%; position: absolute;">O</a>
            <a  class="lahat" data-toggle="modal" data-target=".bbm" style=" color:transparent; cursor: pointer; font-size: 39px; right:71%;top:15%; position: absolute;">O</a>
            <a  class="lahat" data-toggle="modal" data-target=".bbm" style=" color:transparent; cursor: pointer; font-size: 30px; right:75%;top:17%; position: absolute;">O</a>
            <a  class="lahat" data-toggle="modal" data-target=".bbm" style=" color:transparent; cursor: pointer; font-size: 24px; right:78%;top:19%; position: absolute;">O</a>

            <a  class="lahat" data-toggle="modal" data-target=".cdm" style=" color:transparent; cursor: pointer; font-size: 13px; right:59%; top: 33%; position: absolute;">Corazon de Jesus</a>
            <h1  class="display" data-toggle="modal" data-target=".cdm" style=" cursor: pointer; font-size: 20px !important; right:57%;top:30%; position: absolute;">Corazon de Jesus</h1>
            <a  class="lahat" data-toggle="modal" data-target=".cdm" style=" color:transparent; cursor: pointer; font-size: 55px; right:66%;top:20%; position: absolute;">O</a>
            <a  class="lahat" data-toggle="modal" data-target=".cdm" style=" color:transparent; cursor: pointer; font-size: 30px; right:67%;top:37%; position: absolute;">O</a>
            <a  class="lahat" data-toggle="modal" data-target=".cdm" style=" color:transparent; cursor: pointer; font-size: 30px; right:63%;top:36%; position: absolute;">O</a>

            <a  class="lahat" data-toggle="modal" data-target=".psdm" style=" color:transparent; cursor: pointer; font-size: 61px; right:56%;top:18%; position: absolute;">O</a>
            <h1  class="display" data-toggle="modal" data-target=".psdm" style="cursor: pointer; font-size: 20px !important; right:54%;top:25%; position: absolute;z-index:4;">Pasadeña</h1>
            <a  class="lahat" data-toggle="modal" data-target=".psdm" style=" color: transparent; cursor: pointer; font-size: 36px; right:53%;top:27%; position: absolute;">O</a>
            <a  class="lahat" data-toggle="modal" data-target=".psdm" style=" color:transparent; cursor: pointer; font-size: 36px; right:62%;top:16%; position: absolute;">O</a>

          <a  class="lahat" data-toggle="modal" data-target=".slpm" style=" color:transparent; cursor: pointer; font-size: 30px; right:81%;top:13%; position: absolute;">......</a>
          <a  class="lahat" data-toggle="modal" data-target=".slpm" style=" color:transparent; cursor: pointer; font-size: 21px; right:73%;top:11%; position: absolute;">Salapan</a>
          <h1  class="display" data-toggle="modal" data-target=".slpm" style="cursor: pointer; font-size: 20px !important;right:73%;top:11%; position: absolute;">Salapan</h1>

          <a  class="lahat" data-toggle="modal" data-target=".ermm" style=" color:transparent; cursor: pointer; font-size: 13px; right:64%;top:14%; position: absolute;">Ermitaño</a>
          <h1  class="display" data-toggle="modal" data-target=".ermm" style="cursor: pointer; font-size: 20px !important;right:64%;top:12%; position: absolute;">Ermitaño</h1>


        </div>
          <br>
      </div>

      <div class="col-sm-12" style="margin-top: -4%;">
        <div class="modal fade wcm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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

        <div class="modal fade ghm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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

        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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


      <div class="modal fade mtm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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

      <div class="modal fade lbm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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

      <div class="modal fade stm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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

      <div class="modal fade kbm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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

      <div class="modal fade om" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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

      <div class="modal fade sjm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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

      <div class="modal fade ism" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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

      <div class="modal fade tbm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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


      <div class="modal fade bm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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

      <div class="modal fade spm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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

      <div class="modal fade pm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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

      <div class="modal fade rm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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

      <div class="modal fade pdm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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

      <div class="modal fade bbm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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

      <div class="modal fade cdm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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

      <div class="modal fade psdm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
              <h1 style="text-align:center;">PASADEÑA</h1>
              <p style="text-align: justify;">The word PASADENA came from the name of the flower Cadena de Amor. During the earlier times it has been said that the streets of Brgy. Pasadena were filled with cadena de amor, a certain Spanish person created the name for Pasadena which means “way of the cadena de amor” PASA is a Spanish word which means “daan” in Filipino language. PASA = Daan & DENA = short for the flower cadena de amor.The word PASADENA came from the name of the flower Cadena de Amor.</p>
              <h3 style=" font-weight:bold; text-align:center; color: #1f1c4b;">Organization Chart</h3>
              <h5 style=" font-weight:bold; text-align:center; color: #1f1c4b;">Contact Info</h5>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade slpm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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

      <div class="modal fade ermm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
              <p style="text-align: justify;">Barangay Ermitaño is located in the north-eastern part of San Juan City. It is surrounded by Ermitaño creek in the east and south-east. It is bounded by Salapan on the north, Balong-bato on the north-west, Pasadeña and Corazon de Jesus on the east.</p>
              <h3 style=" font-weight:bold; text-align:center; color: #1f1c4b;">Organization Chart</h3>
              <h5 style=" font-weight:bold; text-align:center; color: #1f1c4b;">Contact Info</h5>
            </div>
          </div>
        </div>
      </div>

    </div>
    </div>
</div>













































<!-- <style>
.img_map img{
    position:absolute !important;
    z-index: 0;
}
#GH, #GH_hover {

    left: 63.5%;
    top: 22%;
}

.jj {
    color: transparent;
}
.jj:active {
    color: #000;
}
#green_hills a{
    position: absolute;
    top: 38%;
    z-index: 2;
    left: 70%;
    margin-left: 0 !important;
}
/*#SL, #SL_hover{*/
/*    left:56.8%;*/
/*    top:36.7%;*/
/*    z-index:1;*/
}
#gh_content .gh_image_content{
    z-index:1;
    position: absolute;
}
#map{
position: relative
}
#map a  {
position: absolute;
}


a:hover{
color:black;
}
/*a{
color: transparent;
}*/
h1{
  text-align: center;
}
#sjmp {
  width: 800px;
  height: 500px;
  margin-left: 820px;

  position: relative;
   /* z-index: -1; */
}

#WC, #WC_hover{
position:absolute;
left:74.8%;
top:23%;
}
#GH, #GH_hover{
position:absolute;
left: 54%;
top: 23%
}
#LB, #LB_hover{
position:absolute;
left: 41%;
top: 35.8%;
}
#AH, #AH_hover{
position:absolute;
left: 39.5%;
top: 70%;
}
#MY, #MY_hover{
position:absolute;
left: 33.5%;
top: 71%;
}
#SL, #SL_hover{
  position:absolute;
  left: 36.2%;
  top: 51%;
}
#KB, #KB_hover{
  position:absolute;
  left: 23.4%;
  top: 62%;
}
#ON, #ON_hover{
position:absolute;
left: 34.4%;
top: 49%;
}
#IB, #IB_hover{
  position:absolute;
  left: 34.7%;
   top: 45.2%;
}
#TB, #TB_hover{
  lposition:absolute;
  left: 24%;
  top: 44.2%;
}
#BT, #BT_hover{
  position:absolute;
   left: 9.4%;
   top: 46.2%;
}
#SP, #SP_hover{
  position:absolute;
  left: 10.6%;
  top: 41.5%;
}
#PC, #PC_hover{
position:absolute;
left: 15%;
top: 30%;
}
#CD, #CD_hover{
  position:absolute;
  left: 26.1%;
  top: 22%;
}
#PS, #PS_hover{
  position:absolute;
  left: 34.5%;
  top: 18.5%;
}
#ET, #ET_hover{
  position:absolute;
  left: 29.2%;
   top: 9.5%;
}
#BB, #BB_hover{
  position:absolute;
  left: 13.8%;
  top: 17%;
}
#SN, #SN_hover{
position:absolute;
left: 12.2%;
top: 6.5%;
}
#RV, #RV_hover{
position:absolute;
left: 10%;
top: 31%;
}
#PG, #PG_hover{
  position:absolute;
  left: 7.6%;
  top: 40%;
}
#jose, #jose_hover{
position:absolute;
left: 38%;
top: 43.2%;
}
#city, #city_hover{
  left: 55.5%;
      top: 29%;
  z-index: 2;
    position: relative;
}#BRGY{
  margin-top: 5%;
  float: right;
  font-weight: 600;
  font-size: 1.5rem;
  border: 3px solid #1b2560;
  padding: 0.5% 3%;
  color: #fff;
  background: #e63946;
  border-radius: 8px;
  text-decoration: none;
}
.unahan{
  z-index: -1;
}
.unahan:hover, .unahan:active{
color: black;

}
.jj{
color:transparent;
}
#CITYHALL {
    position: absolute;
    left: 1051px;
    top: 199px;
    z-index: 1;
}

#post{

  position: absolute;
    left: 308px;
    top: 118px;
    width: 385px;
    height: 337px;
    z-index: 1;
}
.in{
  text-indent: 50px;
}
#s, #s_hover{
  position:absolute;
  left: 32%;
  top: 33%;
}



@media screen and (min-width: 601px) {
  div.sanjuan {
    font-size: 18px;
  }

}

@media screen and (max-width: 600px) {
  div.sanjuan {
    font-size: 30px;
  }
}
.responsive {
  width: 100%;
  height: auto;
}
.ss{
  background-color: gray;
}
.qwe{
  width: 636px;
  position: relative;
  left: 42%;
  top: 4%;
}
@media (max-width:1920px) {
  #post{

      position: relative;
      left: 439px;
      top: 140px;
      width: 385px;
      height: 337px;
      z-index: 1;
  }
  .qwe{
    width: 636px;
    position: relative;
    left: 42%;
    top: 4%;
  }
}
@media (max-width:1600px) {
  #post{

      position: absolute;
      left: 308px;
      top: 118px;
      width: 385px;
      height: 337px;
      z-index: 1;
  }
  .qwe{
    width: 636px;
    position: relative;
    left: 42%;
    top: 4%;
  }
}
@media (max-width:1560px) {
  #post{

      position: relative;
      left: 308px;
      top: 118px;
      width: 385px;
      height: 337px;
      z-index: 1;
  }
  .qwe{
    width: 636px;
    position: relative;
    left: 42%;
    top: 4%;
  }
}
@media (max-width:1366px) {
  #post{

    position: relative;
    left: 226px;
    top: 128px;
    width: 385px;
    height: 337px;
    z-index: 1;
  }
  .qwe{
    width: 636px;
    position: absolute;
    left: 42%;
    top: 4%;
  }
}
@media (max-width:1201px) {
  #post{

      position: absolute;
      left: 144px;
      top: 128px;
      width: 385px;
      height: 337px;
      z-index: 1;
  }
  .qwe{
    width: 636px;
    position: absolute;
    left: 42%;
    top: 4%;
  }
}
.btnv{
  position: relative;
  top: 43%;
}
.in{
   height:25%;
}


</style>


<div class="container" id="map_section" style="box-shadow: 0px 3px 3px #cccccc;">
    <div class="row">
      <div class="col-6 qwe">

          <img src="{{asset('assets/img/sjcity.png')}}" width="700px" height="=500px" style="position: relative; z-index: 1">


          <div id="s_content" class="img_map">
            <a href="#" id="s_j" class="unahan jj"> <img src="img/ph.png" width="20px" height="=100px" style=" position: absolute;
                top: 37%;
                z-index: 2;
                left: 32.3%;">
            </a>
              <!-- <img id="s" class="s_image_content" src="img/city-hall.png" width="35px" height="=100px">
              <img id="s_hover" src="img/city-hall.png" width="35px" height="=100px">
          </div>

          <div id="gh_content" class="img_map">
            <a href="#" id="green_hills" class="unahan jj " style="text-decoration: none;
              position: absolute;
              top: 48%;
              z-index: 2;
              left: 67%;">GREENHILLS
          </a>
              <img id="GH" class="gh_image_content" src="{{asset('assets/img/gh.png')}}" width="350px" height="=100px">
              <img id="GH_hover" src="{{asset('assets/img/gh.png')}}" width="350px" height="=100px">
          </div>

          <div id="wc_content" class="img_map">
            <a href="#" id="west_crame" class="unahan jj" style="text-decoration: none;
                position: absolute;
                top: 28%;
                z-index: 2;
                left: 84%;">WEST CRAME
            </a>
              <img id="WC"  class="wc_image_content" src="{{asset('assets/img/westcrame.png')}}" width="105px" height="=100px">
              <img id="WC_hover" src="{{asset('assets/img/westcrame.png')}}" width="105px" height="=100px" />
          </div>

          <div id="sl_content" class="img_map">
            <a href="#" id="santa_lucia" class="unahan jj" style="text-decoration: none;
              position: absolute;
              top: 64%;
              z-index: 2;
              left: 40.5%;">STA. LUCIA
            </a>
              <img id="SL" class="sl_image_content" src="{{asset('assets/img/santalucia.png')}}" width="117px" height="=100px" style="">
              <img id="SL_hover"  src="{{asset('assets/img/santalucia.png')}}" width="117px" height="=100px">
          </div>

          <div id="LB_content" class="img_map">
            <a href="#" id="little_baguio" class="unahan jj" style="
                text-decoration: none;
                position: absolute;
                top: 51%;
                z-index: 2;
                left: 47%;">LITTLE BAGUIO
            </a>
              <img id="LB"  class="lb_image_content" src="{{asset('assets/img/littlebaguio.png')}}" width="155px" height="=100px" style="">
              <img id="LB_hover" src="{{asset('assets/img/littlebaguio.png')}}" width="155px" height="=100px">
          </div>

          <div id="ah_content" class="img_map">
            <a href="#" id="a_h" class="unahan jj" style="text-decoration: none;
              position: absolute;
              top: 85%;
              z-index: 2;
              left: 44.5%;">ADDITION HILLS
            </a>
              <img id="AH" class="ah_image_content" src="{{asset('assets/img/additionhills.png')}}" width="176px" height="=100px" style="">
              <img id="AH_hover"  src="{{asset('assets/img/additionhills.png')}}" width="176px" height="=100px">
          </div>

          <div id="may_content" class="img_map">
            <a href="#" id="M_Y" class="unahan jj" style="text-decoration: none;
                position: absolute;
                top: 79.5%;
                z-index: 2;
                left: 38%;">MAYTUNAS
            </a>
                <img id="MY" class="may_image_content"  src="{{asset('assets/img/maytunas.png')}}"  width="138px" height="=100px" style="">
                <img id="MY_hover" src="{{asset('assets/img/maytunas.png')}}"  width="138px" height="=100px">
          </div>

        <div id="onse_content" class="img_map">
        <a href="#" id="O_N" class="unahan jj" style="text-decoration: none;
            position: absolute;
            top: 55%;
            z-index: 2;
            left: 36%;">ONSE
        </a>
              <img id="ON" class="onse_image_content" src="{{asset('assets/img/onse.png')}}" width="74px" height="=100px" style="">
              <img id="ON_hover" src="{{asset('assets/img/onse.png')}}" width="74px" height="=100px">
        </div>

        <div id="kaba_content" class="img_map" >
            <a href="#" id="K_B" class="unahan jj" style="text-decoration: none;
                position: absolute;
                top: 70%;
                z-index: 2;
                left: 26%;">KABAYANAN
            </a>
                <img id="KB" class="kaba_image_content" src="{{asset('assets/img/kabayanan.png')}}" width="120px" height="=100px" style="">
                <img id="KB_hover" src="{{asset('assets/img/kabayanan.png')}}" width="120px" height="=100px">
        </div>

        <div id="tiba_content" class="img_map">
          <a href="#" id="T_B" class="unahan jj" style="text-decoration: none;
            position: absolute;
            top: 54.5%;
            z-index: 2;
            left: 27%;;">TIBAGAN
          </a>
            <img id="TB" class="tiba_image_content" src="{{asset('assets/img/tibagan.png')}}" width="89px" height="=100px" style="">
            <img id="TB_hover" src="{{asset('assets/img/tibagan.png')}}"  width="89px" height="=100px" >
        </div>

      <div id="bat_content" class="img_map">
          <a href="#" id="B_T" class="unahan jj" style="text-decoration: none;
            position: absolute;
            top: 58%;
            z-index: 2;
            left: 20.5%;">BATIS
          </a>
            <img id="BT" class="bat_image_content" src="{{asset('assets/img/batis.png')}}" width="145px" height="=100px" style="">
            <img id="BT_hover" src="{{asset('assets/img/batis.png')}}" width="145px" height="=100px">
      </div>

      <div id="cora_content" class="img_map">
          <a href="#" id="C_D" class="unahan jj" style="text-decoration: none;
            position: absolute;
            top: 32.5%;
            z-index: 2;
            left: 24%;">CORAZON DE JESUS
          </a>
              <img id="CD" class="cora_image_content" src="{{asset('assets/img/corazondejesus.png')}}" width="171px" height="=100px" style="">
              <img id="CD_hover" src="{{asset('assets/img/corazondejesus.png')}}"  width="171px" height="=100px">
      </div>

      <div id="pasa_content" class="img_map">
          <a href="#" id="P_S" class="unahan jj" style="text-decoration: none;
            position: absolute;
            top: 28%;
            z-index: 2;
            left: 38.8%;;">PASADEÑA
          </a>
            <img id="PS" class="pasa_image_content"  src="{{asset('assets/img/pasadeÑa.png')}}" width="126px" height="=100px" style="">
            <img id="PS_hover" src="{{asset('assets/img/pasadeÑa.png')}}" width="126px" height="=100px">
      </div>

        <div id="pedro_content" class="img_map">
            <a href="#" id="P_C" class="unahan jj" style="text-decoration: none;
                position: absolute;
                top: 37.5%;
                z-index: 2;
                left: 16%;">PEDRO CRUZ
            </a>
                <img id="PC" class="pedro_image_content" src="{{asset('assets/img/pedrocruz.png')}}" width="108px" height="=100px" style="">
                <img id="PC_hover" src="{{asset('assets/img/pedrocruz.png')}}" width="108px" height="=100px">
        </div>

        <div id="san_content" class="img_map">
            <a href="#" id="S_P" class="unahan jj" style="text-decoration: none;
                position: absolute;
                top: 44.6%;
                z-index: 2;
                left: 10%;">SAN PERFECTO
            </a>
                <img id="SP" class="san_image_content"  src="{{asset('assets/img/sanperfecto.png')}}" width="83px" height="=100px" style="">
                <img id="SP_hover" src="{{asset('assets/img/sanperfecto.png')}}" width="83px" height="=100px">
        </div>

      <div  id="pro_content" class="img_map">
          <a href="#" id="P_G" class="unahan jj" style="text-decoration: none;
              position: absolute;
              top: 44.5%;
              z-index: 2;
              left: 0%;">PROGRESO
          </a>
              <img id="PG" class="pro_image_content" src="{{asset('assets/img/progreso.png')}}" width="38px" height="=100px" style="">
              <img id="PG_hover" src="{{asset('assets/img/progreso.png')}}" width="38px" height="=100px">
        </div>
      <div id="riv_content" class="img_map">
          <a href="#" id="R_V" class="unahan jj" style="text-decoration: none;
              position: absolute;
              top: 37%;
              z-index: 2;
              left: 9%;">RIVERA
            </a>
              <img id="RV" class="riv_image_content"  src="{{asset('assets/img/rivera.png')}}" width="50px" height="=100px" style="">
              <img id="RV_hover" src="{{asset('assets/img/rivera.png')}}" width="50px" height="=100px">
      </div>

      <div id="bb_content" class="img_map">
          <a href="#" id="B_B"  onclick="myFunction()"class="unahan jj" style="text-decoration: none;
              position: absolute;
              top: 24.8%;
              z-index: 2;
              left: 14.5%;">BALONG-BATO
            </a>
              <img id="BB"  class="bb_image_content" src="{{asset('assets/img/balong-bato.png')}}" width="126px" height="=100px" style="">
              <img id="BB_hover" src="{{asset('assets/img/balong-bato.png')}}" width="126px" height="=100px">
      </div>

      <div id="sala_content" class="img_map">
          <a href="#" id="S_N" class="unahan jj" style="text-decoration: none;
              position: absolute;
              top: 14%;
              z-index: 2;
              left: 16.2%;">SALAPAN
          </a>
            <img id="SN"  class="sala_image_content" src="{{asset('assets/img/salapan.png')}}" width="112px" height="=100px" style="">
            <img id="SN_hover" src="{{asset('assets/img/salapan.png')}}"  width="112px" height="=100px">
      </div>

      <div id="ermi_content" class="img_map">
          <a href="#" id="E_T" class="unahan jj" style="text-decoration: none;
              position: absolute;
              top: 14.8%;
              z-index: 2;
              left: 29%;;">ERMITAÑO
          </a>
              <img id="ET" class="ermi_image_content" src="{{asset('assets/img/ermitaÑo.png')}}" width="78px" height="=100px" style="">
              <img id="ET_hover" src="{{asset('assets/img/ermitaÑo.png')}}" width="78px" height="=100px">
      </div>

      <div id="isa_content" class="img_map">
          <a href="#" id="I_B" class="unahan jj" style="text-decoration: none;
              position: absolute;
              top: 46.5%;
              z-index: 2;
              left: 31%;">ISABELITA
            </a>
              <img id="IB" class="isa_image_content" src="{{asset('assets/img/isab.png')}}" width="30px" height="=100px" style="">
              <img id="IB_hover" src="{{asset('assets/img/isab.png')}}" width="30px" height="=100px">
      </div>

      <div id="jose_content" class="img_map">
          <a href="#" id="J" class="unahan jj" style="text-decoration: none;
              position: absolute;
              top: 46.5%;
              z-index: 2;
              left: 37%;">ST. JOSEPH
          </a>
              <img id="jose" class="jose_image_content" src="{{asset('assets/img/st.joseph.png')}}" width="36px" height="=100px" style="">
              <img id="jose_hover" src="{{asset('assets/img/st.joseph.png')}}" width="36px" height="=100px">
      </div>
      <!-- content of the map

      <div id="post" class="col-6">
        <div id="sj" style="" class="map_description">
              <br><h1>VISION</h1>
            <div class="in">
                <img src="{{asset('assets/img/city-hall.png')}}" style="position: absolute; left: 37.5%; top: -22%; z-index: -1; width: 100px; height: 100px;">
                <p> A globally competitive communicability of dynamic, productive and empowered citizenry inspired by their rich historical and cultural heritage propelled by a sustainable and progressive economy in a healthy, peaceful, disaster-resilient  and Eco-friendly environment.</p>
             </div>
        </div>

              <div id="s_description" style="display: none;" class="map_description ">
                <br><h1>VISION</h1>
                <img src="{{asset('assets/img/city-hall.png')}}" style="position: absolute; left: 37.5%; top: -22%; z-index: -1; width: 100px; height: 100px;">
                   <div class="in">
                       <p> A globally competitive communicability of dynamic, productive and empowered citizenry inspired by their rich historical and cultural heritage propelled by a sustainable and progressive economy in a healthy, peaceful, disaster-resilient  and Eco-friendly environment.</p>
                   </div>
                      <div class="btnv">
                          <a href="#" id="BRGY">VISIT PAGE</a>
                      </div>
              </div>

            <div id="west_description" style="display: none;" class="map_description ">
              <img src="{{asset('assets/BRGY/WESTCRAME_updated.png')}}" style="position:absolute;  left: 43.5%;  top: -15%; width:80px; height: 80px; z-index: -1;">
               <br><h1>BRGY. WEST CRAME</h1>
               <div class="in">
                 <p>Barangay West Crame, isang Pamayanang na sa Kanluran o WEST ng Kampo Crame. Mula sa hilaga ay Boni Serrano Road ( Dating Santolan Road) First West Street sa Silangan, Road 8 sa Timog at 5th West Street sa Kanluran, kalapit ng San Juan Cemetery .Tahanan ng humigit kumulang 20,000 katao, ang dating bakubako, putikan, sagingan, kangkungan, palaya at masukal na lugar ay tinatawag na Baryo mapuntod ng San Juan –Rizal. Nagmula sa orihinl na Decree 240 bilang pagmamay-ari ng Compana Agricola de Ultramar, ito ay naisalin sa pag mamay-ari ng Ortigas, Madrigal and Company, na siyang nagtatag ng Greenhills Village, isang pamayanan ng mga nakakariwasa at karatig pook ng West Crame.</p>
              </div>
              <div class="btnv">
              <a href="#" id="BRGY">VISIT PAGE</a>
              </div>
          </div>

          <div id="ghills_description" style="display: none;" class="map_description">
               <br><h1>BRGY. GREENHILLS</h1>
                <img src="{{asset('assets/BRGY/GREENHILLS_updated.png')}}" style="position:absolute;  left: 43.5%;  top: -15%; width:85px; height: 80px; z-index: -1;">
               <div class="in">
                   <p>BRGY. GREENHILLS: A globally competitive communicability of dynamic, productive and empowered citizenry inspired by their rich historical and cultural heritage propelled by a sustainable and progressive economy in a healthy, peaceful, disaster-resilient  and Eco-friendly environment.</p>
              </div>
              <div class="btnv">
                 <a href="#" id="BRGY">VISIT PAGE</a>
              </div>
          </div>

          <div id="LilB_description" style="display: none;" class="map_description">
               <br><h1>BRGY. LITTLE BAGUIO</h1>
                 <img src="{{asset('assets/BRGY/little.png')}}" style="position:absolute;  left: 43.5%;  top: -15%; width:85px; height: 80px; z-index: -1;">
               <div class="in">
                   <p>In 1946, Ortigas Madrigal y Compania opened for sale the Sta. Lucia Subdivision. The area is about 40 hectares consisted mostly of rice paddies, bamboo groves and fruit trees. The road were of the macadam type. However, the original name Sta. Lucia Subdivision did not gain acceptance. When the people started populating the subdivision, they adopted the name Little Baguio, because of the road where similar to the zigzag road going to Baguio City. Likewise, the 240 feet above sea-level elevation and the greenery lent themselves to contributing to little Baguio being the little summer capital of San Juan.</p>

              </div>
              <div class="btnv">
                 <a href="#" id="BRGY">VISIT PAGE</a>
             </div>
          </div>

          <div id="santalucia_description" style="display: none;" class="map_description">
               <br><h1>BRGY. STA. LUCIA</h1>
                <img src="{{asset('assets/BRGY/LUCIA.png')}}" style="position:absolute;  left: 43.5%;  top: -15%; width:85px; height: 80px; z-index: -1;">
               <div class="in">
                   <p>In the past, Sta. Lucia was the center of the town of San Juan. This place could be easily reached that time for there where many good roads leading to it. The place was also the center of business. A church, a market, and a school were built there. This was first inhabited by people from Mandaluyong.</p>

              </div>
              <div class="btnv">
              <a href="#" id="BRGY">VISIT PAGE</a>
              </div>
          </div>


            <div id="onse_description" style="display: none;" class="map_description">
                 <br><h1>BRGY. ONSE</h1>
                   <img src="{{asset('assets/BRGY/ONSE_updated.png')}}" style="position:absolute;  left: 43.5%;  top: -15%; width:85px; height: 80px; z-index: -1;">
                 <div class="in">
                     <p>Barangay Onse was established in 1916. The name “ONSE” was derived from the concept that there were only eleven houses as far as they can remember. The people living in these houses were considered the first inhabitants of the place, and as one might have guessed it, Spanish term for eleven is “ONSE”. Now, the land area of Barangay Onse is 9.6684 hectares with a total population of 4,065 as of FY 2015 as per NSO record.</p>

                </div>
                <div class="btnv">
                <a href="#" id="BRGY">VISIT PAGE</a>
                </div>
            </div>

            <div id="add_description" style="display: none;" class="map_description">
                 <br><h1>BRGY. ADDITION HILLS</h1>
                 <img src="{{asset('assets/BRGY/ADDITIONHILLS.png')}}" style="position:absolute;  left: 43.5%;  top: -15%; width:85px; height: 80px; z-index: -1;">
                 <div class="in">
                     <p>Our barangay was an agricultural land that belonged to the municipality of San Felipe Neri. In the 1930’s it was converted to a residential subdivision by a group of American businessmen. The majority of the original lot buyers were their friends. And up to 70’s many American families still resided in our barangay.</p>
                </div>
                <div class="btnv">
                <a href="#" id="BRGY">VISIT PAGE</a>
                </div>
            </div>

            <div id="may_description" style="display: none;" class="map_description">
                 <br><h1>BRGY. MAYTUNAS</h1>
                 <img src="{{asset('assets/BRGY/MAYTUNAS_updated.png')}}" style="position:absolute;  left: 43.5%;  top:-15%; width:85px; height: 80px; z-index: -1;">
                 <div class="in">
                     <p>BRGY. MAYTUNAS  A globally competitive communicability of dynamic, productive and empowered citizenry inspired by their rich historical and cultural heritage propelled by a sustainable and progressive economy in a healthy, peaceful, disaster-resilient  and Eco-friendly environment.</p>
                </div>
                <div class="btnv">
                    <a href="#" id="BRGY">VISIT PAGE</a>
                </div>
            </div>

            <div id="kaba_description" style="display: none;" class="map_description">
                 <br><h1>BRGY. KABAYANAN</h1>
                  <img src="{{asset('assets/BRGY/KABAYANAN_updated.png')}}" style="position:absolute;  left: 43.5%;  top: -15%; width:85px; height: 80px; z-index: -1;">
                 <div class="in">
                     <p>BRGY. KABAYANAN A globally competitive communicability of dynamic, productive and empowered citizenry inspired by their rich historical and cultural heritage propelled by a sustainable and progressive economy in a healthy, peaceful, disaster-resilient  and Eco-friendly environment.</p>
                </div>
                <div class="btnv">
                <a href="#" id="BRGY">VISIT PAGE</a>
               </div>
            </div>

            <div id="TIBS_description" style="display: none;" class="map_description">
                 <br><h1>BRGY. TIBAGAN</h1>
                   <img src="{{asset('assets/BRGY/TIBAGAN.png')}}" style="position:absolute;  left: 43.5%;  top: -15%; width:85px; height: 80px; z-index: -1;">
                 <div class="in">
                     <p>Barangay Tibagan is a small community bounded by A. Bonifacio st. , and J Arellano St., where Mini Park is located. The other streets comprising this Barangay are F. Roxas, T. Kalaw, Villamor, Jose Gil formerly Valenzuela St., Regidor, Dr. A J. Ejercito St., and reaching upward the next barangay are J.V Alvior formerly Florante St. and Laura Streets.</p>
                </div>
                <div class="btnv">
                  <a href="#" id="BRGY">VISIT PAGE</a>
                </div>
            </div>

            <div id="BATS_description" style="display: none;" class="map_description">
                 <br><h1>BRGY. BATIS</h1>
                  <img src="{{asset('assets/BRGY/BATIS_updated.png')}}" style="position:absolute;  left: 43.5%;  top: -15%; width:85px; height: 80px; z-index: -1;">
                 <div class="in">
                     <p>Current Barangay residents are not aware of the any spring of clear water that can account for name of BATIS. According the old residents, the area had creeks and rivulets during their time, wherein clean water flowed. Actually bordering San Juan River as it does, it is not at all unlikely that the area had rivulets and creeks feeding in the water way. People neigh boring Barangay especially on high land are coming here because of the clear water. </p>
                </div>
                <div class="btnv">
                  <a href="#" id="BRGY">VISIT PAGE</a>
                </div>
            </div>

            <div id="CORS_description" style="display: none;" class="map_description">
                 <br><h1>BRGY. CORAZON DE JESUS</h1>
                   <img src="{{asset('assets/BRGY/CORAZON.png')}}" style="position:absolute;  left: 43.5%;  top: -15%; width:85px; height: 80px; z-index: -1;">
                 <div class="in">
                     <p>Barangay Corazon de Jesus was established in the early 1940’s. The former name of Corazon de Jesus was “EL DEPOSITO” because of a myth that there is a hidden treasure inside the tunnel. Behind the San Juan Post Office in Pinaglabanan St., is an opening that leads to a long tunnel going to different parts of Metro Manila.</p>
                </div>
                  <div class="btnv">
                    <a href="#" id="BRGY">VISIT PAGE</a>
                 </div>

            </div>

            <div id="PAS_description" style="display: none;" class="map_description">
                 <br><h1>BRGY. PASADEÑA</h1>
                  <img src="{{asset('assets/BRGY/PASADENA_updated.png')}}" style="position:absolute;  left: 43.5%;  top:-15%; width:85px; height: 80px; z-index: -1;">
                 <div class="in">
                     <p>The word PASADENA came from the name of the flower Cadena de Amor. During the earlier times it has been said that the streets of Brgy. Pasadena were filled with cadena de amor, a certain Spanish person created the name for Pasadena which means “way of the cadena de amor” PASA is a Spanish word which means “daan” in Filipino language. PASA = Daan & DENA = short for the flower cadena de amor.The word PASADENA came from the name of the flower Cadena de Amor.</p>
                </div>
                <div class="btnv">
                  <a href="#" id="BRGY">VISIT PAGE</a>
                </div>
            </div>


            <div id="PED_description" style="display: none;" class="map_description">
                 <br><h1>BRGY. PEDRO CRUZ</h1>
                 <img src="{{asset('assets/BRGY/CRUZ_updated.png')}}" style="position:absolute;  left: 43.5%;  top: -15%; width:85px; height: 80px; z-index: -1;">
                 <div class="in">
                     <p>BRGY. PEDRO CRUZ A globally competitive communicability of dynamic, productive and empowered citizenry inspired by their rich historical and cultural heritage propelled by a sustainable and progressive economy in a healthy, peaceful, disaster-resilient  and Eco-friendly environment.</p>
                </div>
                <div class="btnv">
                <a href="#" id="BRGY">VISIT PAGE</a>
               </div>
            </div>

            <div id="SAN_description" style="display: none;" class="map_description">
                 <br><h1>BRGY. SAN PERFECTO</h1>
                  <img src="{{asset('assets/BRGY/PERFECTO_updated.png')}}" style="position:absolute;  left: 43.5%;  top: -15%; width:85px; height: 80px; z-index: -1;">
                 <div class="in">
                     <p>Barangay San Perfecto is strategically located in the center f Metro Manila. An almost perfect triangle in shape, it is bounded in the northwest by N. Domingo Street, in the northwest by F. Blumentritt Street, and in the south by Tuberias Street, also known as “ Tubo”, the pipeline of the Metropolitan Waterworks and Sewerage Authority.</p>
                </div>
                <div class="btnv">
                  <a href="#" id="BRGY">VISIT PAGE</a>
                </div>
            </div>
            <div id="PROG_description" style="display: none;" class="map_description">
                 <br><h1>BRGY. PROGRESO</h1>
                 <img src="{{asset('assets/BRGY/PROGRESONEW.png')}}" style="position:absolute;  left: 43.5%;  top: -15%; width:85px; height: 80px; z-index: -1;">
                 <div class="in">
                     <p>During the Spanish regime, this place was then called a “ balangay “ or “ barangay “ which was the headed by
                        “cabeza de barangay “. However, when the Americans came I, this place was then change from “ Barangay” to “ barrio” and is headed by a “ Tenyente del Baryo “. During the Pre-Spanish times, Progreso and Rivera as one small village found in San Juan which became a small encomienda in 1950.</p>
                </div>
                <div class="btnv">
                  <a href="#" id="BRGY">VISIT PAGE</a>
                </div>
            </div>

            <div id="RIV_description" style="display: none;" class="map_description">
                 <br><h1>BRGY. RIVERA</h1>
                 <img src="{{asset('assets/BRGY/RIVERA.png')}}" style="position:absolute;  left: 43.5%;  top: -15%; width:95px; height: 80px; z-index: -1;">
                 <div class="in">
                     <p>BRGY. RIVERA A globally competitive communicability of dynamic, productive and empowered citizenry inspired by their rich historical and cultural heritage propelled by a sustainable and progressive economy in a healthy, peaceful, disaster-resilient  and Eco-friendly environment.</p>
                </div>
                <div class="btnv">
                  <a href="#" id="BRGY">VISIT PAGE</a>
                </div>
            </div>


            <div id="BB_description" style="display: none;" class="map_description">
                 <br><h1>BRGY. BALONG-BATO</h1>
                 <img src="{{asset('assets/BRGY/BALONGBATO_updated.png')}}" style="position:absolute;  left: 43.5%;  top: -15%; width:80px; height: 80px; z-index: -1;">
                 <div class="in">
                     <p>Barangay Balong-Bato is strategically located at the center of Metro Manila. Bounded in the north of N. Domingo Street in the South of Aurora Blvd. Being situated in the center of Metro Manila, Barangay Balong –Bato streets are being utilized by motorists as alternative routes going to and from Quezon City, Mandaluyong City, Makati City and City of Manila. Barangay Balong-Bato has always been mabato. Old times residents recall, the area used to have many trees- bananas, mostly, below feet of soil adobe and more adobe. In some spots, there were natural wells, hence the name Balon na Bato. </p>
                </div>
                <div class="btnv">
                <a href="#" id="BRGY">VISIT PAGE</a>
                </div>
            </div>

          <div id="sala_description" style="display: none;" class="map_description">
               <br><h1>BRGY. SALAPAN</h1>
               <img src="{{asset('assets/BRGY/SALAPAN.png')}}" style="position:absolute;  left: 43.5%;  top: -15%; width:80px; height: 80px; z-index: -1;">
               <div class="in">
                   <p>Barangay Salapan was named after the word “Salapang”, a bamboo stick with pointed end in the bottom and tied like a cone. Use by early settlers to catch fish in the creek of Salapan with 16 inches in diameter at the bottom and 7 inches on top of enable the hand and arm of the fisherman to enter inside the salapang to get caught fish. </p>
              </div>
              <div class="btnv">
                <a href="#" id="BRGY">VISIT PAGE</a>
              </div>
          </div>

          <div id="ERMI_description" style="display: none;" class="map_description">
               <br><h1>BRGY. ERMITAÑO</h1>
               <img src="{{asset('assets/BRGY/ERMITAÑO_updated.png')}}" style="position:absolute;  left: 43.5%;  top: -15%; width:80px; height: 80px; z-index: -1;">
               <div class="in">
                   <p>Barangay Ermitaño is located in the north-eastern part of San Juan City. It is surrounded by Ermitaño creek in the east and south-east. It is bounded by Salapan on the north, Balong-bato on the north-west, Pasadeña and Corazon de Jesus on the east.</p>
              </div>
              <div class="btnv">
                <a href="#" id="BRGY">VISIT PAGE</a>
              </div>
          </div>


          <div id="pasa_description" style="display: none;" class="map_description">
               <br><h1>BRGY. ERMITAÑO</h1>
               <img src="{{asset('assets/BRGY/PASADENA_updated.png')}}" style="position:absolute;  left: 43.5%;  top: -15%; width:80px; height: 80px; z-index: -1;">
               <div class="in">
                   <p>Barangay Ermitaño is located in the north-eastern part of San Juan City. It is surrounded by Ermitaño creek in the east and south-east. It is bounded by Salapan on the north, Balong-bato on the north-west, Pasadeña and Corazon de Jesus on the east.</p>
              </div>
              <div class="btnv">
                <a href="#" id="BRGY">VISIT PAGE</a>
              </div>
          </div>

          <div id="ISA_description" style="display: none;" class="map_description">
               <br><h1>BRGY. ISABELITA</h1>
               <img src="{{asset('assets/BRGY/BARANGAYISABELITA_updated.png')}}" style="position:absolute;  left: 43.5%;  top: -15%; width:80px; height: 80px; z-index: -1;">
               <div class="in">
                   <p>It used to be known as Isablita Heights Subdivision, 3.4 hectares lot area owned and developed by the Barredo family. The subdivision has all quick and easy access to San Juan’s public market, church and public schools.</p>
              </div>
              <div class="btnv">
                <a href="#" id="BRGY">VISIT PAGE</a>
              </div>
          </div>

            <div id="joseph_description" style="display: none;" class="map_description">
                 <br><h1>BRGY. ST. JOSEPH</h1>
                 <img src="{{asset('assets/BRGY/STJOSEPH.png')}}" style="position:absolute;  left: 43.5%;  top: -15%; width:80px; height: 80px; z-index: -1;">
                 <div class="in">
                     <p></p>
                </div>
                <div class="btnv">
                  <a href="#" id="BRGY">VISIT PAGE</a>
                </div>
            </div>

      </div>





    </div>
  </div>
</div>






<script>
      $(document).ready(function(){

          $("#s_j").click(function(){
          $(".map_description").css("display","none")
          $("#s_description").css("display","unset")
          $(".img_map img").css("z-index","0")
          $("#s_content img").css("z-index","1")
          $(".unahan").removeClass("color-black");
          $(this).addClass("color-black");

      });
      $("#s_j").hover(function(){
          $(".s_image_content").css("z-index","3")
          $("#s_j").mouseout(function(){
               $(".s_image_content").css("z-index","0")
          });

      });

      // $("#cityhall").click(function(){
      //     $(".map_description").css("display","none")
      //     $("#city_description").css("display","unset")
      //     $(".img_map img").css("z-index","0")
      //     $("#city_content img").css("z-index","1")
      //     $(".unahan").removeClass("color-black");
      //     $(this).addClass("color-black");
      //
      // });
      // $("#cityhall").hover(function(){
      //     $(".city_image_content").css("z-index","1")
      //     $("#cityhall").mouseout(function(){
      //          $(".city_image_content").css("z-index","0")
      //     });
      //
      // });

      $("#west_crame").click(function(){
          $(".map_description").css("display","none")
          $("#west_description").css("display","unset")
          $(".img_map img").css("z-index","0")
          $("#wc_content img").css("z-index","1")
          $(".unahan").removeClass("color-black");
          $(this).addClass("color-black");
          $("#s_content img").css("z-index","1")

      });
      $("#west_crame").hover(function(){
          $(".wc_image_content").css("z-index","1")
          $("#west_crame").mouseout(function(){
               $(".wc_image_content").css("z-index","0")
          });

      });


      $("#green_hills").click(function(){
        $(".map_description").css("display","none")
        $("#ghills_description").css("display","unset")
          $(".img_map img").css("z-index","0")
          $("#gh_content img").css("z-index","1")
          $(".unahan").removeClass("color-black");
          $(this).addClass("color-black");
          $("#s_content img").css("z-index","1")
      });
      $("#green_hills").hover(function(){
          $(".gh_image_content").css("z-index","1")
          $("#green_hills").mouseout(function(){
                 $(".gh_image_content").css("z-index","0")
            });
          });
          $("#santa_lucia").click(function(){
                $(".map_description").css("display","none")
                $("#santalucia_description").css("display","unset")
                $(".img_map img").css("z-index","0")
                $("#sl_content img").css("z-index","1")
                $(".unahan").removeClass("color-black");
                $(this).addClass("color-black");
                $("#s_content img").css("z-index","1")
            });
          $("#santa_lucia").hover(function(){
              $(".sl_image_content").css("z-index","1")
              $("#santa_lucia").mouseout(function(){
                   $(".sl_image_content").css("z-index","0")
              });

            });


        $("#little_baguio").click(function(){

              $(".map_description").css("display","none")
              $("#LilB_description").css("display","unset")
              $(".img_map img").css("z-index","0")
              $("#LB_content img").css("z-index","1")
              $(".unahan").removeClass("color-black");
              $(this).addClass("color-black");
              $("#s_content img").css("z-index","1")
          });
        $("#little_baguio").hover(function(){
            $(".lb_image_content").css("z-index","1")
            $("#little_baguio").mouseout(function(){
                 $(".lb_image_content").css("z-index","0")
            });

          });


        $("#a_h").click(function(){
              $(".map_description").css("display","none")
              $("#add_description").css("display","unset")
              $(".img_map img").css("z-index","0")
              $("#ah_content img").css("z-index","1")
              $(".unahan").removeClass("color-black");
              $(this).addClass("color-black");
              $("#s_content img").css("z-index","1")
            });
        $("#a_h").hover(function(){
            $(".ah_image_content").css("z-index","1")
            $("#a_h").mouseout(function(){
                  $(".ah_image_content").css("z-index","0")
            });

          });


          $("#M_Y").click(function(){
                $(".map_description").css("display","none")
                $("#may_description").css("display","unset")
                $(".img_map img").css("z-index","0")
                $("#may_content img").css("z-index","1")
                $(".unahan").removeClass("color-black");
                $(this).addClass("color-black");
                $("#s_content img").css("z-index","1")
              });
          $("#M_Y").hover(function(){
              $(".may_image_content").css("z-index","1")
              $("#M_Y").mouseout(function(){
                    $(".may_image_content").css("z-index","0")
              });

            });


            $("#O_N").click(function(){
              $(".map_description").css("display","none")
              $("#onse_description").css("display","unset")
                  $(".img_map img").css("z-index","0")
                  $("#onse_content img").css("z-index","1")
                  $(".unahan").removeClass("color-black");
                  $(this).addClass("color-black");
                  $("#s_content img").css("z-index","1")
                });
            $("#O_N").hover(function(){
                $(".onse_image_content").css("z-index","1")
                $("#O_N").mouseout(function(){
                      $(".onse_image_content").css("z-index","0")
                });

              });


              $("#K_B").click(function(){
                    $(".map_description").css("display","none")
                    $("#kaba_description").css("display","unset")
                    $(".img_map img").css("z-index","0")
                    $("#kaba_content img").css("z-index","1")
                    $(".unahan").removeClass("color-black");
                    $(this).addClass("color-black");
                    $("#s_content img").css("z-index","1")
                  });
              $("#K_B").hover(function(){
                  $(".kaba_image_content").css("z-index","1")
                  $("#K_B").mouseout(function(){
                        $(".kaba_image_content").css("z-index","0")
                  });

                });



                $("#T_B").click(function(){
                      $(".map_description").css("display","none")
                      $("#TIBS_description").css("display","unset")
                      $(".img_map img").css("z-index","0")
                      $("#tiba_content img").css("z-index","1")
                      $(".unahan").removeClass("color-black");
                      $(this).addClass("color-black");
                      $("#s_content img").css("z-index","1")
                    });
                $("#T_B").hover(function(){
                    $(".tiba_image_content").css("z-index","1")
                    $("#T_B").mouseout(function(){
                          $(".tiba_image_content").css("z-index","0")
                    });

                  });




                  $("#B_T").click(function(){
                        $(".map_description").css("display","none")
                        $("#BATS_description").css("display","unset")
                        $(".img_map img").css("z-index","0")
                        $("#bat_content img").css("z-index","1")
                        $(".unahan").removeClass("color-black");
                        $(this).addClass("color-black");
                        $("#s_content img").css("z-index","1")
                      });
                  $("#B_T").hover(function(){
                      $(".bat_image_content").css("z-index","1")
                      $("#B_T").mouseout(function(){
                            $(".bat_image_content").css("z-index","0")
                      });

                    });

                  $("#C_D").click(function(){
                        $(".map_description").css("display","none")
                        $("#CORS_description").css("display","unset")
                        $(".img_map img").css("z-index","0")
                        $("#cora_content img").css("z-index","1")
                        $(".unahan").removeClass("color-black");
                        $(this).addClass("color-black");
                        $("#s_content img").css("z-index","5")
                      });
                  $("#C_D").hover(function(){
                      $(".cora_image_content").css("z-index","1")
                      $("#C_D").mouseout(function(){
                              $(".cora_image_content").css("z-index","0")
                      });

                    });


                    $("#P_S").click(function(){
                          $(".map_description").css("display","none")
                          $("#PAS_description").css("display","unset")
                          $(".img_map img").css("z-index","0")
                          $("#pasa_content img").css("z-index","1")
                          $(".unahan").removeClass("color-black");
                          $(this).addClass("color-black");
                          $("#s_content img").css("z-index","1")
                        });
                    $("#P_S").hover(function(){
                        $(".pasa_image_content").css("z-index","1")
                        $("#P_S").mouseout(function(){
                                $(".pasa_image_content").css("z-index","0")
                        });

                      });



                $("#P_C").click(function(){
                          $(".map_description").css("display","none")
                          $("#PED_description").css("display","unset")
                          $(".img_map img").css("z-index","0")
                          $("#pedro_content img").css("z-index","1")
                          $(".unahan").removeClass("color-black");
                          $(this).addClass("color-black");
                          $("#s_content img").css("z-index","1")
                        });
                $("#P_C").hover(function(){
                        $(".pedro_image_content").css("z-index","1")
                        $("#P_C").mouseout(function(){
                                $(".pedro_image_content").css("z-index","0")
                        });

                      });

                      $("#S_P").click(function(){
                            $(".map_description").css("display","none")
                            $("#SAN_description").css("display","unset")
                            $(".img_map img").css("z-index","0")
                            $("#san_content img").css("z-index","1")
                            $(".unahan").removeClass("color-black");
                            $(this).addClass("color-black");
                            $("#s_content img").css("z-index","1")
                                });
                        $("#S_P").hover(function(){
                              $(".san_image_content").css("z-index","1")
                              $("#S_P").mouseout(function(){
                                  $(".san_image_content").css("z-index","0")
                                  });

                            });


              $("#P_G").click(function(){
                    $(".map_description").css("display","none")
                    $("#PROG_description").css("display","unset")
                    $(".img_map img").css("z-index","0")
                    $("#pro_content img").css("z-index","1")
                    $(".unahan").removeClass("color-black");
                    $(this).addClass("color-black");
                    $("#s_content img").css("z-index","1")
                    });
              $("#P_G").hover(function(){
                    $(".pro_image_content").css("z-index","1")
                    $("#P_G").mouseout(function(){
                    $(".pro_image_content").css("z-index","0")
                  });

              });



              $("#R_V").click(function(){
                    $(".map_description").css("display","none")
                    $("#RIV_description").css("display","unset")
                    $(".img_map img").css("z-index","0")
                    $("#riv_content img").css("z-index","1")
                    $(".unahan").removeClass("color-black");
                    $(this).addClass("color-black");
                    $("#s_content img").css("z-index","1")
                    });
              $("#R_V").hover(function(){
                    $(".riv_image_content").css("z-index","1")
                    $("#R_V").mouseout(function(){
                    $(".riv_image_content").css("z-index","0")
                  });

              });

              $("#B_B").click(function(){
                    $(".map_description").css("display","none")
                    $("#BB_description").css("display","unset")
                    $(".img_map img").css("z-index","0")
                    $("#bb_content img").css("z-index","1")
                    $(".unahan").removeClass("color-black");
                    $(this).addClass("color-black");
                    $("#s_content img").css("z-index","1")
                    });
              $("#B_B").hover(function(){
                    $(".bb_image_content").css("z-index","1")
                    $("#B_B").mouseout(function(){
                    $(".bb_image_content").css("z-index","0")
                  });

              });


              $("#S_N").click(function(){
                    $(".map_description").css("display","none")
                    $("#sala_description").css("display","unset")
                    $(".img_map img").css("z-index","0")
                    $("#sala_content img").css("z-index","1")
                    $(".unahan").removeClass("color-black");
                    $(this).addClass("color-black");
                    $("#s_content img").css("z-index","1")
                    });
              $("#S_N").hover(function(){
                    $(".sala_image_content").css("z-index","1")
                    $("#S_N").mouseout(function(){
                    $(".sala_image_content").css("z-index","0")
                  });

              });


              $("#E_T").click(function(){
                    $(".map_description").css("display","none")
                    $("#ERMI_description").css("display","unset")
                    $(".img_map img").css("z-index","0")
                    $("#ermi_content img").css("z-index","1")
                    $(".unahan").removeClass("color-black");
                    $(this).addClass("color-black");
                    $("#s_content img").css("z-index","1")
                    });
              $("#E_T").hover(function(){
                    $(".ermi_image_content").css("z-index","1")
                    $("#E_T").mouseout(function(){
                    $(".ermi_image_content").css("z-index","0")
                  });

              });

              $("#I_B").click(function(){
                    $(".map_description").css("display","none")
                    $("#ISA_description").css("display","unset")
                    $(".img_map img").css("z-index","0")
                    $("#isa_content img").css("z-index","1")
                    $(".unahan").removeClass("color-black");
                    $(this).addClass("color-black");
                    $("#s_content img").css("z-index","1")
                    });
              $("#I_B").hover(function(){
                    $(".isa_image_content").css("z-index","1")
                    $("#I_B").mouseout(function(){
                    $(".isa_image_content").css("z-index","0")
                  });

              });

              $("#J").click(function(){
                    $(".map_description").css("display","none")
                    $("#joseph_description").css("display","unset")
                    $(".img_map img").css("z-index","0")
                    $("#jose_content img").css("z-index","1")
                    $(".unahan").removeClass("color-black");
                    $(this).addClass("color-black");
                    $("#s_content img").css("z-index","1")
                    });
              $("#J").hover(function(){
                    $(".jose_image_content").css("z-index","1")
                    $("#J").mouseout(function(){
                    $(".jose_image_content").css("z-index","0")
                  });

              });


    });


</script>
    </div>
</div> -->
