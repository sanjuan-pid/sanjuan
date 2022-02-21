@extends('layouts.app-admin')
@section('content')
    <!-- Header -->
    <div class="header pb-6">
        <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
                <h6 class="h2 d-inline-block mb-0">DASHBOARD</h6>
            </div>
            <div class="col-lg-6 col-5 text-right">
                <a href="#" class="btn btn-sm btn-neutral" onclick="location.reload();">Refresh</a>
            </div>
            </div>
        </div>
        </div>
    </div>
    <!-- /Header -->

    <!-- Page content -->
    <div class="container-fluid mt--6">
        <!-- Dashboard Cards -->
            <div class="row">
                <div class="col-xl-3 col-md-6">
                <div class="card bg-gradient-primary border-0">
                    <!-- Card body -->
                    <div class="card-body">
                    <div class="row">
                        <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0 text-white">Announcements</h5>
                        <span class="h2 font-weight-bold mb-0 text-white">{{$Announcement}}</span>
                        </div>
                        <div class="col-auto">
                        <button type="button" class="btn btn-sm btn-neutral mr-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-h"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">View Announcements</a>
                        </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                        <a href="#!" class="text-nowrap text-white font-weight-300">Last updated</a>
                    </p>
                    </div>
                </div>
                </div>
                <div class="col-xl-3 col-md-6">
                <div class="card bg-gradient-info border-0">
                    <!-- Card body -->
                    <div class="card-body">
                    <div class="row">
                        <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0 text-white">News</h5>
                        <span class="h2 font-weight-bold mb-0 text-white">{{$News}}</span>
                        </div>
                        <div class="col-auto">
                        <button type="button" class="btn btn-sm btn-neutral mr-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-h"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">View News</a>
                        </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                        <a href="#!" class="text-nowrap text-white font-weight-300">Last updated</a>
                    </p>
                    </div>
                </div>
                </div>
                <div class="col-xl-3 col-md-6">
                <div class="card bg-gradient-danger border-0">
                    <!-- Card body -->
                    <div class="card-body">
                    <div class="row">
                        <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0 text-white">Magazines</h5>
                        <span class="h2 font-weight-bold mb-0 text-white">{{$Magazine}}</span>
                        </div>
                        <div class="col-auto">
                        <button type="button" class="btn btn-sm btn-neutral mr-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-h"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">View Magazine</a>
                        </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                        <a href="#!" class="text-nowrap text-white font-weight-300">Last updated</a>
                    </p>
                    </div>
                </div>
                </div>
                <div class="col-xl-3 col-md-6">
                <div class="card bg-gradient-default border-0">
                    <!-- Card body -->
                    <div class="card-body">
                    <div class="row">
                        <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0 text-white">Downloadable Forms</h5>
                        <span class="h2 font-weight-bold mb-0 text-white">{{$Forms}}</span>
                        </div>
                        <div class="col-auto">
                        <button type="button" class="btn btn-sm btn-neutral mr-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-h"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">View Departments List</a>
                        </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                        <a href="#!" class="text-nowrap text-white font-weight-300">Last updated</a>
                    </p>
                    </div>
                </div>
                </div>
            </div>
        <!-- /Dashboard Cards -->

        <!-- /Dashboard List -->
        <div class="card-deck flex-column flex-xl-row">
            <!-- Transparency Count -->
            <div class="card">
              <!-- Card header -->
              <div class="card-header">
                <!-- Title -->
                <h5 class="h3 mb-0 text-uppercase">Transparency</h5>
              </div>
              <!-- Card body -->
              <div class="card-body">
                <!-- List group -->
                <ul class="list-group list-group-flush list my--3">
                  <li class="list-group-item px-0">
                    <div class="row align-items-center">
                      <div class="col ml-2">
                        <h4 class="mb-0">
                          <a href="#!">Bids & Awards</a>
                        </h4>
                        <span class="text-success">●</span>
                        <small>Last updated</small>
                      </div>
                      <div class="col-auto">
                        <span class="h2 font-weight-bold mb-0">0</span>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item px-0">
                    <div class="row align-items-center">
                      <div class="col ml-2">
                        <h4 class="mb-0">
                          <a href="#!">Reports</a>
                        </h4>
                        <span class="text-success">●</span>
                        <small>Last updated</small>
                      </div>
                      <div class="col-auto">
                        <span class="h2 font-weight-bold mb-0">0</span>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item px-0">
                    <div class="row align-items-center">
                      <div class="col ml-2">
                        <h4 class="mb-0">
                          <a href="#!">Executive Orders</a>
                        </h4>
                        <span class="text-success">●</span>
                        <small>Last updated</small>
                      </div>
                      <div class="col-auto">
                        <span class="h2 font-weight-bold mb-0">0</span>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item px-0">
                    <div class="row align-items-center">
                      <div class="col ml-2">
                        <h4 class="mb-0">
                          <a href="#!">City Ordinances</a>
                        </h4>
                        <span class="text-success">●</span>
                        <small>Last updated</small>
                      </div>
                      <div class="col-auto">
                        <span class="h2 font-weight-bold mb-0">0</span>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item px-0">
                    <div class="row align-items-center">
                      <div class="col ml-2">
                        <h4 class="mb-0">
                          <a href="#!">City Resolutions</a>
                        </h4>
                        <span class="text-success">●</span>
                        <small>Last updated</small>
                      </div>
                      <div class="col-auto">
                        <span class="h2 font-weight-bold mb-0">0</span>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item px-0">
                    <div class="row align-items-center">
                      <div class="col ml-2">
                        <h4 class="mb-0">
                          <a href="#!">Press Releases / Media Advisories</a>
                        </h4>
                        <span class="text-success">●</span>
                        <small>Last updated</small>
                      </div>
                      <div class="col-auto">
                        <span class="h2 font-weight-bold mb-0">0</span>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /Transparency Count -->

            <!-- Departments Count -->
            <div class="card">
                <!-- Card header -->
                <div class="card-header">
                  <!-- Title -->
                  <h5 class="h3 mb-0 text-uppercase">Departments (Sector)</h5>
                </div>
                <!-- Card body -->
                <div class="card-body">
                  <!-- List group -->
                  <ul class="list-group list-group-flush list my--3">
                    <li class="list-group-item px-0">
                      <div class="row align-items-center">
                        <div class="col ml-2">
                          <h4 class="mb-0">
                            <a href="#!">Institutional Development</a>
                          </h4>
                          <span class="text-success">●</span>
                          <small>Last updated</small>
                        </div>
                        <div class="col-auto">
                          <span class="h2 font-weight-bold mb-0">{{$Departments_Institutional}}</span>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item px-0">
                      <div class="row align-items-center">
                        <div class="col ml-2">
                          <h4 class="mb-0">
                            <a href="#!">Economic Center</a>
                          </h4>
                          <span class="text-success">●</span>
                          <small>Last updated</small>
                        </div>
                        <div class="col-auto">
                          <span class="h2 font-weight-bold mb-0">0</span>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item px-0">
                      <div class="row align-items-center">
                        <div class="col ml-2">
                          <h4 class="mb-0">
                            <a href="#!">Environmental Sector</a>
                          </h4>
                          <span class="text-success">●</span>
                          <small>Last updated</small>
                        </div>
                        <div class="col-auto">
                          <span class="h2 font-weight-bold mb-0">0</span>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item px-0">
                      <div class="row align-items-center">
                        <div class="col ml-2">
                          <h4 class="mb-0">
                            <a href="#!">Social Services</a>
                          </h4>
                          <span class="text-success">●</span>
                          <small>Last updated</small>
                        </div>
                        <div class="col-auto">
                          <span class="h2 font-weight-bold mb-0">0</span>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item px-0">
                      <div class="row align-items-center">
                        <div class="col ml-2">
                          <h4 class="mb-0">
                            <a href="#!">Physical Infrastructure</a>
                          </h4>
                          <span class="text-success">●</span>
                          <small>Last updated</small>
                        </div>
                        <div class="col-auto">
                          <span class="h2 font-weight-bold mb-0">0</span>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
            </div>
            <!-- /Departments Count -->
        </div>
        <!-- /Dashboard List -->
@endsection