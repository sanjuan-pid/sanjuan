@extends('layouts.app-admin')
@section('content')
    <!-- Header -->
    <div class="header pb-6">
        <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
                <h6 class="h2 d-inline-block mb-0">MAYORS / ANNOUNCEMENTS</h6>
            </div>
            <div class="col-lg-6 col-5 text-right">
                <a href="{{action('AnnouncementController@create')}}" class="btn btn-success"><i class="fa fa-plus fa-fw"></i> New Announcement</a>
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
                        <input type="text" class="form-control" id="filter" name="filter" placeholder="Search Title / Date Posted">
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
                        <th scope="col" class="sort" data-sort="name">Thumbnail</th>
                        <th scope="col" class="sort" data-sort="budget">Title</th>
                        <th scope="col" class="sort" data-sort="budget">Date Issued</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody class="list" id="search-show">
                      @foreach($ann as $row)
                        <tr id={{$row->id}} class="search-group">
                            <td width="15%;"><img src="{{asset("uploads/" . $row->filename) }}" alt="{{$row->filename}}" class="img-thumbnail" width="50%;"></td>
                            <td class="text-wrap w-50">{{$row->title}}</td>
                            <td class="">{{date('F j, Y - h:i A', strtotime($row->created_at))}}</td>
                            <td>
                                <a href="{{action('AnnouncementController@edit', $row->id)}}" class="btn btn-primary mb-1 btn-block font-weight-bold btn-sm">Edit</a>
                                <form method="post" class="delete_form" action="{{action('AnnouncementController@destroy',$row['id'])}}" >
                                    {{csrf_field()}}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger delete_btn mb-1 btn-block font-weight-bold btn-sm" id="delete_btn">Delete</button>
                                </form>
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
    $('.delete_form').submit(function(){
        if(confirm("Are you sure you want to delete it?")){ return true; }
        else{ return false; }});

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