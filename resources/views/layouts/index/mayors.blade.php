<style>
  .para{
    background-image: url('assets/mock/mayorscornerban.jpg');
    background-repeat:no-repeat;
    /* Set a specific height */
  min-height: 500px;

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  }
  @media screen and (max-width: 766px) and (min-width: 200px){
    .mayors_link{
      border: none;
      color: white;
      padding: 16px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 15px;
      margin: 4px 2px;
      transition-duration: 0.4s;
      cursor: pointer;
      border-radius:5px;
      margin-right: 10%;
      margin-top: 10%;
      float: right;
      font-weight: 700;
    }
    .mayorcornerbtn {
      background-color: #e63946;
      color: white;
      border: 5px solid #008CBA;
    }

    .mayorcornerbtn:hover {
      background-color: white;
      color: black;
    }
  }
</style>
<div class="container" id="mayors_corner" style="box-shadow: 0px 3px 3px #cccccc; padding: 0;">
  <img class="mb-2" src="{{asset('assets/mayor.jpg')}}" width="100%" />
  <div class="card-body" style="padding: 0;overflow-y: auto;">
    <h2 class="card-title blue" style="color:#fff !important; padding: 0 !important; text-align:center; font-weight: 600; font-size:40px;">MAYOR'S CORNER</h2>
  </div>
    <div class="row para" style="height: 700px;">
        <div class="container-lg my-3" style="background-color:white;   border-radius: 10px; background: rgba(249, 249, 249, 0.9);height: 650px; margin-bottom: 1rem!important;">
            <div id="myCarousel1" class="carousel slide" data-ride="carousel" data-interval="3000">
                <!-- Carousel indicators -->

                <ol class="carousel-indicators">
                  <?php
                  $counter = 0;
                  foreach ($news as $item) {
                        $counter++;
                        // echo $counter;
                        //  echo $counter-1;
                         echo '<li data-target="#myCarousel1" data-slide-to="$counter-1"></li>';
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
                              <div id="article_contents" style="color:#000;text-decoration:none !important;"><?php echo  $row['desc'] ?></div>
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
                              <div id="article_contents"><?php echo $row['desc'] ?></div>
                              {{-- <a id="article_link"  href="news_article" style="margin-top:2%;color:#2b92b0; font-weight: 700; float: right;" >READ MORE</a> --}}
                            </div>
                          </div>
                        </div>
                      </div>
                    @endif
                  @endforeach
                </div>
                <!-- Carousel controls -->
                <a class="carousel-control-prev" href="#myCarousel1" data-slide="prev">
                    <span><img src={{asset('assets/right-arrow.svg')}} style="width: 25%;rotation: 180deg;transform: rotate(180deg);"/> </span>
                </a>
                <a class="carousel-control-next" href="#myCarousel1" data-slide="next">
                  <span><img src={{asset('assets/right-arrow.svg')}} style="width: 25%;"/> </span>

                </a>


            </div>
        </div>
    </div>
    <div class="col-12">
      <a class="mayorcornerbtn mayors_link" href="mayors_page">VISIT PAGE</a>
    </div>
</div>
