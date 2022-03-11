@extends('layouts.app-admin')
@section('content')
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <!-- Header -->
    <div class="header pb-6">
        <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
                <h6 class="h2 d-inline-block mb-0">BARANGAY - CREATE</h6>
            </div>
            <div class="col-lg-6 col-5 text-right">
                <a href="{{route('admin.brgy.brgy_list')}}" class="btn btn-sm btn-neutral"><i class="fa fas fa-angle-double-left fa-fw"></i> Back to list</a>
            </div>
            </div>
        </div>
        </div>
    </div>
    <!-- /Header -->

    <!-- Page content -->
    <div class="container-fluid mt--6">
      <!-- Form Content -->
      <form method="post" action="{{action('Brgy_ContentController@store')}}" enctype="multipart/form-data" id="Form_Brgy">
      {{csrf_field()}}
      <div class="card">
        <!-- Card header -->
        <div class="card-header">
          <h3 class="mb-0">Barangay Information</h3>
        </div>
        <!-- Card body -->
        <div class="card-body">
          <!-- Form Content -->
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="brgyname">Barangay Name</label>
                <input required type="text" name="brgyname" class="form-control" id="brgyname">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="brgylogo">Barangay Logo</label>
                  <div class="custom-file">
                    <input required type="file" class="custom-file-input" id="brgylogo" lang="en" name="brgylogo">
                    <label class="custom-file-label" for="brgylogo">Select file</label>
                  </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="brgycontact">Barangay Contact No.</label>
                <input required type="text" name="brgycontact" class="form-control" id="brgycontact">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="brgyemail">Barangay Email Address</label>
                <input type="text" name="brgyemail" class="form-control" id="brgyemail">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label class="form-control-label" for="validationCustom04">About Barangay</label>
              <div class="mb-3">
                <input name="brgyabout" id="brgyabout" type="hidden" value="">
                <div id="editor-container-about">
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label class="form-control-label" for="validationCustom04">Mission</label>
              <div class="mb-3">
                <input name="brgymission" id="brgymission" type="hidden" value="">
                <div id="editor-container-mission">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <label class="form-control-label" for="validationCustom04">Vision</label>
              <div class="mb-3">
                <input name="brgyvision" id="brgyvision" type="hidden" value="">
                <div id="editor-container-vision">
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="brgycharter">Citizen Charter</label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="brgycharter" lang="en" name="brgycharter">
                    <label class="custom-file-label" for="brgycharter">Select file</label>
                  </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="brgyorg">Organizational Chart</label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="brgyorg" lang="en" name="brgyorg">
                    <label class="custom-file-label" for="brgyorg">Select file</label>
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

    // var quillabout = new Quill('#editor-container-about', {
    //     modules: {
    //       toolbar: toolbarOptions
    //      },
    //     placeholder: 'Compose a description of the barangay...',
    //     theme: 'snow'
    //     });
    //     //var quill = new Quill('#editor-container', {});
    //     var form = document.getElementById('Form_Brgy');
    //       form.onsubmit = function () {
    //           // Populate hidden form on submit
    //           var content = document.querySelector('input[name=brgyabout]');
    //           content.value = quillabout.root.innerHTML;
    //       }

    // var quillmission = new Quill('#editor-container-mission', {
    //     modules: {
    //       toolbar: toolbarOptions
    //      },
    //     placeholder: 'Mission of the barangay...',
    //     theme: 'snow'
    //     });
    //     //var quill = new Quill('#editor-container', {});
    //     var form = document.getElementById('Form_Brgy');
    //       form.onsubmit = function () {
    //           // Populate hidden form on submit
    //           var content = document.querySelector('input[name=brgymission]');
    //           content.value = quillmission.root.innerHTML;
    //       }

    var Editors = ['#editor-container-about', '#editor-container-mission', '#editor-container-vision'];
    var quill;
      for(var k=0; k<=Editors.length; k++)
        {
          quill = new Quill(Editors[k], {
            modules: {
            toolbar: toolbarOptions
          },
          theme: 'snow'
          });
        }

    var form = document.getElementById('Form_Brgy');
      form.onsubmit = function () {
        var myEditor_about = document.querySelector('#editor-container-about')
        var val_about = myEditor_about.children[0].innerHTML

        var myEditor_mission = document.querySelector('#editor-container-mission')
        var val_mission = myEditor_mission.children[0].innerHTML

        var myEditor_vision = document.querySelector('#editor-container-vision')
        var val_vision = myEditor_vision.children[0].innerHTML

        $("#brgyabout").val(val_about);
        $("#brgymission").val(val_mission);
        $("#brgyvision").val(val_vision);
      }
</script>
@endsection