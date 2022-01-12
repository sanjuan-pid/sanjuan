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
  .dlcard:hover{
    box-shadow: 0 2px 5px 0 rgb(0 0 0 / 70%), 0 2px 10px 0 rgb(0 0 0 / 70%);
    color: red;
  }
  .dltitle{
    font-weight: 700 !important;
  }

  @media screen and (max-width: 766px) and (min-width: 200px){
    #downloadable h1{
      font-size: 18px !important;
    }
  }

  @media screen and (min-device-width: 1205px) and (max-device-width: 1366px){
    #downloadable .dlcard img{
        width: 100% !important;
        height: 100% !important;
      }
    }

    .dlbtn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 5px 7px;
  cursor: pointer;
  font-size: 20px;
}

/* Darker background on mouse-over */
.dlbtn:hover {
  background-color: RoyalBlue;
}
</style>
    <div class="container" id="downloadable" style="padding-right: 0 !important; padding-left: 0 !important;">
        <div class="row">
            <div class="col-12 exebanner mt-2" style=" width: 100% !important; padding-right: 0 !important; padding-left: 0 !important;">
              <h1 style="position: absolute; top: 50%; left: 35%;transform: translate(-50%, -50%); color:white !important; font-size:50px; text-shadow: 1px 1px 2px black, 0 0 1em blue, 0 0 0.2em darkblue;">DOWNLOADABLE FORMS</h1>
              <img style=" width: 100%;" src="{{asset('assets/bandept2.png')}}" />
            </div>
          </div>

          <div class="row d-flex justify-content-center mt-3 mb-3">


              <div class="col-md-4 clearfix d-md-block">
                <a href="/assets/dlforms/APPLICATIONFORMNEWGREYSCALE.pdf" download>
                  <div class="card mb-2 dlcard">
                    <img class="card-img-top" src="{{asset('assets/dlforms/newbuspermit.jpg')}}"
                         alt="Card image cap">
                    <div class="card-body" style="padding: 10px;">
                      <h4 class="dltitle" style="font-size:18px;">APPLICATION FOR NEW BUSINESS PERMIT</h4>
                    </div>
                    <div class="modal-footer" style="padding: 0px;">
                      <button class="dlbtn"><i class="fa fa-download"></i> Download</button>
                    </div>
                  </div>
                </a>
              </div>

            <div class="col-md-4 clearfix d-md-block">
              <a href="/assets/dlforms/APPLICATIONFORMRENEWALGREYSCALE.pdf" download>
                <div class="card mb-2 dlcard">
                  <img class="card-img-top" src="{{asset('assets/dlforms/renewalpermit.jpg')}}"
                       alt="Card image cap">
                  <div class="card-body" style="padding: 10px;">
                    <h4 class="dltitle" style="font-size:18px;">APPLICATION FOR RENEWAL OF BUSINESS PERMIT</h4>
                  </div>
                  <div class="modal-footer" style="padding: 0px;">
                    <button class="dlbtn"><i class="fa fa-download"></i>Download</button>
                  </div>
                </div>
              </a>
            </div>

          </div>
        </div>

@endsection
