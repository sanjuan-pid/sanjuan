@extends('layouts.nav-bar')

@section('content')
    {{-- <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                 SAN JUAN CITY
            </div>


        </div>
    </div> --}}

<style>
.button1
{
    border-radius: 10px;
    font-size: 20px;
    width: 98%;
    height: 109px;
    background-repeat: no-repeat;
    background-image: url('{{asset('assets/Bikelane/Button/Pt1-Pt2_Button.png')}}');
    color: #38220f !important;
}
.button1:active 
{
    border-radius: 10px;
    font-size: 20px;
    width: 98%;
    height: 109px;
    background-repeat: no-repeat;
    background-image: url('{{asset('assets/Bikelane/Button/Pt1-Pt2_Button.png')}}');
    color: #38220f !important;
    box-shadow: 0 5px #666;
}

.button2
{
    border-radius: 10px;
    font-size: 20px;
    width: 98%;
    height: 109px;
    background-repeat: no-repeat;
    background-image: url('{{asset('assets/Bikelane/Button/Pt2-Pt3_Button.png')}}');
    color: #38220f !important;
}
.button2:active 
{
    border-radius: 10px;
    font-size: 20px;
    width: 98%;
    height: 109px;
    background-repeat: no-repeat;
    background-image: url('{{asset('assets/Bikelane/Button/Pt2-Pt3_Button.png')}}');
    color: #38220f !important;
    box-shadow: 0 5px #666;
}

.button3
{
    border-radius: 10px;
    font-size: 20px;
    width: 98%;
    height: 109px;
    background-repeat: no-repeat;
    background-image: url('{{asset('assets/Bikelane/Button/Pt3-Pt4_Button.png')}}');
    color: #38220f !important;
}
.button3:active 
{
    border-radius: 10px;
    font-size: 20px;
    width: 98%;
    height: 109px;
    background-repeat: no-repeat;
    background-image: url('{{asset('assets/Bikelane/Button/Pt3-Pt4_Button.png')}}');
    color: #38220f !important;
    box-shadow: 0 5px #666;
}

.button4
{
    border-radius: 10px;
    font-size: 20px;
    width: 98%;
    height: 109px;
    background-repeat: no-repeat;
    background-image: url('{{asset('assets/Bikelane/Button/Pt4-Pt5_Button.png')}}');
    color: #38220f !important;
}
.button4:active 
{
    border-radius: 10px;
    font-size: 20px;
    width: 98%;
    height: 109px;
    background-repeat: no-repeat;
    background-image: url('{{asset('assets/Bikelane/Button/Pt4-Pt5_Button.png')}}');
    color: #38220f !important;
    box-shadow: 0 5px #666;
}

.button5
{
    border-radius: 10px;
    font-size: 20px;
    width: 98%;
    height: 109px;
    background-repeat: no-repeat;
    background-image: url('{{asset('assets/Bikelane/Button/Pt5-Pt6_Button.png')}}');
    color: #38220f !important;
}
.button5:active 
{
    border-radius: 10px;
    font-size: 20px;
    width: 98%;
    height: 109px;
    background-repeat: no-repeat;
    background-image: url('{{asset('assets/Bikelane/Button/Pt5-Pt6_Button.png')}}');
    color: #38220f !important;
    box-shadow: 0 5px #666;
}

.button6
{
    border-radius: 10px;
    font-size: 20px;
    width: 98%;
    height: 109px;
    background-repeat: no-repeat;
    background-image: url('{{asset('assets/Bikelane/Button/Pt6-Pt7_Button.png')}}');
    color: #38220f !important;
}
.button6:active 
{
    border-radius: 10px;
    font-size: 20px;
    width: 98%;
    height: 109px;
    background-repeat: no-repeat;
    background-image: url('{{asset('assets/Bikelane/Button/Pt6-Pt7_Button.png')}}');
    color: #38220f !important;
    box-shadow: 0 5px #666;
}

.button7
{
    border-radius: 10px;
    font-size: 20px;
    width: 98%;
    height: 109px;
    background-repeat: no-repeat;
    background-image: url('{{asset('assets/Bikelane/Button/Pt7-Pt8_Button.png')}}');
    color: #38220f !important;
}
.button7:active 
{
    border-radius: 10px;
    font-size: 20px;
    width: 98%;
    height: 109px;
    background-repeat: no-repeat;
    background-image: url('{{asset('assets/Bikelane/Button/Pt7-Pt8_Button.png')}}');
    color: #38220f !important;
    box-shadow: 0 5px #666;
}

.button8
{
    border-radius: 10px;
    font-size: 20px;
    width: 98%;
    height: 109px;
    background-repeat: no-repeat;
    background-image: url('{{asset('assets/Bikelane/Button/Pt8-Pt9_Button.png')}}');
    color: #38220f !important;
}
.button8:active 
{
    border-radius: 10px;
    font-size: 20px;
    width: 98%;
    height: 109px;
    background-repeat: no-repeat;
    background-image: url('{{asset('assets/Bikelane/Button/Pt8-Pt9_Button.png')}}');
    color: #38220f !important;
    box-shadow: 0 5px #666;
}

.button9
{
    border-radius: 10px;
    font-size: 20px;
    width: 98%;
    height: 109px;
    background-repeat: no-repeat;
    background-image: url('{{asset('assets/Bikelane/Button/Pt9-Pt1_Button.png')}}');
    color: #38220f !important;
}
.button9:active 
{
    border-radius: 10px;
    font-size: 20px;
    width: 98%;
    height: 109px;
    background-repeat: no-repeat;
    background-image: url('{{asset('assets/Bikelane/Button/Pt9-Pt1_Button.png')}}');
    color: #38220f !important;
    box-shadow: 0 5px #666;
}

.hbt .modal-dialog
{
    max-width: 60% !important;
}

.hbt .modal-body
{
    padding: 0;
}
  
* {box-sizing: border-box;}

.container1 
{
    position: relative;
    width: 50%;
    max-width: 300px;
}

.image 
{
    display: block;
    width: 200%;
    height: auto;
}

.overlay 
{
    position: absolute; 
    bottom: 0; 
    background: rgb(0, 0, 0);
    background: rgba(0, 0, 0, 0.5); /* Black see-through */
    color: #f1f1f1; 
    width: 200%;
    height: 100%;
    transition: .5s ease;
    opacity:0;
    color: white;
    font-size: 20px;
    padding: 20px;
    text-align: center;
}

.container1:hover .overlay 
{
    opacity: 1;
}

div.i
{
    line-height: 200% !important;
}

div.j
{
    line-height: 165% !important;
}

.responsive4 
{
    padding: 5px;
    float: left;
    width: 50%;
}

@media only screen and (max-width: 1920px) and (min-width: 1601px)  
{
        div#histo 
        {
            max-width: 100% !important;
            width: 100% !important;
            flex: 0 0 100%;
        }
        #histo .una .container1
        {
            display: block;
            margin-right: auto;
            margin-left: auto;
        }

}

@media screen and (max-width: 766px) and (min-width: 200px)
{
        #histo
        {
            max-width: 100% !important;
            width:100% !important;
            flex: 0 0 100%;
        }

        .responsive4 
        {
            width: 100%;
            display: block;
            margin-right: auto;
            margin-left: auto; 
        }

        .container1 img
        {
            width: 200% !important;
        }

        h4
        {
            font-size: 10px !important;
        }

        .i
        {
            font-size: 12px !important;
        }

        .j
        {
            font-size: 12px !important;
        }
        .hbt
        {
            max-width: 100% !important;
            width:100% !important;
            flex: 0 0 100%;
        }
        .buttons
        {
            max-width: 100% !important;
            width:100% !important;
            flex: 0 0 100%;
        }
        .buttons
        {
            display: flex;
            -ms-flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
            flex-direction: column !important;
            align-content: center !important;
        }
         .btncol
        {
            max-width: 100% !important;
           
        }
        .btncol .btn
        {
            font-size: 15px !important;
        }

        .hbt .modal-dialog 
        {
            max-width: 98% !important;
        }

}

</style>

<div class="container hbt mb-3" style="padding: 0;">

    <div class="row" style="padding: 0;">
        <img src="{{asset('assets/Tourism/HistoricalBikeLane.gif')}}" style="width: 100%; margin: auto; padding-right: 0 !important; padding-left: 0 !important;">
    </div>   

<br>

    <div class="row buttons">
        <div class="col-4 btncol">
            {{-- Button trigger modal --}}
                <button type="button" class="btn btn-lg button1 text-capitalize" data-toggle="modal" data-target="#exampleModal1" style="font-size: 20px; font-weight: 700;">San Juan City Hall → Pinaglabanan Shrine</button>
                <button type="button" class="btn btn-lg button2 text-capitalize" data-toggle="modal" data-target="#exampleModal2" style="font-size: 20px; font-weight: 700;">Pinaglabanan Shrine → Museo ng Katipunan</button>
                <button type="button" class="btn btn-lg button3 text-capitalize" data-toggle="modal" data-target="#exampleModal3" style="font-size: 20px; font-weight: 700;">Museo ng Katipunan → St. John the Baptist Parish Church</button>
            <!-- Modal -->
                <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                        <div class="modal-body">
                            <div class="col-12" style=" width: 100% !important; padding-right: 0 !important; padding-left: 0 !important;">
                                <img src="{{asset('assets/Bikelane/Header/Pt1-Pt2_Header.png')}}" style="width: 100%; margin: auto; padding-right: 0 !important; padding-left: 0 !important;">
                            </div>

                            <div class="mt-3" style="padding-left: 20px; padding-right: 20px;">
                                <video style="width:100%;" controls autoplay controls loop>
                                    <source src="{{asset('assets/Bikelane/Videos/Pt1-Pt2.mp4')}}" type="video/mp4">
                                </video>
                            </div>

                            <div class="row mb-3">
                                <div class="responsive4 una">
                                    <div class="col">
                                        <div class="container1" >
                                            <img src="{{asset('assets/Bikelane/Places/San_Juan_City_Hall.png')}}" class="image">
                                            <div class="overlay">
                                                <h4 style="font-weight: 100px;">SAN JUAN CITY HALL</h4>
                                                <div style="color: white !important; text-align: justify;" class="i">
                                                The new San Juan City Hall stands adjacent from the Pinaglabanan Shrine. The new city hall resembles old Spanish buildings. It has four floors and equipped with a helipad. Inside, the spacious lobby is adorned with paintings that depicts the Battle of San Juan del Monte. 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="responsive4">
                                    <div class="col">
                                        <div class="container1">
                                            <img src="{{asset('assets/Bikelane/Places/Pinaglabanan_Shrine.png')}}" class="image">
                                            <div class="overlay">
                                                <h4 style="font-weight: 100px;">PINAGLABANAN SHRINE</h4>
                                                <div style="color: white !important; text-align: justify;" class="j">
                                                    The five-hectare Pinaglabanan Shrine commemorates the martyrs of the Battle of San Juan Del Monte on August 30, 1896, where Andres Bonifacio led hundreds of Katipuneros to cut the water supply of Intramuros. They were defeated, but it sounded the start of revolution in the country.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                    <div class="modal-body">
                        <div class="col-12" style=" width: 100% !important; padding-right: 0 !important; padding-left: 0 !important;">
                            <img src="{{asset('assets/Bikelane/Header/Pt2-Pt3_Header.png')}}" style="width: 100%; margin: auto; padding-right: 0 !important; padding-left: 0 !important;">
                        </div>

                        <div class="mt-3" style="padding-left: 20px; padding-right: 20px;">
                            <video style="width:100%;" controls autoplay controls loop>
                                <source src="{{asset('assets/Bikelane/Videos/Pt2-Pt3.mp4')}}" type="video/mp4">
                            </video>
                        </div>

                        <div class="row mb-3">
                            <div class="responsive4 una">
                                <div class="col">
                                    <div class="container1" >
                                        <img src="{{asset('assets/Bikelane/Places/Pinaglabanan_Shrine.png')}}" class="image">
                                        <div class="overlay">
                                            <h4 style="font-weight: 100px;">PINAGLABANAN SHRINE</h4>
                                            <div style="color: white !important; text-align: justify;" class="j">
                                                The five-hectare Pinaglabanan Shrine commemorates the martyrs of the Battle of San Juan Del Monte on August 30, 1896, where Andres Bonifacio led hundreds of Katipuneros to cut the water supply of Intramuros. They were defeated, but it sounded the start of revolution in the country.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="responsive4">
                                <div class="col">
                                    <div class="container1">
                                        <img src="{{asset('assets/Bikelane/Places/Museo_Ng_Katipunan.png')}}" class="image">
                                        <div class="overlay">
                                            <h4 style="font-weight: 100px;">MUSEO NG KATIPUNAN</h4>
                                            <div style="color: white !important; text-align: justify;" class="j">
                                                The Museo ng Katipunan showcases and pays tribute to the significant contributions of the KKK (Kataastaasang Kagalanggalangang Katipunan ng mga Anak ng Bayan) to the Philippine Independence.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                <div class="modal-body">
                    <div class="col-12" style=" width: 100% !important; padding-right: 0 !important; padding-left: 0 !important;">
                        <img src="{{asset('assets/Bikelane/Header/Pt3-Pt4_Header.png')}}" style="width: 100%; margin: auto; padding-right: 0 !important; padding-left: 0 !important;">
                    </div>

                    <div class="mt-3" style="padding-left: 20px; padding-right: 20px;">
                        <video style="width:100%;" controls autoplay controls loop>
                            <source src="{{asset('assets/Bikelane/Videos/Pt3-Pt4.mp4')}}" type="video/mp4">
                        </video>
                    </div>

                    <div class="row mb-3">
                        <div class="responsive4 una">
                            <div class="col">
                                <div class="container1" >
                                    <img src="{{asset('assets/Bikelane/Places/Museo_Ng_Katipunan.png')}}" class="image">
                                    <div class="overlay">
                                        <h4 style="font-weight: 100px;">MUSEO NG KATIPUNAN</h4>
                                        <div style="color: white !important; text-align: justify;" class="i">
                                            The Museo ng Katipunan showcases and pays tribute to the significant contributions of the KKK (Kataastaasang Kagalanggalangang Katipunan ng mga Anak ng Bayan) to the Philippine Independence.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="responsive4">
                            <div class="col">
                                <div class="container1">
                                    <img src="{{asset('assets/Bikelane/Places/St_John_The_Baptist_Church.png')}}" class="image">
                                    <div class="overlay">
                                        <h4 style="font-weight: 100px;">ST. JOHN THE BAPTIST PARISH CHURCH</h4>
                                        <div style="color: white !important; text-align: justify;" class="j">
                                            Deriving its name from John the Baptist, St. John the Baptist Church stands a few meters away from the city hall and Pinaglabanan Shrine. Built in 1894, the church is a silent witness to the historical events that happened in the city.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    {{-- second --}}

    <div class="col-4 btncol">
        <!-- Button trigger modal -->
            <button type="button" class="btn btn-lg button4 text-capitalize" data-toggle="modal" data-target="#exampleModal4" style="font-size: 20px; font-weight: 700;">St. John the Baptist Church → Marcos House</button>
            <button type="button" class="btn btn-lg button5 text-capitalize" data-toggle="modal" data-target="#exampleModal5" style="font-size: 20px; font-weight: 700;">Marcos House → Santuario del Santo Cristo Parish Church</button>
            <button type="button" class="btn btn-lg button6 text-capitalize" data-toggle="modal" data-target="#exampleModal6" style="font-size: 20px; font-weight: 700;">Santuario del Santo Cristo Parish <br> Church → Iglesia ni Cristo Church</button>
        <!-- Modal -->
            <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                    <div class="modal-body">
                        <div class="col-12" style=" width: 100% !important; padding-right: 0 !important; padding-left: 0 !important;">
                            <img src="{{asset('assets/Bikelane/Header/Pt4-Pt5_Header.png')}}" style="width: 100%; margin: auto; padding-right: 0 !important; padding-left: 0 !important;">
                        </div>

                        <div class="mt-3" style="padding-left: 20px; padding-right: 20px;">
                            <video style="width:100%;" controls autoplay controls loop>
                                <source src="{{asset('assets/Bikelane/Videos/Pt4-Pt5.mp4')}}" type="video/mp4">
                            </video>
                        </div>

                        <div class="row mb-3">
                            <div class="responsive4 una">
                                <div class="col">
                                    <div class="container1" >
                                        <img src="{{asset('assets/Bikelane/Places/St_John_The_Baptist_Church.png')}}" class="image">
                                        <div class="overlay">
                                            <h4 style="font-weight: 100px;">ST. JOHN THE BAPTIST PARISH CHURCH</h4>
                                            <div style="color: white !important; text-align: justify;" class="i">
                                                Deriving its name from John the Baptist, St. John the Baptist Church stands a few meters away from the city hall and Pinaglabanan Shrine. Built in 1894, the church is a silent witness to the historical events that happened in the city.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="responsive4">
                                <div class="col">
                                    <div class="container1">
                                        <img src="{{asset('assets/Bikelane/Places/Marcos_House.png')}}" class="image">
                                        <div class="overlay">
                                            <h4 style="font-weight: 100px;">MARCOS HOUSE</h4>
                                            <div style="color: white !important; text-align: justify;" class="j">
                                                The Marcos Mansion in San Juan is the first residence of Ferdinand and Imelda Marcos after the couple got married. This is also where the late strongman spent his days as a congressman and senator of the Philippines and where the Marcos family stayed for ten years before moving to Malacañang after winning the presidency in 1965.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                <div class="modal-body">
                    <div class="col-12" style=" width: 100% !important; padding-right: 0 !important; padding-left: 0 !important;">
                        <img src="{{asset('assets/Bikelane/Header/Pt5-Pt6_Header.png')}}" style="width: 100%; margin: auto; padding-right: 0 !important; padding-left: 0 !important;">
                    </div>

                    <div class="mt-3" style="padding-left: 20px; padding-right: 20px;">
                        <video style="width:100%;" controls autoplay controls loop>
                            <source src="{{asset('assets/Bikelane/Videos/Pt5-Pt6.mp4')}}" type="video/mp4">
                        </video>
                    </div>

                    <div class="row mb-3">
                        <div class="responsive4 una">
                            <div class="col">
                                <div class="container1" >
                                    <img src="{{asset('assets/Bikelane/Places/Marcos_House.png')}}" class="image">
                                    <div class="overlay">
                                        <h4 style="font-weight: 100px;">MARCOS HOUSE</h4>
                                        <div style="color: white !important; text-align: justify;" class="j">
                                            The Marcos Mansion in San Juan is the first residence of Ferdinand and Imelda Marcos after the couple got married. This is also where the late strongman spent his days as a congressman and senator of the Philippines and where the Marcos family stayed for ten years before moving to Malacañang after winning the presidency in 1965.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="responsive4">
                            <div class="col">
                                <div class="container1">
                                    <img src="{{asset('assets/Bikelane/Places/Santuario_Del_Santo_Cristo_Church.png')}}" class="image">
                                    <div class="overlay">
                                        <h4 style="font-weight: 100px;">SANTURIO DEL SANTO CRISTO PARISH CHURCH</h4>
                                        <div style="color: white !important; text-align: justify;" class="j">
                                            Located in Blumentritt Street in San Juan City, Santuario del Santo Cristo is one of the oldest churches in the city. It was built in 1602 – 1604 by the Dominicans but it was burnt and destroyed by the Chinese insurrection in 1639.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

            <div class="modal-body">
                <div class="col-12" style=" width: 100% !important; padding-right: 0 !important; padding-left: 0 !important;">
                    <img src="{{asset('assets/Bikelane/Header/Pt6-Pt7_Header.png')}}" style="width: 100%; margin: auto; padding-right: 0 !important; padding-left: 0 !important;">
                </div>

                <div class="mt-3" style="padding-left: 20px; padding-right: 20px;">
                    <video style="width:100%;" controls autoplay controls loop>
                        <source src="{{asset('assets/Bikelane/Videos/Pt6-Pt7.mp4')}}" type="video/mp4">
                    </video>
                </div>

                <div class="row mb-3">
                    <div class="responsive4 una">
                        <div class="col">
                            <div class="container1" >
                                <img src="{{asset('assets/Bikelane/Places/Santuario_Del_Santo_Cristo_Church.png')}}" class="image">
                                <div class="overlay">
                                    <h4 style="font-weight: 100px;">SANTURIO DEL SANTO CRISTO PARISH CHURCH</h4>
                                    <div style="color: white !important; text-align: justify;" class="i">
                                        Located in Blumentritt Street in San Juan City, Santuario del Santo Cristo is one of the oldest churches in the city. It was built in 1602 – 1604 by the Dominicans but it was burnt and destroyed by the Chinese insurrection in 1639.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="responsive4">
                        <div class="col">
                            <div class="container1">
                                <img src="{{asset('assets/Bikelane/Places/Iglesia_Ni_Cristo.png')}}" class="image">
                                <div class="overlay">
                                    <h4 style="font-weight: 100px;">IGLESIA NI CRISTO CHURCH</h4>
                                    <div style="color: white !important; text-align: justify;" class="j">
                                        The Iglesia ni Cristo Locale of F. Manalo is an art deco chapel and former central office of the Christian sect, Iglesia ni Cristo. It was designed by national artist of architecture Juan Nakpil and was built in 1952. Formerly known as Locale of Riverside, it was patterned on theaters on which architect Nakpil worked.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

{{-- third --}}

<div class="col-4 btncol">
    <!-- Button trigger modal -->
        <button type="button" class="btn btn-lg button7 text-capitalize" data-toggle="modal" data-target="#exampleModal7" style="font-size: 20px; font-weight: 700;">Iglesia ni Cristo Church → Greenhills Loop</button>
        <button type="button" class="btn btn-lg button8 text-capitalize" data-toggle="modal" data-target="#exampleModal8" style="font-size: 20px; font-weight: 700;">Greenhills Loop → Club Filipino</button>
        <button type="button" class="btn btn-lg button9 text-capitalize" data-toggle="modal" data-target="#exampleModal9" style="font-size: 20px; font-weight: 700;">Club Filipino → San Juan City Hall</button>
    <!-- Modal -->
        <div class="modal fade" id="exampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                <div class="modal-body">
                    <div class="col-12" style=" width: 100% !important; padding-right: 0 !important; padding-left: 0 !important;">
                        <img src="{{asset('assets/Bikelane/Header/Pt7-Pt8_Header.png')}}" style="width: 100%; margin: auto; padding-right: 0 !important; padding-left: 0 !important;">
                    </div>

                    <div class="mt-3" style="padding-left: 20px; padding-right: 20px;">
                        <video style="width:100%;" controls autoplay controls loop>
                            <source src="{{asset('assets/Bikelane/Videos/Pt7-Pt8.mp4')}}" type="video/mp4">
                        </video>
                    </div>

                    <div class="row mb-3">
                        <div class="responsive4 una">
                            <div class="col">
                                <div class="container1" >
                                    <img src="{{asset('assets/Bikelane/Places/Iglesia_Ni_Cristo.png')}}" class="image">
                                    <div class="overlay">
                                        <h4 style="font-weight: 100px;">IGLESIA NI CRISTO CHURCH</h4>
                                        <div style="color: white !important; text-align: justify;" class="j">
                                            The Iglesia ni Cristo Locale of F. Manalo is an art deco chapel and former central office of the Christian sect, Iglesia ni Cristo. It was designed by national artist of architecture Juan Nakpil and was built in 1952. Formerly known as Locale of Riverside, it was patterned on theaters on which architect Nakpil worked.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="responsive4">
                            <div class="col">
                                <div class="container1">
                                    <img src="{{asset('assets/Bikelane/Places/Greenhills_Loop.png')}}" class="image">
                                    <div class="overlay">
                                        <h4 style="font-weight: 100px;">GREENHILLS LOOP</h4>
                                        <div style="color: white !important; text-align: justify;" class="j">
                                            Considered as the “Tiangge Capital” of the Philippines,” the Greenhills Shopping Center is a shopping hub that offers affordable bazaars and thrift shops for rare-finds and novelty merchandises to shoppers.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

            <div class="modal-body">
                <div class="col-12" style=" width: 100% !important; padding-right: 0 !important; padding-left: 0 !important;">
                    <img src="{{asset('assets/Bikelane/Header/Pt8-Pt9_Header.png')}}" style="width: 100%; margin: auto; padding-right: 0 !important; padding-left: 0 !important;">
                </div>

                <div class="mt-3" style="padding-left: 20px; padding-right: 20px;">
                    <video style="width:100%;" controls autoplay controls loop>
                        <source src="{{asset('assets/Bikelane/Videos/Pt8-Pt9.mp4')}}" type="video/mp4">
                    </video>
                </div>

                <div class="row mb-3">
                    <div class="responsive4 una">
                        <div class="col">
                            <div class="container1" >
                                <img src="{{asset('assets/Bikelane/Places/Greenhills_Loop.png')}}" class="image">
                                <div class="overlay">
                                    <h4 style="font-weight: 100px;">GREENHILLS LOOP</h4>
                                    <div style="color: white !important; text-align: justify;" class="j">
                                        Considered as the “Tiangge Capital” of the Philippines,” the Greenhills Shopping Center is a shopping hub that offers affordable bazaars and thrift shops for rare-finds and novelty merchandises to shoppers.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="responsive4">
                        <div class="col">
                            <div class="container1">
                                <img src="{{asset('assets/Bikelane/Places/Club_Filipino.png')}}" class="image">
                                <div class="overlay">
                                    <h4 style="font-weight: 100px;">CLUB FILIPINO</h4>
                                    <div style="color: white !important; text-align: justify;" class="j">
                                        Club Filipino was the first exclusive social club in the Philippines established in 1898. Originally an elite Filipino country gentlemen’s organization, the club is known as a meeting ground for Filipino political progressives but is now popularly known as the venue for the inauguration of President Cory Aquino.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

        <div class="modal-body">
            <div class="col-12" style=" width: 100% !important; padding-right: 0 !important; padding-left: 0 !important;">
                <img src="{{asset('assets/Bikelane/Header/Pt9-Pt1_Header.png')}}" style="width: 100%; margin: auto; padding-right: 0 !important; padding-left: 0 !important;">
            </div>

            <div class="mt-3" style="padding-left: 20px; padding-right: 20px;">
                <video style="width:100%;" controls autoplay controls loop>
                    <source src="{{asset('assets/Bikelane/Videos/Pt9-Pt1.mp4')}}" type="video/mp4">
                </video>
            </div>

            <div class="row mb-3">
                <div class="responsive4 una">
                    <div class="col">
                        <div class="container1" >
                            <img src="{{asset('assets/Bikelane/Places/Club_Filipino.png')}}" class="image">
                            <div class="overlay">
                                <h4 style="font-weight: 100px;">CLUB FILIPINO</h4>
                                <div style="color: white !important; text-align: justify;" class="j">
                                    Club Filipino was the first exclusive social club in the Philippines established in 1898. Originally an elite Filipino country gentlemen’s organization, the club is known as a meeting ground for Filipino political progressives but is now popularly known as the venue for the inauguration of President Cory Aquino.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="responsive4">
                    <div class="col">
                        <div class="container1">
                            <img src="{{asset('assets/Bikelane/Places/San_Juan_City_Hall.png')}}" class="image">
                            <div class="overlay">
                                <h4 style="font-weight: 100px;">SAN JUAN CITY HALL</h4>
                                <div style="color: white !important; text-align: justify;" class="j">
                                    The new San Juan City Hall stands adjacent from the Pinaglabanan Shrine. The new city hall resembles old Spanish buildings. It has four floors and equipped with a helipad. Inside, the spacious lobby is adorned with paintings that depicts the Battle of San Juan del Monte.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
    
</div>

<br>

</div>

@endsection