@extends('layouts.admin-app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{-- @include('admin.inc.count') --}}
                    <p id="demo"></p>
                    <div class="row" style="display:none;">
                        <div class="col-md-12">
                            <h3>Add Data</h3>
                            <br>
                        
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
                        @if(\Session::has('success'))
                        {{-- session ung nilagay mo sa return ng controller --}}
                    
                        <div class="alert alert-success">
                        <p>{{ \Session::get('success')}}</p>
                        </div>
                        @endif
                        <form method="post" action="{{url('admin')}}">
                            {{-- url dito is ung folder view --}}
                            {{csrf_field()}}
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Enter First name" />
                            </div>
                            <div class="form-group">
                                    <input type="text" name="email" class="form-control" placeholder="Email" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="job_title" class="form-control" placeholder="Job Title" />
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password" />
                            </div>
                            <div class="form-group">
                                <input type="password" name="cpassword" id="cpassword" class="form-control" placeholder="Password" />
                            </div>
                            <div class="form-group">
                                    <input type="submit" class="btn btn-primary" />
                            </div>
                        </form>
                        </div>
                    
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $.ajax({
            
           type: "GET",
           url: "http://localhost/php-api-master/api/news/read.php",
           dataType: "json",
           success: function(res) {
                console.log(res);
                var text = "sss";
                var myJSON = JSON.stringify(res);
                console.log(myJSON);
                var obj = JSON.parse(myJSON);
                console.log(myJSON);
                // $.each(myJSON , function(index, val) { 
                //     console.log(index, val);
                // });
                                
                document.getElementById("demo").innerHTML = text;
            }
       });
});

</script>
@endsection
