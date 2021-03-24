@extends('layouts.nav-bar')
@section('content')
    <div class="container" id="news_list">
        <div class="row" style="margin-top:2%;">
            <div class="col-sm-6" >
                <div class="card" style="width: 100%;">
                    <div class="card-header">
                        Latest News
                    </div>
                    <ul class="list-group list-group-flush">
                        @foreach($news as $row)
                            @if($row['content_type'] == "News")
                                <li class="list-group-item latest_news">
                                    <a  href="{{action( 'Pages@news_contents', $row['id'] )}}"  style="color:#000; text-transform: uppercase;" >
                                        <div class="col-sm-3" style="float: left;" >
                                             <img src="{{asset("uploads/" . $row['filename']) }}"  style="width: 60%; height: 60% !important;" /> 
                                        </div>     
                                        <div class="col-sm-9" style="float: right;">
                                            <h3>{{$row['title']}}</h3>
                                            <p id="descriptions_">{{$row['desc']}}</p>
                                        </div>  
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
                </div>
                <div class="col-sm-6" >
                <div class="card" style="width: 100%;">
                    <div class="card-header">
                        Current Events
                    </div>
                    <ul class="list-group list-group-flush">
                       
                        @foreach($events as $row)
                            @if($row['content_type'] == "Events")
                                <li class="list-group-item latest_news">
                                    <a  href="{{action( 'Pages@news_contents', $row['id'] )}}"  style="color:#000; text-transform: uppercase;" >
                                        <div class="col-sm-3" style="float: left;" >
                                             <img src="{{asset("uploads/" . $row['filename']) }}"  style="width: 60%; height: 60% !important;" /> 
                                        </div>     
                                        <div class="col-sm-9" style="float: right;">
                                            <h3>{{$row['title']}}</h3>
                                            <p id="descriptions_">{{$row['desc']}}</p>
                                        </div>  
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>            
            </div>
        </div>
    </div>
@endsection
