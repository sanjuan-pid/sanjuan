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

    {{-- @include('layouts.index.map-2') --}}

   

        <div class="container" id="mayorqr" style="box-shadow: 0px 3px 3px #cccccc; padding: 0; padding: 2% 0;">
           <div class="row justify-content-md-center" style="position:relative;">
                <div class="col-sm-3" id="aanouncementss" style="z-index: 10;">
                    <div class="card" id="news_card" style="border: 3px solid #003471;">
                        <h2 class="card-title blue" style="text-align:center;color:#fff !important;font-size:17pt; margin-bottom: 0!important;">ANNOUNCEMENT</h2>
                        <div class="card-body sc" style="overflow-y: scroll; direction:;">
                          <br>
                          <ul class="sap_list">
                            <b>SAP Brgy List</b>
                            @foreach($brgy_announcement as $row)
                              <li style="font-weight: 600;"><a href="{{action( 'Pages@brgy_contents', $row->id )}}" target="_blank" > <?php echo $row['name'] ?></a></li>
                            @endforeach
                          </ul>
                          
                            @foreach($announcement as $row)

                                @if($row['show'] == 1)
                                    <div class="recent_big">
                                      <div class="col-12 col-sm-12">

                                        <img src="{{asset("uploads/" . $row['filename']) }}"  style="width: 100%; height: auto !important; margin-bottom:2%;" />
                                        <p class="recent_psmall">
                                            <a href="{{action( 'Pages@news_contents', $row->id )}}" target="_blank" ><?php echo $row['title'] ?> </a>
                                        </p>
                                      </div>
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

                                                    <img src="{{asset("uploads/" . $row['filename']) }}"  style="width: 100%;  height: auto; margin-bottom:2%;" />
                                                    <p class="recent_psmall">
                                                        <a href="{{action( 'Pages@news_contents', $row->id )}}" target="_blank" ><?php echo $row['title'] ?> </a>
                                                    </p>
                                                    <br>
                                                </div>
                                                @if ($i == 3)
                                                    @break
                                                @endif
                                            @endif
                                        @endforeach

                                    </div>
                                </div>
                        </div>

                    </div>
                 </div>
                 <div class="col-sm-9" style="margin-bottom: 5%;">
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
                          @foreach($events as $row)
                            @if($row['show'] == 1)
                              <div class="carousel-item active">
                                <div class="container">
                                  <div class="row">
                                    <div class=" col-sm-12">
                                      <div id="img_slot">
                                        <a  href="{{action( 'Pages@news_contents', $row['id'] )}}"  >
                                         <img src="{{asset("uploads/" . $row['filename']) }}" style="height: auto;width: 100%;" id="image_slide">
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            @endif
                          @endforeach
                          @foreach($events as $row)
                            @if($row['show'] != 1)
                              <div class="carousel-item">
                                <div class="container">
                                  <div class="row">
                                    <div class=" col-sm-12">
                                      <div id="img_slot">
                                        <a  href="{{action( 'Pages@news_contents', $row['id'] )}}"  >
                                          <img src="{{asset("uploads/" . $row['filename']) }}" style="height: auto;width: 100%;"  id="image_slide">
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
                <br>
                <br>

           </div>
        </div>



    {{-- @include('layouts.index.directory') --}}
    {{-- @include('layouts.index.mayors') --}}

<div class="container" id="mayors_corner" style="box-shadow: 0px 3px 3px #cccccc; padding: 0;">
    <img src="{{asset('assets/mayor.jpg')}}" width="100%" />
    <br>
    <br>
    <div class="row">
        <h1 style="text-align: center;">MAYOR'S CORNER</h1>
        <div class="container-lg my-3">
            <div id="myCarousel1" class="carousel slide" data-ride="carousel" data-interval="15000">
                <!-- Carousel indicators -->

                <ol class="carousel-indicators">
                  <?php
                  $counter = 0;
                  foreach ($news as $item) {
                        $counter++;
                        // echo $counter;
                          // echo $counter-1;
                        //  echo '<li data-target="#myCarousel1" data-slide-to="$counter-1"></li>';
                    }
                ?>
                </ol>
                <!-- Wrapper for carousel items -->

                  <div class="carousel-inner">
                  @foreach($news as $row)
                    @if($row['show'] == 1)
                      <div class="carousel-item active">
                        <div class="container">
                          <div class="row">
                            <div class=" col-sm-6">
                              <div id="img_slot">
                                <a  href="{{action( 'Pages@news_contents', $row['id'] )}}"  >
                                 <img src="{{asset("uploads/" . $row['filename']) }}"  id="image_slide">
                                </a>
                              </div>
                            </div>
                            <div class=" col-sm-6" style="text-align: left;">
                              <a  href="{{action( 'Pages@news_contents', $row['id'] )}}"  >
                                <h2 id="article_title" style="color:#000; text-decoration:none !important;">{{$row['title']}}</h2>
                              </a>
                              <div id="article_contents" style="color:#000;text-decoration:none !important;">
                                  <?php echo $row['desc'] ?>
                              </div>
                              {{-- <a id="article_link" href="https://www.facebook.com/CityofSanJuanNCRPhilippines/" style="margin-top:2%;color:#2b92b0; font-weight: 700; float: right;" >READ MORE</a> --}}
                            </div>
                          </div>
                        </div>
                      </div>
                    @endif
                  @endforeach
                  @foreach($news as $row)
                    @if($row['show'] != 1)
                      <div class="carousel-item">
                        <div class="container">
                          <div class="row">
                            <div class=" col-sm-6">
                              <div id="img_slot">
                                <a  href="{{action( 'Pages@news_contents', $row['id'] )}}"  >
                                  <img src="{{asset("uploads/" . $row['filename']) }}"  id="image_slide">
                                </a>
                              </div>
                            </div>
                            <div class=" col-sm-6" style="text-align: left;">
                              <a  href="{{action( 'Pages@news_contents', $row['id'] )}}" style="color:#000;" >
                                <h2 id="article_title">{{$row['title']}}</h2>
                              </a>
                              <div id="article_contents">
                                  <?php echo $row['desc'] ?>
                              </div>
                              {{-- <a id="article_link"  href="news_article" style="margin-top:2%;color:#2b92b0; font-weight: 700; float: right;" >READ MORE</a> --}}
                            </div>
                          </div>
                        </div>
                      </div>
                    @endif
                  @endforeach
                </div>
                <!-- Carousel controls -->
                <a class="carousel-control-prev" href="#myCarousel1" data-slide="prev" style="left: -105px;">
                    <span><img src={{asset('assets/right-arrow.svg')}} style="width: 25%;rotation: 180deg;transform: rotate(180deg); "/> </span>
                </a>
                <a class="carousel-control-next" href="#myCarousel1" data-slide="next" style="right: -85px;">
                  <span><img src={{asset('assets/right-arrow.svg')}} style="width: 25%;"/> </span>

                </a>

            </div>
            <a href="mayors_page" id="mayors_link" >VISIT PAGE</a>
        </div>
    </div>
</div>
    <div class="container" id="covid_updates" style="padding: 0 !important; display:none;">
        <div class="row justify-content-md-center" style="position:relative;">
            <div class=" col-sm-12" style="padding: 0 !important;">
                <div class=" col-sm-4" style="float: left; ">
                    <div class="card">
                        @foreach($mayors as $row)
                            @if($row["type"] == 1)
                                    <div class="card-body" id="bulletin_bod" style="padding-top:0px;padding-right:0px;padding-left:0px;height: 550px; overflow: hidden;border: 3px solid #003471;">
                                        <div class="col-12 col-sm-12 covid_date" style="display: inline-block;    padding: 0;">
                                                @if($row["type"] == 1)
                                                    <a  id="bulletin_desc" href="#"  class="blue" style="text-align: center !important; color:white;"><h4>Daily Update</h4></a>
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
                                    <div class="card-body" id="bulletin_bod" style="padding-top:0px;padding-right:0px;padding-left:0px;height: 550px; overflow: hidden;border: 3px solid #003471;">
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
                                    <div class="card-body" id="bulletin_bod" style="padding-top:0px;padding-right:0px;padding-left:0px;height: 550px; overflow: hidden;border: 3px solid #003471;">
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
    {{-- @include('layouts.index.news') --}}
    <div class="container" id="news_sec">
      <br>
      <br>
      <div class="row" id="news">
          <div class=" col-sm-8">
              <div class="card" id="news_card">
                  <div class="card-body" style="padding: 0;overflow-y: auto;border: 3px solid #003471;">
                      <h2 class="card-title blue" style="color:#fff !important; padding: 0 !important;">NEWS</h2>
                        <?php $i=0; ?>
                            @foreach($news as $row)
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
                              @if ($i == 4)
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
                         
                        <div class="card" style="margin: 2%;">
                                      <div class="card-body" style="margin-top: -5%;">
                                          <div class="col-4 col-sm-4 mt-2" style="float: left; display: inline-block;">
                                              <a >
                                                  <img src="{{asset('assets/Eservices/Taxes.svg')}}"style="width:70%; " />
                                              </a>
                                      </div>
                                      <div class="col-8 col-sm-8" style="display: inline-block; padding:3px;">
                                            <br>                                            
                                            <p style="margin: auto; position: absolute;">Real Property Tax (RPTAX)
                                            </p>
                                      </div>
                                  </div>
                        </div>

                        <div class="card" style="margin: 2%;">
                                  <div class="card-body" style="margin-top: -10%;">
                                      <div class="col-4 col-sm-4 mt-2" style="float: left; display: inline-block;">
                                          <a >
                                              <img src="{{asset('assets/Eservices/income.svg')}}"style="width:70%; " />
                                          </a>
                                      </div>
                        <div class="col-8 col-sm-8" style="display: inline-block; padding:3px;">
                                            <br>                                            
                                            <p style="margin: auto; position: absolute;">Business Tax (BTAX)
                                            </p>
                                      </div>
                                  </div>
                        </div>

                        <div class="card" style="margin: 2%;">
                                  <div class="card-body" style="margin-top: -10%;">
                                      <div class="col-4 col-sm-4 mt-2" style="float: left; display: inline-block;">
                                          <a >
                                              <img src="{{asset('assets/Eservices/CivilReg.svg')}}"style="width:70%; " />
                                          </a>
                                      </div>
                        <div class="col-8 col-sm-8" style="display: inline-block; padding:3px;">
                                            <br>                                            
                                            <p style="margin: auto; position: absolute;">Local Civil Registry
                                            </p>
                                      </div>
                                  </div>
                        </div>

                        <div class="card" style="margin: 2%;">
                                  <div class="card-body" style="margin-top: -10%;">
                                      <div class="col-4 col-sm-4 mt-2" style="float: left; display: inline-block;">
                                          <a >
                                              <img src="{{asset('assets/Eservices/insurance.svg')}}"style="width:70%; " />
                                          </a>
                                      </div>
                        <div class="col-8 col-sm-8" style="display: inline-block; padding:3px;">

                                            <p style="margin: auto; position: absolute;">Occupational Permit / Health Certificates
                                            </p>
                                      </div>
                                  </div>
                        </div>

                        <div class="card" style="margin: 2%;">
                                  <div class="card-body" style="margin-top: -10%;">
                                      <div class="col-4 col-sm-4 mt-2" style="float: left; display: inline-block;">
                                          <a >
                                              <img src="{{asset('assets/Eservices/Community.svg')}}"style="width:70%; " />
                                          </a>
                                      </div>
                        <div class="col-8 col-sm-8" style="display: inline-block; padding:3px;">
                                            <br>
                                            <p style="margin: auto; position: absolute;">Community Tax Certificate
                                            </p>
                                      </div>
                                  </div>
                        </div>

                        <div class="card" style="margin: 2%;">
                                  <div class="card-body" style="margin-top: -10%;">
                                      <div class="col-4 col-sm-4 mt-2" style="float: left; display: inline-block;">
                                          <a >
                                              <img src="{{asset('assets/Eservices/alarm.svg')}}"style="width:70%; " />
                                          </a>
                                      </div>
                                  <div class="col-8 col-sm-8" style="display: inline-block; padding:3px;">
                                            <p style="margin: auto; position: absolute;">Ordinance Violation Receipts
                                            </p>
                                      </div>
                                  </div>
                        </div>

                        <div class="card" style="margin: 2%;">
                                  <div class="card-body" style="margin-top: -10%;">
                                        <div class="col-4 col-sm-4 mt-2" style="float: left; display: inline-block;">
                                          <a >
                                              <img src="{{asset('assets/Eservices/danger.svg')}}"style="width:70%; " />
                                          </a>
                                        </div>
                                        <div class="col-8 col-sm-8" style="display: inline-block; padding:3px;">
                                            <br>
                                            <p style="margin: auto; position: absolute;">Notice of Violations
                                            </p>
                                      </div>
                                  </div>
                        </div>
                        <div class="card" style="margin: 2%;">
                          <div class="card-body" style="margin-top: -10%;">
                            <div class="col-4 col-sm-4 mt-2" style="float: left; display: inline-block;">
                                <a >
                                    <img src="{{asset('assets/Eservices/checking.svg')}}"style="width:70%; " />
                                </a>
                            </div>
                            <div class="col-8 col-sm-8" style="display: inline-block; padding:3px;">
                                  <br>
                                  <p style="margin: auto; position: absolute;">Business Permit Licensing
                                  </p>
                            </div>
                          </div>
                        </div>
                        <div class="card" style="margin: 2%;">
                            <div class="card-body" style="margin-top: -10%;">
                                <div class="col-4 col-sm-4 mt-2" style="float: left; display: inline-block;">
                                    <a >
                                        <img src="{{asset('assets/Eservices/portfolio.svg')}}"style="width:70%; " />
                                    </a>
                                </div>
                                <div class="col-8 col-sm-8" style="display: inline-block; padding:3px;">
                                      <br>
                                      <p style="margin: auto; position: absolute;">PESO
                                      </p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card" style="margin: 2%;">
                            <div class="card-body" style="margin-top: -10%;">
                              <div class="col-4 col-sm-4 mt-2" style="float: left; display: inline-block;">
                                  <a >
                                      <img src="{{asset('assets/Eservices/logical-thinking.svg')}}"style="width:70%; " />
                                  </a>
                              </div>
                              <div class="col-8 col-sm-8" style="display: inline-block; padding:3px;">
                                    <br>
                                    <p style="margin: auto; position: absolute;">Skills
                                    </p>
                              </div>
                            </div>
                        </div>
                        <div class="card" style="margin: 2%;">
                                  <div class="card-body" style="margin-top: -10%;">
                                      <div class="col-4 col-sm-4 mt-2" style="float: left; display: inline-block;">
                                          <a >
                                              <img src="{{asset('assets/Eservices/buildingpermit.svg')}}"style="width:70%; " />
                                          </a>
                                      </div>
                        <div class="col-8 col-sm-8" style="display: inline-block; padding:3px;">
                                            <br>                                            
                                            <p style="margin: auto; position: absolute;">Building Permit
                                            </p>
                                      </div>
                                  </div>
                        </div>
                        <div class="card" style="margin: 2%;">
                                  <div class="card-body" style="margin-top: -10%;">
                                      <div class="col-4 col-sm-4 mt-2" style="float: left; display: inline-block;">
                                          <a >
                                              <img src="{{asset('assets/Eservices/old-man.svg')}}"style="width:70%; " />
                                          </a>
                                      </div>
                        <div class="col-8 col-sm-8" style="display: inline-block; padding:3px;">
                                            <br>                                            
                                            <p style="margin: auto; position: absolute;">OSCA
                                            </p>
                                      </div>
                                  </div>
                        </div>
                         
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
@endsection
