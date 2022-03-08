@extends('layouts.app-admin')
@section('content')
    <!-- Header -->
    <div class="header pb-6">
        <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
                <h6 class="h2 d-inline-block mb-0">DEPARTMENTS - EDIT</h6>
            </div>
            <div class="col-lg-6 col-5 text-right">
                <a href="{{route('admin.dept.dept_list')}}" class="btn btn-sm btn-neutral"><i class="fa fas fa-angle-double-left fa-fw"></i> Back to list</a>
            </div>
            </div>
        </div>
        </div>
    </div>
    <!-- /Header -->

    <!-- Page content -->
    <div class="container-fluid mt--6">
      <!-- Form Content -->
      <form method="POST" action="{{action('Department_MainController@update',$id)}}" enctype="multipart/form-data">
      {{csrf_field()}}
      <input type="hidden" name="_method" value="PATCH" />
      <div class="card">
        <!-- Card header -->
        <div class="card-header">
          <h3 class="mb-0">Department Information</h3>
        </div>
        <!-- Card body -->
        <div class="card-body">
          @foreach ($dept as $item)
          <!-- Form Content -->
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label class="form-control-label" for="example3cols1Input">Name</label>
                <input required type="text" name="name" class="form-control" id="example3cols1Input" value="{{$item->dept_name}}">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label class="form-control-label" for="example3cols2Input">Office Code</label>
                <input required type="text" name="code" class="form-control" id="staticEmail" value="{{$item->dept_code}}">
                <input type="hidden" value="{{$item->dept_code}}" name="code_hidden">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label class="form-control-label" for="example3cols3Input">Sector</label>
                <select name="sector" class="form-control" id="staticEmail" required>
                  <option selected value="{{$item->dept_sector}}">{{$item->dept_sector}} (Selected)</option>
                  <option value="Institutional Development">Institutional Development</option>
                  <option value="Economic Center">Economic Center</option>
                  <option value="Environmental Sector">Environmental Sector</option>
                  <option value="Social Services">Social Services</option>
                  <option value="Physical Infrastructure">Physical Infrastructure</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="example3cols1Input">Office Placement</label>
                <select name="placement" class="form-control" id="staticEmail" required>
                  <option selected value="{{$item->dept_placement}}">{{$item->dept_placement}} (Selected)</option>
                  <option value="4TH FLOOR">4TH FLOOR</option>
                  <option value="3RD FLOOR">3RD FLOOR</option>
                  <option value="2ND FLOOR">2ND FLOOR</option>
                  <option value="UPPER GROUND">UPPER GROUND</option>
                  <option value="LOWER GROUND">LOWER GROUND</option>
                  <option value="COUNCILOR'S OFFICE">COUNCILOR'S OFFICE</option>
                  <option value="NATIONAL OFFICES">NATIONAL OFFICES</option>
                  <option value="BARANGAY DIRECTORY">BARANGAY DIRECTORY</option>
                  <option value="OUTSIDE">OUTSIDE</option>
                </select>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="example3cols2Input">Contact No.</label>
                <input required type="text" class="form-control" id="example3cols2Input" name="contact_no" value="{{$item->dept_contactno}}">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="example3cols3Input">Email</label>
                <input required type="text" class="form-control" id="example3cols3Input" name="email" value="{{$item->dept_email}}">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label class="form-control-label" for="example3cols3Input">Department Logo</label>
                <input type="hidden" name="dept_logo_recent" value="{{$item->dept_logo}}">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFileLang" lang="en" name="dept_logo">
                    <label class="custom-file-label" for="customFileLang">Select file</label>
                  </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-4 col-md-4">
              <div class="form-group">
                <label class="form-control-label" for="staticEmail">Department Head</label>
                <input required type="text" class="form-control" id="staticEmail" name="depthead" value="{{$item->member_name}}">
              </div>
            </div>
            <div class="col-sm-4 col-md-4">
              <div class="form-group">
                <label class="form-control-label" for="staticEmail">Designation</label>
                <input required type="text" class="form-control" id="staticEmail" name="designation" value="{{$item->member_designation}}">
              </div>
            </div>
            <div class="col-sm-4 col-md-4">
              <div class="form-group">
                <label class="form-control-label" for="staticEmail">Salary Grade</label>
                <select name="sg" class="form-control" id="staticEmail" required>
                  <option selected value="{{$item->member_sg}}">{{$item->member_sg}} (Selected)</option>
                  <option value="SG1">SG1</option>
                  <option value="SG2">SG2</option>
                  <option value="SG3">SG3</option>
                  <option value="SG4">SG4</option>
                  <option value="SG5">SG5</option>
                  <option value="SG6">SG6</option>
                  <option value="SG7">SG7</option>
                  <option value="SG8">SG8</option>
                  <option value="SG9">SG9</option>
                  <option value="SG10">SG10</option>
                  <option value="SG11">SG11</option>
                  <option value="SG12">SG12</option>
                  <option value="SG13">SG13</option>
                  <option value="SG14">SG14</option>
                  <option value="SG15">SG15</option>
                  <option value="SG16">SG16</option>
                  <option value="SG17">SG17</option>
                  <option value="SG18">SG18</option>
                  <option value="SG19">SG19</option>
                  <option value="SG20">SG20</option>
                  <option value="SG21">SG21</option>
                  <option value="SG22">SG22</option>
                  <option value="SG23">SG23</option>
                  <option value="SG24">SG24</option>
                </select>
              </div>
            </div>
          </div>
          @endforeach
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
@endsection