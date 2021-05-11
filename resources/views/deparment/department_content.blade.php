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
    }
    #carddept{
      border-radius:5px !important;
      box-shadow: 0 2px 2px rgba(0, 0, 0, 0.2);

    }
    #carddept:hover #a1{
      color: red  !important;
      transition: .7s !important;
    }
    a.department{
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

      position: absolute !important;
      width: 65%;
      margin-top: .2%;
    }


    .buttondept span {
      cursor: pointer;
      display: inline-block;
      position: relative;
      transition: 0.2s;
    }

    .buttondept span:after {
      content: '\22D9';
      position: absolute;
      opacity: 0;
      top: 0;
      right: -10px !important;
      transition: 0.1s;

    }

    .buttondept:hover span {
      padding-right: 0;
    }

    .buttondept:hover span:after {
      opacity: 1;
      right: 0;
    }
    .buttondept:hover{
      background-color: blue;
      color: white;
    }


    .buttondept {
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
      width: 200px;
      transition: all 0.5s;
      cursor: pointer;
      margin: 5px;
    }
    .dt .active span:after {
      opacity: 1;
      right: 0;
    }
    .dt .active span{
      padding-right: 0px;
    }
    .dt .active{
      background-color: blue;
      color: white;
    }
    @media only screen and (max-width: 1920px) and (min-width: 1601px)  {
      div#dpcon {
        max-width: 100% !important;
        max-width: 100% !important;
        flex: 0 0 100%;
        padding-bottom: 225px;
      }

    }
    @media only screen and (max-width: 1600px) and (min-width: 900px)  {
      div#dpcon {
        max-width: 70% !important;
        width: 70% !important;
        flex: 0 0 100%;

      }
    }
    @media screen and (max-width: 766px) and (min-width: 200px) {
      div#dpcon {
        max-width: 100% !important;
        width:100% !important;
        flex: 0 0 100%;
      }
      #dpcon .deptside button{
        padding: 5px;
        font-size: 18px;
      }
      #dpcon #h3con{
        font-size: 25px !important;
      }
      #dpcon .deptside{

          width: 70% !important;
          position:absolute !important;
          left: :0;
          z-index:2;
          display:none;
          background-color: #fff;
          margin-top: 10%;
          border-radius: 10px;


      }
      div#deptone{
        margin: 0 !important;
        padding: 0 !important;

      }
      #deptone h5{
        font-size: 15px;
      }
      #deptone p{
        font-size: 10px;
      }
      #deptone img{
        width: 200% !important;
        margin-top: 80% !important;
        margin-left: -60% !important;
      }
      div#depttwo {
        margin: 0 !important;
        padding: 0 !important;
      }
      #depttwo h5{
        font-size: 15px;
      }
      #depttwo p{
        font-size: 10px;
      }
      #depttwo img{
        width: 200% !important;
        margin-top: 80% !important;
        margin-left: -60% !important;
      }
      div#deptthree {
        margin: 0 !important;
        padding: 0 !important;
      }
      #deptthree h5{
        font-size: 15px;
      }
      #deptthree p{
        font-size: 10px;
      }
      #deptthree img{
        width: 200% !important;
        margin-top: 80% !important;
        margin-left: -60% !important;
      }
      div#deptfour {
        margin: 0 !important;
        padding: 0 !important;
      }
      #deptfour h5{
        font-size: 15px;
      }
      #deptfour p{
        font-size: 10px;
      }
      #deptfour img{
        width: 200% !important;
        margin-top: 80% !important;
        margin-left: -60% !important;
      }
      div#deptfive {
        margin: 0 !important;
        padding: 0 !important;
      }
      #deptfive h5{
        font-size: 15px;
      }
      #deptfive p{
        font-size: 10px;
      }
      #deptfive img{
        width: 200% !important;
        margin-top: 80% !important;
        margin-left: -60% !important;
      }
      .deptside {
          position: relative !important;
          text-align: center !important;
      }
      #carddept .card-body {
          padding: 0 !important;
      }
    }
    </style>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <div class="container" id="dpcon">
      <div class="container mt-4" id="dtpage">
        <h3 id="h3con" style="text-align: center; color: #1f1c4b; font-size: 50px; font-weight: 700; text-transform:uppercase;">
          @foreach($dept as $row)

          <?php $selected = $_GET['id'] ;
              if($selected == $row->id)
              echo $row->title;
          ?>
          @endforeach
        </h3>

      <div class="container mt-3">
        <div class="deptside  dt" id="mysb">
          <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>
          @foreach($dept as $row)
            @if($selected == $row->id)
              <button class="buttondept deptlinks" onclick="deptcon(event, {{$row->id}})" id="defaultOpen"><span>{{$row->title}}</span></button>
            <br>
            @else
              <button class="buttondept deptlinks" onclick="deptcon(event, {{$row->id}})" id=""><span>{{$row->title}}</span></button>
              <br>
            @endif
          @endforeach
          {{-- <button class="buttondept deptlinks" onclick="deptcon(event, 'depttwo')"><span>Department 2</span></button>
          <br>
          <button class="buttondept deptlinks" onclick="deptcon(event, 'deptthree')"><span>Department 3</span></button>
          <br>
          <button class="buttondept deptlinks" onclick="deptcon(event, 'deptfour')"><span>Department 4</span></button>
          <br>
          <button class="buttondept deptlinks" onclick="deptcon(event, 'deptfive')"><span>Department 5</span></button> --}}
        </div>
      </div>



      <div class="w3-main mt-4" style="margin-left:200px">
        <div class="w3-teal">
          <button class="w3-button w3-teal w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
        </div>
        <br>
        @foreach($dept as $row)
          <div class="w3-container  ml-5 deptcontent" id="{{$row->id}}" >
            @foreach($child as $row1)
                @if($row->id == $row1->sector)
                    <div class="row">
                      <div class=" col-12 col-sm-12 col-md-12 col-lg-12">
                        <a class="department"href="{{route('department_selected', 'id='.$row1->id )}}">
                          <div class="card" id="carddept">
                            <div class="card-body">
                              <div class="row">
                                <div class=" col-9 col-sm-9 col-md-9 col-lg-9">
                                  <h5 class="card-title" id="a1">{{$row1->name}}</h5>
                                  <div class="card-text"><?php echo $row1->description ?></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>

                    <br>
                @endif
            @endforeach
          </div>
        @endforeach
    </div>



      </div>
    </div>
  </div>
<br>
<br>

<script>
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
$(document).ready(function(){
  $( ".buttondept" ).click(function() {
    var title = (this).html();
    $("#h3con").html(title);
  });
});
</script>
@endsection
