@extends('layouts.admin-app')

@section('content')
<style>
  .btn-circle {
    width: 30px;
    height: 30px;
    padding: 6px 0px;
    border-radius: 15px;
    text-align: center;
    font-size: 12px;
    line-height: 1.42857;
}
.btn-circle.btn-md {
            width: 50px;
            height: 50px;
            padding: 7px 10px;
            border-radius: 25px;
            font-size: 20px;
            text-align: center;
        }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if (session('status'))
                  <div class="alert alert-success" role="alert">
                      {{ session('status') }}
                  </div>
                  @endif
                  @if(count($errors) > 0)
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Warning! Please check the following:</strong>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>
                                    {{$error}}
                                </li>
                            @endforeach
                        </ul>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  @endif
            <div class="card">
                <div class="card-header">
                    <strong>Department Information</strong>
                  </div>
                <div class="card-body">
                  <form method="POST" action="{{action('Department_OrgChartController@store')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                   
                    
                    <div class="card mb-3" style="background-image: linear-gradient(to top, #00c6fb 0%, #005bea 100%);">
                        <div class="card-body mt-2">
                         <h4 class="font-weight-bold text-white">{{$dept_name}}</h4>
                        </div>
                    </div>
                  
                    
                    <div class="increment control-group">
                      <div class="float-right">
                        <button class="btn btn-danger btn-remove btn-block btn-circle" type="button"><i class="fa fas fa-times fa-fw"></i></button>
                      </div>
                        
                      <input type="hidden" name="dept_code[]" value="{{$code}}">
                      <input type="hidden" name="member_tag[]" value="MEMBER">
                    <div class="card-deck mt-2">
                      <div class="card col-md-12 border-secondary">
                        <div class="card-body">
                          <div class="form-row col-md-12 ">
                            <div class="form-group col-md-6">
                              <label class="font-weight-bold text-uppercase" for="name">Name</label>
                              <input type="text" name="name[]" class="form-control" id="name" >
                            </div>
                            <div class="form-group col-md-6">
                              <label for="sg" class="font-weight-bold text-uppercase">Salary Grade</label>
                                <select name="sg[]" class="form-control" id="sg">
                                        <option value="SG01">SG01</option>
                                        <option value="SG02">SG02</option>
                                        <option value="SG03">SG03</option>
                                        <option value="SG04">SG04</option>
                                        <option value="SG05">SG05</option>
                                        <option value="SG06">SG06</option>
                                        <option value="SG07">SG07</option>
                                        <option value="SG08">SG08</option>
                                        <option value="SG09">SG09</option>
                                        <option value="SG10">SG10</option>
                                        <option value="SG11">SG11</option>
                                        <option value="SG12">SG12</option>
                                        <option value="SG13">SG13</option>
                                        <option value="SG14">SG14</option>
                                        <option value="SG15">SG15</option>
                                        <option value="SG16">SG16</option>
                                        <option value="SG17">SG17</option>
                                        <option value="SG18">SG18</option>
                                        <option value="SG19">SG19</option>
                                        <option value="SG20">SG20</option>
                                        <option value="SG21">SG21</option>
                                        <option value="SG22">SG22</option>
                                        <option value="SG23">SG23</option>
                                        <option value="SG24">SG24</option>
                                </select>        
                            </div>
                          </div>
                          <div class="form-row col-md-12">
                            <div class="form-group col-md-6">
                              <label for="designation" class="font-weight-bold text-uppercase">Designation</label>
                              <input type="text" name="designation[]" class="form-control" id="designation">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="placement" class="font-weight-bold text-uppercase">Placement</label>
                                <select name="placement[]" class="form-control" id="placement">
                                    <option value="LEFT">LEFT</option>
                                    <option value="CENTER">CENTER</option>
                                    <option value="RIGHT">RIGHT</option>
                                </select>    
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                      <hr style="background-image: linear-gradient(to right, #00c6fb 0%, #005bea 100%);height:5px;opacity:100%;">
                    </div>
                    <div class="cloned">

                    </div>
                    <div class="text-center mb-3">
                      <button class="btn btn-success btn-add btn-circle btn-md" type="button" name="add[]" id="add[]"> <i class="fa fas fa-user-plus fa-fw"></i> </button>
                    </div>
                  <button class="btn btn-success btn-block" type="submit">SUBMIT</button>
                  </form>
            </div>
        </div>
    </div>
</div>
<script>
$(".btn-add").click(function(){ 
  // var html = $(".clone").html();
  // $(".increment").after(html);

  var html = $('.increment').clone();
  $('.cloned').html(html);

});
$("body").on("click",".btn-remove",function(){ 
  $(this).parents(".control-group").remove();
});
</script>
@endsection