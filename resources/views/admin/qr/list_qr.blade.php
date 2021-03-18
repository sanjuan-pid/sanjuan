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
                <div class="card-header">QR Uploads
                    {{-- <a href="{{action('QRController@create')}}" class="btn btn-success" style="color:#fff; float:right;">Add New</a> --}}
                </div>
                
                @if(\Session::has('success'))
                <div class="alert alert-success">
                <p>{{ \Session::get('success')}}</p>
                </div>
                @endif
                <div class="card-body">
                 
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
