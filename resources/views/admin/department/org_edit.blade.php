@extends('layouts.admin-app')

@section('content')
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
                  <form method="POST" action="{{action('Department_OrgChartController@update',$id)}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="PATCH" />
                    @foreach ($dept as $item)
                    <input type="hidden" name="members[{{$loop->index}}][id]" value="{{$item->id}}">
                <div class="card border-secondary mb-3">
                   <div class="card-body">
                    <div class="form-row col-md-12 ">
                      <div class="form-group col-md-6">
                        <label for="staticEmail">Name</label>
                        <input type="text" name="members[{{$loop->index}}][name]" class="form-control" id="staticEmail" value="{{$item->member_name}}" >
                      </div>
                      <div class="form-group col-md-6">
                        <label for="staticEmail">Department</label>
                        <input type="text" name="members[{{$loop->index}}][department]" class="form-control" id="staticEmail" value="{{$item->dept_code}}" >
                      </div>
                    </div>
                    <div class="form-row col-md-12">
                        <div class="form-group col-md-4">
                            <label for="staticEmail">Designation</label>
                            <input type="text" name="members[{{$loop->index}}][designation]" class="form-control" id="staticEmail" value="{{$item->member_designation}}" >
                          </div>
                        <div class="form-group col-md-4">
                          <label for="staticEmail">Salary Grade</label>
                            <select name="members[{{$loop->index}}][sg]" class="form-control" id="staticEmail">
                                    <option selected value="{{$item->member_sg}}">{{$item->member_sg}} (Selected)</option>
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
                        <div class="form-group col-md-4">
                          <label for="staticEmail">Placement</label>
                            <select name="members[{{$loop->index}}][placement]" class="form-control" id="staticEmail">
                                <option selected value="{{$item->member_align}}">{{$item->member_align}} (Selected)</option>
                                <option value="LEFT">LEFT</option>
                                <option value="CENTER">CENTER</option>
                                <option value="RIGHT">RIGHT</option>
                            </select>    
                          </div>
                      </div>
                   </div>
                </div>
                      <hr>
                  @endforeach
                  <button class="btn btn-success btn-block" type="submit">SUBMIT</button>
                  </form>
            </div>
        </div>
    </div>

    
    
</div>

@endsection