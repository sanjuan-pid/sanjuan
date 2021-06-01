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

    <div class="container" id="sjmcpage">
        <br>
        <div class="row">
          <div class="col-sm-5 col-m-5 col-lg-5 mt-4 unafirst">
            <h1 style="text-align:center;">San Juan Medical Center</h1>
            <br>
            <h4><img src="{{asset('assets/location.png')}}" style="width:5%;">Address:<a id="locsjmc" style="font-size:16px;" href="https://www.google.com/maps/dir/14.6150175,121.022031/14.60394,121.0219/@14.6102182,121.016395,15z/data=!3m1!4b1!4m4!4m3!1m1!4e1!1m0"> 81-73 N Domingo St, San Juan, Metro Manila</a></h4>
            <br>
            <h4><img src="{{asset('assets/email.png')}}"style="width:5%;"> Email: <a style="font-size:16px;">sanjuan.medicalcenter@yahoo.com</a></h4>
            <br>
            <h4><img src="{{asset('assets/phone.png')}}"style="width:5%;"> Contact No. : <a style="font-size:16px;">(02) 8724 3266</a></h4>
            <a href="https://www.facebook.com/sanjuanmed/" class="fa fa-facebook"></a>
          </div>
          <div class="col-sm-7 col-m-7 col-lg-7 mt-4 larawan">
            <img src="{{asset('assets/sjmc.jpg')}}" style="width: 100%; height:350px; border-radius:10px !important;"/>
        </div>
     </div>
     <br>
     <br>
     <div class="row">
       <p class="para" style="text-align:justify; font-size:20px;font-weight: 400; color: black !important; background-color:#CADFF4; height:200px; border-radius:5px;"><br>Narito ang mga link ng Facebook page ng mga sangay ng ospital kung saan maaari kayong magpabook ng appointment mula alas-8 ng umaga (8AM) hanggang alas-12 ng tanghali (12NN).
     Ang pagpapalista o pagpapa-iskedyul ng pasyente ay dapat gawin isang araw o higit pa bago ang araw ng pagpapatingin sa kanilang mga doktor.<br><br></p>
     <div class="row sjmccard">
       <div class="col-sm-4 col-m-4 col-lg-4 hospitalcard mobcard">
         <a href="https://www.facebook.com/internalmedicinedepartmentSJMC/">
         <div class="card" id="med">
           <img src="{{asset('assets/sjmclogos/medicine.jpg')}}" alt="Avatar" style="width:30%;display: block; margin-left: auto; margin-right: auto;">
           <div class="container">
             <h4 style="text-align: center;"><b style="color:black;border-bottom: 3px solid black;">SJMC Internal Medicine</b></h4>
             <p>Facebook: <a style="font-size:12px;font-weight: 500; " href="https://www.facebook.com/internalmedicinedepartmentSJMC/">https://www.facebook.com/internalmedicinedepartmentSJMC/</a></p>
           </div>
         </div>
       </a>
       </div>
       <div class="col-sm-4 col-m-4 col-lg-4 hospitalcard">
         <a href="https://www.facebook.com/sjmcobgyn">
         <div class="card" id="med">
           <img src="{{asset('assets/sjmclogos/oby.jpg')}}" alt="Avatar" style="width:25%;display: block; margin-left: auto; margin-right: auto; border-radius:50px !important;">
           <div class="container">
             <h4 style="text-align: center;"><b style="color:black;border-bottom: 3px solid black;">SJMC Obstretrics & Gynecology</b></h4>
             <p>Facebook: <a style="font-size:12px; font-weight: 500;"href="https://www.facebook.com/sjmcobgyn">https://www.facebook.com/sjmcobgyn</a><br>Cellphone no.:  09228557728</p>
           </div>
         </div>
       </a>
       </div>
       <div class="col-sm-4 col-m-4 col-lg-4 hospitalcard">
         <a href="https://m.facebook.com/SJMC-Pediatrics-107072287700109/">
         <div class="card" id="med">
           <img src="{{asset('assets/sjmclogos/pedia.png')}}" alt="Avatar" style="width:25%;display: block; margin-left: auto; margin-right: auto; border-radius:50px;">
           <div class="container">
             <h4 style="text-align: center;"><b style="color:black;border-bottom: 3px solid black;">SJMC Pediatrics</b></h4>
             <p>Facebook: <a style="font-size:12px; font-weight: 500;" href="https://m.facebook.com/SJMC-Pediatrics-107072287700109/">https://m.facebook.com/SJMC-Pediatrics-107072287700109/</a><br>Cellphone no./Viber: 09178032251</p>
           </div>
         </div>
       </a>
       </div>
     </div>

     <div class="row">
       <div class="col-sm-4 col-m-4 col-lg-4 hospitalcard2">
         <a href="https://web.facebook.com/cirujanosdesanjuan/">
         <div class="card" id="med">
           <img src="{{asset('assets/sjmclogos/surgery.jpg')}}" alt="Avatar" style="width:25%;display: block; margin-left: auto; margin-right: auto; border-radius:50px !important;">
           <div class="container">
             <h4 style="text-align: center;"><b style="color:black;border-bottom: 3px solid black;">SJMC Surgery</b></h4>
             <p>Facebook: <a style="font-size:12px; font-weight: 500;" href="https://web.facebook.com/cirujanosdesanjuan/">https://web.facebook.com/cirujanosdesanjuan/</a><br></p>
           </div>
         </div>
       </a>
       </div>
       <div class="col-sm-4 col-m-4 col-lg-4 hospitalcard2">
         <a href="https://www.facebook.com/SJMCENTHNS">
         <div class="card" id="med">
           <img src="{{asset('assets/sjmclogos/ent.jpg')}}" alt="Avatar" style="width:25%;display: block; margin-left: auto; margin-right: auto; border-radius:50px;">
           <div class="container">
             <h4 style="text-align: center;"><b style="color:black;border-bottom: 3px solid black;">SJMC ENT – Head and Neck Surgery</b></h4>
             <p>Facebook: <a style="font-size:12px; font-weight: 500;" href="https://www.facebook.com/SJMCENTHNS">https://www.facebook.com/SJMCENTHNS</a><br></p>
           </div>
         </div>
       </a>
       </div>
       <div class="col-sm-4 col-m-4 col-lg-4 hospitalcard2">
         <a href="https://www.facebook.com/sanjuanmedicalcentereyeclinic/?__cft__[0]=AZUXB1LZ1l0Irk_1F0Vd_1OFXaXyjQ0gmVigh_r3LOnlOGRstT-uLG8r94vG_ePzz6Fjz_lwrIRLZo1wbhZ2SpwVi3QgIHPvb1m_8gr-vfzAF3W7xmlXCd7JcBobqpDQgKlOkEkLSJF5i_NoqE1DCodl&__tn__=-UK-R">
         <div class="card" id="med">
           <img src="{{asset('assets/sjmclogos/eye.png')}}" alt="Avatar" style="width:25%;display: block; margin-left: auto; margin-right: auto; border-radius:50px;">
           <div class="container">
             <h4 style="text-align: center;"><b style="color:black;border-bottom: 3px solid black;">SJMC Ophthalmology</b></h4>
             <p>Facebook: <a style="font-size:12px; font-weight: 500;" href="https://www.facebook.com/sanjuanmedicalcentereyeclinic/?__cft__[0]=AZUXB1LZ1l0Irk_1F0Vd_1OFXaXyjQ0gmVigh_r3LOnlOGRstT-uLG8r94vG_ePzz6Fjz_lwrIRLZo1wbhZ2SpwVi3QgIHPvb1m_8gr-vfzAF3W7xmlXCd7JcBobqpDQgKlOkEkLSJF5i_NoqE1DCodl&__tn__=-UK-R">https://www.facebook.com/San-Juan-Medical-Center-Eye...</a><br>Cellphone no.:  09178729129</p>
           </div>
         </div>
       </a>
       </div>
     </div>
     <div class="row">
       <div class="col-sm-4 col-m-4 col-lg-4 hospitalcard2">
         <a href="https://www.facebook.com/SJMCDentalDepartment/?modal=admin_todo_tour">
         <div class="card" id="med">
           <img src="{{asset('assets/sjmclogos/dental.jpg')}}" alt="Avatar" style="width:25%;display: block; margin-left: auto; margin-right: auto; border-radius:80px !important;">
           <div class="container">
             <h4 style="text-align: center;"><b style="color:black;border-bottom: 3px solid black;">SJMC Dental Medicine</b></h4>
             <p>Facebook: <a style="font-size:12px; font-weight: 500;" href="https://www.facebook.com/SJMCDentalDepartment/?modal=admin_todo_tour&__cft__[0]=AZUXB1LZ1l0Irk_1F0Vd_1OFXaXyjQ0gmVigh_r3LOnlOGRstT-uLG8r94vG_ePzz6Fjz_lwrIRLZo1wbhZ2SpwVi3QgIHPvb1m_8gr-vfzAF3W7xmlXCd7JcBobqpDQgKlOkEkLSJF5i_NoqE1DCodl&__tn__=-UK-R">https://www.facebook.com/San-Juan-Medical-Center.../...</a><br>Cellphone no.:  09178729129</p>
           </div>
         </div>
       </a>
       </div>
       <div class="col-sm-4 col-m-4 col-lg-4 hospitalcard2" >
         <a href="https://m.facebook.com/SJMC-Laboratory-101653131582841/">
         <div class="card" id="med">
           <img src="{{asset('assets/sjmclogos/Laboratory.png')}}" alt="Avatar" style="width:25%;display: block; margin-left: auto; margin-right: auto; border-radius:50px;">
           <div class="container">
             <h4 style="text-align: center;"><b style="color:black;border-bottom: 3px solid black;">SJMC Pathology and Laboratory</b></h4>
             <p>Facebook: <a style="font-size:12px; font-weight: 500;" href="https://m.facebook.com/SJMC-Laboratory-101653131582841/">https://m.facebook.com/SJMC-Laboratory-101653131582841/</a></p>
           </div>
         </div>
       </a>
       </div>
       <div class="col-sm-4 col-m-4 col-lg-4 hospitalcard2" >
         <a href="https://www.facebook.com/sjmcradio">
         <div class="card" id="med">
           <img src="{{asset('assets/sjmclogos/rad.jpg')}}" alt="Avatar" style="width:25%;display: block; margin-left: auto; margin-right: auto; border-radius:50px !important;">
           <div class="container">
             <h4 style="text-align: center;"><b style="color:black;border-bottom: 3px solid black;">SJMC Radiology</b></h4>
               <p>Facebook: <a style="font-size:12px; font-weight: 500;" href="https://www.facebook.com/sjmcradio">https://www.facebook.com/sjmcradio</a></p>
           </div>
         </div>
       </a>
       </div>
     </div>
     <div class="row">
       <div class="col-sm-4 col-m-4 col-lg-4 hospitalcard2" style=" margin: 0 auto; margin-top:20px;">
         <a href="https://web.facebook.com/sjmcopd/?_rdc=1&_rdr">
         <div class="card" id="med">
           <img src="{{asset('assets/sjmclogos/opd.jpg')}}" alt="Avatar" style="width:25%;display: block; margin-left: auto; margin-right: auto; border-radius:50px !important;">
           <div class="container">
             <h4 style="text-align: center;"><b style="color:black;border-bottom: 3px solid black;">SJMC Ambulatory Care</b></h4>
               <p>Facebook: <a style="font-size:12px; font-weight: 500;" href="https://web.facebook.com/sjmcopd/?_rdc=1&_rdr">https://web.facebook.com/sjmcopd/?_rdc=1&_rdr</a></p>
           </div>
         </div>
       </a>
       </div>
     </div>
    </div>
     <br>
     <div class="row">
       <p class="para" style="text-align:justify; font-size:20px;font-weight: 400; color: black !important; background-color:#CADFF4; height:200px; border-radius:5px;"><br>Hindi po kailangan magpa-iskedyul sa mga sangay ng ospital na ito:<br><br></p>
       <div class="row sjmccard2">
       <div class="col-sm-4 col-m-4 col-lg-4 hospitalcard3 mobcard2">
         <a href="https://www.facebook.com/sjmced2020">
         <div class="card" id="med">
           <img src="{{asset('assets/sjmclogos/er.png')}}" alt="Avatar" style="width:25%;display: block; margin-left: auto; margin-right: auto;border-radius:70px !important;">
           <div class="container">
             <h4 style="text-align: center;"><b style="color:black;border-bottom: 3px solid black;">SJMC Emergency Room</b></h4>
             <p>Facebook: <a style="font-size:12px;font-weight: 500; " href="https://www.facebook.com/sjmced2020">https://www.facebook.com/sjmced2020</a><br>Tel. no.:  8725 98 04 </p>
           </div>
         </div>
       </a>
      </div>
      <div class="col-sm-4 col-m-4 col-lg-4 hospitalcard3">
        <a href="https://www.facebook.com/sjmcanesthesiology/">
        <div class="card" id="med">
          <img src="{{asset('assets/sjmclogos/anes.jpg')}}" alt="Avatar" style="width:25%;display: block; margin-left: auto; margin-right: auto;border-radius:70px !important;">
          <div class="container">
            <h4 style="text-align: center;"><b style="color:black;border-bottom: 3px solid black;">SJMC Anesthesiology</b></h4>
            <p>Facebook: <a style="font-size:12px;font-weight: 500; " href="https://www.facebook.com/sjmcanesthesiology/">https://www.facebook.com/sjmcanesthesiology/</a></p>
          </div>
        </div>
      </a>
     </div>
     <div class="col-sm-4 col-m-4 col-lg-4 hospitalcard3">
       <a href="https://www.facebook.com/San-Juan-Medical-Center-Department-of-Nursing-Service-102991588116305">
       <div class="card" id="med">
         <img src="{{asset('assets/sjmclogos/ent.jpg')}}" alt="Avatar" style="width:25%;display: block; margin-left: auto; margin-right: auto;border-radius:70px !important;">
         <div class="container">
           <h4 style="text-align: center;"><b style="color:black;border-bottom: 3px solid black;">SJMC Nursing Service Office</b></h4>
           <p>Facebook: <a style="font-size:12px;font-weight: 500; " href="https://www.facebook.com/San-Juan-Medical-Center-Department-of-Nursing-Service-102991588116305">https://www.facebook.com/San-Juan-Medical-Center-Department-of-Nursing-Service-102991588116305</a></p>
         </div>
       </div>
     </a>
    </div>
  </div>
</div>
        <br>
</div>

@endsection
