 <!DOCTYPE html>
 <html>
 
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
   <meta name="author" content="Creative Tim">
   <title>City Health Office - Recovery Tracking System</title>

   <!-- Fonts -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
   <!-- Icons -->
   <link rel="stylesheet" href="{{asset('vendor/nucleo/css/nucleo.css')}}" type="text/css">
   <link rel="stylesheet" href="{{asset('vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
   <!-- Page plugins -->
   <!-- Argon CSS -->
   <link rel="stylesheet" href="{{asset('css/argon.css')}}" type="text/css">
   <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('js/datatables.min.js') }}"></script>
    <script src="{{ asset('js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('js/vfs_fonts.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('css/jquery.dataTables.css') }}">
    <link rel="stylesheet" href="{{ asset('css/datatables.min.css') }}">
 </head>
 
 <body>
   <!-- Sidenav -->
   <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
     <div class="scrollbar-inner">
       <!-- Brand -->
       <div class="sidenav-header d-flex align-items-center">
         <a class="navbar-brand" href="../../pages/dashboards/dashboard.html">
           <img src="{{asset('img/brand/cho-blue.png')}}" class="navbar-brand-img" alt="...">
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
                <a class="nav-link" href="{{route('cho.admin.dashboard')}}">
                  <i class="ni ni-shop text-primary"></i>
                  <span class="nav-link-text">Dashboard</span>
                </a>
             </li>
             <li class="nav-item">
                <a class="nav-link" href="{{route('cho.admin.request')}}">
                  <i class="ni ni-single-copy-04 text-primary"></i>
                  <span class="nav-link-text">Request</span>
                </a>
             </li>
           </ul>
         </div>
       </div>
     </div>
   </nav>
   <!-- Main content -->
   <div class="main-content" id="panel">
     <!-- Topnav -->
     <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
       <div class="container-fluid">
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <!-- Navbar links -->
           <ul class="navbar-nav align-items-center ml-md-auto">
             <li class="nav-item d-xl-none">
               <!-- Sidenav toggler -->
               <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
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
                     <img alt="Makabagong San Juan" src="{{asset('assets/makabago.png')}}">
                   </span>
                   <div class="media-body ml-2 d-none d-lg-block">
                     <span class="mb-0 text-sm  font-weight-bold">{{ Auth::user()->name }}</span>
                   </div>
                 </div>
               </a>
               <div class="dropdown-menu dropdown-menu-right">
                 <div class="dropdown-header noti-title">
                   <h6 class="text-overflow m-0">Welcome!</h6>
                 </div>
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
     <!-- Header -->
     <!-- Header -->
     @yield('content')
       <!-- Footer -->
       <footer class="footer pt-0">
         <div class="row align-items-center justify-content-lg-between">
           <div class="col-lg-6">
             <div class="copyright text-center text-lg-left text-muted">
               &copy; 2022 <a href="#" class="font-weight-bold ml-1">City Health Office | City Government of San Juan</a>
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
   <script src="{{asset('vendor/chart.js/dist/Chart.min.js')}}"></script>
   <script src="{{asset('vendor/chart.js/dist/Chart.extension.js')}}"></script>
   <!-- Argon JS -->
   <script src="{{asset('js/argon.js')}}"></script>
   <!-- Demo JS - remove this in your project -->
   <script src="{{asset('js/demo.min.js')}}"></script>
 </body>
 
 </html>