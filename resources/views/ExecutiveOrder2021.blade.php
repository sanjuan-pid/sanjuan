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
    #a1{
      padding-top: 20px;
      font-weight: 700;
      font-size: 20px;
    }
    #carddept{
      border-radius:5px !important;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
      height: 100%;
      background-color: #eff1ff;
    }
    #carddept:hover #a1{
      color: red  !important;
      transition: .7s !important;
    }
    #carddept:hover{
      background-color: white !important;
      transition: .7s !important;
    }
    a.executive{
      text-decoration: none !important;
      color:inherit !important;
    }
    .deptbtn{
      border-style:solid;
      border-width:5px;
      border-color: blue;
      height: 50%;
    }
    .deptside {
      left: 10%;
      position: absolute;
      margin-top: 3%;
    }


    .buttonexe span {
      cursor: pointer;
      display: inline-block;
      position: relative;
      transition: 0.2s;
    }

    .buttonexe span:after {
      content: '\22D9';
      position: absolute;
      opacity: 0;
      top: 0;
      right: -10px !important;
      transition: 0.1s;

    }

    .buttonexe:hover span {
      padding-right: 25px;
    }

    .buttonexe:hover span:after {
      opacity: 1;
      right: 0;
    }
    .buttonexe:hover{
      background-color: blue;
      color: white;
    }


    .buttonexe {
      border-radius: 4px;
      background-color: #fff;
      border-style: solid !important;
      border-color: blue !important;
      font-weight: 700;
      border: none;
      color: blue;
      text-align: center;
      font-size: 18px;
      padding: 15px;
      width: 240px;
      transition: all 0.5s;
      cursor: pointer;
      margin: 5px;
    }
    .dt .active span:after {
      opacity: 1;
      right: 0;
    }
    .dt .active span{
      padding-right: 25px;
    }
    .dt .active{
      background-color: blue;
      color: white;
    }
  @media screen and (min-device-width: 1601px) and (max-device-width: 1920px)  {
      div#excon {
        max-width: 100% !important;
        width: 100% !important;``
        flex: 0 0 100%;
        padding-bottom: 5%;
      }
      #dtpage .w3-container{
        max-width: 70% !important;
        width:70% !important;
        flex: 0 0 100%;
        padding: 0 !important;
        margin-left: 25rem!important;
      }
      #exeone{
        margin-left: 18rem!important;
        padding-left: 0 !important;
        padding-right: 0 !important;
        width: 87% !important;
        margin-top: 1rem !important;
        padding-bottom: 5%;
      }
      #exetwo{
        margin-left: 18rem!important;
        padding-left: 0 !important;
        padding-right: 0 !important;
        width: 87% !important;
        margin-top: 1rem !important;
        padding-bottom: 5%;
      }
      #exethree{
        margin-left: 18rem!important;
        padding-left: 0 !important;
        padding-right: 0 !important;
        width: 87% !important;
        margin-top: 1rem !important;
        padding-bottom: 15%;
      }
      #deptfour{
        margin-left: 18rem!important;
        padding-left: 0 !important;
        padding-right: 0 !important;
        width: 87% !important;
        margin-top: 1rem !important;
        padding-bottom: 5%;
      }
      #deptfive{
        margin-left: 18rem!important;
        padding-left: 0 !important;
        padding-right: 0 !important;
        width: 87% !important;
        margin-top: 1rem !important;
        padding-bottom: 5%;
      }
    }
  @media screen and (min-device-width: 1551px) and (max-device-width: 1600px) {
      div#excon {
        max-width: 100% !important;
        width: 100% !important;
        flex: 0 0 100%;
        padding-bottom: 5%;
      }
      .deptside{
        margin-top: 1%;
        width: 50%;
      }
      .deptside button{
        width: 30%;
        font-size: 15px;
        padding-top: 4px;
        padding-bottom: 4px;
      }
      #exeone .ins h1{
      font-size: 28px !important;
      left: 35% !important;
     }
      #exetwo .ins h1{
      font-size: 28px !important;
      left: 35% !important;
     }
       #exethree .ins h1{
       font-size: 28px !important;
       left: 35% !important;
      }
        #deptfour .ins h1{
        font-size: 28px !important;
        left: 35% !important;
       }
       #deptfive .ins h1{
       font-size: 28px !important;
       left: 35% !important;
      }
      #exeone{
        margin-left: 17rem!important;
        padding-left: 0 !important;
        padding-right: 0 !important;
        width: 83% !important;
        margin-top: 0 !important;
      }
      #exetwo{
        margin-left: 17rem!important;
        padding-left: 0 !important;
        padding-right: 0 !important;
        width: 83% !important;
        margin-top: 0 !important;
      }
      #exethree{
        margin-left: 17rem!important;
        padding-left: 0 !important;
        padding-right: 0 !important;
        width: 83% !important;
        margin-top: 0 !important;
      }
      #deptfour{
        margin-left: 17rem!important;
        padding-left: 0 !important;
        padding-right: 0 !important;
        width: 83% !important;
        margin-top: 0 !important;
      }
      #deptfive{
        margin-left: 17rem!important;
        padding-left: 0 !important;
        padding-right: 0 !important;
        width: 83% !important;
        margin-top: 0 !important;
      }
    }
    @media screen and (min-device-width: 1367px) and (max-device-width: 1500px){
      div#excon {
        max-width: 90% !important;
        width: 90% !important;
        flex: 0 0 100%;
        padding-bottom: 5%;
      }
      .deptside{
        margin-top: 1%;
        width: 50%;
      }
      .deptside button{
        width: 30%;
        font-size: 15px;
        padding-top: 4px;
        padding-bottom: 4px;
      }
      #exeone .ins h1{
      font-size: 30px !important;
      left: 35% !important;
     }
      #exetwo .ins h1{
      font-size: 30px !important;
      left: 35% !important;
     }
     #exethree .ins h1{
     font-size: 30px !important;
     left: 35% !important;
    }
    #deptfour .ins h1{
    font-size: 30px !important;
    left: 35% !important;
   }
   #deptfive .ins h1{
   font-size: 30px !important;
   left: 35% !important;
  }
      #exeone{
        margin-left: 17rem!important;
        padding-left: 0 !important;
        padding-right: 0 !important;
        width: 80% !important;
        margin-top: 0 !important;
      }
      #exetwo{
        margin-left: 17rem!important;
        padding-left: 0 !important;
        padding-right: 0 !important;
        width: 80% !important;
        margin-top: 0 !important;
      }
      #exethree{
        margin-left: 17rem!important;
        padding-left: 0 !important;
        padding-right: 0 !important;
        width: 80% !important;
        margin-top: 0 !important;
      }
      #deptfour{
        margin-left: 17rem!important;
        padding-left: 0 !important;
        padding-right: 0 !important;
        width: 80% !important;
        margin-top: 0 !important;
      }
      #deptfive{
        margin-left: 17rem!important;
        padding-left: 0 !important;
        padding-right: 0 !important;
        width: 80% !important;
        margin-top: 0 !important;
      }
    }
    @media screen and (min-device-width: 1205px) and (max-device-width: 1366px){
      div#excon {
        max-width: 90% !important;
        width: 90% !important;
        flex: 0 0 100%;
        padding-bottom: 5%;
      }
      .deptside{
        margin-top: 0;
        width: 50%;
      }
      .deptside button{
        width: 35%;
        font-size: 10px;
        padding-top: 2px;
        padding-bottom: 2px;
      }
      .executive .card-title{
        font-size: 12px !important;
      }
      .executive .card-text{
        font-size: 10px !important;
      }
      #exeone .ins h1{
      font-size: 25px !important;
      left: 35% !important;
     }
      #exetwo .ins h1{
      font-size: 25px !important;
      left: 35% !important;
     }
     #exethree .ins h1{
     font-size: 25px !important;
     left: 35% !important;
    }
    #deptfour .ins h1{
    font-size: 25px !important;
    left: 35% !important;
   }
   #deptfive .ins h1{
   font-size: 25px !important;
   left: 35% !important;
  }
      #exeone{
        margin-left: 17rem!important;
        padding-left: 0 !important;
        padding-right: 0 !important;
        width: 80% !important;
        margin-top: 0 !important;
      }
      #exetwo{
        margin-left: 17rem!important;
        padding-left: 0 !important;
        padding-right: 0 !important;
        width: 80% !important;
        margin-top: 0 !important;
      }
      #exethree{
        margin-left: 17rem!important;
        padding-left: 0 !important;
        padding-right: 0 !important;
        width: 80% !important;
        margin-top: 0 !important;
      }
      #deptfour{
        margin-left: 17rem!important;
        padding-left: 0 !important;
        padding-right: 0 !important;
        width: 80% !important;
        margin-top: 0 !important;
      }
      #deptfive{
        margin-left: 17rem!important;
        padding-left: 0 !important;
        padding-right: 0 !important;
        width: 80% !important;
        margin-top: 0 !important;
      }
    }
    @media screen and (max-width: 766px) and (min-width: 200px) {
      div#excon {
        max-width: 100% !important;
        width:100% !important;
        flex: 0 0 100%;
        padding: 0 !important;
      }
      #dtpage .w3-container{
        max-width: 100% !important;
        width:100% !important;
        flex: 0 0 100%;
        padding: 0 !important;
      }
      #dtpage{
        max-width: 100% !important;
        width:100% !important;
        flex: 0 0 100%;
        padding: 0 !important;
      }
      #exeone{
        margin-left: 0rem!important;
        padding-left: 0 !important;
        padding-right: 0 !important;
        width: 100% !important;
        margin-top: 15px !important;
      }
      #exeone .ins img{
        max-width: 100% !important;
        width: 500px !important;
        flex: 0 0 100%;
        border-radius: 5px !important;
      }
      #exeone .row{
        flex-direction: column !important;
      }

       #exeone .ins h1{
       font-size: 14px !important;
       left: 50% !important;
      }
      #exeone .coldept{
        top: 20px !important;
     }
      #exeone #a1{
        font-size: 18px !important;
      }
      .card-text{
        font-size: 13px !important;
      }
      #dtpage{
        padding-left: 0 !important;
        padding-right: 0 !important;
        margin-top: 2%;
      }
      .deptside{
        display: none;
        z-index: 100;
        background-color: white;
        width: 72%;
        border-radius: 8px;
        padding-left: 30px;
        padding-right: 0px;
      }
      .deptside button{
        width: 80%;
        font-size: 13px;
      }
      .deptside button .ekis{
        font-size: 100px;
      }
      #dtpage .w3-container {
          margin-top: 0;
      }
      #exetwo{
        margin-left: 0rem!important;
        padding-left: 0 !important;
        padding-right: 0 !important;
        width: 100% !important;
        margin-top: 15px !important;
      }
      #exetwo .ins img{
        max-width: 100% !important;
        width: 100% !important;
        flex: 0 0 100%;
        border-radius: 5px !important;
      }
      #exetwo .row{
        flex-direction: column !important;
      }
       #exetwo .ins h1{
       font-size: 18px !important;
       left: 35% !important;
      }
      #exetwo #a1{
        font-size: 18px !important;
      }
      #exetwo .coldept{
        top: 20px !important;
     }
      #exethree{
        margin-left: 0rem!important;
        padding-left: 0 !important;
        padding-right: 0 !important;
        width: 100% !important;
        margin-top: 0 !important;
      }
      #exethree .ins img{
        max-width: 100% !important;
        width: 100% !important;
        flex: 0 0 100%;
        border-radius: 5px !important;
      }
      #exethree .row{
        flex-direction: column !important;
      }
       #exethree .ins h1{
       font-size: 15px !important;
       left: 50% !important;
      }
      #exethree #a1{
        font-size: 18px !important;
      }
      #exethree .coldept{
        top: 20px !important;
     }

      button.w3-button.w3-teal.w3-xlarge.w3-hide-large.deptmenu {
          font-size: 15px !important;
          padding-left: 12px;
      }
      .exetitle{
          box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
          padding: 0 !important;
          transition: transform .2s;
          width: 200px;
          height: 100%;
          margin: 0 auto;
          background-color: #e82525;
          color: white;
      }
      .exetitle h4{
        font-size: 15px !important;
      }
    }

    .mobdep{
      background-color: blue !important;
    }

    .exetitle{
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        padding: 15px;
        transition: transform .2s;
        width: 200px;
        height: 100%;
        margin: 0 auto;
        background-color: #e82525;
        color: white;
    }
    .execard:hover .exetitle{
      -ms-transform: scale(1.1); /* IE 9 */
      -webkit-transform: scale(1.1); /* Safari 3-8 */
      transform: scale(1.1);
    }

    .execard:hover img{
      filter: blur(0px) !important;
      -webkit-filter: blur(0px) !important;
    }

    </style>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <div class="container" style="padding:0;">
      <div class="row">
        <div class="col-12 mt-2" style=" width: 100% !important; padding-right: 0 !important; padding-left: 0 !important;">
          <h1 style="position: absolute; top: 50%; left: 35%;transform: translate(-50%, -50%); color:white !important; font-size:50px; text-shadow: 1px 1px 2px black, 0 0 1em blue, 0 0 0.2em darkblue;">EXECUTIVE ORDERS</h1>
          <img style=" width: 100%;" src="{{asset('assets/bandept2.png')}}" />
        </div>
      </div>
    </div>
    <div class="container hahahe">
      <div class="deptside  dt" id="mysb">
        <button class="w3-bar-item w3-button w3-large w3-hide-large" style="font-weight:7s00;color:red;" onclick="w3_close()">Close &times;</button>
        <br>
        <button class="buttonexe deptlinks" onclick="deptcon(event, 'exeone')" id="defaultOpen1" ><span>ALL</span></button>
        <br>
        <button class="buttonexe deptlinks" onclick="deptcon(event, 'exetwo')"><span>2021</span></button>
        <br>
        <button class="buttonexe deptlinks" onclick="deptcon(event, 'exethree')"><span>2022</span></button>
      </div>
    </div>
  <div class="container" id="excon">
    <div class="container" id="dtpage">
      <div class="w3-main">
        <div class="w3-teal mobdep">
          <button class="w3-button w3-teal w3-xlarge w3-hide-large deptmenu" style="font-size:5px;"onclick="w3_open()">&#9776; MENU</button>
        </div>
      </div>

        <div class="w3-container deptcontent ml-5 mt-5" id="exeone">
          <div class="row d-flex justify-content-center">
                  @foreach($trans as $row)
                  @if ($row->trans_category == 'Executive Orders' )
                  <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                    <a class="executive" style="text-decoration: none;" target="_blank" href="{{asset("uploads/" . $row->trans_pdf) }}">
                    <div class="card execard mb-5">
                      <img style=" width:100%; margin-left: auto; margin-right: auto; filter: blur(2px);
                      -webkit-filter: blur(2px);"src="{{asset("uploads/" . $row->trans_image) }}"/>
                        <div class="container exetitle zoom" style="">
                          <h4>{{$row->trans_title}}</h4>
                        </div>
                      </div>
                    </a>
                    </div>
                    @endif
                    @endforeach
                </div>
          </div>
          <div class="w3-container ml-5 mt-5 deptcontent" id="exetwo">
            <div class="row d-flex justify-content-center">
              @foreach($trans as $row)
              @if ($row->trans_category == 'Executive Orders' && $row->trans_year == '2021')
              <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                <a class="executive" style="text-decoration: none;" target="_blank" href="{{asset("uploads/" . $row->trans_pdf) }}">
                <div class="card execard mb-5">
                  <img style=" width:100%; margin-left: auto; margin-right: auto; filter: blur(2px);
                  -webkit-filter: blur(2px);"src="{{asset("uploads/" . $row->trans_image) }}"/>
                    <div class="container exetitle zoom" style="">
                      <h4>{{$row->trans_title}}</h4>
                    </div>
                  </div>
                </a>
                </div>
                @endif
                @endforeach
              </div>
          </div>

          <div class="w3-container ml-5 mt-5 deptcontent" id="exethree">
            <div class="row d-flex justify-content-center">
              @foreach($trans as $row)
              @if ($row->trans_category == 'Executive Orders' && $row->trans_year == '2022')
              <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                <a class="executive" style="text-decoration: none;" target="_blank" href="{{asset("uploads/" . $row->trans_pdf) }}">
                <div class="card execard mb-5">
                  <img style=" width:100%; margin-left: auto; margin-right: auto; filter: blur(2px);
                  -webkit-filter: blur(2px);"src="{{asset("uploads/" . $row->trans_image) }}"/>
                    <div class="container exetitle zoom" style="">
                      <h4>{{$row->trans_title}}</h4>
                    </div>
                  </div>
                </a>
                </div>
                @endif
                @endforeach
              </div>
          </div>











            </div>



      </div>

<br>
<br>
<!-- <script>
function w3_open() {
  document.getElementById("mysb").style.display = "block";
}

function w3_close() {
  document.getElementById("mysb").style.display = "none";
}
function deptcon(dp, deptname) {
  var d, deptcontent, deptlinks;
  deptcontent = document.getElementsByClassName("deptcontent");
  for (d = 0; d < deptcontent.length; d++) {
    deptcontent[d].style.display = "none";
  }
  deptlinks = document.getElementsByClassName("deptlinks");
  for (d = 0; d < deptlinks.length; d++) {
    deptlinks[d].className = deptlinks[d].className.replace(" active", "");
  }
  document.getElementById(deptname).style.display = "block";
  dp.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it

  document.getElementById("defaultOpen").click();
</script> -->
@endsection
