@extends('layouts.nav-bar')

@section('content')
    <div id="side_prof" style="position: fixed;margin-top: 13%; z-index: 999;">
      <a class="btn side_btn" id="news_btn"   style="background: rgb(49, 64, 150); color:#fff;display: block;height:33%;font-size:22px;">NEWS<img src={{asset('assets/newspaper.svg')}} style="width: 20%; float: right;"/></a>
      <br>
      <br>
      <br>
      <a class="btn side_btn" id="profile_btn" style="background: rgb(49, 64, 150); color:#fff;display: block;height:33%;font-size:22px;">PROFILE <img src={{asset('assets/cv.svg')}} style="width: 20%; float: right;"/></a>
      <br>
      <br>
      <br>
      <a class="btn side_btn" id="achievement_btn"  style="background: rgb(49, 64, 150); color:#fff;display: block;height:33%;font-size:22px;">ACHIEVEMENTS<img src={{asset('assets/achievement.svg')}} style="width: 20%; float: right;"/></a>
      <br>
      <br>
      <br>
      <a class="btn side_btn" id="programs_btn"   style="background: rgb(49, 64, 150); color:#fff;display: block;height:33%;font-size:22px;">PROGRAMS<img src={{asset('assets/porfolio.svg')}} style="width: 20%; float: right;"/></a>
    </div>

    <div id="side_prof_mob" style="position: relative;margin-top: 5%; z-index: 1;">
        <a class="btn side_btn" id="news_btn_mob"   style="background: rgb(49, 64, 150); color:#fff;display: block;">NEWS</a>

        <a class="btn side_btn" id="profile_btn_mob" style="background: rgb(49, 64, 150); color:#fff;display: block;">PROFILE </a>


        <a class="btn side_btn" id="achievement_btn_mob"  style="background: rgb(49, 64, 150); color:#fff;display: block;">ACHIEVEMENTS</a>

        <a class="btn side_btn" id="programs_btn_mob"   style="background: rgb(49, 64, 150); color:#fff;display: block;">PROGRAMS</a>
    </div>


    <div class="container" id="mayors_corner" style="box-shadow: 0px 3px 3px #cccccc; padding: 0;">
    <br>
    <img src="{{asset('assets/mayor/mayorzamora.jpg')}}" width="100%" style="padding: 0 1%;"/>

    <div class="row" id="profile_row" style="margin-top: -17% !important;">
      <div class="col-sm-6">
         <div class="card">
                <div class="card-body">
                    <h2 class="card-title" style="font-weight: 800; font-size: 200;"><img src={{asset('assets/cv.svg')}} style="width: 15%; "/> BIOGRAPHY </h2>
                    <div id="profile_contents">
                      <p>
                        Francis Zamora (born in San Juan on December 5, 1977) was the City Vice Mayor of San Juan, Metro Manila from 2010-2016 and was a City Councilor of the 2nd District from 2007-2010. He became a successful restaurant entrepreneur at the age of 23, a youth role model, athlete, brand ambassador and an advocate for sports and physical fitness programs being a former Team Captain of the De La Salle Green Archers during their back to back UAAP Championships in 1998 and 1999, and being a member of the back to back and 3-peat championship teams of Welcoat Paints in the PBL in 1999-2000. He served as the Presiding Officer of the San Juan City Council and the Vice Chairman of the the City Peace and Order Council, Disaster Risk Reduction and Management Council, as well the City Anti-Drug Abuse Council, among others. He is the man behind many citywide programs for education, health, livelihood, peace and order, and security. As Vice Mayor, he was the Head of the legislative arm of the local government responsible for passing resolutions and ordinances for the welfare of the people of San Juan.
                      </p>
                    </div>
                </div>
          </div>
      </div>
      <br>
      <div class="col-sm-6" >
          <div class="card">
                <div class="card-body">
                    <h2 class="card-title" style="font-weight: 800; font-size: 200;"> <img src={{asset('assets/book.svg')}} style="width: 15%; "/> EDUCATION </h2>
                    <div id="profile_contents">
                      <p>
                        He graduated from De La Salle University with a degree in Bachelor of Arts, Major in Psychology in 1999. He also completed a program for Business Management and Entrepreneurship from New York University, New York, U.S.A. in 2003. He earned his Masters Degree for Public Administration from National College of Public Administration and Governance at the University of the Philippines, Diliman in 2006. He then finished an Executive Education Program at the John F. Kennedy School of Government, Harvard University, Cambridge, U.S.A. in 2015.
                       </p>
                       <p>
                        He was a consistent honor student in school and a natural leader, but with his energy and athletic ability, his first victories were in sports. In his last 2 years in college, he was the Team Captain of the De La Salle University Green Archers., which he helped lead to victory in the 1998 and 1999 UAAP seasons as back to back champions.

                      </p>
                    </div>
                </div>
          </div>
      </div>

    </div>

    <br>
    <div class="row" id="achievement_row" style="margin-top: -25% !important;">
      <h2 class="card-title" style="font-weight: 800; font-size: 200;"><img src={{asset('assets/achievement.svg')}} style="width: 5%; vertical-align: baseline;"/> Achievements </h2>

      @foreach ($achievement as $ach)
        <div class="col-sm-4">
          <div class="card">
                  <div class="card-body">
                      <h5 class="card-title" style="font-weight: 800; font-size: 200;">{{$ach->title}}</h5>
                      <div id="achievements_contents">
                        <p>
                          <?php echo $ach->description ?>
                        </p>
                      </div>
                  </div>
            </div>
        </div>
       @endforeach
    </div>
    <br>

    <div class="row" id="carousel_row" style="margin-top: -19%;">
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

 <div class="container mayor_" id="news_sec">
   @include('layouts.index.agenda')
      <div class="row news_row" style="margin-top: -25% !important;" >

        <h1 style="text-align: center;">NEWS</h1>
        <div class="col-sm-12">
            <div class="card" id="news_card">
                <div class="card-body">
                    <h2 class="card-title" style="font-weight: 800; font-size: 200;"></h2>
                        <div class="recent_small" style="margin-top: -3%; !important">
                            <div class="row">
                                <?php $i=0; ?>
                                @foreach($news as $row)
                                <?php $i++; ?>
                                    <div class="col-4 col-sm-4">

                                      <div class="card mb-2">
                                        <div class="card_img" style="padding:3%;">
                                          <img src="{{asset("uploads/" . $row['filename']) }}"  style="width: 100%;height: auto!important;display: block;margin: 0 auto;" />
                                        </div>

                                        <div class="card-body">
                                          {{-- <span class="card-title" style="margin: 0; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical;"><a href="{{action( 'Pages@news_contents', $row22->id )}}" target="_blank" ><?php echo $row22['title'] ?> </a></span> --}}

                                          <a href="{{action( 'Pages@news_contents', $row->id )}}"><?php echo $row['title'] ?></a>
                                        </div>
                                      </div>
                                    </div>
                                    @if ($i == 3)
                                        @break
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div id="_viewmore">
                          <a  href="{{action( 'Pages@news_list')}}" target="_blank" >view more articles</a>
                        </div>
                </div>

            </div>
        </div>
        <div class="row mt-5 state">
          <div class="col-4">
            <h1 style="color: #111; font-family: 'Helvetica Neue', sans-serif; font-size: 75px; font-weight: bold; letter-spacing: -1px; line-height: 1; text-align: right;">The State of the City Address of San Juan Mayor Francisco Javier M. Zamora</h1>
          </div>
          <div class="col-8">
            <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FMayorFrancisZamora%2Fvideos%2F230078509142960%2F&show_text=false&width=560&t=0" width="100%" height="600" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
          </div>
        </div>

        <div class="row mt-5 statemob" style="display:none;">
          <div class="col-12">
          <h1 style="text-align:center;">The State of the City Address of San Juan Mayor Francisco Javier M. Zamora</h1>
          <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FMayorFrancisZamora%2Fvideos%2F230078509142960%2F&show_text=false&width=560&t=0" width="100%" height="700" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
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
                                            <br><a id="bulletin_desc" href="{{action( 'Pages@news_contents', $row->id )}}"> <?php echo $row->title; ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div id="_viewmore">
                        <a  href="/content/list">view more articles</a>
                    </div>
                </div>
            </div>

            <div class="row" id="social_med">
            {{-- FB --}}
              <div class=" col-sm-4">
                <div class="card">
                  <div class="card-body" id="social">
                    <div id="fb-root"></div>
                    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0" nonce="Q2u8vjt1"></script>
                      <div class="fb-page" data-href="https://www.facebook.com/CityofSanJuanNCRPhilippines/" data-tabs="timeline" data-width="" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/CityofSanJuanNCRPhilippines/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/CityofSanJuanNCRPhilippines/">San Juan City, Philippines</a></blockquote></div>

                        </div>
                      </div>
                  </div>
              {{-- twiiter --}}
              <div class=" col-sm-4">
                <div class="card">
                  <div class="card-body" id="social">
                    {{-- Twitter --}}
                  <a class="twitter-timeline" data-width="400" data-height="500" data-theme="light" href="https://twitter.com/sanjuancityncr?ref_src=twsrc%5Etfw">Tweets by sanjuancityncr</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

                        </div>
                      </div>
                  </div>
              <div class=" col-sm-4">
                <div class="card">
                  <div class="card-body" id="social">
                    {{-- Instagram --}}
                    <blockquote style="height: 489px;" class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/CMlDW4XBIb6/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="13" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/CMlDW4XBIb6/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/CMlDW4XBIb6/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Mayor Francis Zamora (@franciszamora30)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>

                        </div>
                      </div>
                </div>
                </div>


              </div>
            </div>
      </div>

    <br>

    </div>
  </div>
</div>


        </div>
    </div>
</div>



@endsection
