@extends('layouts.admin-app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
        
                <div class="card-body">
                  <p>Add Achievements  </p>
                  @if (session('status'))
                  <div class="alert alert-success" role="alert">
                      {{ session('status') }}
                  </div>
                  @endif
                  @if(count($errors) > 0)
                  <div class="alert alert-danger">
                      <ul>
                          @foreach($errors->all() as $error)
                              <li>
                                  {{$error}}
                              </li>
                          @endforeach
                      </ul>
                  </div>
                  @endif
                  <form method="post" action="{{action('AchievementsController@store')}}" enctype="multipart/form-data">
                    
                    {{csrf_field()}}
                    <?php $tag = $_GET["content_type"] ;  ?>
                    @if($tag != "congressman")
                      <div class="form-group row" style="display: none;">
                        <label for="staticEmail" class="col-sm-2 col-form-label">For</label>
                        <div class="col-sm-10">
                          <input type="text" readonly required  name ="content_tag" id="staticEmail" class="form-control" value =<?php echo $_GET["content_type"] ; ?>  >
                        </div>
                      </div>
                    @endif
                    @if($tag == "congressman")
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Select</label>
                        <div class="col-sm-10">    
                          <select class="form-control" name="content_tag" id="exampleFormControlSelect1">
                            <option value="{{$tag}}">
                                @if($tag == "congressman")
                                    <?php echo "Congressman Zamora" ?>
                                @endif
                                @if($tag == "atty_b" )
                                    <?php echo "Atty Bel" ?>
                                @endif
                            </option>
                            <option value="cong">Congressman Zamora</option>
                            <option value="atty_b">Atty Bel</option>
                          </select>
                        </div>
                    </div>
                    @endif
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                          <input type="text" required  name ="title" class="form-control" id="staticEmail" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">

                         <div id="editor">
                         </div>
                         <textarea hidden name ="description" id="description" required class="form-control" cols="30" rows="10">
                         </textarea>
                        </div>
                    </div>
                    <div class="form-group">
                      <input type="submit"  class="btn btn-success" id="submit" value="Submit" />
                    </div>
                  </form>
            </div>
        </div>
    </div>
</div>

@endsection

