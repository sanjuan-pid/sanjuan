@extends('layouts.app-admin')

@section('content')
{{-- Old Content - DO NOT REMOVE!!! --}}
{{-- <div class="container col-12">
    <div class="row justify-content-center">
        <div class="">
            <div class="card">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                <div class="card-header">
                    <h5 class="font-weight-bold">Department Information</h5>
                 </div>
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
                @foreach ($org as $item)
                <div class="card-body">
                    <dl class="row">
                        <dt class="col-sm-3">Office Code</dt>
                        <dd class="col-sm-9">{{$item->dept_code}}</dd>

                        <dt class="col-sm-3">Deparment Name</dt>
                        <dd class="col-sm-9">{{$item->dept_name}}</dd>
                    </dl>
                 @endforeach
                      <div class="">

                        @foreach ($member as $sg => $item)
                            <div class="row">
                                <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body card-deck">
                                       
                                                @foreach ($item as $items)
                                                <div class="card col-sm-4">
                                                    <div class="card-body">
                                                {{$items->member_name}}
                                                    </div>
                                                </div>
                                                @endforeach
                                        
                                    {{-- <h5 class="card-title">{{$item->member_sg}}</h5> --}}
                                    {{-- <p class="card-text">{{$item->member_designation}}</p> --}}
                                    {{-- </div>
                                </div>
                                </div>
                            </div>
                        @endforeach
                      </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

@endsection
