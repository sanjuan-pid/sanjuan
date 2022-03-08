@extends('layouts.app-admin')
@section('content')
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <!-- Header -->
    <div class="header pb-6">
        <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
                <h6 class="h2 d-inline-block mb-0">CITY / TRANSPARENCY - EDIT</h6>
            </div>
            <div class="col-lg-6 col-5 text-right">
                <a href="{{route('admin.transparency.trans_list')}}" class="btn btn-sm btn-neutral"><i class="fa fas fa-angle-double-left fa-fw"></i> Back to list</a>
            </div>
            </div>
        </div>
        </div>
    </div>
    <!-- /Header -->

    <!-- Page content -->
    <div class="container-fluid mt--6">
      <!-- Form Content -->
      <form method="post" action="{{action('transparencyController@update',$id)}}" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="PATCH" />
      <div class="card">
        <!-- Card header -->
        <div class="card-header">
          <h3 class="mb-0">Transparency Information</h3>
        </div>
        <!-- Card body -->
        <div class="card-body">
          <!-- Form Content -->
          <div class="row">
            <div class="col-md-12">
              <div class="form-group text-center">
                <img src="{{asset("uploads/" . $trans->trans_image) }}" class="img-thumbnail w-25" />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-10">
              <div class="form-group">
                <label class="form-control-label" for="name">Title</label>
                <input required type="text" class="form-control" name ="title" value="{{$trans->trans_title}}">
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label class="form-control-label" for="name">View PDF</label>
                <a href="{{asset("uploads/" . $trans->trans_pdf) }}" class="btn btn-info btn-block font-weight-bold" target="_blank"><i class="fa fas fa-eye"></i></a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label class="form-control-label" for="category">Category</label>
                <select name ="category" class="form-control" id="staticEmail">
                    <option selected value="{{$trans->trans_category}}">{{$trans->trans_category}} (Selected)</option>
                    <option value="Bids and Awards">Bids and Awards</option>
                    <option value="Reports">Reports</option>
                    <option value="Executive Orders">Executive Orders</option>
                    <option value="City Ordinance">City Ordinance</option>
                    <option value="City Resolution">City Resolution</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                  <label class="form-control-label" for="year">Year Issued</label>
                  <input type="number" min="2000" max="2099" step="1" value="{{$trans->trans_year}}" name ="year" class="form-control" id="year"/>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label class="form-control-label" for="tag">Tag</label>
                  <select name ="tag" class="form-control" id="staticEmail">
                    <option selected value="{{$trans->trans_tag}}">{{$trans->trans_tag}} (Selected)</option>
                    <option value="Show">Show</option>
                    <option value="Hide">Hide</option>
                </select>
                </div>
              </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="transimg">Upload Thumbnail</label>
                <input type="hidden"   name ="transimg_" class="form-control" id="staticEmail" value="{{$trans->trans_image}}">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="transimg" lang="en" name="transimg" value="{{$trans->trans_image}}">
                    <label class="custom-file-label" for="customFileLang">{{$trans->trans_image}}</label>
                  </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="pdf_filename">Upload PDF File</label>
                <input type="hidden"   name ="pdf_filename_" class="form-control" id="staticEmail" value="{{$trans->trans_pdf}}">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="pdf_filename" lang="en" name="pdf_filename" value="{{$trans->trans_pdf}}">
                    <label class="custom-file-label" for="customFileLang">{{$trans->trans_pdf}}</label>
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