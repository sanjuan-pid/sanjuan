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
                <div class="card-header">VIP Stores
                    <a href="{{action('Admin_VIPController@create')}}" class="btn btn-success" style="color:#fff; float:right;">Add New</a>
                </div>
                
                @if(\Session::has('success'))
                {{-- session ung nilagay mo sa return ng controller --}}
            
                <div class="alert alert-success">
                <p>{{ \Session::get('success')}}</p>
                </div>
                @endif
                <div class="card-body">
                    <table class="table" id="example">

                         
                        <thead>
                            <tr>
                                <th>Establishment</th>
                                <th>Offers</th>
                                <th>Address</th>
                                <th>Contact Person</th>
                                <th>Contact No</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                         @foreach($vips as $row)
                                <tr id={{$row->id}}>
                                    <td >{{$row->establishment}}</td>
                                    <td >{{$row->offers}}</td>
                                    <td >{{$row->address}}</td>
                                    <td >{{$row->contact_person}}</td>
                                    <td >{{$row->contact_no}}</td>
                                    <td>
                                    
                                        {{-- <form method="post" action="{{action('AnnouncementController@makefirst',$row->id')}}" style="display: inline;" >
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="POST">
                                            <input type="hidden" name="id" value="{{$row->id'}}">
                                            <button type="submit" class="btn btn-info" style="color:#fff;">Show First</button>
                                        </form> --}}
                                        <a href="{{action('Admin_VIPController@edit', $row->id)}}" class="btn btn-primary mb-1 btn-block" style="color:#fff;">Edit</a>
                                        <form method="post" class="delete_form" action="{{action('Admin_VIPController@destroy',$row->id)}}" >
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-danger delete_btn btn-block" id="delete_btn">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                         @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
    $('.delete_form').submit(function(){
        if(confirm("Are you sure you want to delete it?")){
            return true;
        }
        else{
            return false;
        }
    });
} );
</script>
@endsection
