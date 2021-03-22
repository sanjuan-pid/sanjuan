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
                <div class="card-header">
                    <h3>
                        Title: {{$news->title}}
                    </h3>
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
                  <form method="post" action="{{action('AnnouncementsCongressman@update', $id)}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="PATCH" />
                    <div class="form-group row">

                        <label for="staticEmail" class="col-sm-4 col-form-label"><b>Title</b></label>
                        <div class="col-sm-8">
                          <input type="text" name ="title" class="form-control" value="{{$news->title}}">
                        </div>
                      </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label"><b>Article / Description</b></label>
                        <div class="col-sm-8">
                          <textarea  rows="10" name ="description" class="form-control">{{$news->desc}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label"><b>Image</b></label>
                        <div class="col-sm-8">
                         <img src="{{asset("uploads/" . $news->filename) }}" width="200px"  height="140px"/>
                         <input type="file" name ="filename" class="form-control" value="{{$news->filename}}">
                         <input type="hidden" name ="filename_" class="form-control" value="{{$news->filename}}">
                          
                        </div>
                    </div>                    
                    <div class="form-group">
                      <input type="submit" class="btn btn-success" value="Submit" />
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
