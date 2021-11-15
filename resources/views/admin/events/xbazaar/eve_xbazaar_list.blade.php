@extends('layouts.admin-app')

@section('content')
<style>
    th {
        cursor: pointer;
    }
</style>
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
                    <strong>Christmas Bazaar</strong>
                    {{-- <a href="{{action('MagazineController@create')}}" class="btn btn-outline-success" style="float:right;">Add New</a> --}}
                </div>
                <div class="card-body">
                    <form id="live-search" action="" method="GET">
                        <div class="form-group row mb-4">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Search Store/Person:</label>
                            <div class="col-sm-10">
                            <input type="text" name="filter" class="form-control" id="filter" >
                            </div>
                        </div>
                    </form>
                    <table class="table" id="example">
                        <thead>
                            <tr>
                                <th>Category <i class="fa fa-unsorted fa-fw"></i></th>
                                <th>Name/Business Name <i class="fa fa-unsorted fa-fw"></i></th>
                                <th>Email <i class="fa fa-unsorted fa-fw"></i></th>
                                <th>Contact No. <i class="fa fa-unsorted fa-fw"></i></th>
                                <th>Contact Person <i class="fa fa-unsorted fa-fw"></i></th>
                                <th>Status <i class="fa fa-unsorted fa-fw"></i></th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="search-show">
                         @foreach($Bazaar as $row)
                                <tr id={{$row->id}} class="search-group">
                                    <td >{{$row->category}}</td>
                                    <td ><button class="btn btn-sm btn-primary btn-block" data-toggle="modal" data-target="#product_descModal{{$row->id}}">{{$row->name}}</button></td>
                                    <td >{{$row->email}}</td>
                                    <td >{{$row->contact_no}}</td>
                                    <td >{{$row->contact_person}}</td>
                                    @if($row->status == "REJECTED")
                                        <td class="text-danger font-weight-bold">{{$row->status}}</td> 
                                    @elseif($row->status == "PENDING")
                                        <td class="text-warning font-weight-bold">{{$row->status}}</td>
                                    @elseif($row->status == "APPROVED")
                                        <td class="text-success font-weight-bold">{{$row->status}}</td>
                                    @endif
                                    <td >
                                    @if($row->status == "REJECTED")
                                    <button data-toggle="modal" data-target="#reasonModal{{$row->id}}" class="btn btn-outline-danger m-1" id="reject_btn"><i class="fa fa-eye fa-fw"></i></button>
                                    @elseif($row->status == "PENDING")
                                        <form method="post" class="approval_form" action="{{action('Events_XBazaar_Controller@update',$row->id)}}" >
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="PATCH">
                                            <button type="submit" class="btn btn-outline-success m-1" id="approve_btn"><i class="fa fa-check fa-fw"></i></button>
                                        </form>
                                            <button data-toggle="modal" data-target="#rejectModal{{$row->id}}" class="btn btn-outline-danger m-1" id="reject_btn"><i class="fa fa-times fa-fw"></i></button>
                                    @elseif($row->status == "APPROVED")
                                        
                                    @endif
                                        
                                    </td>
                                </tr>
                            <!-- Product Desc Modal -->
                            <div class="modal fade" id="product_descModal{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title font-weight-bold" id="exampleModalLongTitle">{{$row->name}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                        <h5>Product Description:</h5>
                                        <textarea name="" id="" cols="30" rows="3" class="form-control bg-white" style="resize: none;" readonly>{{$row->product_desc}}</textarea>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                                </div>
                            </div>

                            <!-- Reason Modal -->
                            <div class="modal fade" id="reasonModal{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title font-weight-bold" id="exampleModalLongTitle">{{$row->name}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                        <h5>Reason/s for Rejecting:</h5>
                                        <textarea name="" id="" cols="30" rows="3" class="form-control bg-white" style="resize: none;" readonly>{{$row->reason}}</textarea>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                                </div>
                            </div>

                            <!-- Reject Applicant Modal -->
                            <div class="modal fade" id="rejectModal{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title font-weight-bold" id="exampleModalLongTitle">{{$row->name}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" class="delete_form" action="{{action('Events_XBazaar_Controller@destroy',$row->id)}}" >
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <h5>Reason/s for Rejecting:</h5>
                                            <textarea name="reason" id="" cols="30" rows="3" class="form-control" style="resize: none;"></textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    </form>
                                    </div>
                                </div>
                                </div>
                            </div>
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

        $('.approval_form').submit(function(){
            if(confirm("Are you sure you want to approve this application?")){
                return true;
            }
            else{
                return false;
            }
        });


    // Live Search
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

    //Sorter
        $('th').click(function(){
            var table = $(this).parents('table').eq(0)
            var rows = table.find('tr:gt(0)').toArray().sort(comparer($(this).index()))
            this.asc = !this.asc
            if (!this.asc){rows = rows.reverse()}
            for (var i = 0; i < rows.length; i++){table.append(rows[i])}
        })
        function comparer(index) {
            return function(a, b) {
                var valA = getCellValue(a, index), valB = getCellValue(b, index)
                return $.isNumeric(valA) && $.isNumeric(valB) ? valA - valB : valA.toString().localeCompare(valB)
            }
        }
        function getCellValue(row, index){ return $(row).children('td').eq(index).text() }
</script>
@endsection
