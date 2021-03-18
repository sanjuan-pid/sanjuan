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
                <div class="card-header">User: {{$users->email}}</div>
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
                  <form method="post" action="{{action('RecordsController@update', $id)}}">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="PATCH" />
                    <div class="form-group row">

                        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="text" name ="email" class="form-control-plaintext" id="staticEmail" value="{{$users->email}}">
                        </div>
                      </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" name ="name" class="form-control-plaintext" id="staticEmail" value="{{$users->name}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                          <input type="text" name ="address"  class="form-control-plaintext" id="staticEmail" value="{{$users->address}}">
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
