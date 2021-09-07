@extends('layouts.admin-app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
        
                <div class="card-body">
                  <p>Add New VIP Store</p>
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
                  <form method="post" action="{{action('Admin_VIPController@store')}}" enctype="multipart/form-data">
                    
                    {{csrf_field()}}
        
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Logo</label>
                        <div class="col-sm-10">
                          <input type="file"   name ="filename" class="form-control" id="staticEmail" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Establishment</label>
                        <div class="col-sm-10">
                          <input type="text"   name ="establishment" class="form-control" id="staticEmail" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Offers</label>
                        <div class="col-sm-10">
                          <input type="text"   name ="offers" class="form-control" id="staticEmail" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Category</label>
                        <div class="col-sm-10">
                          <select name ="category" class="form-control" id="staticEmail">
                              <option disabled selected>--Select--</option>
                              <option value="Fast Food">Fast Food</option>
                              <option value="Restaurant">Restaurant</option>
                              <option value="Others">Others</option>
                          </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                          <input type="text"   name ="address" class="form-control" id="staticEmail" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Contact Person</label>
                        <div class="col-sm-10">
                          <input type="text"   name ="contact_person" class="form-control" id="staticEmail" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Contact No</label>
                        <div class="col-sm-10">
                          <input type="text"   name ="contact_no" class="form-control" id="staticEmail" >
                        </div>
                    </div>
                    <div class="form-group">
                      <input type="submit"  class="btn btn-success" id="submit" value="Submit" />
                    </div>
                  </form>
            </div>
        </div>
    </div>
</div>

@endsection