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
                <div class="card-header">Assign Schedule
                    {{-- <a href="{{action('QRController@create')}}" class="btn btn-success" style="color:#fff; float:right;">Add New</a> --}}
                </div>
                
                @if(\Session::has('success'))
                <div class="alert alert-success">
                <p>{{ \Session::get('success')}}</p>
                </div>
                @endif
                <div class="card-body">
                    <form method="post" action="{{action('QRController@store')}}" enctype="multipart/form-data">
                        {{csrf_field()}}

                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">limit</label>
                            <div class="col-sm-10">

                              <input type="number" required  name ="limit" class="form-control" id="staticEmail" value=<?php echo $lmit; ?>  >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Category</label>
                            <div class="col-sm-10">
                              <input type="text" required  name ="category" class="form-control" id="staticEmail" value=<?php echo $category; ?>  >
                            </div>
                        </div>                        
                        <div class="form-group">
                          <input type="submit"  class="btn btn-success" id="submit" value="Filter" />
                        </div>
                    </form>
                    <br>
                    <table class="table" id="example">
                        <thead>
                            <tr>
                                <th >Image</th>
                                <th >Title</th>
                                <th style="width: 50%;">Description</th>
                                <th >Actions</th>
                            </tr>
                        </thead>
                        <tbody>
       
                        <?php $i = 0; ?>
                         <form method="post" action="{{action('QRController@store1')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                             @foreach($programs as $row)
                                <tr id={{$row['id']}}>
                                  <?php 
                                  $i++;
                                  echo $i; 

                                  ?>
                                    <td >
                                        
                                        <input type="text" required name="id[{{$i}}]" class="form-control" id="staticEmail" value="{{$row->id}}">
                                        <input type="text" required  name ="title[{{$i}}]" class="form-control" id="staticEmail" value="{{$row->title}}"> </td>
                                    <td  id="desc" > 
                                        <?php echo $row['desc']; ?>
                                    </td>
                                    
                                   
                                </tr>

                             @endforeach
                             <?php echo $i; ?>
                           <p>
                        </tbody>
                    </table>     
                     Enter Date: <input name="dateee" type = "text" id = "datepicker-13">
                        <input type="hidden" required name="lmit" class="form-control" id="staticEmail" value="{{$i}}">  
                        <input type="submit"  class="btn btn-success" id="submit" value="Update" />
                       </p>
                     </form> 
                </div>

            </div>
        </div>
    </div>
</div>
<script>
    
// $(document).ready(function() {
//     $('.delete_form').submit(function(){
//         if(confirm("Are you sure you want to delete it?")){
//             return true;
//         }
//         else{
//             return false;
//         }
//     });
// } );
// </script>
      <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
      <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
      
      <!-- Javascript -->
      <script>
         $(function() {
            $( "#datepicker-13" ).datepicker();
            $( "#datepicker-13" ).datepicker("show");
         });
      </script>
@endsection
