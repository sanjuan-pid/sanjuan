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
                <div class="card-header">Covid Contents<a href="{{action('MayorsController@create')}}" class="btn btn-success" style="color:#fff; float:right;">Add New</a></div>
                
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
                                <th >Description</th>
                                <th >Type</th>
                                <th >Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                         @foreach($mayors as $row)
                            <tr id={{$row['id']}}>
                                <td ><img src="{{asset("uploads/" . $row['filename']) }}" width="120px"  height="120px"/></td>
                              
                                <td >{{$row['title']}}</td>
                                <td ><?php echo $row['desc'] ?></td>
                                @if($row['type'] == 1)
                                    <td><b>Daily</b></td>
                                @endif
                                @if($row['type'] == 2)
                                    <td><b>REGISTRATION VACCINE</b></td>
                                @endif
                                @if($row['type'] == 3)
                                    <td><b>Vacinated</b></td>  
                                @endif
                                <td>

                                    {{-- <form method="post" action="{{action('MayorsController@makefirst',$row['id'])}}" style="display: inline;" >
                                        {{csrf_field()}}
                                        <input type="hidden" name="_method" value="POST">
                                        <input type="hidden" name="id" value="{{$row['id']}}">
                                        <button type="submit" class="btn btn-info" style="color:#fff;">Show First</button>
                                    </form> --}}

                                    <a href="{{action('MayorsController@edit', $row['id'])}}" class="btn btn-info" style="color:#fff; display: inline;" >Edit</a>
                                    <form method="post" class="delete_form" action="{{action('MayorsController@destroy',$row['id'])}}" style="display: inline;"  >
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
