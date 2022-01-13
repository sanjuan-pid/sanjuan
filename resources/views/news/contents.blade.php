@extends('layouts.nav-bar')
@section('content')
<div class="container" id="news_contents" style="width:90%;">
    <div class="row d-flex justify-content-center" id="news_contents_row">
        <div class="col-sm-9" >
            <br><br>
            <div class="card">
                <div class="card-body">
                        <br>
                        @foreach($ann as $row)
                            <img src="{{asset("uploads/" . $row->filename) }}"  style="width: 100%; padding: 0 25%;  margin-bottom: 5%;" />
                            <h1 style="font-size:30px !important;">{{ $row->title }}</h1>
                            <p><?php echo $row->desc ?></p>
                        @endforeach

                </div>
            </div>
            <br><br>
        </div>
        <div class="col-sm-3"style="margin-bottom: 7%;" >
            <br><br>
            <div class="card" style="width: 25rem;">
                <div class="card-header">
                    <h6 class="titlenews">Latest News</h6>
                </div>
                <ul class="list-group list-group-flush">
                    <?php $i=0; ?>
                    @foreach($news as $row)
                        <img src="{{asset("uploads/" . $row->filename) }}"  style="width: 100%; padding: 0 35%;  margin-bottom: 0%;" />
                        <?php $i++; ?>
                        <li class="list-group-item latest_news" ><a style="color:black;" href="{{action( 'Pages@news_contents', $row['id'] )}}"  > {{$row['title']}} </a></li>
                        @if ($i == 3)
                            @break
                        @endif
                    @endforeach
                </ul>
            </div>
            <br><br>
            <div class="card" style="width: 25rem;">
                <div class="card-header">
                    <h6 class="titlenews">Current Events</h6>
                </div>
                <ul class="list-group list-group-flush">
                    <?php $i=0; ?>
                    @foreach($events as $row)
                      <img src="{{asset("uploads/" . $row->filename) }}"  style="width: 100%; padding: 0 40%;  margin-bottom: 0%;" />
                        <?php $i++; ?>
                        <li class="list-group-item latest_news"><a  style="color:black;" href="{{action( 'Pages@news_contents', $row['id'] )}}"  > {{$row['title']}} </a></li>
                        @if ($i == 3)
                            @break
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection
