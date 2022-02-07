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
  }
  .dlcard:hover h5{
    color: red !important;
  }
  .dltitle{
    font-weight: 700 !important;
  }
  .dlcard{
    height: 80%;
  }
  @media screen and (max-width: 766px) and (min-width: 200px){
    #downloadable {
      max-width: 100% !important;
      width: 100% !important;
      flex: 0 0 100%;
      padding: 0 !important;
    }

    .bannerforall h1{
      font-size: 18px !important;
    }
    .bplo{
      max-width: 100% !important;
      width: 100% !important;
      flex: 0 0 100%;
    }

    #downloadable .col-12{
      padding: 0;
    }

    #downloadable .col-5{
      max-width: 100% !important;
      width: 100% !important;
      flex: 0 0 100%;
    }
    #downloadable .dltitle{
      font-size: 15px !important;
    }

    #downloadable .card-body{
      padding-right: 8% !important;
  }
  h2.card-title.blue {
    font-size: 23px;
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
<div class="container bannerforall" style="padding-right: 0 !important; padding-left: 0 !important;">
  <div class="row">
      <div class="col-12 exebanner mt-2" style=" width: 100% !important; padding-right: 0 !important; padding-left: 0 !important;">
        <h1 style="position: absolute; top: 50%; left: 35%;transform: translate(-50%, -50%); color:white !important; font-size:50px; text-shadow: 1px 1px 2px black, 0 0 1em blue, 0 0 0.2em darkblue;">DOWNLOADABLE FORMS</h1>
        <img style=" width: 100%;" src="{{asset('assets/bandept2.png')}}" />
      </div>
    </div>
</div>
<div class="container" id="downloadable" style="width:80%;">
  <div class="bplo mt-3">
    <div class="row">
      <div class="col-12">
        <h2 class="card-title blue" style="color:#fff !important; padding: 0 !important; text-align: center; color: #1f1c4b;font-weight: 700;">BUSINESS PERMIT & LICENSE OFFICE</h2>
      </div>
    </div>
    <div class="row d-flex justify-content-center mt-2 mb-3">
      <div class="col-12">
        <h4 style="font-weight:500;  text-indent: 50px;">APPLICATION FOR :</h4>
      </div>
        <div class="col-5 clearfix d-md-block">
          <a href=" {{asset('assets/dlforms/APPLICATIONFORMNEWGREYSCALE.pdf')}}" download>
            <div class="card mb-2 dlcard">
              <div class="card-body" style="padding: 10px;">
                <div class="row">
                  <div class="col-10" style="padding-top:2%;">
                    <h5 class="dltitle" style="font-size:18px;">NEW BUSINESS PERMIT</h5>
                  </div>
                  <div class="col-1">
                    <button class="dlbtn"><i class="fa fa-download"></i></button>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-5 clearfix d-md-block">
          <a href="{{asset('assets/dlforms/APPLICATIONFORMRENEWALGREYSCALE.pdf')}}" download>
            <div class="card mb-2 dlcard">
              <div class="card-body" style="padding: 10px;">
                <div class="row">
                  <div class="col-10" style="padding-top:2%;">
                    <h5  class="dltitle" style="font-size:18px;">RENEWAL OF BUSINESS PERMIT</h5>
                  </div>
                  <div class="col-1">
                    <button class="dlbtn"><i class="fa fa-download"></i></button>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>

    </div>

    <div class="obo">
      <div class="row mt-3">
        <div class="col-12">
          <h2 class="card-title blue" style="color:#fff !important; padding: 0 !important; text-align: center; color: #1f1c4b;font-weight: 700;">OFFICE OF THE BUILDING OFFICIAL</h2>
        </div>
      </div>
      <div class="row d-flex justify-content-center mt-2 mb-3">
          <div class="col-5 clearfix d-md-block">
            <a href=" {{asset('assets/dlforms/APPLICATION FORM FOR ANNUAL INSPECTION & CERTIFICATE OF USE (2022).pdf')}}" download>
              <div class="card mb-2 dlcard">
                <div class="card-body" style="padding: 10px;">
                  <div class="row">
                    <div class="col-10" style="padding-top:2%;">
                      <h5 class="dltitle" style="font-size:18px;">APPLICATION FORM FOR ANNUAL INSPECTION & CERTIFICATE OF USE (2022)</h5>
                    </div>
                    <div class="col-2">
                      <button class="dlbtn"><i class="fa fa-download"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-5 clearfix d-md-block">
            <a href="{{asset('assets/dlforms/CFEI (CERTIFICATE OF FINAL ELECTRICAL INSPECTION-COMPLETION).pdf')}}" download>
              <div class="card mb-2 dlcard">
                <div class="card-body" style="padding: 10px;">
                  <div class="row">
                    <div class="col-10" style="padding-top:2%;">
                      <h5 class="dltitle" style="font-size:18px;">CFEI (CERTIFICATE OF FINAL ELECTRICAL INSPECTION-COMPLETION)</h5>
                    </div>
                    <div class="col-2">
                      <button class="dlbtn"><i class="fa fa-download"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-5 clearfix d-md-block">
            <a href="{{asset('assets/dlforms/NOTICE OF CONSTRUCTION.pdf')}}" download>
              <div class="card mb-2 dlcard">
                <div class="card-body" style="padding: 10px;">
                  <div class="row">
                    <div class="col-10" style="padding-top:2%;">
                      <h5 class="dltitle" style="font-size:18px;">NOTICE OF CONSTRUCTION</h5>
                    </div>
                    <div class="col-2">
                      <button class="dlbtn"><i class="fa fa-download"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-5 clearfix d-md-block">
            <a href="{{asset('assets/dlforms/OCCUPANCY - CERTIFICATE OF COMPLETION.pdf')}}" download>
              <div class="card mb-2 dlcard">
                <div class="card-body" style="padding: 10px;">
                  <div class="row">
                    <div class="col-10" style="padding-top:2%;">
                      <h5 class="dltitle" style="font-size:18px;">OCCUPANCY - CERTIFICATE OF COMPLETION</h5>
                    </div>
                    <div class="col-2">
                      <button class="dlbtn"><i class="fa fa-download"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-5 clearfix d-md-block">
            <a href="{{asset('assets/dlforms/OCCUPANCY - REQUEST FOR CERTIFICATE OF OCCUPANCY form (BFP att).pdf')}}" download>
              <div class="card mb-2 dlcard">
                <div class="card-body" style="padding: 10px;">
                  <div class="row">
                    <div class="col-10" style="padding-top:2%;">
                      <h5 class="dltitle" style="font-size:18px;">OCCUPANCY - REQUEST FOR CERTIFICATE OF OCCUPANCY form (BFP att)</h5>
                    </div>
                    <div class="col-2">
                      <button class="dlbtn"><i class="fa fa-download"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-5 clearfix d-md-block">
            <a href="{{asset('assets/dlforms/OCCUPANCY - UNIFIED APPLICATION FORM FOR CERTIFICATE.pdf')}}" download>
              <div class="card mb-2 dlcard">
                <div class="card-body" style="padding: 10px;">
                  <div class="row">
                    <div class="col-10" style="padding-top:2%;">
                      <h5 class="dltitle" style="font-size:18px;">OCCUPANCY - UNIFIED APPLICATION FORM FOR CERTIFICATE</h5>
                    </div>
                    <div class="col-2">
                      <button class="dlbtn"><i class="fa fa-download"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-5 clearfix d-md-block">
            <a href="{{asset('assets/dlforms/PERMIT - DEMOLITION.pdf')}}" download>
              <div class="card mb-2 dlcard">
                <div class="card-body" style="padding: 10px;">
                  <div class="row">
                    <div class="col-10" style="padding-top:2%;">
                      <h5 class="dltitle" style="font-size:18px;">PERMIT - DEMOLITION</h5>
                    </div>
                    <div class="col-2">
                      <button class="dlbtn"><i class="fa fa-download"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-5 clearfix d-md-block">
            <a href="{{asset('assets/dlforms/PERMIT - ELECTRICAL.pdf')}}" download>
              <div class="card mb-2 dlcard">
                <div class="card-body" style="padding: 10px;">
                  <div class="row">
                    <div class="col-10" style="padding-top:2%;">
                      <h5 class="dltitle" style="font-size:18px;">PERMIT - ELECTRICAL</h5>
                    </div>
                    <div class="col-2">
                      <button class="dlbtn"><i class="fa fa-download"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-5 clearfix d-md-block">
            <a href="{{asset('assets/dlforms/PERMIT - ELECTRONICS.pdf')}}" download>
              <div class="card mb-2 dlcard">
                <div class="card-body" style="padding: 10px;">
                  <div class="row">
                    <div class="col-10" style="padding-top:2%;">
                      <h5 class="dltitle" style="font-size:18px;">PERMIT - ELECTRONICS</h5>
                    </div>
                    <div class="col-2">
                      <button class="dlbtn"><i class="fa fa-download"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-5 clearfix d-md-block">
            <a href="{{asset('assets/dlforms/PERMIT - EXCAVATION AND GROUND PREP.pdf')}}" download>
              <div class="card mb-2 dlcard">
                <div class="card-body" style="padding: 10px;">
                  <div class="row">
                    <div class="col-10" style="padding-top:2%;">
                      <h5 class="dltitle" style="font-size:18px;">PERMIT - EXCAVATION AND GROUND PREP</h5>
                    </div>
                    <div class="col-2">
                      <button class="dlbtn"><i class="fa fa-download"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-5 clearfix d-md-block">
            <a href="{{asset('assets/dlforms/PERMIT - FENCING.pdf')}}" download>
              <div class="card mb-2 dlcard">
                <div class="card-body" style="padding: 10px;">
                  <div class="row">
                    <div class="col-10" style="padding-top:2%;">
                      <h5 class="dltitle" style="font-size:18px;">PERMIT - FENCING</h5>
                    </div>
                    <div class="col-2">
                      <button class="dlbtn"><i class="fa fa-download"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-5 clearfix d-md-block">
            <a href="{{asset('assets/dlforms/PERMIT - MECHANICAL.pdf')}}" download>
              <div class="card mb-2 dlcard">
                <div class="card-body" style="padding: 10px;">
                  <div class="row">
                    <div class="col-10" style="padding-top:2%;">
                      <h5 class="dltitle" style="font-size:18px;">PERMIT - MECHANICAL</h5>
                    </div>
                    <div class="col-2">
                      <button class="dlbtn"><i class="fa fa-download"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-5 clearfix d-md-block">
            <a href="{{asset('assets/dlforms/PERMIT - SANITARY PLUMBING.pdf')}}" download>
              <div class="card mb-2 dlcard">
                <div class="card-body" style="padding: 10px;">
                  <div class="row">
                    <div class="col-10" style="padding-top:2%;">
                      <h5 class="dltitle" style="font-size:18px;">PERMIT - SANITARY PLUMBING</h5>
                    </div>
                    <div class="col-2">
                      <button class="dlbtn"><i class="fa fa-download"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-5 clearfix d-md-block">
            <a href="{{asset('assets/dlforms/PERMIT - SCAFFOLDING.pdf')}}" download>
              <div class="card mb-2 dlcard">
                <div class="card-body" style="padding: 10px;">
                  <div class="row">
                    <div class="col-10" style="padding-top:2%;">
                      <h5 class="dltitle" style="font-size:18px;">PERMIT - SCAFFOLDING</h5>
                    </div>
                    <div class="col-2">
                      <button class="dlbtn"><i class="fa fa-download"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-5 clearfix d-md-block">
            <a href="{{asset('assets/dlforms/UNIFIED APPLICATION FORM FOR BUILDING PERMIT.pdf')}}" download>
              <div class="card mb-2 dlcard">
                <div class="card-body" style="padding: 10px;">
                  <div class="row">
                    <div class="col-10" style="padding-top:2%;">
                      <h5 class="dltitle" style="font-size:18px;">UNIFIED APPLICATION FORM FOR BUILDING PERMIT</h5>
                    </div>
                    <div class="col-2">
                      <button class="dlbtn"><i class="fa fa-download"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-5 clearfix d-md-block">
            <a href="{{asset('assets/dlforms/PERMIT - SIDEWALK CONSTRUCTION.pdf')}}" download>
              <div class="card mb-2 dlcard">
                <div class="card-body" style="padding: 10px;">
                  <div class="row">
                    <div class="col-10" style="padding-top:2%;">
                      <h5 class="dltitle" style="font-size:18px;">PERMIT - SIDEWALK CONSTRUCTION</h5>
                    </div>
                    <div class="col-2">
                      <button class="dlbtn"><i class="fa fa-download"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-5 clearfix d-md-block">
            <a href="{{asset('assets/dlforms/PERMIT - TEMPORARY FENCING.pdf')}}" download>
              <div class="card mb-2 dlcard">
                <div class="card-body" style="padding: 10px;">
                  <div class="row">
                    <div class="col-10" style="padding-top:2%;">
                      <h5 class="dltitle" style="font-size:18px;">PERMIT - TEMPORARY FENCING</h5>
                    </div>
                    <div class="col-2">
                      <button class="dlbtn"><i class="fa fa-download"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-5 clearfix d-md-block">
            <a href="{{asset('assets/dlforms/PERMIT - TEMPORARY SIDEWALK ENCLOSURE & OCCUPANCY.pdf')}}" download>
              <div class="card mb-2 dlcard">
                <div class="card-body" style="padding: 10px;">
                  <div class="row">
                    <div class="col-10" style="padding-top:2%;">
                      <h5 class="dltitle" style="font-size:18px;">PERMIT - TEMPORARY SIDEWALK ENCLOSURE & OCCUPANCY</h5>
                    </div>
                    <div class="col-2">
                      <button class="dlbtn"><i class="fa fa-download"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-5 clearfix d-md-block">
            <a href="{{asset('assets/dlforms/PERMIT - TEMPORARY SIDEWALK ENCLOSURE.pdf')}}" download>
              <div class="card mb-2 dlcard">
                <div class="card-body" style="padding: 10px;">
                  <div class="row">
                    <div class="col-10" style="padding-top:2%;">
                      <h5 class="dltitle" style="font-size:18px;">PERMIT - TEMPORARY SIDEWALK ENCLOSURE</h5>
                    </div>
                    <div class="col-2">
                      <button class="dlbtn"><i class="fa fa-download"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-5 clearfix d-md-block">
            <a href="{{asset('assets/dlforms/UNIFIED APPLICATION FORM FOR BUILDING PERMIT rev 02FEB2022.pdf')}}" download>
              <div class="card mb-2 dlcard">
                <div class="card-body" style="padding: 10px;">
                  <div class="row">
                    <div class="col-10" style="padding-top:2%;">
                      <h5 class="dltitle" style="font-size:18px;">UNIFIED APPLICATION FORM FOR BUILDING PERMIT rev 02FEB2022</h5>
                    </div>
                    <div class="col-2">
                      <button class="dlbtn"><i class="fa fa-download"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>




        </div>
      </div>


</div>


@endsection
