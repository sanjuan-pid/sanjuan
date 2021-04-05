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
                            <h1>{{ $row->name }}</h1>
                            <br>
                            <p><?php echo $row->address ?></p>
                            <br>
                        @endforeach
                        
                </div>
            </div>
            <br><br>
        </div>
    </div>
</div>   

@endsection
