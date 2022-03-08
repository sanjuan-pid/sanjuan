@extends('layouts.app-admin')
@section('content')
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <!-- Header -->
    <div class="header pb-6">
        <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
                <h6 class="h2 d-inline-block mb-0">CITY / ACTIVITY - EDIT</h6>
            </div>
            <div class="col-lg-6 col-5 text-right">
                <a href="{{route('admin.activity.act-list')}}" class="btn btn-sm btn-neutral"><i class="fa fas fa-angle-double-left fa-fw"></i> Back to list</a>
            </div>
            </div>
        </div>
        </div>
    </div>
    <!-- /Header -->

    <!-- Page content -->
    <div class="container-fluid mt--6">
      <!-- Form Content -->
      <form method="post" action="{{action('ActivityController@update', $id)}}" enctype="multipart/form-data"  id="Form_Activity">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="PATCH" />
      <div class="card">
        <!-- Card header -->
        <div class="card-header">
          <h3 class="mb-0">Activity Information</h3>
        </div>
        <!-- Card body -->
        <div class="card-body">
          <!-- Form Content -->
          <div class="row">
            <div class="col-md-12">
              <div class="form-group text-center">
                <img src="{{asset("uploads/" . $act->filename) }}" class="img-thumbnail w-50" />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="Act_Title">Title</label>
                <input required type="text" class="form-control" id="Act_Title" name="Act_Title" value="{{$act->title}}">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="hidden" id="Act_Image_Recent" name="Act_Image_Recent" value="{{$act->filename}}">
                <label class="form-control-label" for="Act_Image">Upload Image</label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="Act_Image" lang="en" name="Act_Image" value="{{$act->filename}}">
                    <label class="custom-file-label" for="customFileLang">{{$act->filename}}</label>
                  </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
                <label class="form-control-label" for="validationCustom04">Content</label>
                <div class="mb-3">
                  <input name="Act_Desc" type="hidden" value="{{$act->desc}}">
                  <div id="editor-container">
                    {!!$act->desc!!}
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
        placeholder: 'Compose a description for the activity...',
        theme: 'snow'
        });
        //var quill = new Quill('#editor-container', {});
        var form = document.getElementById('Form_Activity');
          form.onsubmit = function () {
              // Populate hidden form on submit
              var content = document.querySelector('input[name=Act_Desc]');
              content.value = quill.root.innerHTML;
          }
</script>
@endsection