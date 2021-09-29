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
                <div class="card-header font-weight-bold">VIP Stores
                    <a href="{{action('Admin_VIPController@create')}}" class="btn btn-outline-success" style="float:right;">Add New VIP Store</a>
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
                                <th>Establishment</th>
                                <th>Offers</th>
                                <th>Address</th>
                                <th>Contact Person</th>
                                <th>Contact No</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="search-show">
                         @foreach($vips as $row)
                                <tr id={{$row->id}} class="search-group">
                                    <td >{{$row->establishment}}</td>
                                    <td >{{$row->offers}}</td>
                                    <td >{{$row->address}}</td>
                                    <td >{{$row->contact_person}}</td>
                                    <td >{{$row->contact_no}}</td>
                                    <td>
                                        <a href="{{action('Admin_VIPController@edit', $row->id)}}" class="btn btn-outline-primary mb-1 btn-block">Edit</a>
                                        <form method="post" class="delete_form" action="{{action('Admin_VIPController@destroy',$row->id)}}" >
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-outline-danger delete_btn btn-block" id="delete_btn">Delete</button>
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
});
</script>
@endsection
