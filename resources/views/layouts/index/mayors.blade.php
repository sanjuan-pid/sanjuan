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
      padding: 5px 8px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 15px;
      margin: 4px 2px;
      transition-duration: 0.4s;
      cursor: pointer;
      border-radius:5px
      float: right;
      font-weight: 700;
      z-index: 100;
      margin-top: -15px !important;
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
  @media screen and (min-device-width: 1205px) and (max-device-width: 1366px){
      #mayors_corner{
        max-width: 100% !important;
        width: 100% !important;
        flex: 0 0 100%;
      }
      .mayors_link{
        border: none;
        color: white;
        padding: 15px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 15px;
        margin: 4px 2px;
        transition-duration: 0.4s;
        cursor: pointer;
        border-radius:5px
        float: right;
        font-weight: 700;
        z-index: 100;
        margin-top: -100px !important;
        margin-right: 5% !important;
      }

      img#image_slide {
          width: 380px !important;
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
  @media screen and (min-device-width: 1551px) and (max-device-width: 1600px){
    .carouselback{
      max-width: 90% !important;
      width: 90% !important;
      flex: 0 0 100%;
    }
    .mayors_link{
      border: none;
      color: white;
      padding: 15px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 15px;
      margin: 4px 2px;
      transition-duration: 0.4s;
      cursor: pointer;
      border-radius:5px
      float: right;
      font-weight: 700;
      z-index: 100;
      margin-top: -100px !important;
      margin-right: 5% !important;
    }

    img#image_slide {
        width: 380px !important;
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
  #article_contents p{
    color: white !important;
  }
  #article_contents span{
    color: white !important;
  }
</style>
<div class="container" id="mayors_corner" style="box-shadow: 0px 3px 3px #cccccc; padding: 0;">
  <img class="mb-2" src="{{asset('assets/mayor.jpg')}}" width="100%" />
  <div class="card-body" style="padding: 0;overflow-y: auto;">
    <h2 class="card-title blue" style="color:#fff !important; padding: 0 !important; text-align:center; font-weight: 600; font-size:40px;">MAYOR'S CORNER</h2>
  </div>
    <div class="row para" style="height: 700px;">
        <div class="container-lg my-3 carouselback" style=" background: rgb(82 81 81 / 90%); border-radius: 10px; height: 650px; margin-bottom: 1rem!important;">
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
                              <a  href="{{action( 'Pages@news_contents', $row['id'] )}}"  style="color:white !important;" >
                                <h2 id="article_title" style="color:white !important; text-decoration:none !important;">{{$row['title']}}</h2>
                              </a>
                              <div id="article_contents" style="color:white !important;text-decoration:none !important;"><?php echo  $row['desc'] ?></div>
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
                                <a  href="{{action( 'Pages@news_contents', $row['id'] )}}"  style="color:white !important;" >
                                  <img src="{{asset("uploads/" . $row['filename']) }}"  id="image_slide">
                                </a>
                              </div>
                            </div>
                            <div class=" col-sm-6" style="text-align: left;">
                              <a  href="{{action( 'Pages@news_contents', $row['id'] )}}" style="color:white !important;" >
                                <h2 id="article_title" style="color:white !important;text-decoration:none !important;">{{$row['title']}}</h2>
                              </a>
                              <div id="article_contents" style="color:white !important;text-decoration:none !important;"><?php echo $row['desc'] ?></div>
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
                    <span><img src={{asset('assets/right-arrow.svg')}} style="width: 25%;rotation: 180deg;transform: rotate(180deg); fill:white !important;"/> </span>
                </a>
                <a class="carousel-control-next" href="#myCarousel1" data-slide="next">
                  <span><img src={{asset('assets/right-arrow.svg')}} style="width: 25%; fill:white !important;"/> </span>

                </a>


            </div>
        </div>
    </div>
    <div class="col-12">
      <a class="mayorcornerbtn mayors_link" href="mayors_page">VISIT PAGE</a>
    </div>
</div>
