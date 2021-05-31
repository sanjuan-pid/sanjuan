@extends('layouts.nav-bar')
@section('content')
    <div class="container" id="news_list" >
        <div class="row">
            <div class="col-md-2 " style="margin-top:5%;">
                <div class="side_me" style="position:fixed;">
                    <a class="btn btn-info" style="display:block;" href="#ann_">Announcements</a>
                    <a class="btn btn-info" style="display:block;" href="#newsss">News</a>
                    <a class="btn btn-info"  style="display:block;" href="#eventssss">Events</a>
                    <a class="btn btn-info" style="display:block;" href="#activitsss">Activity</a>
                </div>
            </div>
            <div class="col-md-10">
                <div class="row"  id="ann_">
                    <h3 class="blue" style="color:#fff !important;margin-top:25%;">Announcements</h3>
                    @foreach($ann as $ann_row)
                        @if($ann_row['status'] == 1)
                            <div class="col-md-4 clearfix">  
                                <a  href="{{action( 'Pages@news_contents', $ann_row->id )}}" target="_blank" class="">
                                    <div class="card card-1">
                                        <div class="top">
                                            <img class="card-img-top"  src="{{asset("uploads/" . $ann_row['filename']) }}"   />
                                        </div>
                                        <div class="bottom">
                                            <p>{{$ann_row->title}}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>   
                        @endif
                    @endforeach
                </div> 
                <div class="row"  id="newsss">
                    <h3 class="blue" style="color:#fff !important;margin-top:25%;margin-top:25%;">News / Article</h3>
                    @foreach($news as $news_row)
                        @if($news_row['status'] == 1)
                            <div class="col-md-4 clearfix">
                                <a  href="{{action( 'Pages@news_contents', $news_row->id )}}" target="_blank" class="">
                                    <div class="card card-1">
                                        <div class="top">
                                            <img class="card-img-top"  src="{{asset("uploads/" . $news_row['filename']) }}"   />
                                        </div>
                                        <div class="bottom">
                                            <p>{{$news_row->title}}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>   
                        @endif
                    @endforeach
                </div> 
                <div class="row"  id="eventssss">
                    <h3 class="blue" style="color:#fff !important;margin-top:25%;">Events </h3>
                    @foreach($events as $events_row)
                        @if($events_row['status'] == 1)
                            <div class="col-md-4 clearfix">
                                <a  href="{{action( 'Pages@news_contents', $events_row->id )}}" target="_blank" class="">
                                    <div class="card card-1">
                                        <div class="top">
                                            <img class="card-img-top"  src="{{asset("uploads/" . $events_row['filename']) }}"   />
                                        </div>
                                        <div class="bottom">
                                            <p>{{$events_row->title}}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>   
                        @endif
                    @endforeach
                </div> 
                <div class="row"  id="activitsss">
                    <h3 class="blue" style="color:#fff !important;margin-top:25%;">Activity </h3>
                    @foreach($act as $act_row)
                      @if($act_row['status'] == 1)
                            <div class="col-md-4 clearfix">
                                <a  href="{{action( 'Pages@news_contents', $act_row->id )}}" target="_blank" class="">
                                    <div class="card card-1">
                                        <div class="top">
                                            <img class="card-img-top"  src="{{asset("uploads/" . $act_row['filename']) }}"   />
                                        </div>
                                        <div class="bottom">
                                            <p>{{$act_row->title}}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>   
                        @endif
                    @endforeach
                </div> 
            </div>
        </div>
        <div class="mobile_backtop" style="position:relative;">
            <a class="btn btn-info" style="display:block; text-transform:uppercase;" href="#">back to top</a>
        </div>
{{--         
        <div id="ann_" class="row" style="margin:5% 0;">
            <h1>Announcements</h1>
            <div class="col-md-3 clearfix">
                <div class="card card-1">
                    <div class="top">
                        <img src="https://s-media-cache-ak0.pinimg.com/originals/b8/3a/62/b83a6218ccc98c987057037b218965bd.gif" alt="material ui"/>
                    </div>
                    <div class="bottom">
                        <p>Material UI</p>
                    </div>
                </div>
            </div>   
            <div class="col-md-3 clearfix">
                <div class="card card-1">
                    <div class="top">
                        <img src="https://s-media-cache-ak0.pinimg.com/originals/b8/3a/62/b83a6218ccc98c987057037b218965bd.gif" alt="material ui"/>
                    </div>
                    <div class="bottom">
                        <p>Material UI</p>
                    </div>
                </div>
            </div> 
            <div class="col-md-3 clearfix">
                <div class="card card-1">
                    <div class="top">
                        <img src="https://s-media-cache-ak0.pinimg.com/originals/b8/3a/62/b83a6218ccc98c987057037b218965bd.gif" alt="material ui"/>
                    </div>
                    <div class="bottom">
                        <p>Material UI</p>
                    </div>
                </div>
            </div> 
            <div class="col-md-3 clearfix">
                <div class="card card-1">
                    <div class="top">
                        <img src="https://s-media-cache-ak0.pinimg.com/originals/b8/3a/62/b83a6218ccc98c987057037b218965bd.gif" alt="material ui"/>
                    </div>
                    <div class="bottom">
                        <p>Material UI</p>
                    </div>
                </div>
            </div> 
        </div>    
        <div id="news_" class="row" style="margin:5% 0;">
            <h1>News & Articles</h1>
            <div class="col-md-3 clearfix">
                <div class="card card-1">
                    <div class="top">
                        <img src="https://s-media-cache-ak0.pinimg.com/originals/b8/3a/62/b83a6218ccc98c987057037b218965bd.gif" alt="material ui"/>
                    </div>
                    <div class="bottom">
                        <p>Material UI</p>
                    </div>
                </div>
            </div>   
            <div class="col-md-3 clearfix">
                <div class="card card-1">
                    <div class="top">
                        <img src="https://s-media-cache-ak0.pinimg.com/originals/b8/3a/62/b83a6218ccc98c987057037b218965bd.gif" alt="material ui"/>
                    </div>
                    <div class="bottom">
                        <p>Material UI</p>
                    </div>
                </div>
            </div> 
            <div class="col-md-3 clearfix">
                <div class="card card-1">
                    <div class="top">
                        <img src="https://s-media-cache-ak0.pinimg.com/originals/b8/3a/62/b83a6218ccc98c987057037b218965bd.gif" alt="material ui"/>
                    </div>
                    <div class="bottom">
                        <p>Material UI</p>
                    </div>
                </div>
            </div> 
            <div class="col-md-3 clearfix">
                <div class="card card-1">
                    <div class="top">
                        <img src="https://s-media-cache-ak0.pinimg.com/originals/b8/3a/62/b83a6218ccc98c987057037b218965bd.gif" alt="material ui"/>
                    </div>
                    <div class="bottom">
                        <p>Material UI</p>
                    </div>
                </div>
            </div> 
        </div>
        <div id="events_" class="row" style="margin:5% 0;">
            <h1>Events</h1>
            <div class="col-md-3 clearfix">
                <div class="card card-1">
                    <div class="top">
                        <img src="https://s-media-cache-ak0.pinimg.com/originals/b8/3a/62/b83a6218ccc98c987057037b218965bd.gif" alt="material ui"/>
                    </div>
                    <div class="bottom">
                        <p>Material UI</p>
                    </div>
                </div>
            </div>   
            <div class="col-md-3 clearfix">
                <div class="card card-1">
                    <div class="top">
                        <img src="https://s-media-cache-ak0.pinimg.com/originals/b8/3a/62/b83a6218ccc98c987057037b218965bd.gif" alt="material ui"/>
                    </div>
                    <div class="bottom">
                        <p>Material UI</p>
                    </div>
                </div>
            </div> 
            <div class="col-md-3 clearfix">
                <div class="card card-1">
                    <div class="top">
                        <img src="https://s-media-cache-ak0.pinimg.com/originals/b8/3a/62/b83a6218ccc98c987057037b218965bd.gif" alt="material ui"/>
                    </div>
                    <div class="bottom">
                        <p>Material UI</p>
                    </div>
                </div>
            </div> 
            <div class="col-md-3 clearfix">
                <div class="card card-1">
                    <div class="top">
                        <img src="https://s-media-cache-ak0.pinimg.com/originals/b8/3a/62/b83a6218ccc98c987057037b218965bd.gif" alt="material ui"/>
                    </div>
                    <div class="bottom">
                        <p>Material UI</p>
                    </div>
                </div>
            </div> 
        </div>  
        <div id="act_" class="row" style="margin:5% 0;">
            <h1>Activity</h1>
            <div class="col-md-3 clearfix">
                <div class="card card-1">
                    <div class="top">
                        <img src="https://s-media-cache-ak0.pinimg.com/originals/b8/3a/62/b83a6218ccc98c987057037b218965bd.gif" alt="material ui"/>
                    </div>
                    <div class="bottom">
                        <p>Material UI</p>
                    </div>
                </div>
            </div>   
            <div class="col-md-3 clearfix">
                <div class="card card-1">
                    <div class="top">
                        <img src="https://s-media-cache-ak0.pinimg.com/originals/b8/3a/62/b83a6218ccc98c987057037b218965bd.gif" alt="material ui"/>
                    </div>
                    <div class="bottom">
                        <p>Material UI</p>
                    </div>
                </div>
            </div> 
            <div class="col-md-3 clearfix">
                <div class="card card-1">
                    <div class="top">
                        <img src="https://s-media-cache-ak0.pinimg.com/originals/b8/3a/62/b83a6218ccc98c987057037b218965bd.gif" alt="material ui"/>
                    </div>
                    <div class="bottom">
                        <p>Material UI</p>
                    </div>
                </div>
            </div> 
            <div class="col-md-3 clearfix">
                <div class="card card-1">
                    <div class="top">
                        <img src="https://s-media-cache-ak0.pinimg.com/originals/b8/3a/62/b83a6218ccc98c987057037b218965bd.gif" alt="material ui"/>
                    </div>
                    <div class="bottom">
                        <p>Material UI</p>
                    </div>
                </div>
            </div> 
        </div>        --}}
    </div>
@endsection
