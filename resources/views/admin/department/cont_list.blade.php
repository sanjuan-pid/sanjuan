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
            @if(count($errors) > 0)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Warning!</strong> 
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <p>Please check the following:</p>
                <ul>
                  @foreach($errors->all() as $error)
                      <li>
                          {{$error}}
                      </li>
                  @endforeach
              </ul>
              
            </div>
            @endif
            <div class="card">
                
                <div class="card-header">
                    <strong>Department List</strong>
                    {{-- <a href="{{action('MagazineController@create')}}" class="btn btn-outline-success" style="float:right;">Add New</a> --}}
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
                                <th>Sector <i class="fa fa-unsorted fa-fw"></i></th>
                                <th>Code <i class="fa fa-unsorted fa-fw"></i></th>
                                <th>Department Name <i class="fa fa-unsorted fa-fw"></i></th>
                                <th>Contact No. <i class="fa fa-unsorted fa-fw"></i></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody id="search-show">
                         @foreach($Dept_Cont_List as $row)
                                <tr id={{$row->id}} class="search-group">
                                    <td >{{$row->dept_sector}}</td>
                                    <td >{{$row->dept_code}}</td>
                                    <td >{{$row->dept_name}}</td>
                                    <td >{{$row->dept_contactno}}</td>
                                    <td >
                                        <a href="{{action('Department_ContentController@edit', $row->id)}}" class="btn btn-outline-primary mb-1 btn-block font-weight-bold">Edit Contents</a>                                 
                                        
                                    </td>
                                </tr>
                         @endforeach
                        </tbody>
                    </table>
                    <strong>{{ $Dept_Cont_List->links() }}</strong>
                    <strong id="filter-count" class="text-primary float-right"></strong>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {

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
