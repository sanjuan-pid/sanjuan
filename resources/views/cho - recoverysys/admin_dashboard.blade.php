@extends('layouts.app')

@section('content')
<style type="text/css">
  textarea {
  width: 100%;
  height: 150px;
}
</style>
@if(session()->has('message'))
    <div class="alert alert-success" role="alert" style="text-align: center;">
        {{ session()->get('message') }}
    </div>
@elseif(session()->has('declined'))
    <div class="alert alert-danger" role="alert" style="text-align: center;">
        {{ session()->get('declined') }}
    </div>
@endif
<div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
             <h6 class="h2 text-white d-inline-block mb-0">DASHBOARD</h6>
          </div>
          <div class="col-lg-6 col-5 text-right">
            <a href="#" class="btn btn-sm btn-neutral">Refresh</a>
          </div>
        </div>
        <!-- Card stats -->
        <div class="row">
          <div class="col-xl-6 col-md-12">
            <div class="card card-stats">
              <!-- Card body -->
              <div class="card-body p-4">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Total Requestor</h5>
                    <span class="h2 font-weight-bold mb-0">{{$Total}}</span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                      <i class="ni ni-single-02"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-md-12">
            <div class="card card-stats">
              <!-- Card body -->
              <div class="card-body p-4">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Pending</h5>
                    <span class="h2 font-weight-bold mb-0">{{$Pending}}</span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                      <i class="ni ni-collection"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-md-12">
            <div class="card card-stats">
              <!-- Card body -->
              <div class="card-body p-4">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Confirmed Request</h5>
                    <span class="h2 font-weight-bold mb-0">{{$Confirmed}}</span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                      <i class="ni ni-check-bold"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-md-12">
            <div class="card card-stats">
              <!-- Card body -->
              <div class="card-body p-4">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Declined Request</h5>
                    <span class="h2 font-weight-bold mb-0">{{$Declined}}</span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                      <i class="ni ni-fat-remove"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Page content -->
  <div class="container-fluid mt--6">
    <div class="row">
      <div class="col-xl-12">
        <div class="card bg-default">
          <div class="card-header bg-transparent">
            <div class="row align-items-center">
             
            </div>
          </div>
          <div class="card-body">
           
          </div>
        </div>
      </div>
      
    </div>
    @endsection