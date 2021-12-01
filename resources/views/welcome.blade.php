@extends('layouts.nav-bar')

@section('content')
<style>
  #overlay {
    position: fixed;
    display: none;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0,0,0,0.8);
    z-index: 2;
    cursor: pointer;
  }

  #text{
    position: absolute;
    top: 57%;
    left: 50%;
    font-size: 50px;
    color: white;
    transform: translate(-50%,-50%);
    -ms-transform: translate(-50%,-50%);
  }

  .thmb:hover{
    box-shadow: 10px 10px 10px rgb(0 0 0 / 50%) !important;
    -ms-transform: scale(1.1); /* IE 9 /
    -webkit-transform: scale(1.1); / Safari 3-8 */
    transform: scale(1.1);
  }
    @media screen and (max-width: 766px) and (min-width: 200px){
    div#overlay {
      max-width: 100% !important;
      width: 100% !important;
      flex: 0 0 100%;
    }
    div#text {
      max-width: 100% !important;
      width: 100% !important;
      flex: 0 0 100%;
    }
  }
  @media screen and (min-device-width: 1601px) and (max-device-width: 1920px) {
        .karosel #img_slot1 img{

          width: 80% !important;

        }
         .karosel img{

          width: 70% !important;

        }
      }
      @media screen and (min-device-width: 1551px) and (max-device-width: 1600px){


        .karosel #img_slot1 img{

          width: 80% !important;

        }
      }
  </style>
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

    {{-- @include('layouts.index.map-2') --}}
    <div id="overlay">
      <div id="text" class="">
          <div class="card shadow-none" style="border-style: solid; border-width: 3px;">
            <div class="card-body text-center" style="padding:15px; padding-bottom:40px;">
              <div class="row">
                <div class="col-12">
                  <button type="button" class="btn btn-default close_pause" id="off" style="background-color:red; float:right; font-weight:900; font-size:20px; margin-top: 0;">X</button>
                </div>
              </div>
              <div class="row">
                <div class="col-12 d-flex justify-content-center">
                  <a target="_blank" href="{{action('Pages@magazine_view', $thumbnail->id)}}"><img class="w-50 thmb" src="{{asset("uploads/" . $thumbnail->magz_filename)}}" style=" box-shadow: 0 2px 8px rgba(0, 0, 0, 40%);"></a>
                </div>
              </div>
              </div>
            </div>
          </div>
      </div>

      <br>
      <div class="container karosel" id="mayorqr" style="box-shadow: 0px 3px 3px #cccccc; padding: 0; padding: 2% 0;">
        <div class="row justify-content-md-center" style="position:relative;">

              <div class="col-sm-10" style="margin-bottom: 0%;">
                 {{-- <div class="card" id="qr" style="width: 100%; border: 0px solid;">
                     <br>
                     <img class="card-img-top" style="width:50%; height:70%; position: relative; margin:0 auto;" src="{{asset('assets/v.png')}}" alt="Card image cap">
                     <div class="card-body">
                     </div>
                 </div> --}}
                 <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="15000">
                     <!-- Carousel indicators -->

                     <ol class="carousel-indicators">
                       <?php
                       $counter = 0;
                       foreach ($events as $item) {
                             $counter++;
                             // echo $counter;
                             //  echo $counter-1;
                              echo '<li data-target="#myCarousel" data-slide-to="$counter-1"></li>';
                         }
                     ?>
                     </ol>
                     <!-- Wrapper for carousel items -->

                       <div class="carousel-inner">
                       {{-- @foreach($events as $row)
                         @if($row['show'] == 1) --}}
                           <div class="carousel-item active">
                             <div class="container imahesj">
                               <div class="row">
                                 <div class=" col-sm-12">
                                   <div id="img_slot1">
                                     <a  href="#"  >
                                      <img src="{{asset('assets/SANJUAN.jpg')}}"  id="image_slide" class="city_hall_front_pc" style=" width: 100%; ">
                                      <img src="{{asset('assets/SANJUAN.jpg')}}"  id="image_slide" class="city_hall_front_mob" style=" margin-top: 7% !important;padding: 0  !important; width: 120% !important; margin-left: -10%  !important;">

                                     </a>
                                   </div>
                                 </div>
                               </div>
                             </div>
                           </div>
                           <div class="carousel-item">
                             <div class="container">
                               <div class="row">
                                 <div class=" col-sm-12">
                                   <div id="img_slot1">
                                     <video width="1250" id="first_vid" controls>
                                       <source src="{{asset('assets/vid1.mp4')}}" type="video/mp4">
                                       Your browser does not support HTML video.
                                     </video>
                                   </div>
                                 </div>
                               </div>
                             </div>
                           </div>
                           <div class="carousel-item">
                             <div class="container">
                               <div class="row">
                                 <div class=" col-sm-12">
                                   <div id="img_slot1">
                                     <video width="1250" id="second_vid" controls>
                                       <source src="{{asset('assets/vid2.mp4')}}" type="video/mp4">
                                       Your browser does not support HTML video.
                                     </video>
                                   </div>
                                 </div>
                               </div>
                             </div>
                           </div>
                         {{-- @endif
                       @endforeach --}}
                       @foreach($events as $row)
                         @if($row['show'] != 1)
                           <div class="carousel-item">
                             <div class="container">
                               <div class="row">
                                 <div class=" col-sm-12">
                                   <div id="img_slot">
                                     <a  href="{{action( 'Pages@news_contents', $row['id'] )}}"  >
                                       <img src="{{asset("uploads/" . $row['filename']) }}" style="height: auto;width:50%!important;"  id="image_slide">
                                     </a>
                                   </div>
                                 </div>
                               </div>
                             </div>
                           </div>
                         @endif
                       @endforeach
                     </div>
                     <!-- Carousel controls -->
                     <a class="carousel-control-prev" href="#myCarousel" data-slide="prev" style="left: -50px;">
                         <span><img src={{asset('assets/right-arrow.svg')}} style="width: 25%;rotation: 180deg;transform: rotate(180deg);"/> </span>
                     </a>
                     <a class="carousel-control-next" href="#myCarousel" data-slide="next" style="right:-30px;">
                       <span><img src={{asset('assets/right-arrow.svg')}} style="width: 25%;"/> </span>

                     </a>


                 </div>
             </div>

             <!-- <div class="col-sm-4" style="margin-bottom: 0%;">
               <a href="{{route('XmasBazaar')}}"><img src="{{asset('assets/MakabagongBazaar2021.gif')}}" style="width: 65%;margin: 0 auto;display: block;"/></a>
             </div> -->

             <br>
             <br>


        </div>
     </div>



    {{-- @include('layouts.index.directory') --}}


<div class="class">
  <div class="row">

    <div class="container my-4">
      <!--Carousel Wrapper-->
      <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

        <!--Controls-->
        <h2 class="card-title blue" style="color:#fff !important; padding: 0 !important; text-align: center; color: #1f1c4b;font-weight: 700;">ANNOUNCEMENTS</h2>
        <div class="controls-top" style="padding: 0 5%;">

          <a class="btn btn-outline-primary" href="#multi-item-example" data-slide="prev" style="color : #000; font-size: 20px;">Previous</i></a>
          <a class="btn btn-outline-primary" href="#multi-item-example" data-slide="next" style="float: right;color : #000;font-size: 20px;">Next</a>
        </div>

        <!--/.Controls-->

        <!--Indicators-->
        <!--/.Indicators-->

        <!--Slides-->
        <div class="carousel-inner" role="listbox">

          <!--First slide-->

          <div class="carousel-item active">

            <div class="row">
              <?php $i=0; ?>
              @foreach($announcement as $row22)
                <?php $i++;
                ?>
                @if($row22['status'] == 1)
                  @if ($i == 1)
                  <div class="col-md-3">
                    <div class="card mb-2">
                      <div class="card_img" style="padding:3%;">
                          <img class="card-img-top"  src="{{asset("uploads/" . $row22['filename']) }}" alt="Card image cap"  />
                      </div>

                      <div class="card-body">
                        {{-- <span class="card-title" style="margin: 0; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical;"><a href="{{action( 'Pages@news_contents', $row22->id )}}" target="_blank" ><?php echo $row22['title'] ?> </a></span> --}}

                        <a class="btn btn-primary" href="{{action( 'Pages@news_contents', $row22->id )}}" target="_blank" >View More</a>
                      </div>
                </div>
                  @else
                  <div class="col-md-3 clearfix d-none d-md-block">
                    <div class="card mb-2">
                          <div class="card_img" style="padding:3%;">
                              <img class="card-img-top"  src="{{asset("uploads/" . $row22['filename']) }}" alt="Card image cap"  />
                          </div>

                          <div class="card-body">
                            {{-- <span class="card-title" style="margin: 0; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical;"><a href="{{action( 'Pages@news_contents', $row22->id )}}" target="_blank" ><?php echo $row22['title'] ?> </a></span> --}}

                            <a class="btn btn-primary" href="{{action( 'Pages@news_contents', $row22->id )}}" target="_blank" >View More</a>
                          </div>
                    </div>
                  @endif
                  </div>
                @if ($i == 4)
                    @break
                @endif
                @endif
              @endforeach
            </div>

          </div>
          <!--/.First slide-->

          <!--Second slide-->
          <div class="carousel-item">
            <div class="row">
              <?php $i=0; ?>
              @foreach($announcement3 as $row33)
                <?php $i++;
                ?>
                @if($row33['status'] == 1)
                  @if ($i == 1)
                  <div class="col-md-3">
                    <div class="card mb-2">
                      <div class="card_img" style="padding:3%;">
                          <img class="card-img-top"  src="{{asset("uploads/" . $row33['filename']) }}" alt="Card image cap"  />
                      </div>

                      <div class="card-body">
                        <span class="card-title" style="margin: 0; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical;"><a href="{{action( 'Pages@news_contents', $row33->id )}}" target="_blank" ><?php echo $row33['title'] ?> </a></span>
                        {{-- <p class="card-text">

                        </p>// --}}
                        <a class="btn btn-primary">View More</a>
                      </div>
                </div>
                  @else
                  <div class="col-md-3 clearfix d-none d-md-block">
                    <div class="card mb-2">
                          <div class="card_img" style="padding:3%;">
                              <img class="card-img-top"  src="{{asset("uploads/" . $row33['filename']) }}" alt="Card image cap"  />
                          </div>

                          <div class="card-body">
                            <span class="card-title" style="margin: 0; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical;"><a href="{{action( 'Pages@news_contents', $row33->id )}}" target="_blank" ><?php echo $row33['title'] ?> </a></span>
                            {{-- <p class="card-text">

                            </p> --}}
                            <a class="btn btn-primary" href="{{action( 'Pages@news_contents', $row33->id )}}" target="_blank" >View More</a>
                          </div>
                    </div>
                  @endif
                  </div>
                @if ($i == 4)
                    @break
                @endif
                @endif
              @endforeach
            </div>

          </div>
          <!--/.Second slide-->



        </div>
        <!--/.Slides-->

      </div>
      <!--/.Carousel Wrapper-->
    </div>

  </div>
</div>
@include('layouts.index.mayors')
    {{-- @include('layouts.index.news') --}}
  <div class="container" id="news_sec">
      <br>
      <br>
      <div class="row" id="news">
          <div class=" col-sm-10">
              <div class="card" id="news_card">
                  <div class="card-body" style="padding: 0;overflow-y: auto;border: 3px solid #003471;">
                      <h2 class="card-title blue" style="color:#fff !important; padding: 0 !important;">NEWS & ARTICLES</h2>
                        <?php $i=0; ?>
                            @foreach($articles as $row)
                              <?php $i++; ?>
                              <div class="card" style="margin: 2%;">
                                  <div class="card-body" id="bulletin_bod">
                                      <div class="col-4 col-sm-4" style="float: left; display: inline-block;">
                                          <a  href="{{action( 'Pages@news_contents', $row->id )}}" target="_blank" >
                                              <img src="{{asset("uploads/" . $row->filename) }}"  style="width: 100%;" />
                                          </a>
                                      </div>
                                      <div class="col-8 col-sm-8" style="display: inline-block; padding:5px;">
                                              <a id="bulletin_desc" href="#" style="height:auto !important;font-size: 25px;"><?php echo $row->title ?> </a>
                                              <span id="article_contents" style="font-size: 15px;">
                                                <?php echo $row['desc'] ?>
                                              </span>
                                              <br>
                                              <a id="bulletin_readmore" href="{{action( 'Pages@news_contents', $row->id )}}" target="_blank"  >readmore</a>
                                      </div>
                                  </div>
                              </div>
                              @if ($i == 5)
                                  @break
                              @endif
                          @endforeach
                          <div id="_viewmore" style="position: relative;margin-bottom: 5%;">
                            <a  href="{{action( 'Pages@news_list')}}">view more articles</a>
                        </div>
                  </div>

              </div>
          </div>
           <div class=" col-sm-4" id="eser1">
              <div class="card" style="height: 100%;" id="eser">
                      <div class="card-body" id="bulletin_sec" style="padding:0 !important;border: 3px solid #003471;">
                        <h2 class="card-title blue" style="color:#fff !important; padding: 0 !important;">e-SERVICES</h2>

                          <a href="https://www.cityofsanjuan.ph" target="_blank">
                            <div class="card" style="margin: 2%;">
                              <div class="card-body" style="margin-top: -5%;">
                                <div class="col-4 col-sm-4 mt-2" style="float: left; display: inline-block;">
                                  <img src="{{asset('assets/Eservices/Taxes.svg')}}"style="width:70%; " />
                                </div>
                                <div class="col-8 col-sm-8" style="display: inline-block; padding:3px;">
                                  <br>
                                  <p style="margin: auto; position: absolute;">Real Property Tax (RPTAX)
                                  </p>
                                </div>
                              </div>
                            </div>
                          </a>

                      <a href="https://www.cityofsanjuan.ph" target="_blank">
                        <div class="card" style="margin: 2%;">
                                  <div class="card-body" style="margin-top: -10%;">
                                      <div class="col-4 col-sm-4 mt-2" style="float: left; display: inline-block;">

                                              <img src="{{asset('assets/Eservices/income.svg')}}"style="width:70%; " />

                                      </div>
                        <div class="col-8 col-sm-8" style="display: inline-block; padding:3px;">
                                            <br>
                                            <p style="margin: auto; position: absolute;">Business Tax (BTAX)
                                            </p>
                                      </div>
                                  </div>
                        </div>
                      </a>
                      <a href="https://www.cityofsanjuan.ph" target="_blank">
                        <div class="card" style="margin: 2%;">
                                  <div class="card-body" style="margin-top: -10%;">
                                      <div class="col-4 col-sm-4 mt-2" style="float: left; display: inline-block;">

                                              <img src="{{asset('assets/Eservices/CivilReg.svg')}}"style="width:70%; " />

                                      </div>
                        <div class="col-8 col-sm-8" style="display: inline-block; padding:3px;">
                                            <br>
                                            <p style="margin: auto; position: absolute;">Local Civil Registry
                                            </p>
                                      </div>
                                  </div>
                        </div>
                      </a>
                      <a href="https://www.cityofsanjuan.ph" target="_blank">
                        <div class="card" style="margin: 2%;">
                                  <div class="card-body" style="margin-top: -10%;">
                                      <div class="col-4 col-sm-4 mt-2" style="float: left; display: inline-block;">

                                              <img src="{{asset('assets/Eservices/insurance.svg')}}"style="width:70%; " />

                                      </div>
                        <div class="col-8 col-sm-8" style="display: inline-block; padding:3px;">

                                            <p style="margin: auto; position: absolute;">Occupational Permit / Health Certificates
                                            </p>
                                      </div>
                                  </div>
                        </div>
                      </a>
                      <a href="https://www.cityofsanjuan.ph" target="_blank">
                        <div class="card" style="margin: 2%;">
                                  <div class="card-body" style="margin-top: -10%;">
                                      <div class="col-4 col-sm-4 mt-2" style="float: left; display: inline-block;">

                                              <img src="{{asset('assets/Eservices/Community.svg')}}"style="width:70%; " />

                                      </div>
                        <div class="col-8 col-sm-8" style="display: inline-block; padding:3px;">
                                            <br>
                                            <p style="margin: auto; position: absolute;">Community Tax Certificate
                                            </p>
                                      </div>
                                  </div>
                        </div>
                      </a>

                      <a href="https://www.cityofsanjuan.ph" target="_blank">
                        <div class="card" style="margin: 2%;">
                                  <div class="card-body" style="margin-top: -10%;">
                                      <div class="col-4 col-sm-4 mt-2" style="float: left; display: inline-block;">

                                              <img src="{{asset('assets/Eservices/alarm.svg')}}"style="width:70%; " />

                                      </div>
                                  <div class="col-8 col-sm-8" style="display: inline-block; padding:3px;">
                                            <p style="margin: auto; position: absolute;">Ordinance Violation Receipts
                                            </p>
                                      </div>
                                  </div>
                        </div>
                      </a>
                      <a href="https://www.cityofsanjuan.ph" target="_blank">
                        <div class="card" style="margin: 2%;">
                                  <div class="card-body" style="margin-top: -10%;">
                                        <div class="col-4 col-sm-4 mt-2" style="float: left; display: inline-block;">

                                              <img src="{{asset('assets/Eservices/danger.svg')}}"style="width:70%; " />

                                        </div>
                                        <div class="col-8 col-sm-8" style="display: inline-block; padding:3px;">
                                            <br>
                                            <p style="margin: auto; position: absolute;">Notice of Violations
                                            </p>
                                      </div>
                                  </div>
                        </div>
                      </a>
                      <a href="https://www.cityofsanjuan.ph" target="_blank">
                        <div class="card" style="margin: 2%;">
                          <div class="card-body" style="margin-top: -10%;">
                            <div class="col-4 col-sm-4 mt-2" style="float: left; display: inline-block;">

                                    <img src="{{asset('assets/Eservices/checking.svg')}}"style="width:70%; " />

                            </div>
                            <div class="col-8 col-sm-8" style="display: inline-block; padding:3px;">
                                  <br>
                                  <p style="margin: auto; position: absolute;">Business Permit Licensing
                                  </p>
                            </div>
                          </div>
                        </div>
                      </a>
                        <a href="https://www.cityofsanjuan.ph" target="_blank">
                          <div class="card" style="margin: 2%;">
                              <div class="card-body" style="margin-top: -10%;">
                                  <div class="col-4 col-sm-4 mt-2" style="float: left; display: inline-block;">

                                          <img src="{{asset('assets/Eservices/portfolio.svg')}}"style="width:70%; " />

                                  </div>
                                  <div class="col-8 col-sm-8" style="display: inline-block; padding:3px;">
                                        <br>
                                        <p style="margin: auto; position: absolute;">PESO
                                        </p>
                                  </div>
                              </div>
                          </div>
                        </a>

                        <a href="https://www.cityofsanjuan.ph" target="_blank">
                          <div class="card" style="margin: 2%;">
                              <div class="card-body" style="margin-top: -10%;">
                                <div class="col-4 col-sm-4 mt-2" style="float: left; display: inline-block;">

                                        <img src="{{asset('assets/Eservices/logical-thinking.svg')}}"style="width:70%; " />

                                </div>
                                <div class="col-8 col-sm-8" style="display: inline-block; padding:3px;">
                                      <br>
                                      <p style="margin: auto; position: absolute;">Skills
                                      </p>
                                </div>
                              </div>
                          </div>
                        </a>
                        <a href="https://www.cityofsanjuan.ph" target="_blank">
                          <div class="card" style="margin: 2%;">
                                    <div class="card-body" style="margin-top: -10%;">
                                        <div class="col-4 col-sm-4 mt-2" style="float: left; display: inline-block;">

                                                <img src="{{asset('assets/Eservices/buildingpermit.svg')}}"style="width:70%; " />

                                        </div>
                          <div class="col-8 col-sm-8" style="display: inline-block; padding:3px;">
                                              <br>
                                              <p style="margin: auto; position: absolute;">Building Permit
                                              </p>
                                        </div>
                                    </div>
                          </div>
                        </a>
                        <a href="https://www.cityofsanjuan.ph" target="_blank">
                          <div class="card" style="margin: 2%;">
                                    <div class="card-body" style="margin-top: -10%;">
                                        <div class="col-4 col-sm-4 mt-2" style="float: left; display: inline-block;">

                                                <img src="{{asset('assets/Eservices/old-man.svg')}}"style="width:70%; " />

                                        </div>
                          <div class="col-8 col-sm-8" style="display: inline-block; padding:3px;">
                                              <br>
                                              <p style="margin: auto; position: absolute;">OSCA
                                              </p>
                                        </div>
                                    </div>
                          </div>
                        </a>

                      </div>


                  </div>
              </div>
            </div>
          <br>
          <div class="row" id="act">
            <div class=" col-sm-12">
                <div class="card" id="news_card">
                    <div class="card-body" style="padding: 0;overflow-y: auto;border: 3px solid #003471;">
                        <h2 class="card-title blue" style="color:#fff !important; padding: 0 !important; text-align:center;">ACTIVITY</h2>
                          <?php $i=0; ?>
                              @foreach($act as $row)
                                <?php $i++; ?>
                                <div class="card" style="margin: 2%;">
                                    <div class="card-body" id="bulletin_bod">
                                        <div class="col-4 col-sm-4" style="float: left; display: inline-block;">
                                            <a  href="{{action( 'Pages@news_contents', $row->id )}}" target="_blank" >
                                                <img src="{{asset("uploads/" . $row->filename) }}"  style="width: 100%; height:100% !important;" />
                                            </a>
                                        </div>
                                        <div class="col-8 col-sm-8" style="display: inline-block; padding:5px;">
                                                <a id="bulletin_desc" href="#" style="font-size:25px;height: auto;"><?php echo $row->title ?> </a>
                                                <span id="article_contents" style="margin-top:0 !important;">
                                                  <?php echo $row['desc'] ?>
                                                </span>
                                                <br>
                                                <a id="bulletin_readmore" href="{{action( 'Pages@news_contents', $row->id )}}" target="_blank"  >readmore</a>
                                        </div>
                                    </div>
                                </div>
                                @if ($i == 4)
                                    @break
                                @endif
                            @endforeach
                    </div>

                </div>
            </div>
          </div>
      </div>
  </div>

  <div class="container" id="gov-sites" style="background:#fff; padding:2% 0;">
    <div class="row">

          <div class="col-sm">
            <a href="https://op-proper.gov.ph/">
            <img src="{{asset('assets/LOGO/OfficeOfThePresident.png')}}" style="width: 100px; height: 100px;" >
            </a>
          </div>
          <div class="col-sm">
            <a href="https://www.dti.gov.ph/">
            <img src="{{asset('assets/LOGO/DTI.png')}}" style="width: 100px; height: 100px;" >
            </a>
          </div>
          <div class="col-sm">
            <a href="https://www.deped.gov.ph/">
            <img src="{{asset('assets/LOGO/DEPED.png')}}" style="width: 100px; height: 100px;" >
            </a>
          </div>
          <div class="col-sm">
            <a href="https://dfa.gov.ph/">
            <img src="{{asset('assets/LOGO/DFA.png')}}" style="width: 100px; height: 100px;" >
            </a>
          </div>
          <div class="col-sm">
            <a href="https://dilg.gov.ph/">
            <img src="{{asset('assets/LOGO/DILG.png')}}" style="width: 100px; height: 100px;" >
            </a>
          </div>
          <div class="col-sm">
            <a href="http://beta.tourism.gov.ph/">
            <img src="{{asset('assets/LOGO/TOURISM.png')}}" style="width: 100px; height: 100px;" >
            </a>
          </div>
          <div class="col-sm">
            <a href="https://www.dbm.gov.ph/">
            <img src="{{asset('assets/LOGO/DBM.png')}}" style="width: 100px; height: 100px;" >
            </a>
          </div>

      </div>
  </div>

  <!-- MAGAZINE POPUP-->


  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/js/mdb.min.js"></script>

  <script>
    wow = new WOW().init();

    window.onload = on();

    function on() {
      document.getElementById("overlay").style.display = "block";
    }

    $(document).ready(function(){
     $("#off").click(function(){
       var div = $("#overlay");
       div.animate({opacity: '0'}, "slow");
       div.hide(0);
        });
      });
  </script>
@endsection
