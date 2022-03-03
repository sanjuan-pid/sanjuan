 <!DOCTYPE html>
 <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <title>Administrator - Makabagong San Juan Website</title>
   <!-- Favicons -->
   <link href="{{asset('assets/makabago.png')}}" rel="icon">
   <link href="{{asset('assets/makabago.png')}}" rel="apple-touch-icon">
   <!-- Fonts -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
   <!-- Icons -->
   <link rel="stylesheet" href="{{asset('vendor/nucleo/css/nucleo.css')}}" type="text/css">
   <link rel="stylesheet" href="{{asset('vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
   <!-- Page plugins -->
   <link rel="stylesheet" href="{{asset('vendor/quill/dist/quill.core.css')}}">
   <!-- Argon CSS -->
   <link rel="stylesheet" href="{{asset('css/argon.css')}}" type="text/css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 </head>
 
 <body style="font-family: 'Rubik', sans-serif;">
   <!-- Sidenav -->
   <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
     <div class="scrollbar-inner">
       <!-- Brand -->
       <div class="sidenav-header d-flex align-items-center">
         <a class="navbar-brand" href="{{route('admin.dashboard')}}">
           <img src="{{asset('img/brand/web-blue.png')}}" class="navbar-brand-img w-100" alt="..." style="max-height: 4rem;">
         </a>
         <div class="ml-auto">
           <!-- Sidenav toggler -->
           <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
             <div class="sidenav-toggler-inner">
               <i class="sidenav-toggler-line"></i>
               <i class="sidenav-toggler-line"></i>
               <i class="sidenav-toggler-line"></i>
             </div>
           </div>
         </div>
       </div>
       <div class="navbar-inner">
         <!-- Collapse -->
         <div class="collapse navbar-collapse" id="sidenav-collapse-main">
           <!-- Nav items -->
           <ul class="navbar-nav">
             <li class="nav-item">
                <a class="nav-link" href="{{route('admin.dashboard')}}">
                  <i class="ni ni-shop text-primary"></i>
                  <span class="nav-link-text text-dark">Dashboard</span>
                </a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="#navbar-city" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-city">
                 <i class="fas fa-city text-primary"></i>
                 <span class="nav-link-text text-dark">City</span>
               </a>
               <div class="collapse" id="navbar-city">
                 <ul class="nav nav-sm flex-column">
                   <li class="nav-item">
                     <a href="{{route('admin.activity.act-list')}}" class="nav-link">Activity</a>
                   </li>
                   <li class="nav-item">
                     <a href="{{route('admin.article.art-list')}}" class="nav-link">Articles</a>
                   </li>
                   <li class="nav-item">
                     <a href="{{route('admin.magazine.magazine_list')}}" class="nav-link">Magazine</a>
                   </li>
                   <li class="nav-item">
                     <a href="{{route('admin.transparency.trans_list')}}" class="nav-link">Transparency</a>
                   </li>
                   <li class="nav-item">
                     <a href="{{route('admin.vip.vip_list')}}" class="nav-link">VIP Stores</a>
                   </li>
                 </ul>
               </div>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="#navbar-departments" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-departments">
                 <i class="fas fa-landmark text-primary"></i>
                 <span class="nav-link-text text-dark">Departments</span>
               </a>
               <div class="collapse" id="navbar-departments">
                 <ul class="nav nav-sm flex-column">
                   <li class="nav-item">
                     <a href="{{route('admin.dept.dept_list')}}" class="nav-link">List</a>
                   </li>
                   <li class="nav-item">
                     <a href="{{route('admin.org.org_list')}}" class="nav-link">Organizational Charts</a>
                   </li>
                   <li class="nav-item">
                     <a href="{{route('admin.dept.cont_list')}}" class="nav-link">Department Contents</a>
                   </li>
                 </ul>
               </div>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="#navbar-events" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-events">
                 <i class="fas fa-newspaper text-primary"></i>
                 <span class="nav-link-text text-dark">Events</span>
               </a>
               <div class="collapse" id="navbar-events">
                 <ul class="nav nav-sm flex-column">
                   <li class="nav-item">
                     <a href="{{route('admin.events.events_list')}}" class="nav-link">List</a>
                   </li>
                   <li class="nav-item">
                     <a href="{{route('admin.eve_xbazaar.eve_xbazaar_list')}}" class="nav-link">Christmas Bazaar</a>
                   </li>
                 </ul>
               </div>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="#navbar-achievements" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-achievements">
                 <i class="fas fa-trophy text-primary"></i>
                 <span class="nav-link-text text-dark">Achievements</span>
               </a>
               <div class="collapse" id="navbar-achievements">
                 <ul class="nav nav-sm flex-column">
                   <li class="nav-item">
                     <a href="{{route('admin.achievement.mayors-list')}}?content_type=mayors" class="nav-link">Mayor</a>
                   </li>
                   <li class="nav-item">
                     <a href="{{route('admin.achievement.congressman-list')}}?content_type=congressman" class="nav-link">Congressman</a>
                   </li>
                   <li class="nav-item">
                     <a href="{{route('admin.achievement.vm-list')}}?content_type=vm" class="nav-link">Vice Mayor</a>
                   </li>
                 </ul>
               </div>
             </li>
             <li class="nav-item">
              <a class="nav-link" href="{{route('admin.dashboard')}}">
                <i class="fa fas fa-users text-primary"></i>
                <span class="nav-link-text text-dark">Users</span>
              </a>
           </li>
           </ul>
           <!-- Divider -->
           <hr class="my-3">
           <!-- Heading -->
           <h6 class="navbar-heading p-0 text-muted">City Officials</h6>
           <!-- Navigation -->
           <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
                <a class="nav-link" href="#navbar-mayors" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-mayors">
                  <i class="fas fa-user-tie text-primary"></i>
                  <span class="nav-link-text text-dark">Mayors</span>
                </a>
                <div class="collapse" id="navbar-mayors">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a href="{{route('admin.announcment.announcement')}}" class="nav-link">Announcements</a>
                    </li>
                    <li class="nav-item">
                      <a href="{{route('admin.covid_update.list_MC')}}" class="nav-link">Covid Upload</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.news.index')}}" class="nav-link">News</a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                 <a class="nav-link" href="#navbar-congressman" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-congressman">
                   <i class="fas fa-user-secret text-primary"></i>
                   <span class="nav-link-text text-dark">Congressman</span>
                 </a>
                 <div class="collapse" id="navbar-congressman">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                          <a href="{{route('admin.congressman.programs.prog_list')}}" class="nav-link">Programs</a>
                        </li>
                        <li class="nav-item">
                          <a href="{{route('admin.congressman.updates.updates_list')}}" class="nav-link">Updates</a>
                        </li>
                        <li class="nav-item">
                          <a href="{{route('admin.congressman.announcements.announcement_list')}}" class="nav-link">Announcements</a>
                        </li>
                    </ul>
                 </div>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="#navbar-vicemayor" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-vicemayor">
                    <i class="fas fa-user-tie text-primary"></i>
                    <span class="nav-link-text text-dark">Vice Mayor</span>
                 </a>
                 <div class="collapse" id="navbar-vicemayor">
                   <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                          <a href="{{route('admin.vice-mayor.programs.prog_list')}}" class="nav-link">Programs</a>
                        </li>
                        <li class="nav-item">
                          <a href="{{route('admin.vice-mayor.updates.updates_list')}}" class="nav-link">Updates</a>
                        </li>
                        <li class="nav-item">
                          <a href="{{route('admin.vice-mayor.announcements.announcement_list')}}" class="nav-link">Announcements</a>
                        </li>
                   </ul>
                 </div>
               </li>
           </ul>
         </div>
       </div>
     </div>
   </nav>
   <!-- Main content -->
   <div class="main-content" id="panel">
     <!-- Topnav -->
     <nav class="navbar navbar-top navbar-expand navbar-light bg-gradient-info border-bottom">
       <div class="container-fluid">
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <!-- Navbar links -->
           <ul class="navbar-nav align-items-center ml-md-auto">
             <li class="nav-item d-xl-none">
               <!-- Sidenav toggler -->
               <div class="pr-3 sidenav-toggler sidenav-toggler-light" data-action="sidenav-pin" data-target="#sidenav-main">
                 <div class="sidenav-toggler-inner">
                   <i class="sidenav-toggler-line"></i>
                   <i class="sidenav-toggler-line"></i>
                   <i class="sidenav-toggler-line"></i>
                 </div>
               </div>
             </li>
           </ul>
           <ul class="navbar-nav align-items-center ml-auto ml-md-0">
             <li class="nav-item dropdown">
               <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <div class="media align-items-center">
                   <span class="avatar avatar-sm rounded-circle">
                     <img alt="Image placeholder" src="{{asset('assets/makabago.png')}}">
                   </span>
                   <div class="media-body ml-2 d-none d-lg-block">
                     <span class="mb-0 text-sm  font-weight-bold text-white">{{ Auth::user()->name }}</span>
                   </div>
                 </div>
               </a>
               <div class="dropdown-menu dropdown-menu-right">
                 <div class="dropdown-header noti-title">
                   <h6 class="text-overflow m-0">Welcome!</h6>
                 </div>
                 <a href="#!" class="dropdown-item">
                   <i class="ni ni-single-02"></i>
                   <span>My profile</span>
                 </a>
                 <a href="#!" class="dropdown-item">
                   <i class="ni ni-settings-gear-65"></i>
                   <span>Settings</span>
                 </a>
                 <a href="#!" class="dropdown-item">
                   <i class="ni ni-calendar-grid-58"></i>
                   <span>Activity</span>
                 </a>
                 <div class="dropdown-divider"></div>
                 <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item">
                    <i class="ni ni-user-run"></i>
                    <span>Logout</span>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                     </form>
                  </a>
               </div>
             </li>
           </ul>
         </div>
       </div>
     </nav>
     <!-- Main Body Content -->
     
       @yield('content')

       <!-- Footer -->
       <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center text-lg-left text-muted">
              &copy; 2022 <a href="#" class="font-weight-bold ml-1">Public Information Department | City Government of San Juan</a>
            </div>
          </div>
        </div>
      </footer>
     </div>
   </div>

   <!-- Argon Scripts -->
   <!-- Core -->
   <script src="{{asset('vendor/jquery/dist/jquery.min.js')}}"></script>
   <script src="{{asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
   <script src="{{asset('vendor/js-cookie/js.cookie.js')}}"></script>
   <script src="{{asset('vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
   <script src="{{asset('vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>
   <!-- Optional JS -->
   <script src="{{asset('vendor/quill/dist/quill.min.js')}}"></script>
   <script src="{{asset('vendor/chart.js/dist/Chart.min.js')}}"></script>
   <script src="{{asset('vendor/chart.js/dist/Chart.extension.js')}}"></script>
   <script src="{{asset('vendor/jvectormap-next/jquery-jvectormap.min.js')}}"></script>
   <script src="{{asset('js/vendor/jvectormap/jquery-jvectormap-world-mill.js')}}"></script>
   <!-- Argon JS -->
   <script src="{{asset('js/argon.js')}}"></script>
 </body>
 
 </html>