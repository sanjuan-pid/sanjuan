@extends('layouts.admin-app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                  <p>Create New Admin Account</p>
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
                  <form method="post" action="{{action('AdminRecordsController@store')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{-- <input type="hidden" name="_method" value="PATCH" /> --}}
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                          <input type="file" required  name ="filename" class="form-control" id="staticEmail" >
                        </div>
                    </div>
                    <div class="form-group row">

                        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" required  name ="email" class="form-control" id="staticEmail" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" required  name ="name" class="form-control" id="staticEmail" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Job Title</label>
                        <div class="col-sm-10">
                          <input type="text" required  name ="job_title"  class="form-control" id="staticEmail" >
                        </div>
                    </div>
                    <div class="form-group row">
                      <label for="staticPassword" class="col-sm-2 col-form-label">Password</label>
                      <div class="col-sm-10">
                        <input type="password" required name ="password" id="password"  class="form-control" id="staticPassword" >
                      </div>
                  </div>
                  <div class="form-group row">
                    <label for="staticPassword1" class="col-sm-2 col-form-label">Confirm</label>
                    <div class="col-sm-10">
                      <input type="password" required  name ="cpassword" id="cpassword"  class="form-control" id="staticPassword1" >
                    </div>
                    <p id="error_password" style="color:red; display:none;">Password doesn't match !</p>
                 </div>
                    <div class="form-group">
                      <input type="submit" style="display;" class="btn btn-success" id="submit" value="Submit" />
                    </div>
                  </form>
            </div>
        </div>
    </div>
</div>
<script>
  $(document).ready(function(event) {
       $("#cpassword").keyup(function() {
           //Interrupt the execution thread to allow input to update
           var cpass= this.value;
           var password = $("#password").val();
           //alert("Confirm: "+this.value+" password: "+password);
           if( password==cpass ){
             $("#submit").css("display","block");
             $("#error_password").css("display","none");
           }
           else{
            $("#submit").css("display","none");
            $("#error_password").css("display","block");
            
           }
       });
  });
</script>
@endsection
