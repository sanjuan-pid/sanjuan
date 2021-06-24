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
    <br>
    <link rel="stylesheet" type="text/css" href="/css/dev_h.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <div id="side_prof" style="position: fixed;margin-top: 15%;">
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

    <div class="container" id="vicempage">
        <div class="container" id="vicepic" style="max-width: 100%;">
          <div class="row">
            <div class=" col-12 col-sm-12">
              <img id="vm_pic" src="{{asset('assets/vice/vice2.png')}}"style="width:100%; position: relative; height:95% !important; z-index:-1; display: block; margin-left: auto; margin-right: auto;border-radius: 10px;"/>
            </div>
          </div>
        </div>


       <div class="container" style="max-width: 70%; z-index: 4; margin-top: -13%;">
          <div class="row" id="profile_row">
           <div class=" col-12 col-sm-12">
            <div class="c">
              <div class="cbody"style="margin-top:230px;">
              <div class="card">
              <div class="card-body">
              <h1 class="pf" style="font-size:40px; padding : 0 5%; ">BIOGRAPHY</h1>
              <p style=" font-weight: 500; margin-top: 15px; text-align: justify; padding:0 5%;">Hon. Warren Villa is a man known for his strong faith and belief in God. He is also known for his dedication and passion to be of service to the city of San Juan, and is commonly known for being the public servant who gives free medicines to his constituents. He is the eldest son of Enriqueta and Eduardo Villa. And he is happily married to Regina Villa, and a father to their only son Nathanael Habakkuk.
              <br><br>What others might not know is that from the year 1989 to 1997, he was the Assistant Program Director of Magic 89.9 DWTM-FM. And by the year 1997 to 2003, he became the Program Director of Smooth Jazz Citylite 88.3 DWCT-FM.
              <br><br>He served as the Chairman of Kristiyanong kabataan para sa Bayan, San Juan Chapter, in the year 1999 to 2004. He also became the NCR Chairman of Bangon Kabataan in the year 2004. He was involved in a local organization in San Juan which is the JCI San Juan “Pinaglabanan” Chapter where he became the President in the year 2005. Two years later, he was elected as the Regional Vice President of the JCI Philippines.
             </p>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
 <div class="container ac" style="max-width: 100%; margin-top:230px;">
   <div class="row" id="achievement_row">
     <div class="card">
       <div class="card-body">
         <h2 class="card-title" style="font-weight: 800; font-size: 200; padding: 0 5% ;"><img src={{asset('assets/achievement.svg')}} style="width: 5%; vertical-align: baseline;"/> Achievements </h2>

         @foreach ($achievement as $ach)
         <div class="col-sm-4" style="margin-top:2%;">
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
     </div>
   </div>
 </div>

 <div class="container ag"style=" max-width: 100%; margin-top:230px;">
     <div class=" col-12 col-sm-12" id="agenda_row" style="padding: 0 6%; max-width: 100%;">
     <div class="card">
       <div class="card-body">
         <div class="sj">
         <h2 class="card-title" style="font-weight: 800; font-size: 200;"><img src={{asset('assets/porfolio.svg')}} style="width: 5%; vertical-align: baseline;"/> Programs </h2>
           @foreach ($programs as $program)
            <div class=" col-12 col-sm-12">
              <h1 style="font-size:25px;">{{ $program->title }}</h1>
            </div>
           @endforeach
         </div>
     </div>
   </div>
 </div>
</div>

 <div class="row news_row" style="margin-top:200px;">
   <div class=" col-12 col-sm-12">
     <div class="card">
       <div class="card-body">
         <div class="row" >
           <div class=" col-sm-6">
             <div class="card"style="height: 100%;">
               <div class="card-body">
                 <div class="sj" style="margin-top: 0; text-align: center;">
                   <h1 style="font-size:20px;">FACEBOOK</h1>
                 <div id="fb-root"></div>
                   <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0" nonce="KaMqTxyX"></script>
                 <div class="fb-page" data-href="https://www.facebook.com/vicemayorwarrenvilla/" data-tabs="timeline" data-width="" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/vicemayorwarrenvilla/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/vicemayorwarrenvilla/">Vice Mayor Warren Villa</a></blockquote></div>
               </div>
             </div>
           </div>
         </div>
         <div class=" col-sm-6">
           <div class="card" style="height: 100%;">
             <div class="card-body" style="margin: auto;">
               <div class="sjinsta" style="margin-top: 0; text-align: center;">
                 <h1 style="font-size:20px;">INSTAGRAM</h1>
                 <blockquote style="height: 500px;" class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/B_9nK_tJFrN/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="13" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/B_9nK_tJFrN/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/B_9nK_tJFrN/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Warren Villa (@warrenvilla)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
               </div>
             </div>
          </div>
        </div>
        <div class=" col-sm-6" style="margin-top:10px;">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title"> <h1 class="newshead">UPDATES</h1></h2>
                        <div class="recent_big">
                            <?php $i=0; ?>
                             @foreach ($updates as $update)
                             <?php $i++; ?>
                             @if($update->show = 1)
                              <div class=" col-12 col-sm-12">
                               <img src="{{asset("uploads/" . $update['filename']) }}"  style="width: 100%;  height: auto; margin-bottom:2%;" />


                              <p class="card-text title_big"style="white-space: nowrap; width: 458px; overflow: hidden; text-overflow: ellipsis;"><a href="#">{{ $update->title }}</p></a>
                                </div>
                              @endif
                              @if ($i == 1)
                                  @break
                              @endif
                             @endforeach
                        </div>
                        <br>
                        <div class="recent_small">

                            <div class="row">
                               <?php $i=0; ?>
                               @foreach ($updates as $update)
                                @if($update->show != 1)
                                 <?php $i++; ?>
                                    <div class="col-4 col-sm-4">
                                         <img src="{{asset("uploads/" . $update['filename']) }}"  style="width: 100%; height: 60%;" />
                                        <p class="recent_psmall">
                                            <a href="#">{{ $update->title }}</a>
                                        </p>
                                    </div>
                                @endif
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
              <div class=" col-sm-6" style="margin-top:10px;">
                  <div class="card ann">
                      <div class="card-body">
                          <h2 class="card-title"><h1 class="newshead">ANNOUNCEMENT</h1></h2>
                              @foreach ($ann as $row)
                                 @if($row->show == 1)
                                    <div class="recent_big">
                                        <img src='{{asset("uploads/" . $row->filename) }}' id="image_big" style="width: 100%; height:100%;" />
                                        <p class="card-text title_big" style="white-space: nowrap; width: 458px; overflow: hidden; text-overflow: ellipsis;"><a href="#" >{{$row->title}}</p></a>
                                    </div>
                                  @endif
                                @endforeach
                              <br>
                              <div class="recent_small">
                                  <div class="row">
                                    <?php $i=0; ?>
                                      @foreach ($ann as $row)
                                        @if($row->show != 1)
                                        <?php $i++; ?>

                                        <div class="col-4 col-sm-4">
                                            <img src="{{asset("uploads/" . $row->filename) }}"  style="width: 100%; height: 60%;" />
                                            <p class="recent_psmall">
                                                <a href="#"style="font-size:12px;">{{$row->title}} </a>
                                            </p>
                                        </div>
                                        @endif
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
                    <br>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>




@endsection
