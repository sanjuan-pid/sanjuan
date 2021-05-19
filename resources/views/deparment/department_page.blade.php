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
        padding-top: 0;
        font-weight: 700;
      }
      #carddept{
        border-radius:5px !important;
        box-shadow: 0 2px 2px rgba(0, 0, 0, 0.2);
      }
      #carddept:hover #a1{
        color: red !important;
        transition: .7s !important;
      }
      a.department{
        text-decoration: none;
        color:inherit;
      }
      @media screen and (max-width: 766px) and (min-width: 200px) {
        div#deptpage {
          max-width: 100% !important;
          width:100% !important;
          flex: 0 0 100%;
        }
        #deptpage #h3dept{
          font-size: 25px !important;
        }
        #deptpage h5{
          font-size: 15px;
        }
        #deptpage #carddept{
          font-size: 10px !important;
        }
      }
      @media only screen and (max-width: 1920px) and (min-width: 1080px)  {
        div#deptpage {
          max-width: 60% !important;
          width: 60% !important;
          flex: 0 0 100%;

        }
      }
      @media only screen and (max-width: 1600px) and (min-width: 900px)  {
        div#deptpage {
          max-width: 60% !important;
          width: 60% !important;
          flex: 0 0 100%;

        }
      }
    </style>
    <div class="container" id="deptpage" style="width:60%;">

      <div class="row">
        <div class=" col-12 col-sm-12 col-md-12 col-lg-12 mt-2">
          <h3  id="h3dept" style="text-align: center; color: #1f1c4b; font-size: 50px; font-weight: 700; margin:2% 0;">DEPARTMENTS</h3>
        </div>
      </div>
      <div class="row">
        <div class=" col-12 col-sm-12 col-md-12 col-lg-12">
        @foreach($dept as $row)
          <div class="dept_card" style="margin-bottom:2%;">
            <a class="department" href="{{action( 'Pages@department_content', 'id='.$row->id )}}"  onclick="deptcon(event, 'deptone')">
          
              <div class="card" id="carddept">
                <div class="card-body">
                  <h5 class="card-title" id="a1">{{ $row->title }}</h5>
                  <p>
                    <?php echo $row->description ;?>
                  </p>
                </div>
              </div>
            </a>
          </div>
          @endforeach
        </div>
      </div>
      <br>
    </div>
@endsection
