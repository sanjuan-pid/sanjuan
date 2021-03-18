@extends('layouts.admin-app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                <div class="card-header">Admin Accounts <a href="{{action('AdminRecordsController@create')}}" class="btn btn-success" style="color:#fff; float:right;">Add New</a></div>
                
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
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Job Titlte</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                         @foreach($admin as $row)
                        
                            <tr id={{$row['id']}}>
                                <td>{{$row['name']}}</td>
                                <td>{{$row['email']}}</td>
                                <td>{{$row['job_title']}}</td>
                                <td>
                                    <a href="{{action('AdminRecordsController@edit', $row['id'])}}" class="btn btn-info" style="color:#fff;">Edit</a>
                                    <form method="post" class="delete_form" action="{{action('AdminRecordsController@destroy',$row['id'])}}" >
                                        {{csrf_field()}}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger" id="delete_btn">Delete</button>
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
        console.log("test")
        $('.delete_form').submit(function(){
            $('#delete_btn').click(function () {
                if (this.id == 'submit1') {
                    return true;
                }
                else  {
                    return false;
                }
            });
            // if(confirm("Are you sure you want to delete it?")){
            //     return true;
            // }
            // else{
            //     return false;
            // }
        });
    } );
</script>
@endsection
