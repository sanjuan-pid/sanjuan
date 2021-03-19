@extends('layouts.admin-app')
<style>
span#descriptions_{
    height: 110px;
    margin: 0;
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 5;
    -webkit-box-orient: vertical;
    /* color: #000; */
    /* font-weight: 600; */
    font-size: 16px;
    text-decoration: none;
}
</style>
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
                <div class="card-header">Vice Mayor's News Updates <a href="{{action('UpdatesController@create')}}" class="btn btn-success" style="color:#fff; float:right;">Add New</a></div>
                
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
                                <th >Image</th>
                                <th >Title</th>
                                <th style="width: 50%;">Description</th>
                                <th >Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                         @foreach($programs as $row)
                            <tr id={{$row['id']}}>
                                <td ><img src="{{asset("uploads/" . $row['filename']) }}" width="120px"  height="80px"/></td>
                              
                                <td >{{$row['title']}}</td>
                                <td  id="desc" ><span id="descriptions_">{{$row['desc']}}</span></td>
                                <td>
                                    <a href="{{action('UpdatesController@edit', $row['id'])}}" class="btn btn-info" style="color:#fff;">Edit</a>
                                    <form method="post" class="delete_form" action="{{action('UpdatesController@destroy',$row['id'])}}" >
                                        {{csrf_field()}}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger delete_btn" id="delete_btn">Delete</button>
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
