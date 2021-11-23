@extends('layouts.admin-app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <strong>Department Information</strong>
                  </div>
                <div class="card-body">
                  @if (session('status'))
                  <div class="alert alert-success" role="alert">
                      {{ session('status') }}
                  </div>
                  @endif
                  @if(count($errors) > 0)
                  <div class="alert alert-danger">
                      <ul>
                          @foreach($errors->all() as $error)
                              <li>
                                  {{$error}}
                              </li>
                          @endforeach
                      </ul>
                  </div>
                  @endif
                  <form method="post" action="{{action('Department_MainController@store')}}" enctype="multipart/form-data">
                    
                    {{csrf_field()}}
        
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" name="name" class="form-control" id="staticEmail" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Office Code</label>
                        <div class="col-sm-10">
                          <input type="text" name="code" class="form-control" id="staticEmail" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Sector</label>
                        <div class="col-sm-10">
                          <input type="text" name="sector" class="form-control" id="staticEmail" >
                        </div>
                    </div>
                    <div class="form-group row">
                      <label for="staticEmail" class="col-sm-2 col-form-label">Office Placement</label>
                      <div class="col-sm-10">
                        <select name="placement" class="form-control" id="staticEmail">
                            <option disabled selected>--Select--</option>
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
                    <div class="form-group row mb-4">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Contact No</label>
                        <div class="col-sm-10">
                          <input type="text"   name ="contact_no" class="form-control" id="staticEmail" >
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label for="staticEmail" class="col-sm-2 col-form-label">Email Address</label>
                      <div class="col-sm-10">
                        <input type="text"   name ="email" class="form-control" id="staticEmail" >
                      </div>
                  </div>
                  <hr>
                    <div class="form-group row mt-4">
                      <label for="staticEmail" class="col-sm-2 col-form-label">Department Head</label>
                      <div class="col-sm-10">
                        <input type="text" name="depthead" class="form-control" id="staticEmail" >
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="staticEmail" class="col-sm-2 col-form-label">Designation</label>
                      <div class="col-sm-10">
                        <input type="text" name="designation" class="form-control" id="staticEmail" >
                      </div>
                  </div>
                  <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Salary Grade</label>
                    <div class="col-sm-10">
                      <select name="sg" class="form-control" id="staticEmail">
                          <option disabled selected>--Select--</option>
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
                    <div class="form-group">
                      <input type="submit"  class="btn btn-success btn-block" id="submit" value="SUBMIT" />
                    </div>
                  </form>
            </div>
        </div>
    </div>
</div>

@endsection