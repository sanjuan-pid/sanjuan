<div class="container" id="news_sec">
    <br>
    <br>
    <div class="row" id="news">
        <h1 style="text-align: center;">NEWS</h1>
        <div class=" col-sm-6">
            <div class="card" id="news_card">
                <div class="card-body">
                    <h2 class="card-title">RECENT</h2>
                        <div class="recent_big">
                            @foreach($news as $row)
                                @if($row['show'] == 1)
                                    <a  href="{{action( 'Pages@news_contents', $row['id'] )}}" target="_blank"  >
                                        <img src="{{asset("uploads/" . $row['filename']) }}"  id="image_big" style="width: 100%;" />
                                    </a>
                                    <p class="card-text title_big"><a href="#"><?php echo $row["title"] ?> </p></a>
                                @endif
                            @endforeach
                        </div>
                        <br>
                        <div class="recent_small">
                            
                            <div class="row">
                                <?php $i=0; ?>
                                @foreach($news as $row)
                                    <?php $i++; ?>
                                    @if($row['show'] != 1)
                                        <div class="col-4 col-sm-4">
                                            <a  href="{{action( 'Pages@news_contents', $row['id'] )}}" target="_blank" >
                                                 <img src="{{asset("uploads/" . $row['filename']) }}" style="width: 100%;" />
                                            </a>
                                            <p class="recent_psmall">
                                                <a href="#"> <?php echo $row["title"] ?> </a>
                                            </p>
                                        </div>
                                        @if ($i == 4)
                                            @break
                                        @endif
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        {{-- <div id="_viewmore">
                            <br><br>
                            <a  href="#">view more articles</a>
                            
                        </div> --}}
                </div>
                
            </div>
        </div>
        <div class=" col-sm-6">
            <div class="card" style="height: 759px;">
                    <div class="card-body" id="bulletin_sec" style="overflow-y: overlay;">
                        <h2 class="card-title">BULLETIN</h2>
                        @foreach($news2 as $row)
                            <div class="card" style="">
                                <div class="card-body" id="bulletin_bod">
                                    <div class="col-4 col-sm-4" style="float: left; display: inline-block;">
                                        <a  href="{{action( 'Pages@news_contents', $row->id )}}" target="_blank" >
                                            <img src="{{asset("uploads/" . $row->filename) }}"  style="width: 100%;" />
                                        </a>
                                    </div>
                                    <div class="col-8 col-sm-8" style="display: inline-block;">
                                            <a id="bulletin_desc" href="#"><?php echo $row->title ?> </a>
                                            <br>
                                            <a id="bulletin_readmore" href="{{action( 'Pages@news_contents', $row->id )}}" target="_blank"  >readmore</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <br>
                        <div id="_viewmore">
                            <a  href="#">view more articles</a>
                        </div>
                    </div>
                    

                </div>
            </div>
        </div>
    </div>
</div>   


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
