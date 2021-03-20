<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        {{-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <!-- Fonts -->
        <meta charset="UTF-8">
        <meta name="description" content="San Juan City Website">
        <meta name="keywords" content="San Juan City, City Hall, News">
        <meta name="author" content="San Juan City">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
        <style>

        </style>
    </head>
    <body>
        <div class="container" id="nav">
            <div class="row" style="background:rgb(27, 37, 96); color:#fff; padding: 4px 0;">
              {{-- <div class="soc_med col-sm-6">
                <a class="nav-link" href="https://www.facebook.com/CityofSanJuanNCRPhilippines/" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="{{asset('assets/facebook.svg')}}" >
                </a>
                <a class="nav-link" href="https://twitter.com/sanjuancityncr?lang=en" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="{{asset('assets/twitter.svg')}}" >
                </a>
                <a class="nav-link" href="https://www.instagram.com/sanjuancityncr/?hl=en" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="{{asset('assets/instagram.svg')}}" >
                </a>
              </div> --}}
              <div class="col-sm-12">

                <div class="datesss col-sm-4" style="float: right;">
                  <a href="https://time.is/Philippines" id="time_is_link" rel="nofollow"></a>
                  <span id="Philippines_z42c" style="font-size:12px"><span onclick="window.location='https://time.is/calendar'" title="https://time.is/calendar">Thursday, March 18, 2021</span> <span onclick="location='https://time.is/'" title="https://time.is/">11:17:39 AM</span></span>
                  <script src="//widget.time.is/en.js"></script>
                  <script>
                      time_is_widget.init({Philippines_z42c:{template:"DATE TIME", date_format:"dayname, monthname dnum, year", time_format:"12hours:minutes AMPM"}});
                  </script>
                  <span class="align-middle d-inline mx-1">|</span>
                  <a class="nav-link" href="https://www.facebook.com/CityofSanJuanNCRPhilippines/" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img  src="{{asset('assets/facebook.svg')}}" >
                  </a>
                  <a class="nav-link" href="https://twitter.com/sanjuancityncr?lang=en" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{asset('assets/twitter.svg')}}" >
                  </a>
                  <a class="nav-link" href="https://www.instagram.com/sanjuancityncr/?hl=en" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{asset('assets/instagram.svg')}}" >
                  </a>

                </div>
                <div class="soc_med col-sm-6" style="display: inline-block;">

                </div>
              </div>
            </div>
            <div class="row">
                 <nav class="navbar navbar-expand-lg navbar-light" style="border-bottom: 2px solid rgb(49 64 150);">
                   <div class="container">
                     <div class="col-sm-2" id="nav_logo">
                       <a class="navbar-brand" href="/pid/public/welcome">
                         <img src="{{asset('assets/sjc.png')}}" style="margin-right: 0 !important;"  alt="" width="80" height="80" class="d-inline-block align-top">
                       </a>
                       <a class="navbar-brand" href="/pid/public/welcome">
                         <img  src="{{asset('assets/makabago.png')}}"  alt="" width="80" height="80" class="d-inline-block align-top">
                       </a>
                     </div>
                     <div class="col-sm-10" id="nav_mob">
                       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-icon"></span>
                       </button>
                       <div class="collapse navbar-collapse" id="navbarNavDropdown">
                         <ul class="navbar-nav">
                           <li class="nav-item dropdown" id="ourcity">
                             <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Our City
                             </a>
                             <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" >
                               <li><a class="dropdown-item" href="/pid/public/ourcity/government_page">Government</a></li>
                               <li><a class="dropdown-item" href="/pid/public/ourcity/congressman_page">Congressman's Desk</a></li>
                               <li><a class="dropdown-item" href="/pid/public/mayors_page">Mayor's Desk</a></li>
                               <li><a class="dropdown-item" href="/pid/public/ourcity/vicemayor_page">Vice Mayor's Desk</a></li>
                               <li><a class="dropdown-item" href="#">City Council</a></li>
                               <li><a class="dropdown-item" href="/pid/public/ourcity/barangay_page">Barangay</a></li>
                             </ul>
                           </li>
                           <li class="nav-item dropdown" >
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Programs and Projects
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" >
                             <li><a class="dropdown-item" href="#">Current and Archives</a></li>
                               </ul>
                          </li>
                          <li class="nav-item dropdown" >
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" >
                             <li><a class="dropdown-item" href="#">EServices</a></li>
                              <br>
                              <li><a class="dropdown-item" href="#">Skills</a></li>
                             <li><a class="dropdown-item" href="#">Citizen's Charter per Department</a></li>
                             <li><a class="dropdown-item" href="#">Downloadable Forms </a></li>
                               </ul>
                          </li>
                          <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                             Events
                           </a>
                           <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" >
                            <li><a class="dropdown-item" href="#">Tourism Festivities</a></li>
                            <li><a class="dropdown-item" href="#">Departmental project activities</a></li>
                            <li><a class="dropdown-item" href="#"> Barangay</a></li>
                            <li><a class="dropdown-item" href="#">Communities and CSOs'</a></li>
                              </ul>
                         </li>
                         <li class="nav-item dropdown" >
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Public Notices
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" >
                           <li><a class="dropdown-item" href="#">Notice of Bids</a></li>
                           <li><a class="dropdown-item" href="#">Disclosures </a></li>
                           <li><a class="dropdown-item" href="#"> Executive Orders</a></li>
                           <li><a class="dropdown-item" href="#">Ordinances</a></li>
                           <li><a class="dropdown-item" href="#">Announcements</a></li>
                             </ul>
                        </li>
                        <li class="nav-item dropdown" >
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Directory
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" >
                         <li><a class="dropdown-item" href="#">Executive</a></li>
                         <li><a class="dropdown-item" href="#">Legislative</a></li>
                         <li><a class="dropdown-item" href="#">Judiciary</a></li>
                         <li><a class="dropdown-item" href="#">NGAs in San Juan</a></li>

                           </ul>
                         </li>
                         <li class="nav-item" >
                          <a class="nav-link" aria-current="page" href="/">Contact Us</a>
                        </li>

                           <li class="nav-item dropdown">
                             <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Login
                             </a>
                             <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                               <li><a class="dropdown-item" href="#">Employee</a></li>
                               <li><a class="dropdown-item" href="#">Residence</a></li>
                               <li><a class="dropdown-item" href="#">Visitors</a></li>
                             </ul>
                           </li>
                         </ul>
                       </div>

                     </div>
                     {{-- <div class="col-6 col-sm-2">
                         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                           <img src="{{asset('assets/meat.svg')}}"  alt="Sign in / up">
                         </a>
                         <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                           <li><a class="dropdown-item" href="#">Action</a></li>
                           <li><a class="dropdown-item" href="#">Another action</a></li>
                           <li><a class="dropdown-item" href="#">Something else here</a></li>
                         </ul>
                     </div> --}}
                   </div>
                 </nav>
            </div>

        </div>
        <div class="card" id="mobile_nav">
          <div class="card-body">
            <ul class="navbar-nav" id="nav_mob">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#home">Home</a>
              </li>
              <li class="nav-item" class="">
                <a class="nav-link" href="#">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Legislative</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Skills</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                   <img src="{{asset('assets/meat.svg')}}" alt="Sign in / up">
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>

          </div>
        </div>
        @yield('content')
    </body>
    <footer>
      <div class="container" style="margin-bottom: 0%; background-color: #e82525;">
          <br>
          <br>
          <div class="row">
              {{-- <h1 style="text-align: center; margin-top:-2%;">FOOTERsss</h1> --}}
              <div class="col-sm-4">
                <div id="tab1">
                  <a id="sitelink" href="#"  style="color:#fff;">TERMS</a><br>
                  <a id="sitelink" href="#"  style="color:#fff; font-size:16px ">Terms of Use</a><br>
                  <a id="sitelink" href="#"  style="color:#fff; font-size:16px">Private Policy</a><br>
                  <a id="sitelink" href="#"  style="color:#fff; font-size:16px">Site Map</a>
                </div>
              </div>
              <div class="col-sm-4">
                <div id="tab2">
                  <a id="sitelink" href="#"  style="color:#fff;">GOV LINKS</a><br>
                  <a id="sitelink" href="#"  style="color:#fff; font-size:16px">National Government</a><br>
                  <a id="sitelink" href="#"  style="color:#fff; font-size:16px">DILG</a>
                </div>
              </div>

              <div class="col-sm-4">
                <div id="tab3">
                  <p id="sitelink" href="#" style="color:#fff;">
                    CONTACT INFORMATION<br>
                    <a style="color:#fff; font-size:16px">Hotline: 137-135</a><br>
                    <a style="color:#fff; font-size:16px">Email:publicinfo@sanjuancity.gov.ph</a><br>
                    <a style="color:#fff; font-size:16px">Office Hours: 8:00 AM to 5:00 PM</a><br>
                    <a style="color:#fff; font-size:16px">Office Days: Monday to Friday</a><br>
                  </p>
                </div>
              </div>
          </div>
      </div>
      <div id="footersss">
        <div class="row" id="end_footer" style="background: #8c0d11;">
            <center>
                <h3 id="sitelink" style="color:#fff; margin: auto;">SAN JUAN CITY © ALL RIGHTS RESERVED.</h3>
            </center>
        </div>
    </div>
    </footer>
</html>
<script src="{{asset('js/script.js')}}"></script>
