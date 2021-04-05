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
                <div class="card-header">Scheduled
                    {{-- <a href="{{action('QRController@create')}}" class="btn btn-success" style="color:#fff; float:right;">Add New</a> --}}
                </div>
                
                @if(\Session::has('success'))
                <div class="alert alert-success">
                <p>{{ \Session::get('success')}}</p>
                </div>
                @endif
                <div class="card-body">
                    <br>
                    <table class="table" id="example">
                        <thead>
                            <tr>
                                <th >Image</th>
                                <th >Title</th>
                            </tr>
                        </thead>
                        <tbody>
       
                             @foreach($programs as $row)
                                <tr id={{$row['id']}}>
                                    <td >
                                      <?php echo $row['desc']; ?>
                                    </td>
                                    <td  id="desc" > 
                                        <?php echo $row['desc']; ?>
                                    </td>
                                    
                                   
                                </tr>

                             @endforeach
                           <p>
                        </tbody>
                    </table> 
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
