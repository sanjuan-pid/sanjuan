@extends('layouts.admin-app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                <div class="card-header">Admin User: {{$admin->email}}</div>
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
                  <form method="post" action="{{action('AdminRecordsController@update', $id)}}">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="PATCH" />
                    <div class="form-group row">

                        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="text" name ="email" class="form-control-plaintext" id="staticEmail" value="{{$admin->email}}">
                        </div>
                      </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" name ="name" class="form-control-plaintext" id="staticEmail" value="{{$admin->name}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Job Title</label>
                        <div class="col-sm-10">
                          <input type="text" name ="job_title"  class="form-control-plaintext" id="staticEmail" value="{{$admin->job_title}}">
                        </div>
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn btn-primary" value="Edit" />
                    </div>
                  </form>
            </div>
        </div>
    </div>
</div>
@endsection
