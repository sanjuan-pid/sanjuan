@extends('layouts.app-admin')
@section('content')
    <!-- Header -->
    <div class="header pb-6">
        <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
                <h6 class="h2 d-inline-block mb-0">DEPARTMENTS / ORGANIZATIONAL CHART</h6>
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
                        <th scope="col" class="sort" data-sort="budget">Department Head/OIC</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody class="list" id="search-show">
                      @foreach($Dept_Org_List as $row)
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
                            <td>{{$row->member_name}}</td>
                            <td>
                                {{-- <a href="{{action('Department_OrgChartController@show', $row->id)}}" class="btn btn-info mb-1 btn-block font-weight-bold btn-sm">View</a>
                                <a href="{{action('Department_OrgChartController@edit', $row->id)}}" class="btn btn-primary btn-block font-weight-bold btn-sm">Edit</a> 
                                {{-- <a href="{{action('Department_OrgChartController@emp_create', $row->id)}}" class="btn btn-success btn-block font-weight-bold btn-sm">Add Employee</a>--}}
                                <a class="btn btn-info mb-1 btn-block font-weight-bold btn-sm text-secondary" data-toggle="modal" data-target="#modal-viewchart{{$row->id}}">View</a>
                                <a class="btn btn-primary btn-block font-weight-bold btn-sm text-secondary" data-toggle="modal" data-target="#modal-editchart{{$row->id}}">Edit</a>
                            </td>
                        </tr>
                            
                        <!-- View Chart Modal-->
                        <div class="modal fade" id="modal-viewchart{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-viewchart" aria-hidden="true">
                          <div class="modal-dialog modal-primary modal-dialog-centered modal-" role="document">
                              <div class="modal-content bg-gradient-info">
                                  <div class="modal-header">
                                      <h6 class="modal-title" id="modal-title-notification">{{$row->dept_name}} | {{$row->dept_code}}</h6>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">×</span>
                                      </button>
                                  </div>
                                  <div class="modal-body">
                                      <div class="py-3 text-center">
                                          <img src="{{asset('department_files/'.$row->dept_code.'/'.$row->dept_chartfile)}}" alt="{{$row->dept_chartfile}}" class="img-thumbnail w-100">
                                      </div>   
                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- End View Chart Modal-->

                      <!-- Edit Chart Modal-->
                      <div class="modal fade" id="modal-editchart{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-editchart" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title" id="modal-title-notification">{{$row->dept_name}} | {{$row->dept_code}}</h6>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{action('Department_OrgChartController@update',$row->id)}}" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <input type="hidden" name="_method" value="PATCH" />
                                    <div class="py-3">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="Dept_Chartfile">New Chart File:</label>
                                                    <input type="hidden" id="Dept_Chartfile_Recent" name="Dept_Chartfile_Recent" value="{{$row->dept_chartfile}}">
                                                      <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="Dept_Chartfile" lang="en" name="Dept_Chartfile">
                                                        <label class="custom-file-label" for="Dept_Chartfile">Select file</label>
                                                      </div>
                                                  </div>
                                            </div>
                                        </div>
                                    </div>   
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                    <button type="button" class="btn btn-link ml-auto" data-dismiss="modal">Close</button>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Edit Chart Modal-->
                    
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