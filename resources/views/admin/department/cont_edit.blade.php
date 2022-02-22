@extends('layouts.app-admin')
@section('content')
    <!-- Header -->
    <div class="header pb-6">
        <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
                <h6 class="h2 d-inline-block mb-0">DEPARTMENT / CONTENTS - EDIT</h6>
            </div>
            <div class="col-lg-6 col-5 text-right">
                <a href="{{route('admin.dept.cont_list')}}" class="btn btn-sm btn-neutral"><i class="fa fas fa-angle-double-left fa-fw"></i> Back to list</a>
            </div>
            </div>
        </div>
        </div>
    </div>
    <!-- /Header -->

    <!-- Page content -->
    <div class="container-fluid mt--6">
      @if(\Session::has('success'))
            {{-- session ung nilagay mo sa return ng controller --}}
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <span class="alert-icon"><i class="ni ni-check-bold"></i></span>
                <span class="alert-text"><strong>Success!</strong> {{ \Session::get('success')}}</span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
      <!-- Form Content -->
      <form method="POST" action="{{action('Department_ContentController@update',$dept_code)}}" enctype="multipart/form-data">
      {{csrf_field()}}
      <input type="hidden" name="_method" value="PATCH" />
      <div class="card">
        <!-- Card header -->
        @foreach ($Dept_Name as $item)
        <div class="card-header">
          <h3 class="mb-0">{{$item->dept_name}} | {{$item->dept_code}}</h3>
        </div>
        @endforeach
        <!-- Card body -->
        <div class="card-body">
          <!-- Form Content -->
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label class="form-control-label" for="exampleFormControlTextarea2">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea2" rows="3" resize="none" name="Dept_Desc">{{$Dept_Desc}}</textarea>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="exampleFormControlTextarea2">Mission</label>
                <textarea class="form-control" id="exampleFormControlTextarea2" rows="5" resize="none" name="Dept_Mission">{{$Dept_Mission}}</textarea>
              </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label class="form-control-label" for="exampleFormControlTextarea2">Vision</label>
                  <textarea class="form-control" id="exampleFormControlTextarea2" rows="5" resize="none" name="Dept_Vision">{{$Dept_Vision}}</textarea>
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="exampleFormControlTextarea2">Office Schedule</label>
                <textarea class="form-control" id="exampleFormControlTextarea2" rows="5" resize="none" name="Dept_Sched">{{$Dept_Sched}}</textarea>
              </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label class="form-control-label" for="exampleFormControlTextarea2">Philosophy</label>
                  <textarea class="form-control" id="exampleFormControlTextarea2" rows="5" resize="none" placeholder="Leave blank if none." name="Dept_Phil">{{$Dept_Phil}}</textarea>
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label class="form-control-label" for="example3cols2Input">System Link</label>
                <input type="text" class="form-control" id="example3cols2Input" name="Dept_Links_Sys" placeholder="Leave blank if none." value="{{$Dept_Links_Sys}}">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label class="form-control-label" for="example3cols3Input">Banner</label>
                <input type="hidden" name="Dept_Banner_Recent" value="{{$Dept_Banner}}">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="customFileLang" lang="en" name="Dept_Banner">
                  <label class="custom-file-label" for="customFileLang">Select File</label>
                  
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label class="form-control-label" for="example3cols3Input">Requirements</label>
                <input type="hidden" name="Dept_Requirements_Recent" value="{{$Dept_Requirements}}">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFileLang" lang="en" name="Dept_Requirements">
                    <label class="custom-file-label" for="customFileLang">Select file</label>
                  </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="mb-3">
            <button type="button" class="btn btn-success btn-md btn-add-forms"><i class="fa fas fa-plus fa-fw"></i> Downloadable Forms</button>
          </div>
          <div class="row Increment-Forms">
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="example3cols3Input">Form Name</label>
                <input  type="text" class="form-control" id="Dept_Forms_Name[]" name="Dept_Forms_Name[]" value="" readonly>
              </div>
            </div>
            <div class="col-md-5">
              <div class="form-group">
                <label class="form-control-label" for="example3cols3Input">File</label>
                  <div class="custom-file">
                    <input  type="file" class="custom-file-input" id="customFileLang" lang="en" name="Dept_Forms_File[]">
                    <label class="custom-file-label" for="customFileLang">Select file</label>
                  </div>
              </div>
            </div>
            <div class="col-md-1">
              <div class="form-group">
                <label class="form-control-label" for="example3cols3Input">Remove</label>
                  <div class="">
                    <button type="button" class="btn btn-danger btn-remove-forms"><i class="fa fas fa-times fa-fw fa-lg"></i> </button>
                  </div>
              </div>
            </div>
          </div>
          <div class="Cloned-Forms">
          </div>
          <hr>
          <div class="mb-3">
            <button type="button" class="btn btn-success btn-md btn-add-services"><i class="fa fas fa-plus fa-fw"></i> Services</button>
          </div>
          <div class="row Increment-Services">
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="example3cols3Input">Service Name</label>
                <input  type="text" class="form-control" id="example3cols3Input" name="Dept_Services_Name" value="" readonly>
              </div>
            </div>
            <div class="col-md-5">
              <div class="form-group">
                <label class="form-control-label" for="example3cols3Input">File</label>
                  <div class="custom-file">
                    <input  type="file" class="custom-file-input" id="customFileLang" lang="en" name="Dept_Services_File[]">
                    <label class="custom-file-label" for="customFileLang">Select file</label>
                  </div>
              </div>
            </div>
            <div class="col-md-1">
              <div class="form-group">
                <label class="form-control-label" for="example3cols3Input">Remove</label>
                  <div class="">
                    <button type="button" class="btn btn-danger btn-remove-services"><i class="fa fas fa-times fa-fw fa-lg"></i> </button>
                  </div>
              </div>
            </div>
          </div>
          <div class="Cloned-Services">
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-12 col-md-12">
              <div class="form-group mb--1">
                <input type="submit"  class="btn btn-success btn-block" id="submit" value="SUBMIT" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
      <div class="card-deck flex-column flex-xl-row">
        <!-- Downloadable Forms -->
        <div class="card">
          <!-- Card header -->
          <div class="card-header">
            <div class="row align-items-center">
              <div class="col-8">
                <!-- Surtitle -->
                <h6 class="surtitle">Uploaded</h6>
                <!-- Title -->
                <h5 class="h3 mb-0">Downloadable Forms</h5>
              </div>
            </div>
          </div>
          <!-- Card body -->
          <div class="card-body">
            <!-- List group -->
            <ul class="list-group list-group-flush list my--3">
              @foreach ($Dept_Forms as $Forms)
              <li class="list-group-item px-0">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <!-- Hide Content -->
                    <form method="post" class="delete_form" action="{{action('Department_ContentController@destroy',$Forms->id)}}" >
                      {{csrf_field()}}
                      <input type="hidden" name="_method" value="DELETE">
                      <button type="submit" class="btn btn-danger btn-sm delete_btn" id="delete_btn"><i class="fa fas fa-times"></i></button>
                    </form>
                  </div>
                  <div class="col">
                    <h5>{{$Forms->dept_content}}</h5>
                  </div>
                </div>
              </li>
              @endforeach
            </ul>
          </div>
        </div>
        <!-- Services -->
        <div class="card">
          <!-- Card header -->
          <div class="card-header">
            <div class="row align-items-center">
              <div class="col-8">
                <!-- Surtitle -->
                <h6 class="surtitle">Uploaded</h6>
                <!-- Title -->
                <h5 class="h3 mb-0">Services</h5>
              </div>
            </div>
          </div>
          <!-- Card body -->
          <div class="card-body">
            <!-- List group -->
            <ul class="list-group list-group-flush list my--3">
              @foreach ($Dept_Services as $Services)
              <li class="list-group-item px-0">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <!-- Hide Content -->
                    <form method="post" class="delete_form" action="{{action('Department_ContentController@destroy',$Services->id)}}" >
                      {{csrf_field()}}
                      <input type="hidden" name="_method" value="DELETE">
                      <button type="submit" class="btn btn-danger btn-sm delete_btn" id="delete_btn"><i class="fa fas fa-times"></i></button>
                    </form>
                  </div>
                  <div class="col">
                    <h5>{{$Services->dept_content}}</h5>
                  </div>
                </div>
              </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>

      <!-- /Form Content -->

<script>
  //Downloadable Forms - Multiple
  $(".btn-add-forms").click(function(){ 
    var html = $('.Increment-Forms').clone();
    $('.Cloned-Forms').html(html);
  });

  $("body").on("click",".btn-remove-forms",function(){ 
    $(this).parents(".row").remove();
  });

  //Services - Multiple
  $(".btn-add-services").click(function(){ 
    var html = $('.Increment-Services').clone();
    $('.Cloned-Services').html(html);
  });

  $("body").on("click",".btn-remove-services",function(){ 
    $(this).parents(".row").remove();
  });

</script>
{{-- //onmouseout="for (var i = 0; i < this.files.length; i++) alert(this.files[i].name); --}}
@endsection