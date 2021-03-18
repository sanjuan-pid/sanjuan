


<div class="container" id="news1_sec">
    <div class="row" id="news1">
        <div class=" col-sm-6">
            <div class="card" id="news_card">
                <div class="card-body">
                    <h2 class="card-title">EVENTS</h2>
                        <div class="recent_big">
                            
                            <img src="{{asset('assets/events/k.png')}}"  id="first_image" style="width: 100%;" />
                            <h3>Kasambahay Week, inilunsad ng Pamahalaang Lungsod ng San Juan</h3>
                        </div>
                        <br>
                        <div class="recent_small">
                            
                            <div class="row">
                                <?php $i=0; ?>
                                @foreach($news as $row)
                                    <?php $i++; ?>
                                    @if($row['show'] != 1)
                                        <div class="col-4 col-sm-4">
                                            <img src="{{asset("uploads/" . $row['filename']) }}"  target="_blank" style="width: 100%;" />
                                            <p class="recent_psmall">
                                                <a href="#"> <?php echo $row["title"] ?> </a>
                                            </p>
                                        </div>
                                        @if ($i == 3)
                                            @break
                                        @endif
                                    @endif
                                @endforeach
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <div class=" col-sm-6">
            <div class="card" style="height: 785px !important;">
                    <div class="card-body" id="bulletin_sec">
                        <h2 class="card-title">AGENDA</h2>
                            @include('layouts.index.agenda')
                        <br> <br> <br>
                    </div>
                    

                </div>
            </div>
        </div>
    </div>
</div>   
