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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <div id="side_prof" style="position: fixed;margin-top: 5%;">
        <a class="btn side_btn" id="news_btn"   style="background: rgb(49, 64, 150); color:#fff;display: block;">NEWS<img src={{asset('assets/newspaper.svg')}} style="width: 13%; float: right;"/></a>
        <br>
        <br>
        <a class="btn side_btn" id="profile_btn" style="background: rgb(49, 64, 150); color:#fff;display: block;">PROFILE <img src={{asset('assets/cv.svg')}} style="width: 13%; float: right;"/></a>
        <br>
        <br>
        <a class="btn side_btn" id="achievement_btn"  style="background: rgb(49, 64, 150); color:#fff;display: block;">ACHIEVEMENTS<img src={{asset('assets/achievement.svg')}} style="width: 13%; float: right;"/></a>
        <br>
        <br>
        <a class="btn side_btn" id="programs_btn"   style="background: rgb(49, 64, 150); color:#fff;display: block;">PROGRAMS<img src={{asset('assets/porfolio.svg')}} style="width: 13%; float: right;"/></a>

    </div>
        <div class="container" style="max-width: 100%;">
          <div class="row">
            <div class=" col-12 col-sm-12">
            <img src="{{asset('assets/congronny/congressman.jpg')}}"style="width:70%; height:90%; z-index:-1; display: block; margin-left: auto; margin-right: auto; border-radius: 10px;"/>

            </div>
          </div>
        </div>

       <div class="container" style="max-width: 70%; z-index: 4; margin-top: -13.8%;">
          <div class="row" id="profile_row">

            <div class="col-12">
                <div class="card mt-3 tab-card">
                  <div class="card-header tab-card-header">
                      <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="One" aria-selected="true">Congressman Zamora </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="Two" aria-selected="false">Atty Bel Zamora</a>
                        </li>
                      </ul>
                  </div>

                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active p-3" id="one" role="tabpanel" aria-labelledby="one-tab">
                        <h5 class="card-title">Congressman Ronaldo "Ronny" Bayan </h5>
                        <p class="card-text">Filipino lawyer and politician who currently serves as representative of the Lone District of San Juan City. He topped the bar exams in 1969 and was among the Ten Outstanding Young Men of the Philippines in 1972.
                        Zamora was first elected into public office in 1978 together with Imelda Marcos and 19 other candidates of the administration coalition Kilusang Bagong Lipunan as parliament members from Metro Manila. In 1984, when the constituency in the Batasang Pambansa was modified—to elect members by province and cities, instead of regions—Zamora ran for the parliamentary seat for San Juan–Mandaluyong but lost to opposition candidate Neptali Gonzales.
                        <br>
                        When Congress was restored under a new constitution in 1987, he ran and was elected representative of the Lone district of San Juan–Mandaluyong in 1987 and 1992, and as representative of the Lone district of San Juan in 1995.
                        <br>
                        Barred from seeking another term in 1998, Zamora helped his long-time political ally and townsmate Joseph Estrada in his presidential bid in 1998. Estrada later appointed Zamora as his Executive Secretary. Zamora resigned from Estrada's cabinet at the height of Estrada's impeachment trial to run again as representative of San Juan in 2001 where he would be reelected again for three terms. In the 14th Congress, Zamora was also elected as Minority Floor Leader.
                        </p>      
                      </div>
                      <div class="tab-pane fade p-3" id="two" role="tabpanel" aria-labelledby="two-tab">
                        <h5 class="card-title">Atty Bel Zamora</h5>
                        <p class="card-text">Profile</p>
                      </div>
                    </div>
                </div>
            </div>
           <div class=" col-12 col-sm-12">
            <div class="c">
              <div class="cbody">
          
           </div>
         </div>
       </div>

        </div>
        <div class="container">
          <div class="row" id="achievement_row" style="margin-top: -18%;">
                <div class="card mt-3 tab-card">
                  <div class="card-header tab-card-header">
                      <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="five-tab" data-toggle="tab" href="#five" role="tab" aria-controls="five" aria-selected="true">Congressman Zamora </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="six-tab" data-toggle="tab" href="#six" role="tab" aria-controls="six" aria-selected="false">Atty Bel Zamora</a>
                        </li>
                      </ul>
                  </div>

                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active p-3" id="five" role="tabpanel" aria-labelledby="five-tab">
                       <!--  <h5 class="card-title">Congressman Ronaldo "Ronny" Bayan </h5> -->
                        <h2 class="card-title" style="font-weight: 800; font-size: 200;"><img src={{asset('assets/achievement.svg')}} style="width: 5%; vertical-align: baseline;"/> Achievements </h2>
                          <div class="row">
                              @foreach ($achievement as $ach) 
                                @if($ach->content_tag=="congressman")
                                  <div class="col-sm-4" style="margin-top:2%;">
                                    <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title" style="font-weight: 800; font-size: 200; height: auto !important;">{{$ach->title}}</h5>
                                                <div id="achievements_contents">
                                                  <p>
                                                    <?php echo $ach->description ?>
                                                  </p>
                                                </div>
                                            </div>
                                      </div>
                                  </div>
                                @endif
                             @endforeach
                         </div>   
                      </div>
                      <div class="tab-pane fade p-3" id="six" role="tabpanel" aria-labelledby="six-tab">
                       <!--  <h5 class="card-title">Atty Bel Zamora</h5> -->
                        <h2 class="card-title" style="font-weight: 800; font-size: 200;"><img src={{asset('assets/achievement.svg')}} style="width: 5%; vertical-align: baseline;"/> Achievements </h2> 
                          <div class="row">
                            @foreach ($achievement as $ach) 
                              @if($ach->content_tag=="atty_b")
                                <div class="col-sm-4" style="margin-top:2%;">
                                  <div class="card">
                                          <div class="card-body">
                                              <h5 class="card-title" style="font-weight: 800; font-size: 200; height: auto !important;">{{$ach->title}}</h5>
                                              <div id="achievements_contents">
                                                <p>
                                                  <?php echo $ach->description ?>
                                                </p>
                                              </div>
                                          </div>
                                    </div>
                                </div>
                              @endif
                           @endforeach
                         </div> 
                      </div>
                    </div>
                </div>    

          </div>
        </div>

        <div class="row" id="agenda_row">
            <div class="col-12">
                <h1>Programs</h1>
                <div class="card mt-3 tab-card">
                  <div class="card-header tab-card-header">
                      <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="four-tab" data-toggle="tab" href="#four" role="tab" aria-controls="four" aria-selected="true">Congressman Zamora </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="three-tab" data-toggle="tab" href="#three" role="tab" aria-controls="three" aria-selected="false">Atty Bel Zamora</a>
                        </li>
                      </ul>
                  </div>

                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active p-3" id="four" role="tabpanel" aria-labelledby="four-tab">
                        <h5 class="card-title">                 
                         @foreach ($programs as $program)
                          @if($program->content_tag == "cong")
                           <div class=" col-12 col-sm-12">
                             <h1 style="font-size:25px;">{{ $program->title }}</h1>
                           </div>
                          @endif
                          @endforeach
                        </p>      
                      </div>
                      <div class="tab-pane fade p-3" id="three" role="tabpanel" aria-labelledby="three-tab">
                          <h5 class="card-title">                 
                           @foreach ($programs as $program)
                              @if($program->content_tag == "atty_b")
                               <div class=" col-12 col-sm-12">
                                 <h1 style="font-size:25px;">{{ $program->title }}</h1>
                               </div>
                              @endif
                            @endforeach
                          </p> 
                      </div>
                    </div>
                </div>
            </div>
        </div>

  <!--       <div class="container">
          <div class=" col-12 col-sm-12" id="agenda_row">
            <div class="card">
              <div class="card-body">
                <div class="sj">
                  <h1 style="font-size:40px; margin-top: 0; text-align: center;">PROGRAMS</h1>
                  @foreach ($programs as $program)
                   <div class=" col-12 col-sm-12">
                     <h1 style="font-size:25px;">{{ $program->title }}</h1>
                   </div>
                  @endforeach
                </div>
              </div>
           </div>
          </div>
        </div> -->
<!--        <div class="container news_row" style="max-width: 70%; z-index: 4; margin-top: -13.8%;">
          <div class="row">

            <div class="col-12">
                <div class="card mt-3 tab-card">
                  <div class="card-header tab-card-header">
                      <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="One" aria-selected="true">Congressman Zamora </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="Two" aria-selected="false">Atty Bel Zamora</a>
                        </li>
                      </ul>
                  </div>

                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active p-3" id="one" role="tabpanel" aria-labelledby="one-tab">
                        <h5 class="card-title">Congressman Ronaldo "Ronny" Bayan </h5>
                        <p class="card-text">Filipino lawyer and politician who currently serves as representative of the Lone District of San Juan City. He topped the bar exams in 1969 and was among the Ten Outstanding Young Men of the Philippines in 1972.
                        Zamora was first elected into public office in 1978 together with Imelda Marcos and 19 other candidates of the administration coalition Kilusang Bagong Lipunan as parliament members from Metro Manila. In 1984, when the constituency in the Batasang Pambansa was modified—to elect members by province and cities, instead of regions—Zamora ran for the parliamentary seat for San Juan–Mandaluyong but lost to opposition candidate Neptali Gonzales.
                        <br>
                        When Congress was restored under a new constitution in 1987, he ran and was elected representative of the Lone district of San Juan–Mandaluyong in 1987 and 1992, and as representative of the Lone district of San Juan in 1995.
                        <br>
                        Barred from seeking another term in 1998, Zamora helped his long-time political ally and townsmate Joseph Estrada in his presidential bid in 1998. Estrada later appointed Zamora as his Executive Secretary. Zamora resigned from Estrada's cabinet at the height of Estrada's impeachment trial to run again as representative of San Juan in 2001 where he would be reelected again for three terms. In the 14th Congress, Zamora was also elected as Minority Floor Leader.
                        </p>      
                      </div>
                      <div class="tab-pane fade p-3" id="two" role="tabpanel" aria-labelledby="two-tab">
                        <h5 class="card-title">Atty Bel Zamora</h5>
                        <p class="card-text">Profile</p>
                      </div>
                    </div>
                </div>
            </div>
           <div class=" col-12 col-sm-12">
            <div class="c">
              <div class="cbody">
          
           </div>
         </div>
       </div -->

        <div class="row news_row">
          <div class=" col-12 col-sm-12 mt-2">
            <div class="row" >
              <div class="card mt-3 tab-card">
                <div class="card-header tab-card-header">
                    <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                      <li class="nav-item">
                          <a class="nav-link active" id="seven-tab" data-toggle="tab" href="#seven" role="tab" aria-controls="seven" aria-selected="true">Congressman Zamora </a>
                      </li>
                      <li class="nav-item">
                         <a class="nav-link" id="seven1-tab" data-toggle="tab" href="#seven1" role="tab" aria-controls="seven1" aria-selected="true">Atty Bel Zamora</a>
                      </li>
                    </ul>
                </div>
                 <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active p-3" id="seven" role="tabpanel" aria-labelledby="seven-tab">
                      <h5 class="card-title">Congressman Ronaldo "Ronny" Bayan </h5>
                        <div class="row">
                          <div class=" col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h2 class="card-title"> <h1 style="font-size:40px; margin-top: 0; text-align: center;">UPDATES</h1></h2>
                                        <div class="recent_big">
                                            <?php $i=0; ?>
                                             @foreach ($updates as $update)
                                             <?php $i++; ?>
                                              @if($update->show == 1)
                                                @if($update->content_tag == "cong")
                                                  <div class=" col-12 col-sm-12">
                                                      <img src="{{asset("uploads/" . $update->filename) }}"  style="width: 100%;  height: auto; margin-bottom:2%;" />
                                                      <p class="card-text title_big"style="white-space: nowrap; width: 458px; overflow: hidden; text-overflow: ellipsis;"><a href="#"> {{ $update->title }}</p></a>
                                                  </div>
                                                 @endif
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
                                                      @if($update->content_tag = "cong")
                                                        <div class="col-4 col-sm-4">
                                                             <img src="{{asset("uploads/" . $update->filename) }}"  style="width: 100%; height: 60%;" />
                                                            <p class="recent_psmall">
                                                                <a href="#">{{ $update->title }}</a>
                                                            </p>
                                                        </div>
                                                      @endif
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
                          <div class=" col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h2 class="card-title"><h1 style="font-size:40px; margin-top: 0; text-align: center;">ANNOUNCEMENT</h1></h2>
                                            @foreach ($ann as $row)
                                               @if($row->show == 1)
                                                 @if($row->content_tag == "cong")
                                                    <div class="recent_big">
                                                        <img src='{{asset("uploads/" . $row->filename) }}' id="image_big" style="width: 100%; height:100%;" />
                                                        <p class="card-text title_big" style="white-space: nowrap; width: 458px; overflow: hidden; text-overflow: ellipsis;"><a href="#" >{{$row->content_tag}} {{$row->title}}</p></a>
                                                    </div>
                                                  @endif
                                                @endif
                                            @endforeach
                                            <br>
                                            <div class="recent_small">
                                                <div class="row">
                                                  <?php $i=0; ?>
                                                    @foreach ($ann as $row)
                                                      @if($row->show != 1)
                                                      <?php $i++; ?>
                                                        @if($row->content_tag = "cong")
                                                          <div class="col-4 col-sm-4">
                                                              <img src="{{asset("uploads/" . $row->filename) }}"  style="width: 100%; height: 60%;" />
                                                              <p class="recent_psmall">
                                                                  <a href="#"style="font-size:12px;">{{$row->content_tag}} {{$row->title}}  </a>
                                                              </p>
                                                          </div>
                                                        @endif 
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
                          </div>
                    </div>
                    <div class="tab-pane fade  p-3" id="seven1" role="tabpanel" aria-labelledby="seven1-tab">
                      <h5 class="card-title">Atty Bel Zamora</h5>
                        <div class="row">
                          <div class=" col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h2 class="card-title"> <h1 style="font-size:40px; margin-top: 0; text-align: center;">UPDATES</h1></h2>
                                        <div class="recent_big">
                                            <?php $i=0; ?>
                                             @foreach ($updates_atty as $update)
                                             <?php $i++; ?>
                                             @if($update->show = 1)
                                                <div class=" col-12 col-sm-12">
                                                  <img src="{{asset("uploads/" . $update->filename) }}"  style="width: 100%;  height: auto; margin-bottom:2%;" />
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
                                                 @foreach ($updates_atty as $update)
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
                          <div class=" col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h2 class="card-title"><h1 style="font-size:40px; margin-top: 0; text-align: center;">ANNOUNCEMENT</h1></h2>
                                            @foreach ($ann_atty as $row)
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
                                                    @foreach ($ann_atty as $row)
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
                        </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
                  <br>
@endsection
