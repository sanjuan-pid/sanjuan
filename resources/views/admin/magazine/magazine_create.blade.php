@extends('layouts.app-admin')
@section('content')
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <!-- Header -->
    <div class="header pb-6">
        <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
                <h6 class="h2 d-inline-block mb-0">CITY / MAGAZINE - CREATE</h6>
            </div>
            <div class="col-lg-6 col-5 text-right">
                <a href="{{route('admin.magazine.magazine_list')}}" class="btn btn-sm btn-neutral"><i class="fa fas fa-angle-double-left fa-fw"></i> Back to list</a>
            </div>
            </div>
        </div>
        </div>
    </div>
    <!-- /Header -->

    <!-- Page content -->
    <div class="container-fluid mt--6">
      <!-- Form Content -->
      <form method="post" action="{{action('MagazineController@store')}}" enctype="multipart/form-data" id="Form_Magazine">
        {{csrf_field()}}
      <div class="card">
        <!-- Card header -->
        <div class="card-header">
          <h3 class="mb-0">Magazine Information</h3>
        </div>
        <!-- Card body -->
        <div class="card-body">
          <!-- Form Content -->
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label class="form-control-label" for="name">Name</label>
                <input required type="text" class="form-control" id="name" name="name">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label class="form-control-label" for="month">Month Issued</label>
                <select name ="month" class="form-control" id="staticEmail">
                    <option disabled selected>--Select--</option>
                    <option value="January">January</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                  <label class="form-control-label" for="year">Year Issued</label>
                  <input type="number" min="2000" max="2099" step="1" value="2000" name ="year" class="form-control" id="year"/>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label class="form-control-label" for="tag">Tag</label>
                  <select name ="tag" class="form-control" id="staticEmail">
                    <option value="Publish">Publish</option>
                    <option value="Unpublish">Unpublish</option>
                </select>
                </div>
              </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="filename">Upload Thumbnail</label>
                  <div class="custom-file">
                    <input required type="file" class="custom-file-input" id="filename" lang="en" name="filename">
                    <label class="custom-file-label" for="customFileLang">Select file</label>
                  </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="pdf_filename">Upload PDF File</label>
                  <div class="custom-file">
                    <input required type="file" class="custom-file-input" id="pdf_filename" lang="en" name="pdf_filename">
                    <label class="custom-file-label" for="customFileLang">Select file</label>
                  </div>
              </div>
            </div>
          </div>
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
      <!-- /Form Content -->
      <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $('#year').keypress(function(e) {
        e.preventDefault();
    });

</script>
@endsection