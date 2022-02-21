@extends('layouts.app-admin')
@section('content')
    <!-- Header -->
    <div class="header pb-6">
        <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
                <h6 class="h2 d-inline-block mb-0">DEPARTMENTS / CONTENTS</h6>
            </div>
            </div>
        </div>
        </div>
    </div>
    <!-- /Header -->

    <!-- Page content -->
    <div class="container-fluid mt--6">

        @if(\Session::has('success'))
            {{-- session ung nilagay mo sa return ng controller --}}
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <span class="alert-icon"><i class="ni ni-check-bold"></i></span>
                <span class="alert-text"><strong>Success!</strong> {{ \Session::get('success')}}</span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <!-- Department Table -->
        <div class="row">
            <div class="col-xl-12">
            <div class="card">
                <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                      <form id="live-search" action="" method="GET">
                        <input type="text" class="form-control" id="filter" name="filter" placeholder="Search Office Code / Department Name">
                      </form>
                    </div>
                </div>
                </div>
                <div class="table-responsive">
                <!-- Projects table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                        <th scope="col" class="sort" data-sort="name">Office Code</th>
                        <th scope="col" class="sort" data-sort="budget">Department Name</th>
                        <th scope="col" class="sort" data-sort="budget">Sector</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody class="list" id="search-show">
                      @foreach($Dept_Cont_List as $row)
                        <tr id={{$row->id}} class="search-group">
                            <th scope="row">
                                <div class="media align-items-center">
                                <div class="avatar rounded-circle mr-3">
                                    <img alt="Logo" src="{{asset('department_files/'.$row->dept_code.'/'.$row->dept_logo)}}">
                                </div>
                                <div class="media-body">
                                    <span class="name mb-0 text-sm">{{$row->dept_code}}</span>
                                </div>
                                </div>
                            </th>
                            <td>{{$row->dept_name}}</td>
                            <td>{{$row->dept_sector}}</td>
                            <td>
                                <a href="{{action('Department_ContentController@edit', $row->dept_code)}}" class="btn btn-primary mb-1 btn-block font-weight-bold btn-sm">Edit</a>
                            </td>
                        </tr>
                       @endforeach
                    </tbody>
                    </table>
                </div>
                </div>
            </div>
            <strong id="filter-count" class="text-primary float-right"></strong>
            </div>

        </div>
        <!-- /Department Table -->
<script>
  $(document).ready(function() {

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