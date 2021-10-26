@extends('layouts.admin-app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card mb-3" style="background-image: linear-gradient(to top, #00c6fb 0%, #005bea 100%);">
                <div class="card-body mt-2">
                 <h4 class="font-weight-bold text-white">Magazine Information</h4>
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
                  <form method="post" action="{{action('MagazineController@store')}}" enctype="multipart/form-data">

                    {{csrf_field()}}

                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Thumbnail</label>
                        <div class="col-sm-10">
                          <input type="file"   name ="filename" class="form-control" id="staticEmail" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">PDF File</label>
                        <div class="col-sm-10">
                          <input type="file"   name ="pdf_filename" class="form-control" id="staticEmail" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text"   name ="name" class="form-control" id="staticEmail" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Month Issued</label>
                        <div class="col-sm-10">
                            <select name ="month" class="form-control" id="staticEmail">
                                <option disabled selected>--Select--</option>
                                <option value="January">January</option>
                                <option value="February">February</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="August">August</option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Year Issued</label>
                        <div class="col-sm-10">
                            <input type="number" min="2000" max="2099" step="1" value="2000" name ="year" class="form-control" id="year"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Tag</label>
                        <div class="col-sm-10">
                            <select name ="tag" class="form-control" id="staticEmail">
                                <option value="Publish">Publish</option>
                                <option value="Unpublish">Unpublish</option>
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
<script>
    $('#year').keypress(function(e) {
        e.preventDefault();
    });
</script>
@endsection
