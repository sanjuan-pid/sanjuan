@extends('layouts.admin-app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                <div class="card-header">Upload Events
                    <a href="{{action('EventsController@create')}}" class="btn btn-success" style="color:#fff; float:right;">Add New</a>
                </div>
                
                @if(\Session::has('success'))
                <div class="alert alert-success">
                <p>{{ \Session::get('success')}}</p>
                </div>
                @endif
                <div class="card-body">
                    <form method="post" action="{{action('EventsController@store')}}" enctype="multipart/form-data">
                    
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
                             <textarea  name ="description" required class="form-control" cols="30" rows="10"></textarea>
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
</div>
<script>
    
// $(document).ready(function() {
//     $('.delete_form').submit(function(){
//         if(confirm("Are you sure you want to delete it?")){
//             return true;
//         }
//         else{
//             return false;
//         }
//     });
// } );
// </script>
@endsection
