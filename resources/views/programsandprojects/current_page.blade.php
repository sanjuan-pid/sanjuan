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
    @media screen and (max-width: 766px) and (min-width: 200px) {
      #concurr .curr h1{
        font-size: 20px !important;
      }
      div #concurr .curr{
      margin-top: 0.5rem !important;
      }
      .current {
        max-width: 100% !important;
        width:100% !important;
        flex: 0 0 100%;
      }
    }
    </style>
    <div class="container" id="current_program" style="padding:0 !important;">
            <div class="container my-2" id="concurr" style="padding-right: 0 !important; padding-left: 0 !important;">
              <!-- Trigger the modal with a button -->


              <!-- Modal -->
                <div class="modal fade" id="myModal" data-keyboard="false" data-backdrop="static">

                <div class="modal-dialog modal-lg">

                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-body">
                          <video width="1200" class="vid_contents optic_" controls>
                            <source src="{{asset('assets/vid2.mp4')}}" type="video/mp4">
                            Your browser does not support HTML video.
                          </video>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default close_pause" data-dismiss="modal">Close</button>
                    </div>
                  </div>

                </div>
              </div>
              <div class="modal fade" id="myModal2" data-keyboard="false" data-backdrop="static">
                <div class="modal-dialog modal-lg">

                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-body">
                        <video width="1200" class="vid_contents anti_" controls>
                          <source src="{{asset('assets/vid1.mp4')}}" type="video/mp4">
                          Your browser does not support HTML video.
                        </video>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default close_pause"  data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal fade" id="myModal3" data-keyboard="false" data-backdrop="static">
                <div class="modal-dialog modal-lg">

                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-body">
                        <video width="1200" class="vid_contents bike_" controls>
                          <source src="{{asset('assets/vid3.mp4')}}" type="video/mp4">
                          Your browser does not support HTML video.
                        </video>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default close_pause"  data-dismiss="modal">Close</button>
                    </div>
                  </div>

                </div>
              </div>

              <div class="col-12 mt-2 curr" style=" width: 100% !important; padding-right: 0 !important; padding-left: 0 !important;">
                <h1 style=" font-weight: 650; position: absolute; top: 50%; left: 35%;transform: translate(-50%, -50%); color:white !important; font-size:50px; text-shadow: 1px 1px 2px black, 0 0 1em blue, 0 0 0.2em darkblue;">CURRENT PROGRAMS</h1>
                <img style=" width: 100%;" src="{{asset('assets/bandept2.png')}}" />
              </div>
              <div class="container current" style="width:90%;">
                <div class="row" style="margin-bottom: 5%;">
                    <div class="col-md-6 clearfix d-md-block">
                        <div class="card mb-2">
                          <img class="card-img-top" src="{{asset('assets/Agenda/fiber-optic.jpg')}}"
                               alt="Card image cap">
                          <div class="card-body">
                            <h4>SAN JUAN CITY FIBER OPTIC INTERNET AND LEARNING MANAGEMENT SYSTEM LAUNCH</h4>
                            <br>
                            <button type="button" class="btn btn-info btn-lg" id="optic_btn" data-toggle="modal" data-target="#myModal" style="float: right; font-size:18px;" >Play Video</button>
                            {{-- <img class="card-img-top" src="{{asset('assets/play-button.svg')}}" style="width: 5%;" > --}}
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 clearfix d-md-block">
                          <div class="card mb-2">
                            <img class="card-img-top" src="{{asset('assets/Agenda/anti-dangling.jpg')}}"
                                 alt="Card image cap" />
                            <div class="card-body">
                                <h4>ANTI-DANGLING WIRES MOA SIGNING AND CUTTING CEREMONY</h4>
                                <br>
                                <button type="button" class="btn btn-info btn-lg" id="dangling_btn" data-toggle="modal" data-target="#myModal2" style="float: right; font-size:18px;" >Play Video</button>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6 clearfix d-md-block mt-3" style=" margin: auto;">
                            <div class="card mb-2">
                              <img class="card-img-top" src="{{asset('assets/Agenda/bike.jpg')}}"
                                   alt="Card image cap" />
                              <div class="card-body">
                                  <h4>SAN JUAN CITY LAUNCHES POP-UP BIKE LANES</h4>
                                  <br>
                                  <button type="button" class="btn btn-info btn-lg" id="bike_btn" data-toggle="modal" data-target="#myModal3" style="float: right; font-size:18px;" >Play Video</button>
                              </div>
                            </div>
                          </div>
                </div>
                <!--Carousel Wrapper-->
                <div id="multi-item-example" class="carousel slide carousel-multi-item  d-none d-md-block" data-ride="carousel" style="margin: 5% 0;">

                  <!--Controls-->
                  <div class="controls-top">
                    <h2 class="card-title " style="color:#000 !important; padding: 0%  0 !important; text-align: center; color: #1f1c4b;font-weight: 700;margin-bottom: 5%;">
                        <a style="float:left;" class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                        10 PT AGENDA
                        <a style="float:right;"  class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                    </h2>
                  </div>
                  <!--/.Controls-->

                  <!--Indicators-->
                  <ol class="carousel-indicators">
                    <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                    <li data-target="#multi-item-example" data-slide-to="1"></li>
                  </ol>
                  <!--/.Indicators-->

                  <!--Slides-->
                  <div class="carousel-inner" role="listbox">

                    <!--First slide-->
                    <div class="carousel-item active">

                      <div class="row">
                        <div class="col">
                          <div class="card mb-2">
                            <img class="card-img-top" src="{{asset('assets/Agenda/1.png')}}"
                                 alt="Card image cap">
                            <div class="card-body">


                            </div>
                          </div>
                        </div>

                        <div class="col clearfix d-none d-md-block">
                          <div class="card mb-2">
                            <img class="card-img-top" src="{{asset('assets/Agenda/2.png')}}"
                                 alt="Card image cap">
                            <div class="card-body">


                            </div>
                          </div>
                        </div>

                        <div class="col clearfix d-none d-md-block">
                          <div class="card mb-2">
                            <img class="card-img-top" src="{{asset('assets/Agenda/3.png')}}"
                                 alt="Card image cap">
                            <div class="card-body">


                            </div>
                          </div>
                        </div>

                        <div class="col clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img-top" src="{{asset('assets/Agenda/4.png')}}"
                                   alt="Card image cap">
                              <div class="card-body">


                              </div>
                            </div>
                          </div>

                        <div class="col clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img-top" src="{{asset('assets/Agenda/5.png')}}"
                                   alt="Card image cap">
                              <div class="card-body">


                              </div>
                            </div>
                          </div>
                      </div>

                    </div>
                    <!--/.First slide-->
                    <div class="carousel-item">

                        <div class="row">
                          <div class="col">
                            <div class="card mb-2">
                                <img class="card-img-top" src="{{asset('assets/Agenda/6.png')}}"
                                   alt="Card image cap">
                              <div class="card-body">


                              </div>
                            </div>
                          </div>

                          <div class="col clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img-top" src="{{asset('assets/Agenda/7.png')}}"
                                   alt="Card image cap">
                              <div class="card-body">


                              </div>
                            </div>
                          </div>

                          <div class="col clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img-top" src="{{asset('assets/Agenda/8.png')}}"
                                   alt="Card image cap">
                              <div class="card-body">


                              </div>
                            </div>
                          </div>

                          <div class="col clearfix d-none d-md-block">
                              <div class="card mb-2">
                                <img class="card-img-top" src="{{asset('assets/Agenda/9.png')}}"
                                     alt="Card image cap">
                                <div class="card-body">


                                </div>
                              </div>
                            </div>

                          <div class="col clearfix d-none d-md-block">
                              <div class="card mb-2">
                                <img class="card-img-top" src="{{asset('assets/Agenda/10.png')}}"
                                     alt="Card image cap">
                                <div class="card-body">


                                </div>
                              </div>
                            </div>
                        </div>

                      </div>

                  </div>
                  <!--/.Slides-->

                </div>
                <!--/.Carousel Wrapper-->
                <div id="multi-item-example1" class="carousel slide carousel-multi-item  d-sm-block d-md-none" data-ride="carousel" style="margin: 5% 0;">

                  <!--Controls-->
                  <div class="controls-top">
                    <h3 class="card-title " style="color:#000 !important; padding: 0%  0 !important; text-align: center; color: #1f1c4b;font-weight: 700;margin-bottom: 0%;">
                        <a style="float:left;" class="btn-floating" href="#multi-item-example1" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                        <a style="float:right;"  class="btn-floating" href="#multi-item-example1" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                    </h3>
                  </div>
                  <!--Slides-->
                  <div class="carousel-inner" role="listbox">
                    <!--First slide-->
                    <div class="carousel-item active">
                      <div class="row">
                        <div class="col">
                          <div class="card mb-2">
                            <img class="card-img-top" src="{{asset('assets/Agenda/1.png')}}"
                                 alt="Card image cap">
                            <div class="card-body">
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="carousel-item">
                      <div class="row">
                        <div class="col">
                          <div class="card mb-2">
                            <img class="card-img-top" src="{{asset('assets/Agenda/2.png')}}"
                                 alt="Card image cap">
                            <div class="card-body">
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="carousel-item">
                      <div class="row">
                        <div class="col">
                          <div class="card mb-2">
                            <img class="card-img-top" src="{{asset('assets/Agenda/3.png')}}"
                                 alt="Card image cap">
                            <div class="card-body">
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="carousel-item">
                      <div class="row">
                        <div class="col">
                          <div class="card mb-2">
                            <img class="card-img-top" src="{{asset('assets/Agenda/4.png')}}"
                                 alt="Card image cap">
                            <div class="card-body">
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="carousel-item">
                      <div class="row">
                        <div class="col">
                          <div class="card mb-2">
                            <img class="card-img-top" src="{{asset('assets/Agenda/5.png')}}"
                                 alt="Card image cap">
                            <div class="card-body">
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="carousel-item">
                      <div class="row">
                        <div class="col">
                          <div class="card mb-2">
                            <img class="card-img-top" src="{{asset('assets/Agenda/6.png')}}"
                                 alt="Card image cap">
                            <div class="card-body">
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="carousel-item">
                      <div class="row">
                        <div class="col">
                          <div class="card mb-2">
                            <img class="card-img-top" src="{{asset('assets/Agenda/7.png')}}"
                                 alt="Card image cap">
                            <div class="card-body">
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="carousel-item">
                      <div class="row">
                        <div class="col">
                          <div class="card mb-2">
                            <img class="card-img-top" src="{{asset('assets/Agenda/8.png')}}"
                                 alt="Card image cap">
                            <div class="card-body">
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="carousel-item">
                      <div class="row">
                        <div class="col">
                          <div class="card mb-2">
                            <img class="card-img-top" src="{{asset('assets/Agenda/9.png')}}"
                                 alt="Card image cap">
                            <div class="card-body">
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="carousel-item">
                      <div class="row">
                        <div class="col">
                          <div class="card mb-2">
                            <img class="card-img-top" src="{{asset('assets/Agenda/10.png')}}"
                                 alt="Card image cap">
                            <div class="card-body">
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                    <!--/.First slide-->
                      </div>
                  </div>
                  <!--/.Slides-->

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
        <br>
    </div>
  </div>

@endsection
