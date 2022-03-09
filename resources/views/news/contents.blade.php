@extends('layouts.nav-bar')
@section('content')
<style>
.badge, .btn, .card:not([class*=card-outline-]), .chip, .jumbotron, .modal-dialog.cascading-modal .modal-c-tabs .nav-tabs, .modal-dialog.modal-notify .modal-header, .navbar, .pagination .active .page-link, .z-depth-1 {
    -webkit-box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
    box-shadow: 0 2px 5px 0 rgb(0 0 0 / 0%), 0 2px 10px 0 rgb(0 0 0 / 0%) !important;
}
.titlenews {
    color: #1b2560 !important;
    font-weight: 700;
    font-size: 22px;
    border-bottom: 5px solid #1b2560;
    line-height: 48px;
}
.card-header {
    padding: 0.75rem 1.25rem;
    margin-bottom: 0;
    background-color: rgb(253 253 253) !important;
    border-bottom: 0px solid rgba(0,0,0,.125) !important;
}
.list-group-flush>.list-group-item {
    border-width: 0 0 0px;
}
</style>
<div class="container" id="news_contents" style="width:90%;">
    <div class="row d-flex justify-content-center" id="news_contents_row">
        <div class="col-sm-9" >
            <br><br>
            <div class="card">
                <div class="card-body">
                        <br>
                        @foreach($ann as $row)
                            <img src="{{asset("uploads/" . $row->filename) }}"  style="width: 100%; padding: 0 10%;  margin-bottom: 5%;" />
                            <h1 style="font-size:30px;">{{ $row->title }}</h1>
                            <p><?php echo $row->desc ?></p>
                        @endforeach

                </div>
            </div>
            <br><br>
        </div>
        <div class="col-sm-3 mt-5"style="margin-bottom: 7%; padding:0;" >
            <div class="card" style="width: 20rem;">
                <div class="card-header">
                    <h6 class="titlenews">Latest News</h6>
                </div>
                <ul class="list-group list-group-flush">
                    <?php $i=0; ?>
                    @foreach($news as $row)
                        <img class="latesimg" src="{{asset("uploads/" . $row->filename) }}"  style="width: 100%; padding: 0 35%;  margin-bottom: 0%;" />
                        <?php $i++; ?>
                        <li class="list-group-item latest_news" ><a style="color:black;" href="{{action( 'Pages@news_contents', $row['id'] )}}"  > {{$row['title']}} </a></li>
                        @if ($i == 3)
                            @break
                        @endif
                    @endforeach
                </ul>
            </div>
            <div class="card mt-5" style="width: 20rem;">
                <div class="card-header">
                    <h6 class="titlenews">Current Events</h6>
                </div>
                <ul class="list-group list-group-flush">
                    <?php $i=0; ?>
                    @foreach($events as $row)
                      <img class="latesimg" src="{{asset("uploads/" . $row->filename) }}"  style="width: 100%; padding: 0 40%;  margin-bottom: 0%;" />
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
