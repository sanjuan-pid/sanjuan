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
                         @foreach($events as $row)
                            <tr id={{$row['id']}}>
                                <td ><img src="{{asset("uploads/" . $row['filename']) }}" width="150px"  height="180px"/></td>
                              
                                <td >{{$row['title']}}</td>
                                <td  id="desc" ><?php echo $row['desc'] ?></td>
                                <td>
                                    {{-- <form method="post" action="{{action('AnnouncementController@makefirst',$row['id'])}}" style="display: inline;" >
                                        {{csrf_field()}}
                                        <input type="hidden" name="_method" value="POST">
                                        <input type="hidden" name="id" value="{{$row['id']}}">
                                        <button type="submit" class="btn btn-info" style="color:#fff;">Show First</button>
                                    </form> --}}

                                    <a href="{{action('EventsController@edit', $row['id'])}}" class="btn btn-info" style="color:#fff;">Edit</a>
                                    @if($row['show'] != 1)
                                        <form method="post" class="delete_form" action="{{action('EventsController@destroy',$row['id'])}}" >
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-danger delete_btn" id="delete_btn">Delete</button>
                                        </form>
                                    @endif
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
