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
                <div class="card-header">Departments
                    <a href="{{action('DeparmentController@create')}}" class="btn btn-success" style="color:#fff; float:right;">Add New</a>
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
                                <th>Title</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                         @foreach($dept as $row)
                                <tr id={{$row->id}}>
                                    <td ><a href="{{action('DeparmentController@child', $row->id)}}" > <?php echo $row->title ?> </a></td>
                                    <td  id="desc"><?php echo$row->description ?></td>
                                    <td>
                                        
                                        {{-- <form method="post" action="{{action('AnnouncementController@makefirst',$row->id')}}" style="display: inline;" >
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="POST">
                                            <input type="hidden" name="id" value="{{$row->id'}}">
                                            <button type="submit" class="btn btn-info" style="color:#fff;">Show First</button>
                                        </form> --}}
                                        <a href="{{action('DeparmentController@edit', $row->id)}}" class="btn btn-info" style="color:#fff;">Edit</a>
                                        <!-- <form method="post" class="delete_form" action="{{action('AchievementsController@destroy',$row->id)}}" >
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-danger delete_btn" id="delete_btn">Delete</button>
                                        </form> -->
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
