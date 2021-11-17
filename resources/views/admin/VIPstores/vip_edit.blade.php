@extends('layouts.admin-app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                <div class="card-header">
                 </div>
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

                <div class="card-body">
                 <form method="post" action="{{action('Admin_VIPController@update', $id)}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="PATCH" />
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Logo</label>
                        <div class="col-sm-10">
                         <img src="{{asset("uploads/" . $vips->filename) }}" width="200px"  height="200px" class="img-thumbnail mb-3" />
                         <input type="file" name ="filename" class="form-control" value="{{$vips->filename}}">
                         <input type="hidden" name ="filename_" class="form-control" value="{{$vips->filename}}">
                          
                        </div>
                    </div>  
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Establishment</label>
                        <div class="col-sm-10">
                          <input type="text"   name ="establishment" class="form-control" id="staticEmail" value="{{$vips->establishment}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Offers</label>
                        <div class="col-sm-10">
                          <input type="text"   name ="offers" class="form-control" id="staticEmail" value="{{$vips->offers}}" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Category</label>
                        <div class="col-sm-10">
                          <select name ="category" class="form-control" id="staticEmail">
                              <option selected value="{{$vips->category}}">{{$vips->category}} (Selected)</option>
                              <option value="Fastfood">Fastfood</option>
                              <option value="Restaurant">Restaurant</option>
                              <option value="Others">Others</option>
                          </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                          <input type="text"   name ="address" class="form-control" id="staticEmail" value="{{$vips->address}}" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Contact Person</label>
                        <div class="col-sm-10">
                          <input type="text"   name ="contact_person" class="form-control" id="staticEmail" value="{{$vips->contact_person}}" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Contact No</label>
                        <div class="col-sm-10">
                          <input type="text"   name ="contact_no" class="form-control" id="staticEmail" value="{{$vips->contact_no}}" >
                        </div>
                    </div>             
                    <div class="form-group">
                      <input type="submit" class="btn btn-success btn-block" value="SUBMIT" />
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
