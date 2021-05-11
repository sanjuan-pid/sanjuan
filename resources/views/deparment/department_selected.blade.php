@extends('layouts.nav-bar')

@section('content')
    <div class="container" style="margin:5% auto;">
        <div class="row">
            @foreach($child as $row)
            <?php $selected = $_GET['id'] ;?>
             @if($row->id == $selected)
                <div class="card">
                    <div class="card-body">
                    <img  src="{{asset('assets/makabago.png')}}"  alt="" class="d-inline-block align-top">
                    <h5 class="card-title">  {{$row->name}}  </h5>
                    <div class="card-text"><?php echo $row->description; ?></div>
                    </div>
                </div>
             @endif
            @endforeach
        </div>

    </div>

@endsection
