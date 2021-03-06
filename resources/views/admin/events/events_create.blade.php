@extends('layouts.app-admin')
@section('content')
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <!-- Header -->
    <div class="header pb-6">
        <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
                <h6 class="h2 d-inline-block mb-0">EVENTS / LIST - CREATE</h6>
            </div>
            <div class="col-lg-6 col-5 text-right">
                <a href="{{route('admin.events.events_list')}}" class="btn btn-sm btn-neutral"><i class="fa fas fa-angle-double-left fa-fw"></i> Back to list</a>
            </div>
            </div>
        </div>
        </div>
    </div>
    <!-- /Header -->

    <!-- Page content -->
    <div class="container-fluid mt--6">
      <!-- Form Content -->
      <form method="post" action="{{action('EventsController@store')}}" enctype="multipart/form-data" id="Form_Event">
        {{csrf_field()}}
      <div class="card">
        <!-- Card header -->
        <div class="card-header">
          <h3 class="mb-0">Event Information</h3>
        </div>
        <!-- Card body -->
        <div class="card-body">
          <!-- Form Content -->
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="Event_Title">Title</label>
                <input required type="text" class="form-control" id="Event_Title" name="Event_Title">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="Event_Image">Upload Image</label>
                  <div class="custom-file">
                    <input required type="file" class="custom-file-input" id="Event_Image" lang="en" name="Event_Image">
                    <label class="custom-file-label" for="customFileLang">Select file</label>
                  </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
                <label class="form-control-label" for="validationCustom04">Content</label>
                <div class="mb-3">
                  <input name="Event_Desc" type="hidden" value="">
                  <div id="editor-container">
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
    var toolbarOptions = [
        ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
        ['blockquote', 'code-block', 'link'],

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
        placeholder: 'Compose a description for the activity...',
        theme: 'snow'
        });
        //var quill = new Quill('#editor-container', {});
        var form = document.getElementById('Form_Event');
          form.onsubmit = function () {
              // Populate hidden form on submit
              var content = document.querySelector('input[name=Event_Desc]');
              content.value = quill.root.innerHTML;
          }
</script>
@endsection