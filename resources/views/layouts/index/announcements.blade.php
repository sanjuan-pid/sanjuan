<div class="class">
    <div class="row">
          <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet">
      <!-- Material Design Bootstrap -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/css/mdb.min.css" rel="stylesheet">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.0.10/font-awesome-animation.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      <link rel="shortcut icon" href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/favicon.ico">
      <div class="container my-4">


      <!--Carousel Wrapper-->
      <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

        <!--Controls-->
        <div class="controls-top">
          <a class="btn-floating" href="#multi-item-example" data-slide="prev">Previous</i></a>
          <a class="btn-floating" href="#multi-item-example" data-slide="next" style="float: right;">Next</a>
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
                <?php $i++; ?>
                @if($row['show'] == 1)
                  @if ($i ==1)
                  <div class="col-md-3">
                    <div class="card mb-2">
                      <div class="card_img" style="padding:3%;">
                          <img class="card-img-top"  src="{{asset("uploads/" . $row22['filename']) }}" alt="Card image cap"  style="height: 300px !important;" />
                      </div>
                      
                      <div class="card-body">
                        <span class="card-title" style="margin: 0; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical;"><a href="{{action( 'Pages@news_contents', $row22->id )}}" target="_blank" ><?php echo $row22['title'] ?> </a></span>
                        <p class="card-text">
                      
                        </p>
                        <a class="btn btn-primary">View More</a>
                      </div>
                </div>
                  @else 
                  <div class="col-md-3 clearfix d-none d-md-block">
                    <div class="card mb-2">
                          <div class="card_img" style="padding:3%;">
                              <img class="card-img-top"  src="{{asset("uploads/" . $row22['filename']) }}" alt="Card image cap"  style="height: 300px !important;" />
                          </div>
                          
                          <div class="card-body">
                            <span class="card-title" style="margin: 0; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical;"><a href="{{action( 'Pages@news_contents', $row22->id )}}" target="_blank" ><?php echo $row22['title'] ?> </a></span>
                            <p class="card-text">
                          
                            </p>
                            <a class="btn btn-primary">View More</a>
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
              @foreach($announcement3 as $row22)
                <?php $i++; ?>
                @if($row['show'] == 1)
                  @if ($i ==1)
                  <div class="col-md-3">
                    <div class="card mb-2">
                      <div class="card_img" style="padding:3%;">
                          <img class="card-img-top"  src="{{asset("uploads/" . $row22['filename']) }}" alt="Card image cap"  style="height: 300px !important;" />
                      </div>
                      
                      <div class="card-body">
                        <span class="card-title" style="margin: 0; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical;"><a href="{{action( 'Pages@news_contents', $row22->id )}}" target="_blank" ><?php echo $row22['title'] ?> </a></span>
                        <p class="card-text">
                      
                        </p>
                        <a class="btn btn-primary">View More</a>
                      </div>
                </div>
                  @else 
                  <div class="col-md-3 clearfix d-none d-md-block">
                    <div class="card mb-2">
                          <div class="card_img" style="padding:3%;">
                              <img class="card-img-top"  src="{{asset("uploads/" . $row22['filename']) }}" alt="Card image cap"  style="height: 300px !important;" />
                          </div>
                          
                          <div class="card-body">
                            <span class="card-title" style="margin: 0; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical;"><a href="{{action( 'Pages@news_contents', $row22->id )}}" target="_blank" ><?php echo $row22['title'] ?> </a></span>
                            <p class="card-text">
                          
                            </p>
                            <a class="btn btn-primary">View More</a>
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