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
                <div class="card-header"><b>Covid Updates As per Barangay</b><br>
                    <a href="{{route('admin.covid.covid_age')}}">Covid Update As Per Category</a>
                    <br>
                    <br>
                        <form method="post" action="{{action('CovidController@Covid_target')}}" style="display: inline;" >
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="POST">
                        @foreach($covid_total as $row)
                             <input type="hidden" name="id" class="target" value="{{$row['id']}}" />
                             <label>Target Total: <input type="text" name="target_val" class="target" value="{{$row['val']}}" /></label>  
                             <button type="submit" class="btn btn-success" style="color:#fff;">Submit</button>
                        @endforeach  
                        </form>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-sm-4"><h3 id="total"></h3></div>
                        <div class="col-sm-4"><h3 id="percentage"></h3></div>
                    </div>
                </div>
                
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
                                <th >Barangay</th>
                                <th > Registrants</th>
                                <th >Percentage %</th>
                            </tr>
                        </thead>
                        <tbody>
                        <form method="post" action="{{action('CovidController@Covid_update')}}" style="display: inline;" >
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="POST">
                         @foreach($covid_brgy as $row)
                         
                            <tr id={{$row['id']}}>
                                <td ><input type="text" class="form-control" readonly name="brgy{{$row['id']}}" value="{{$row['brgy']}}"></td>
                                <td ><input type="number" data-val="{{$row['id']}}" class="form-control regis" name="Registrants{{$row['id']}}" value="{{$row['Registrants']}}"></td>
                                <td ><input type="text" class="form-control percent" readonly name="Percentage{{$row['id']}}" id="Percentage{{$row['id']}}" value="{{$row['Percentage']}}"></td>
                            </tr>
                         @endforeach
                        </tbody>
                    </table>
                        <button type="submit" class="btn btn-success" style="color:#fff;">Submit</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<script>
 function commaSeparateNumber(val){
    while (/(\d+)(\d{3})/.test(val.toString())){
      val = val.toString().replace(/(\d+)(\d{3})/, '$1'+','+'$2');
    }
    return val;
  }
$(document).ready(function(){
    // $(".regis").val(commaSeparateNumber(sum.toFixed(2)));
    var sum = 0;
    var percentage = 0;
    $(".regis").each(function() {
        sum += parseFloat($(this).val());
    });
    $(".percent").each(function() {
        percentage += parseFloat($(this).val());
    
    });
    var target =  $(".target").val();
    // alert(target)
    $('#percentage').html("Percent : "+commaSeparateNumber(percentage.toFixed(3))+" %");
    $('#total').html("Total : "+commaSeparateNumber(sum.toFixed(2)));
    $('#target').html("Target : "+commaSeparateNumber(target));
});
</script>
@endsection
