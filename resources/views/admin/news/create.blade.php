@extends('layouts.admin-app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
        
                <div class="card-body">
                  <p>Add News</p>
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
                  <form method="post" action="{{action('NewsController@store')}}" enctype="multipart/form-data">
                    
                    {{csrf_field()}}
        
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                          <input type="file" required  name ="filename" class="form-control" id="staticEmail" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                          <input type="text" required  name ="title" class="form-control" id="staticEmail" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                          <div id="editor">
                         </div>
                          <textarea  rows="10" id="description" hidden name ="description" class="form-control"></textarea>
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