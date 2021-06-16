@extends('layouts.admin-app')

@section('content')
<div class="container">
    <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/rowgroup/1.1.2/css/rowGroup.jqueryui.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.jqueryui.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                <div class="card-header">Announcents <a href="{{action('AnnouncementController@create')}}" class="btn btn-success" style="color:#fff; float:right;">Add New</a></div>
                
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
                         @foreach($ann as $row)
                            <tr id={{$row['id']}}>
                                <td ><img src="{{asset("uploads/" . $row['filename']) }}" width="120px"  height="180px"/></td>
                              
                                <td >{{$row['title']}}</td>
                                <td  id="desc" ><?php echo $row['desc'] ?></td>
                                <td>
                                  <!--   @if($row['show'] != 1)
                                        <form method="post" action="{{action('AnnouncementController@makefirst',$row['id'])}}" style="display: inline;" >
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="POST">
                                            <input type="hidden" name="id" value="{{$row['id']}}">
                                            <button type="submit" class="btn btn-info" style="color:#fff;">Show First</button>
                                        </form>
                                    @endif -->
                                    <a href="{{action('AnnouncementController@edit', $row['id'])}}" class="btn btn-info" style="color:#fff;">Edit</a>
                                    <form method="post" class="delete_form" action="{{action('AnnouncementController@destroy',$row['id'])}}" >
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

@endsection
