@extends('layouts.admin-app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if(\Session::has('success'))
            {{-- session ung nilagay mo sa return ng controller --}}
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> {{ \Session::get('success')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif
            <div class="card">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                <div class="card-header">
                    <strong>Departments</strong>
                    {{-- <a href="{{action('Department_OrgChart@create')}}" class="btn btn-success" style="color:#fff; float:right;">Add New</a> --}}
                </div>
                <div class="card-body">
                    <form id="live-search" action="" method="GET">
                        <div class="form-group row mb-4">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Search Department:</label>
                            <div class="col-sm-10">
                            <input type="text" name="filter" class="form-control" id="filter" >
                            </div>
                        </div>
                    </form>
                    <table class="table" id="example">
                        <thead>
                            <tr>
                                <th>Office Code</th>
                                <th>Department Name</th>
                                <th>Department Head/OIC</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="search-show">
                         @foreach($org as $row)
                                <tr id={{$row->id}} class="search-group">
                                    <td >{{$row->dept_code}}</td>
                                    <td >{{$row->dept_name}}</td>
                                    <td >{{$row->member_name}}</td>
                                    <td >
                                        <a href="{{action('Department_OrgChartController@show', $row->id)}}" class="btn btn-outline-secondary font-weight-bold">View</a>
                                        <a href="{{action('Department_OrgChartController@edit', $row->id)}}" class="btn btn-outline-primary font-weight-bold">Edit</a>
                                        <a href="{{action('Department_OrgChartController@emp_create', $row->id)}}" class="btn btn-outline-success font-weight-bold">Add Employee</a>
                                    </td>
                                </tr>
                         @endforeach
                        </tbody>
                    </table>
                    <strong id="filter-count" class="text-primary float-right"></strong>
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

    $('#live-search').submit(function(){
        // Retrieve the input field text and reset the count to zero
        var filter = $(this).val(), count = 0;

        // Loop through the comment list
        $(".search-group").each(function(){

            // If the list item does not contain the text phrase fade it out
            if ($(this).text().search(new RegExp(filter, "i")) < 0) {
                $(this).fadeOut();

            // Show the list item if the phrase matches and increase the count by 1
            } else {
                $(this).show();
                count++;
            }
        });

        // Update the count
        var numberItems = count;
        $("#filter-count").text(count+"results out of");
    });

    $("#filter").keyup(function(){
 
        // Retrieve the input field text and reset the count to zero
        var filter = $(this).val(), count = 0;

        var countTable = $('#search-show').find('tr').length

        // Loop through the comment list
        $(".search-group").each(function(){

            // If the list item does not contain the text phrase fade it out
            if ($(this).text().search(new RegExp(filter, "i")) < 0) {
                $(this).fadeOut();

            // Show the list item if the phrase matches and increase the count by 1
            } else {
                $(this).show();
                count++;
            }
        });

        // Update the count
        var numberItems = count;
        $("#filter-count").text("Showing "+count+" out of "+countTable+" entries");
        });
} );
</script>
@endsection
