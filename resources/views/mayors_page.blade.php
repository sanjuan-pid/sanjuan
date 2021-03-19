@extends('layouts.nav-bar')

@section('content')

    <div class="container" id="mayors_corner" style="box-shadow: 0px 3px 3px #cccccc; padding: 0;">

    <br>
    <br>
    <div class="row">
        <h1 style="text-align: center;">MAYOR'S CORNER</h1>
        <div class="container-lg my-3">
            <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
                <!-- Carousel indicators -->

                <ol class="carousel-indicators">
                  <?php
                  $counter = 0;
                  foreach ($news as $item) {
                        $counter++;
                         echo '<li data-target="#myCarousel" data-slide-to="$counter-1"></li>';
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
                                <img src="{{asset("uploads/" . $row['filename']) }}"  id="image_slide">
                              </div>
                            </div>
                            <div class=" col-sm-6" style="text-align: left;">
                              <h2 id="article_title">{{$row['title']}}</h2>
                              <p id="article_contents">{{$row['desc']}}</p>

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
                                <img src="{{asset("uploads/" . $row['filename']) }}"  id="image_slide">
                              </div>
                            </div>
                            <div class=" col-sm-6" style="text-align: left;">
                              <h2 id="article_title">{{$row['title']}}</h2>
                              <p id="article_contents">{{$row['desc']}}</p>
                              {{-- <a id="article_link"  href="news_article" style="margin-top:2%;color:#2b92b0; font-weight: 700; float: right;" >READ MORE</a> --}}
                            </div>
                          </div>
                        </div>
                      </div>
                    @endif
                  @endforeach
                </div>
                <!-- Carousel controls -->
                <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                    <span><img src={{asset('assets/right-arrow.svg')}} style="width: 25%;rotation: 180deg;transform: rotate(180deg);"/> </span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                  <span><img src={{asset('assets/right-arrow.svg')}} style="width: 25%;"/> </span>

                </a>


            </div>
            <a href="mayors_page" id="mayors_link" >VISIT PAGE</a>
        </div>
    </div>


</div>

 <div class="container" id="news_sec">
    <br>
    @include('layouts.index.agenda')
    <br>

    <div class="row" id="news">
        <h1 style="text-align: center;">NEWS</h1>
        <div class="col-sm-15">
            <div class="card" id="news_card">
                <div class="card-body">
                    <h2 class="card-title" style="font-weight: 800; font-size: 200;">RECENT</h2>

                        <br>
                        <div class="recent_small">
                            <div class="row">
                                <?php $i=0; ?>
                                @foreach($news as $row)
                                <?php $i++; ?>
                                    <div class="col-4 col-sm-4">
                                        <img src="{{asset("uploads/" . $row['filename']) }}"  style="width: 65%;height: 70%!important;display: block;margin: 0 auto;" />
                                        <p class="recent_psmall">
                                            <br>
                                            <a href="#"><?php echo $row['title'] ?></a>
                                        </p>
                                    </div>
                                    @if ($i == 3)
                                        @break
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div id="_viewmore">
                            <a  href="#">view more articles</a>
                        </div>
                </div>

            </div>
        </div>
        <div class=" col-sm-12" style="display: none;">
            <div class="card">
                    <div class="card-body" id="bulletin_sec">
                        <h2 class="card-title">BULLETIN</h2>
                        @foreach($news2 as $row)
                            <div class="col-4" style="float: left;">
                                <div class="card">
                                    <div class="card-body" id="bulletin_bod">
                                        <div class="col-12 col-sm-12" style="float: left; display: inline-block;">
                                            <img src="{{asset("uploads/" . $row->filename) }}" style="width: 100%; !important;display:block; margin:0 auto; height: 160px !important;" />
                                            <br><a id="bulletin_desc" href="#"> <?php echo $row->title; ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div id="_viewmore">
                        <a  href="#">view more articles</a>
                    </div>
                </div>
            </div>

        {{-- FB --}}
    <div class=" col-sm-12">
      <div class="card">
        <div class="card-body" id="social">
          <div id="fb-root"></div>
          <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0" nonce="Q2u8vjt1"></script>
            <div class="fb-page" data-href="https://www.facebook.com/CityofSanJuanNCRPhilippines/" data-tabs="timeline" data-width="" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/CityofSanJuanNCRPhilippines/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/CityofSanJuanNCRPhilippines/">San Juan City, Philippines</a></blockquote></div>
            {{-- Twitter --}}
            <a class="twitter-timeline" data-width="400" data-height="500" data-theme="light" href="https://twitter.com/sanjuancityncr?ref_src=twsrc%5Etfw">Tweets by sanjuancityncr</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            {{-- Instagram --}}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


        </div>
    </div>
</div>

@endsection
