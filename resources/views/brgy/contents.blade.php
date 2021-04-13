@extends('layouts.nav-bar')
@section('content')
<div class="container" id="news_contents">
    <div class="row" id="news_contents_row">
        <div class="col-sm-12" >
            <br><br>
            <div class="card">
                <div class="card-body">
                        <br>
                        @foreach($brgy as $row)
                            <h1 style="text-align: center; font-weight:900;">{{ $row->name }}</h1>
                            <br>
                            <p style="text-align: center; font-weight:500;font-weight:600;"><?php echo $row->address ?></p>
                            <div id= officials style="text-align: center; font-weight:600;">
                                <?php echo $row ->officials ?>
                            </div>
                            <br>
                        @endforeach
                        
                </div>
            </div>
            <br><br>
        </div>
    </div>
</div>   

@endsection
