@extends('layouts.nav-bar')
@section('content')
<div class="container" id="news_contents">
    <div class="row" id="news_contents_row">
        <div class="col-sm-9" >
            <br><br>
            <div class="card">
                <div class="card-body">
                        <br>
                        @foreach($ann as $row)
                            <img src="{{asset("uploads/" . $row->filename) }}"  style="width: 100%;" />
                            <h1>{{ $row->title }}</h1>
                            <br>
                            <p><?php echo $row->desc ?></p>
                            <br>
                        @endforeach
                        
                </div>
            </div>
            <br><br>
        </div>
        <div class="col-sm-3" >
            <br><br>
            <div class="card" style="width: 18rem;">
                <div class="card-header">
                    Latest News
                </div>
                <ul class="list-group list-group-flush">
                    <?php $i=0; ?>
                    @foreach($news as $row)
                        <?php $i++; ?>
                        <li class="list-group-item latest_news"><a  href="{{action( 'Pages@news_contents', $row['id'] )}}"  > {{$row['title']}} </a></li>
                        @if ($i == 3)
                            @break
                        @endif
                    @endforeach
                </ul>
            </div>
            <br><br>
            <div class="card" style="width: 18rem;">
                <div class="card-header">
                    Current Events
                </div>
                <ul class="list-group list-group-flush">
                    <?php $i=0; ?>
                    @foreach($events as $row)
                        <?php $i++; ?>
                        <li class="list-group-item latest_news"><a  href="{{action( 'Pages@news_contents', $row['id'] )}}"  > {{$row['title']}} </a></li>
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
