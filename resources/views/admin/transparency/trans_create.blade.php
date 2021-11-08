@extends('layouts.admin-app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card mb-3" style="background-image: linear-gradient(to top, #00c6fb 0%, #005bea 100%);">
                <div class="card-body mt-2">
                 <h4 class="font-weight-bold text-white">Transparency Information</h4>
                </div>
            </div>
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
            <div class="card">
                <div class="card-body">
                  <form method="post" action="{{action('transparencyController@store')}}" enctype="multipart/form-data">

                    {{csrf_field()}}
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Thumbnail</label>
                        <div class="col-sm-10">
                          <input type="file"   name ="transimg" class="form-control" id="staticEmail" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Category</label>
                        <div class="col-sm-10">
                            <select name ="category" class="form-control" id="staticEmail">
                                <option disabled selected>--Select--</option>
                                <option value="Bids and Awards">Bids and Awards</option>
                                <option value="Reports">Reports</option>
                                <option value="Executive Orders">Executive Orders</option>
                                <option value="City Ordinance">City Ordinance</option>
                                <option value="City Resolution">City Resolution</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">PDF File</label>
                        <div class="col-sm-10">
                          <input type="file"   name ="pdf_filename" class="form-control" id="staticEmail" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Tile</label>
                        <div class="col-sm-10">
                          <input type="text"   name ="title" class="form-control" id="staticEmail" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Year</label>
                        <div class="col-sm-10">
                          <input type="text"   name ="year" class="form-control" id="staticEmail" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Tag</label>
                        <div class="col-sm-10">
                            <select name ="tag" class="form-control" id="staticEmail">
                                <option value="Show">show</option>
                                <option value="Hide">hide</option>
                            </select>
                        </div>
                    </div>
            </div>
            <div class="card-footer bg-transparent">
                <input type="submit"  class="btn btn-success btn-block font-weight-bold text-uppercase" id="submit" value="Submit" />
            </div>
        </form>
        </div>
    </div>
</div>

@endsection
