@extends('layouts.app-admin')
@section('content')
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <!-- Header -->
    <div class="header pb-6">
        <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
                <h6 class="h2 d-inline-block mb-0">CITY / VIP STORES - EDIT</h6>
            </div>
            <div class="col-lg-6 col-5 text-right">
                <a href="{{route('admin.vip.vip_list')}}" class="btn btn-sm btn-neutral"><i class="fa fas fa-angle-double-left fa-fw"></i> Back to list</a>
            </div>
            </div>
        </div>
        </div>
    </div>
    <!-- /Header -->

    <!-- Page content -->
    <div class="container-fluid mt--6">
      <!-- Form Content -->
      <form method="post" action="{{action('Admin_VIPController@update', $id)}}" enctype="multipart/form-data" id="Form_VIPStore">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="PATCH" />
      <div class="card">
        <!-- Card header -->
        <div class="card-header">
          <h3 class="mb-0">Store / Establishment Information</h3>
        </div>
        <!-- Card body -->
        <div class="card-body">
          <!-- Form Content -->
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="establishment">Store / Establishment</label>
                <input required type="text" class="form-control" name ="establishment" value="{{$vips->establishment}}">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="filename">Upload Logo</label>
                <input type="hidden" name ="filename_" class="form-control" value="{{$vips->filename}}">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="filename" lang="en" name="filename" value="{{$vips->filename}}">
                    <label class="custom-file-label" for="customFileLang">{{$vips->filename}}</label>
                  </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label class="form-control-label" for="validationCustom04">Offers</label>
              <div class="mb-3">
                <input name="offers" type="hidden" value="{{$vips->offers}}">
                <div id="editor-container">
                    {!!$vips->offers!!}
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label class="form-control-label" for="transimg">Category</label>
                <select name ="category" class="form-control" id="staticEmail">
                  <option selected value="{{$vips->category}}">{{$vips->category}} (Selected)</option>
                  <option value="Fast Food">Fast Food</option>
                  <option value="Restaurant">Restaurant</option>
                  <option value="Others">Others</option>
              </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label class="form-control-label" for="establishment">Contact Person</label>
                <input required type="text" class="form-control" name ="contact_person" value="{{$vips->contact_person}}">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label class="form-control-label" for="establishment">Contact No.</label>
                <input required type="text" class="form-control" name ="contact_no" value="{{$vips->contact_no}}">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label class="form-control-label" for="establishment">Address</label>
                <input required type="text" class="form-control" name ="address" value="{{$vips->address}}">
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

    var toolbarOptions = [
        ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
        ['blockquote', 'code-block'],

        [{ 'header': 1 }, { 'header': 2 }],               // custom button values
        [{ 'list': 'ordered'}, { 'list': 'bullet' }],
        [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
        [{ 'direction': 'rtl' }],                         // text direction

        [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
        [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

        [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
        [{ 'font': [] }],
        [{ 'align': [] }],

        ['clean']                                         // remove formatting button
        ];

    var quill = new Quill('#editor-container', {
        modules: {
          toolbar: toolbarOptions
         },
        placeholder: 'Type offers or discounts here...',
        theme: 'snow'
        });
        //var quill = new Quill('#editor-container', {});
        var form = document.getElementById('Form_VIPStore');
          form.onsubmit = function () {
              // Populate hidden form on submit
              var content = document.querySelector('input[name=offers]');
              content.value = quill.root.innerHTML;
          }
</script>
@endsection