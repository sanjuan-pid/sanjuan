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

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="/css/dev_h.css">
  <div class="container" id="conus">
    <div class="contactform mt-5">
      <!-- <div class="row">
          <div class=" col-12 col-sm-12 col-md-12 col-lg-12" id="directform">
            <div class=" col-7 col-sm-7 col-md-7 col-lg-7" style="display: inline-block;">
              <span id="sjch3" style="text-align:right !important;">SAN JUAN CITY HOTLINE:</span>
            </div>
            <div class=" col-4 col-sm-4 col-md-4 col-lg-4" style="display: inline;">
                <span id="sjch3" style="text-align:center;"> 137-135</span>
            </div>
            <div class=" col-7 col-sm-7 col-md-7 col-lg-7" style="display: inline-block;">
              <span id="sjch2" style="text-align:right !important;">Mayor's Office Hotline (Smart):</span>
            </div>
            <div class=" col-4 col-sm-4 col-md-4 col-lg-4" style="display: inline;">
                <span id="sjch2" style="text-align:center;"> 0961-680-5514</span>
            </div>
            <div class=" col-7 col-sm-7 col-md-7 col-lg-7" style="display: inline-block;">
              <span id="sjch2" style="text-align:right !important;">Mayor's Office Hotline (Globe):</span>
            </div>
            <div class=" col-4 col-sm-4 col-md-4 col-lg-4" style="display: inline;">
                <span id="sjch2" style="text-align:center;"> 0956-529-7286</span>
            </div>
            <div class=" col-7 col-sm-7 col-md-7 col-lg-7" style="display: inline-block;">
              <span id="sjch2" style="text-align:right !important;">City Heath Office (COVID-19):</span>
            </div>
            <div class=" col-4 col-sm-4 col-md-4 col-lg-4" style="display: inline;">
                <span id="sjch2" style="text-align:center;"> 7949 8358 / 8655 8683</span>
            </div>
          </div>

        </div> --> <img src="{{asset('assets/direct.png')}}"style="width:100%; position: relative; height:90% !important; z-index:10; display: block; margin-left: auto; margin-right: auto;border-radius: 10px;"/>
        <div class="mobdirect"id="mobdirect" style=" display: none;">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
              <div class=" col-12 col-sm-12 col-md-12 col-lg-12">
                <p id="sjch3"> San Juan City Hotline:<span id="sjch3"> 137-135</span></p>
              </div>
              <div class=" col-12 col-sm-12 col-md-12 col-lg-12">
                <p id="sjch1"> Mayor's Office Hotline (Smart):<span id="sjch2"> 0961-680-5514</span></p>
              </div>
              <div class=" col-12 col-sm-12 col-md-12 col-lg-12">
                <p id="sjch1"> Mayor's Office Hotline (Globe):<span id="sjch2"> 0956-529-7286</span></p>
              </div>
              <div class=" col-12 col-sm-12 col-md-12 col-lg-12">
                <p id="sjch1"> City Heath Office (Covid-19):<span id="sjch2"> 7949 8358 / 8655 8683</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<br>
<div class="container mt-5" id="dtpage">
  <div class="w3-container" style=" box-shadow: 0 2px 2px rgba(0, 0, 0, 0.2); border-radius:5px; z-index: 100;">
    <h1 class="text-center" style="font-weight:800;">San Juan City Directory</h1>
  </div>

<div class="sidedirect  tb" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()" style="width:100%;">Close &times;</button>
  <a href="#" class=" w3-button tblinks directbtn" onclick="directpage(event, '4th')"id="defaultOpen">4th Floor</a>
  <a href="#" class=" w3-button tblinks directbtn" onclick="directpage(event, '3rd')">3rd Floor</a>
  <a href="#" class=" w3-button tblinks directbtn" onclick="directpage(event, '2nd')">2nd Floor</a>
  <a href="#" class=" w3-button tblinks directbtn" onclick="directpage(event, 'upf')">Upperground Floor</a>
  <a href="#" class=" w3-button tblinks directbtn" onclick="directpage(event, 'lgf')">Lowerground Floor</a>
  <a href="#" class=" w3-button tblinks directbtn" onclick="directpage(event, 'out')">Outside</a>
  <a href="#" class=" w3-button tblinks directbtn" onclick="directpage(event, 'no')">National Offices</a>
  <a href="#" class=" w3-button tblinks directbtn" onclick="directpage(event, 'bdirect')">Barangay Directory</a>
  <a href="#" class=" w3-button tblinks directbtn" onclick="directpage(event, 'coffice')">Councilor's Office</a>
</div>


<div class="w3-main" style="margin-left:200px">
  <div class="w3-teal">
    <button class="w3-button w3-teal w3-xlarge w3-hide-large" onclick="w3_open()">&#9783; Menu List</button>
  </div>


    <div class="w3-container direcontent" id="4th" style="box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2); border-radius:5px;">
      <table class="table"style="transition: .5s;">
        <thead>
          <tr class="catdirect">
            <th>OFFICES</th>
            <th>CONTACT NUMBER</th>
            <th>EMAIL</th>
          </tr>
        </thead>
        <tbody>
          <tr class="ctus">
            <td>OFFICE OF THE CITY MAYOR</td>
            <td class="pula">8477 0064 / <br> FAX 8477 3457</td>
            <td>mayorfranciszamora.sanjuancity@gmail.com</td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="w3-container direcontent" id="3rd" style="box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2); border-radius:5px;">
      <table class="table"style="transition: .5s; ">
        <thead>
          <tr class="catdirect">
            <th>OFFICES</th>
            <th>CONTACT NUMBER</th>
            <th>EMAIL</th>
          </tr>
        </thead>
        <tbody>
          <tr class="ctus">
            <td>CITY ADMINISTRATOR </td>
            <td class="pula">8470 6496</td>
            <td>dennisalbertpamintuan@yahoo.com</td>
          </tr>
          <tr class="ctus">
            <td>BIDS & AWARDS <br>COMMITTEE</td>
            <td class="pula">7621 9226</td>
            <td>bacsanjuancity@gmail.com</td>
          </tr>
          <tr class="ctus">
            <td>CITY ACCOUNTING <br> DEPARTMENT</td>
            <td class="pula">7750 1686  /<br> 7625 8711</td>
            <td>accounting_sj2017@yahoo.com /<br>r.a.rizada@gmail.com</td>
          </tr>
          <tr class="ctus">
            <td>CITY BUDGET DEPARTMENT </td>
            <td class="pula">8477 9048 /<br> 7750 1409</td>
            <td>sanjuancity.budgetdepartment19@gmail.com</td>
          </tr>
          <tr class="ctus">
            <td>CITY HUMAN RESOURCE <br>DEVELOPMENT OFFICE</td>
            <td class="pula">8477 3127 / <br> 7750 1454</td>
            <td>sanjuanchrdd@yahoo.com /<br>hrdd@sanjuancity.ph</td>
          </tr>
          <tr class="ctus">
            <td>CITY PLANNING & <br>DEVELOPMENT DEPARTMENT </td>
            <td class="pula">7728 9946 /<br> FAX 7750 1485</td>
            <td>sjcpdo2013@yahoo.com.ph</td>
          </tr>
          <tr class="ctus">
            <td>INFORMATION & <br>COMMUNICATIONS <br> TECHNOLOGY OFFICE</td>
            <td class="pula">7625 5841</td>
            <td>ictosanjuan@gmail.com</td>
          </tr>
          </tbody>
        </table>
    </div>

    <div class="w3-container direcontent" id="2nd" style="box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2); border-radius:5px;">
      <table class="table"style="transition: .5s; height:5%;">
        <thead>
          <tr class="catdirect">
            <th>OFFICES</th>
            <th>CONTACT NUMBER</th>
            <th>EMAIL</th>
          </tr>
        </thead>
          <tbody>
            <tr class="ctus">
              <td>OFFICE OF THE <br>CITY VICE  MAYOR</td>
              <td class="pula">7625 5848</td>
              <td>vmwarrenvilla@gmail.com</td>
            </tr>
            <tr class="ctus">
              <td>BARANGAY OPERATION <br>CENTER</td>
              <td class="pula">7728 9937</td>
              <td>bocsanjuancity@gmail.com</td>
            </tr>
            <tr class="ctus">
              <td>LIGA NG MGA <br>BARANGAY</td>
              <td class="pula">7750 1539</td>
              <td>lnb.sanjuancitychapter@gmail.com</td>
            </tr>
            <tr class="ctus">
              <td>CITY HEALTH <br>OFFICE (COVID-19)</td>
              <td class="pula">7949 8358 / <br>8655 8683</td>
              <td>cho@sanjuancity.ph</td>
            </tr>
            <tr class="ctus">
              <td>CITY LEGAL<br> DEPARTMENT</td>
              <td class="pula">7728 9807 /<br> 8656 3258</td>
              <td>citylegal.sanjuancity@yahoo.com</td>
            </tr>
            <tr class="ctus">
              <td>COMMISSION <br>OF AUDIT</td>
              <td class="pula">7750 1602 /<br> 7625 5846 / <br>8477 3545</td>
              <td></td>
            </tr>
            <tr class="ctus">
              <td>CITY SOCIAL WELFARE & <br>DEVELOPMENT DEPARTMENT </td>
              <td class="pula">7729 0120 /<br> 0956 429 7998</td>
              <td>sjccswdo2017@gmail.com / <br>cswdd@sanjuancity.gov.ph</td>
            </tr>
            <tr class="ctus">
              <td>DEPARTMENT OF THE INTERIOR &<br> LOCAL GOVERNMENT </td>
              <td class="pula">7750 5422</td>
              <td>sanjuan.dilg@gmail.com</td>
            </tr>
            <tr class="ctus">
              <td>METROPOLITAN MANILA <br>DEVELOPMENT AUTHORITY</td>
              <td class="pula">7750 1618</td>
              <td></td>
            </tr>
            <tr class="ctus">
              <td>PAROLE AND PROBATION</td>
              <td class="pula">7728 9708</td>
              <td>sanjuanppo@gmail.com</td>
            </tr>
            <tr class="ctus">
              <td>PUBLIC EMPLOYMENT <br>SERVICES OFFICE</td>
              <td class="pula">7728 9746</td>
              <td>pesosanjuan20@gmail.com</td>
            </tr>
            <tr class="ctus">
              <td>SANGGUNIANG PANLUNGSOD</td>
              <td class="pula">8655 8394 /<br> 8477 0295 /<br>(02) 7728 9779</td>
              <td>sanjuancitycouncil@gmail.com</td>
            </tr>
          </tbody>
        </table>
      </div>


    <div class="w3-container direcontent" id="upf" style="box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2); border-radius:5px;">
      <table class="table aa"style="transition: .5s;">
        <thead>
          <tr class="catdirect">
            <th>OFFICES</th>
            <th>CONTACT NUMBER</th>
            <th>EMAIL</th>
          </tr>
        </thead>
        <tbody>
          <tr class="ctus">
            <td>CITY PUBLIC INFORMATION DEPARTMENT</td>
            <td class="pula">7729 0005</td>
            <td>publicinfo.sjc@gmail.com</td>
          </tr>
          <tr class="ctus">
            <td>BUSINESS PERMIT & <br> LICENSE OFFICE </td>
            <td class="pula">8655 9697</td>
            <td>bplo_csj@yahoo.com / <br> bplo@sanjuancity.gov.ph</td>
          </tr>
          <tr class="ctus">
            <td>CITY ASSESSOR'S OFFICE</td>
            <td class="pula">8477 4572</td>
            <td>sanjuancityassessor@gmail.com</td>
          </tr>
          <tr class="ctus">
            <td>CITY BUILDING OFFICIAL</td>
            <td class="pula">8654 0747 / <br>7750 1537</td>
            <td>sanjuan_buildingofficial@yahoo.com</td>
          </tr>
          <tr class="ctus">
            <td>CITY CIVIL REGISTRY <br> DEPARTMENT</td>
            <td class="pula">7625 5842</td>
            <td>jalviormagno@yahoo.com /<br> Facebook: San Juan City Civil Registry Dept.</td>
          </tr>
          <tr class="ctus">
            <td>CITY HEALTH & NUTRITION OFFICE</td>
            <td class="pula">7625 5845</td>
            <td>healthoffice.sjc@gmail.com</td>
          </tr>
          <tr class="ctus">
            <td>CITY INVESTMENT PROMOTION CENTER</td>
            <td class="pula">8255 3736</td>
            <td>ken.lsgh@yahoo.com</td>
          </tr>
          <tr class="ctus">
            <td>CITY POPULATION <br>DEVELOPMENT OFFICE </td>
            <td class="pula">8470 9921 / <br>7750 1680</td>
            <td>popdevsanjuan@gmail.com</td>
          </tr>
          <tr class="ctus">
            <td>CITY SPORTS OFFICE</td>
            <td class="pula">7750 1407</td>
            <td>sportofficesanjuan@yahoo.com</td>
          </tr>
          <tr class="ctus">
            <td>CITY TOURISM & <br>CULTURAL AFFAIRS OFFICE</td>
            <td class="pula">7728 9818</td>
            <td>ctcaosj@gmail.com</td>
          </tr>
          <tr class="ctus">
            <td>CITY TREASURY DEPARTMENT</td>
            <td class="pula">ADMIN:7576 4477 <br>CASH:8655 8509<br>REAL PROPERTY TAX:8655 8050<br>LICENSE:7728 9835 </td>
            <td>sjc_treasurydept@yahoo.com</td>
          </tr>
          <tr class="ctus">
            <td>COOPERATIVE DEVELOPMENT OFFICE </td>
            <td class="pula">7728 7906</td>
            <td>sjcoopdevtofc@gmail.com</td>
          </tr>
          <tr class="ctus">
            <td>OFFICE OF THE <br>SENIOR CITIZEN AFFAIRS </td>
            <td class="pula">7625 5843</td>
            <td>oscasanjuancity@gmail.com</td>
          </tr>
          <tr class="ctus">
            <td>ORDINANCE VIOLATION CITATION TICKET</td>
            <td class="pula">7750 1697</td>
            <td>vantopacio@gmail.com</td>
          </tr>
          <tr class="ctus">
            <td>PERSON WITH DISABILITY<br> AFFAIRS OFFICE</td>
            <td class="pula">7621 1508</td>
            <td>jewelpage03@yahoo.com</td>
          </tr>
          <tr class="ctus">
            <td>PUBLIC ASSISTANCE CENTER</td>
            <td class="pula">7750 1697</td>
            <td>vantopacio@gmail.com</td>
          </tr>
          <tr class="ctus">
            <td>URBAN POOR AFFAIRS OFFICE</td>
            <td class="pula">8477 9043 / <br>7754 8006</td>
            <td>upao.sanjuancity@gmail.com</td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="w3-container direcontent" id="lgf" style="box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2); border-radius:5px;">
      <table class="table aa"style="transition: .5s;">
        <thead>
          <tr class="catdirect">
            <th>OFFICES</th>
            <th>CONTACT NUMBER</th>
            <th>EMAIL</th>
          </tr>
        </thead>
        <tbody>
          <tr class="ctus">
            <td>CITY DISASTER<br> RISK REDUCTION & <br> MANAGEMENT OFFICE </td>
            <td class="pula">7238 4333</td>
            <td>sjcdrrmo2011@gmail.com / <br>cdrrmo.sanjuan@gmail.com</td>
          </tr>
          <tr class="ctus">
            <td>CITY ENGINEERING <br>DEPARTMENT</td>
            <td class="pula">8997 8182 / <br>7728 9917</td>
            <td>sanjuanengineering@gmail.com</td>
          </tr>
          <tr class="ctus">
            <td>CITY ENVIRONMENT AND <br>NATURAL RESOURCES</td>
            <td class="pula">0917 387 0508 / <br>0961 078 8935</td>
            <td>cenrosanjuancity@gmail.com</td>
          </tr>
          <tr class="ctus">
            <td>CITY LIBRARY</td>
            <td class="pula">7744 2695</td>
            <td></td>
          </tr>
          <tr class="ctus">
            <td>GENERAL SERVICES <br>DEPARTMENT </td>
            <td class="pula">8477 4010 / <br>7728 7426</td>
            <td>arevalorizalina@yahoo.com</td>
          </tr>
          <tr class="ctus">
            <td>OFFICE OF<br> VETERINARY <br>SERVICES </td>
            <td class="pula">77289780</td>
            <td>veterinaryoffice27@gmail.com</td>
          </tr>
          <tr class="ctus">
            <td>PUBLIC ORDER & SAFETY OFFICE </td>
            <td class="pula">8477 5887</td>
            <td>tpmopososanjuan@gmail.com</td>
          </tr>
          <tr class="ctus">
            <td>TASK FORCE DISIPLINA</td>
            <td class="pula">8477 5887</td>
            <td>tfdsanjuancity@gmail.com</td>
          </tr>
          <tr class="ctus">
            <td>TRAFFIC PARKING & <br>MANAGEMENT OFFICE </td>
            <td class="pula">8655 8364 / <br>7625 5844</td>
            <td>tpmopososanjuan@gmail.com</td>
          </tr>
          <tr class="ctus">
            <td>TRICYCLE REGULATORY BOARD</td>
            <td class="pula">8477 5887</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="w3-container direcontent" id="out" style="box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2); border-radius:5px;">
      <table class="table aa"style="transition: .5s;">
        <thead>
          <tr class="catdirect">
            <th>OFFICES</th>
            <th>CONTACT NUMBER</th>
            <th>EMAIL</th>
          </tr>
        </thead>
        <tbody>
          <tr class="ctus">
            <td>CITY HEALTH DEPARTMENT I</td>
            <td class="pula">7625 5845</td>
            <td>healthoffice.sjc@gmail.com /<br> cho@sanjuancity.ph</td>
          </tr>
          <tr class="ctus">
            <td>CITY HEALTH DEPARTMENT II</td>
            <td class="pula">7728 9715</td>
            <td>cho@sanjuancity.ph</td>
          </tr>
          <tr class="ctus">
            <td>ONSE HEALTH CENTER</td>
            <td class="pula">7750 9034</td>
            <td></td>
          </tr>
          <tr class="ctus">
            <td>MARKET ADMINISTRATION</td>
            <td class="pula">7508 9562</td>
            <td>sjagoramarket@yahoo.com</td>
          </tr>
          <tr class="ctus">
            <td>SAN JUAN CEMETERY</td>
            <td class="pula">8556 6117</td>
            <td></td>
          </tr>
          <tr class="ctus">
            <td>SAN JUAN MEDICAL CENTER </td>
            <td class="pula">8725 9764 /<br> 8724 3266 / <br>8725 9247 / <br>8725 9804 / <br>8725 9804 / <br>8725 9412</td>
            <td></td>
          </tr>
          <tr class="ctus">
            <td>SKILLS & LIVELIHOOD <br>TRAINING CENTER</td>
            <td class="pula">8693 9464</td>
            <td>sltcsanjuan@gmail.com</td>
          </tr>
          <tr class="ctus">
            <td>POLYTECHNIC UNIVERSITY <br> OF THE PHILIPPINES </td>
            <td class="pula">7246 322 /<br>497 4460 /<br>632 7738 / <br>738 5071</td>
            <td></td>
          </tr>
          <tr class="ctus">
            <td>SCHOOLS DIVISION <br>OFFICE </td>
            <td class="pula">8451-26994512383 / <br>4512699/9387269 / <br>6617899</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="w3-container direcontent" id="no" style="box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2); border-radius:5px;">
      <table class="table aa"style="transition: .5s;">
        <thead>
          <tr class="catdirect">
            <th>OFFICES</th>
            <th>CONTACT NUMBER</th>
            <th>EMAIL</th>
          </tr>
        </thead>
        <tbody>
          <tr class="ctus">
            <td>PHILIPPINE NATIONAL POLICE</td>
            <td class="pula">8724 2515 /<br>8724 3744 / <br>8298 7603 / <br>8724 8854</td>
            <td>opas.sanjuancps@gmail.com</td>
          </tr>
          <tr class="ctus">
            <td>POST OFFICE GREENHILLS</td>
            <td class="pula">8727 5881</td>
            <td></td>
          </tr>
          <tr class="ctus">
            <td>BUREAU OF FIRE PROTECTION</td>
            <td class="pula">8725 2079 / <br>8725 8044</td>
            <td>sanjuanfire@yahoo.com</td>
          </tr>
          <tr class="ctus">
            <td>BUREAU OF JAIL MANAGEMENT <br> AND PENOLOGY (MALE)</td>
            <td class="pula">8534 1828</td>
            <td></td>
          </tr>
          <tr class="ctus">
            <td>BUREAU OF JAIL MANAGEMENT <br>AND PENOLOGY (FEMALE)</td>
            <td class="pula">8705 1764</td>
            <td>sanjuancityjailfemale@gmail.com</td>
          </tr>
          <tr class="ctus">
            <td>MUSEO EL DEPOSITO</td>
            <td class="pula">7753 5439 / <br>0998 247 0042</td>
            <td></td>
          </tr>
          <tr class="ctus">
            <td>COMELEC</td>
            <td class="pula">8693 7504</td>
            <td></td>
          </tr>
          <tr class="ctus">
            <td>LANDBANK SAN JUAN <br>BRANCH</td>
            <td class="pula">7799-5003 /<br> 8726-0227 / <br>0917-551-5001 /<br> 0929-672-25-08</td>
            <td>rdo_42@bir.gov.ph</td>
          </tr>
          <tr class="ctus">
            <td>BIR SAN JUAN </td>
            <td class="pula">8723-8183</td>
            <td></td>
          </tr>
          <tr class="ctus">
            <td>OFFICE OF THE<br> CLERK OF COURT</td>
            <td class="pula">7750-5132</td>
            <td></td>
          </tr>
          <tr class="ctus">
            <td>MTC 57</td>
            <td class="pula">7750-6127</td>
            <td></td>
          </tr>
          <tr class="ctus">
            <td>MTC 58</td>
            <td class="pula">7750-5169</td>
            <td></td>
          </tr>
          <tr class="ctus">
            <td>Public Attorney's Office</td>
            <td class="pula">8654-6386</td>
            <td></td>
          </tr>
          <tr class="ctus">
            <td>Prosecutor's Office - DOJ San Juan</td>
            <td class="pula">8693-2117</td>
            <td></td>
          </tr>
          <tr class="ctus">
            <td>RTC 68</td>
            <td class="pula">7949-7586</td>
            <td></td>
          </tr>
          <tr class="ctus">
            <td>RTC 160</td>
            <td class="pula">7949-7588</td>
            <td></td>
          </tr>
          <tr class="ctus">
            <td>RTC 162</td>
            <td class="pula">0949-992-3070 / <br>7949-7559</td>
            <td></td>
          </tr>
          <tr class="ctus">
            <td>RTC 264</td>
            <td class="pula">7949-7587</td>
            <td></td>
          </tr>
          <tr class="ctus">
            <td>SSS San Juan</td>
            <td class="pula">8721-5195 / <br>FAX 8721-8686</td>
            <td></td>
          </tr>
          <tr class="ctus">
            <td>Filoil Flying V Centre</td>
            <td class="pula">8477 7644 /<br>8654 0772</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="w3-container direcontent" id="bdirect" style="box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2); border-radius:5px;">
      <table class="table aa"style="transition: .5s;">
        <thead>
          <tr class="catdirect">
            <th>BARANGAY</th>
            <th>CONTACT NUMBER</th>
            <th>EMAIL</th>
          </tr>
        </thead>
        <tbody>
          <tr class="ctus">
            <td>ADDITION HILLS</td>
            <td class="pula">8352 0211</td>
            <td>additionhills@yahoo.com.ph</td>
          </tr>
          <tr class="ctus">
            <td>BALONG BATO   </td>
            <td class="pula">8723 9561</td>
            <td>balongbatosanjuan@gmail.com</td>
          </tr>
          <tr class="ctus">
            <td>BATIS   </td>
            <td class="pula">7744 0737</td>
            <td>batis.sanjuan@gmail.com</td>
          </tr>
          <tr class="ctus">
            <td>CORAZON DE JESUS</td>
            <td class="pula">09253551035</td>
            <td>brgycdj@gmail.com</td>
          </tr>
          <tr class="ctus">
            <td>ERMITANO</td>
            <td class="pula">7919 4885</td>
            <td>ermitano.sanjuan@gmail.com</td>
          </tr>
          <tr class="ctus">
            <td>GREENHILLS</td>
            <td class="pula">8724 5163</td>
            <td>greenhills.sanjuan@gmail.com</td>
          </tr>
          <tr class="ctus">
            <td>ISABELITA</td>
            <td class="pula">8722 6948</td>
            <td>brgy.isabelita@gmail.com</td>
          </tr>
          <tr class="ctus">
            <td>KABAYANAN</td>
            <td class="pula">8726 4952</td>
            <td>brgy.kabayanan@gmail.com</td>
          </tr>
          <tr class="ctus">
            <td>LITTLE BAGUIO</td>
            <td class="pula">8725 4484</td>
            <td>littlebaguiosanjuan@gmail.com</td>
          </tr>
          <tr class="ctus">
            <td>MAYTUNAS</td>
            <td class="pula">8722 7848</td>
            <td>maytunassanjuan@gmail.com</td>
          </tr>
          <tr class="ctus">
            <td>ONSE</td>
            <td class="pula">7744 0740</td>
            <td>onse.sanjuan@gmail.com</td>
          </tr>
          <tr class="ctus">
            <td>PASADENA</td>
            <td class="pula">7745 3451</td>
            <td>barangaypasadena2018@gmail.com /<br> website: barangaypasadena.com</td>
          </tr>
          <tr class="ctus">
            <td>PEDRO CRUZ</td>
            <td class="pula">8288 6467</td>
            <td>brgypedrocruz.sanjuancity@yahoo.com</td>
          </tr>
          <tr class="ctus">
            <td>PROGRESO</td>
            <td class="pula">8727 5635</td>
            <td>barangayprogreso@yahoo.com</td>
          </tr>
          <tr class="ctus">
            <td>RIVERA</td>
            <td class="pula">8942 2543 /<br> 09178636334</td>
            <td>rivera.sanjuan15@gmail.com</td>
          </tr>
          <tr class="ctus">
            <td>SALAPAN</td>
            <td class="pula">8251 3116</td>
            <td>franciabarbon@gmail.com</td>
          </tr>
          <tr class="ctus">
            <td>SAN PERFECTO</td>
            <td class="pula">8633 3596</td>
            <td>sanperfecto.barangay@gmail.com</td>
          </tr>
          <tr class="ctus">
            <td>STA LUCIA</td>
            <td class="pula">7726 5385</td>
            <td>sta.lucia.sanjuan@gmail.com</td>
          </tr>
          <tr class="ctus">
            <td>ST. JOSEPH</td>
            <td class="pula">7968 2186</td>
            <td></td>
          </tr>
          <tr class="ctus">
            <td>TIBAGAN</td>
            <td class="pula">8723 9837</td>
            <td>tibaganbarangaycouncil@gmail.com</td>
          </tr>
          <tr class="ctus">
            <td>WEST CRAME</td>
            <td class="pula">8635 0169</td>
            <td>westcramebrgy@gmail.com</td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="w3-container direcontent" id="coffice" style="box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2); border-radius:5px;">
      <table class="table"style="transition: .5s;">
        <thead>
          <tr id="konsilaman">
            <th>COUNCILOR</th>
            <th>CONTACT NUMBER</th>
          </tr>
        </thead>
        <tbody>
          <tr class="sjcat">
            <td>Distict I</td>
            <td class="pula"></td>

          </tr>
          <tr class="ctus">
            <td>COUN. VINCENT RAINIER M. PACHECO</td>
            <td class="pula">7625-5768</td>

          </tr>
          <tr class="ctus">
            <td>COUN. PAUL ANTHONY D. ARTADI </td>
            <td class="pula">7625-5767</td>
          </tr>
          <tr class="ctus">
            <td>COUN. MA. ANTONIA RAISSA DAWN H. LAUREL</td>
            <td class="pula">7625-5771</td>

          </tr>
          <tr class="ctus">
            <td>COUN. VICTOR JOSE L. REYES</td>
            <td class="pula">7625-5762</td>

          </tr>
          <tr class="ctus">
            <td>COUN. FRANCHESCO PAUL R. VELASCO </td>
            <td class="pula">7625-5769</td>

          </tr>
          <tr class="ctus">
            <td>COUN. ARTHUR ALFRED E. AQUINO</td>
            <td class="pula">7625-5760</td>

          </tr>
          <tr class="sjcat">
            <td>Distict II</td>
            <td class="pula"></td>
            <td></td>
          </tr>
          <tr class="ctus">
            <td>COUN. JANNAH A .EJERCITO</td>
            <td class="pula">7625-5763</td>

          </tr>
          <tr class="ctus">
            <td>COUN. BEA CELINE D. DE GUZMAN </td>
            <td class="pula">7625-5770</td>

          </tr>
          <tr class="ctus">
            <td>COUN. ROLANDO M. BERNARDO</td>
            <td class="pula">7625-5764</td>

          </tr>
          <tr class="ctus">
            <td>COUN. MICHAEL CHRISTOPHER R. MATHAY </td>
            <td class="pula">7625-5759</td>

          </tr>
          <tr class="ctus">
            <td>COUN. MARY JOY A. IBUNA-LEOY</td>
            <td class="pula">7625-5765</td>

          </tr>
          <tr class="ctus">
            <td>COUN. FRANCIS KEITH R. PERALTA</td>
            <td class="pula">7625-5761</td>
          </tr>
      </table>
    </div>



  </div>
</div>
<script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}

function directpage(dt, floor) {
  var t, direcontent, tablinks;
  direcontent = document.getElementsByClassName("direcontent");
  for (t = 0; t < direcontent.length; t++) {
    direcontent[t].style.display = "none";
  }
  tblinks = document.getElementsByClassName("tblinks");
  for (t = 0; t < tblinks.length; t++) {
    tblinks[t].className = tblinks[t].className.replace(" active", "");
  }
  document.getElementById(floor).style.display = "block";
  dt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<!-- <style>

section{
  position: relative;
  justify-content: center;
  align-items: center;
  min-height: 100vh;

}

section .container{
  position: relative;
  display: flex;
  z-index: 1;
}

section .container .contactform{
  position: relative;
  padding: 10px 10px;
  background: #fff;
  width: calc(100% - 150px);
  height: 50%;
  box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2);
  border-radius: 5px;
  margin: auto;
}
#sjch1{
  font-size: 25px;
  color:#1b2560;
  font-weight: bolder;
}
#sjch2{
  font-size: 25px;
  color: red;
  font-weight:700;
}
#sjch3{
  font-size: 20px;
  color:#1b2560;
  font-weight: bolder;
}
#sjch3{
  font-size: 20px;
  color:#1b2560;
  font-weight: bolder;
}
#sjchbrgy{
  font-size: 20px;
  color:#1b2560;
  font-weight: bolder;
}
#konsilaman{
  font-size: 20px;
  color:#1b2560;
  font-weight: bolder;
}
.ctus{
  font-size: 15px;
  color:black;
  font-weight: bolder;
}
.pula{
  font-size: 15px;
  color:red;
  font-weight: 700;
}
.sjcat{
  font-size: 30px;
  color:red;
  text-align: center;
  font-weight: 700;
}
#loc{
  width: 20%;
}
.sanj:hover{
font-weight: 700 !important;
color: darkblue !important;
}
.brgyd:hover{
font-weight: 700 !important;
color: darkblue !important;
}
.konsi:hover{
font-weight: 700 !important;
color: darkblue !important;
}
@media screen and (max-width: 766px) and (min-width: 200px) {
  #conus {
    max-width: 100% !important;
    width:100% !important;
    display:block !important;
    margin-left:auto !important;
    margin-right:auto !important;
  }
  #conus .contactform{
    max-width: 100% !important;
    width:100% !important;
    display:block !important;
    margin-left:auto !important;
    margin-right:auto !important
  }
  #conus .contactform #sjch1{
    font-size: 15px;
  }
  #conus .contactform #sjch2{
    font-size: 15px;
  }
  #deptconus .contactform{
    max-width: 100% !important;
    width:100% !important;
    display:block !important;
    margin-left:auto !important;
    margin-right:auto !important
  }
  #deptconus .contactform h1{
    font-size: 22px;
  }
  #deptconus .contactform #dir{
    max-width: 100% !important;
    width:100% !important;
    display:block !important;
    margin-left:auto !important;
    margin-right:auto !important;
  }
  #deptconus .contactform thead{
    max-width: 100% !important;
    width:100% !important;
    display:block !important;
    margin-left:auto !important;
    margin-right:auto !important;
  }
  #deptconus .contactform thead #sjch3{
    font-size: 20px;
  }
  #deptconus .contactform tbody .sjcat{
    font-size: 17px;
  }
  #deptconus .contactform tbody .ctus{
    font-size: 10px;
  }
  #deptconus .contactform tbody .pula{
    font-size: 10px;
  }


  #brgyconus .contactform{
    max-width: 100% !important;
    width:100% !important;
    display:block !important;
    margin-left:auto !important;
    margin-right:auto !important
  }
  #brgyconus .contactform h1{
    font-size: 22px;
  }
  #brgyconus .contactform #brgydirect{
    max-width: 100% !important;
    width:100% !important;
    display:block !important;
    margin-left:auto !important;
    margin-right:auto !important;
  }
  #brgyconus .contactform thead{
    max-width: 100% !important;
    width:100% !important;
    display:block !important;
    margin-left:auto !important;
    margin-right:auto !important;
  }
  #brgyconus .contactform thead #sjchbrgy{
    font-size: 15px !important;
  }
  #brgyconus .contactform tbody .sjcat{
    font-size: 17px;
  }
  #brgyconus .contactform tbody .ctus{
    font-size: 8px;
    font-weight: 700;
  }
  #brgyconus .contactform tbody .pula{
    font-size: 10px;
  }

  #konsiconus .contactform{
    max-width: 100% !important;
    width:100% !important;
    display:block !important;
    margin-left:auto !important;
    margin-right:auto !important
  }
  #konsiconus .contactform h1{
    font-size: 22px;
  }
  #konsiconus .contactform #konsehal{
    max-width: 100% !important;
    width:100% !important;
    display:block !important;
    margin-left:auto !important;
    margin-right:auto !important;
  }
  #konsiconus .contactform thead{
    max-width: 100% !important;
    width:100% !important;
    display:block !important;
    margin-left:auto !important;
    margin-right:auto !important;
  }
  #konsiconus .contactform thead #konsilaman{
    font-size: 23px !important;
  }
  #konsiconus .contactform tbody .sjcat{
    font-size: 17px;
  }
  #konsiconus .contactform tbody .ctus{
    font-size: 10px;
    font-weight: 700;
  }
  #konsiconus .contactform tbody .pula{
    font-size: 12px;
  }
}
</style>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <body>
      <section>
        <div class="container" id="conus">
          <div class="contactform mt-5">
            <div class="row">
              <div class=" col-12 col-sm-12 col-md-12 col-lg-12">
                <p id="sjch1"> San Juan City Hotline:<span id="sjch2"> 137-135</span></p>
              </div>
              <div class=" col-12 col-sm-12 col-md-12 col-lg-12">
                <p id="sjch1"> Mayor's Office Hotline (Smart):<span id="sjch2"> 0961-680-5514</span></p>
              </div>
              <div class=" col-12 col-sm-12 col-md-12 col-lg-12">
                <p id="sjch1"> Mayor's Office Hotline (Globe):<span id="sjch2"> 0956-529-7286</span></p>
              </div>
              <div class=" col-12 col-sm-12 col-md-12 col-lg-12">
                <p id="sjch1"> City Heath Office (Covid-19):<span id="sjch2"> 7949 8358 / 8655 8683</span></p>
              </div>
            </div>
          </div>
        </div>

        <div class="container" id="deptconus">
          <div class="contactform mt-5">
            <h1 class="sanj" style="text-align:center; color:#1b2560; font-weight:600;cursor:pointer;">SAN JUAN CITY DIRECTORY</h1>
            <table id="dir"class="table table-hover"style="overflow-y: scroll; display:none; transition: .3s;">
              <thead>
                <tr id="sjch3">
                  <th>OFFICES</th>
                  <th>CONTACT NUMBER</th>
                  <th>EMAIL</th>
                </tr>
              </thead>
              <tbody>
                <tr class="sjcat">
                  <td>4th Floor</td>
                  <td class="pula"></td>
                  <td></td>
                </tr>
                <tr class="ctus">
                  <td>OFFICE OF THE CITY MAYOR</td>
                  <td class="pula">8477 0064 / FAX 8477 3457</td>
                  <td>mayorfranciszamora.sanjuancity@gmail.com</td>
                </tr>
                <tr class="sjcat">
                  <td>3rd Floor</td>
                  <td class="pula"></td>
                  <td></td>
                </tr>
                <tr class="ctus">
                  <td>CITY ADMINISTRATOR </td>
                  <td class="pula">8470 6496</td>
                  <td>dennisalbertpamintuan@yahoo.com</td>
                </tr>
                <tr class="ctus">
                  <td>BIDS & AWARDS COMMITTEE</td>
                  <td class="pula">7621 9226</td>
                  <td>bacsanjuancity@gmail.com</td>
                </tr>
                <tr class="ctus">
                  <td>CITY ACCOUNTING DEPARTMENT</td>
                  <td class="pula">7750 1686 / 7625 8711</td>
                  <td>accounting_sj2017@yahoo.com/r.a.rizada@gmail.com</td>
                </tr>
                <tr class="ctus">
                  <td>CITY BUDGET DEPARTMENT </td>
                  <td class="pula">8477 9048 / 7750 1409</td>
                  <td>sanjuancity.budgetdepartment19@gmail.com</td>
                </tr>
                <tr class="ctus">
                  <td>CITY HUMAN RESOURCE DEVELOPMENT OFFICE</td>
                  <td class="pula">8477 3127 / 7750 1454</td>
                  <td>sanjuanchrdd@yahoo.com/hrdd@sanjuancity.ph</td>
                </tr>
                <tr class="ctus">
                  <td>CITY PLANNING & DEVELOPMENT DEPARTMENT </td>
                  <td class="pula">7728 9946/ FAX 7750 1485</td>
                  <td>sjcpdo2013@yahoo.com.ph</td>
                </tr>
                <tr class="ctus">
                  <td>INFORMATION & COMMUNICATIONS TECHNOLOGY OFFICE</td>
                  <td class="pula">7625 5841</td>
                  <td>ictosanjuan@gmail.com</td>
                </tr>
                <tr class="sjcat">
                  <td>2nd Floor</td>
                  <td class="pula"></td>
                  <td></td>
                </tr>
                <tr class="ctus">
                  <td>OFFICE OF THE CITY VICE  MAYOR</td>
                  <td class="pula">7625 5848</td>
                  <td>vmwarrenvilla@gmail.com</td>
                </tr>
                <tr class="ctus">
                  <td>BARANGAY OPERATION CENTER</td>
                  <td class="pula">7728 9937</td>
                  <td>bocsanjuancity@gmail.com</td>
                </tr>
                <tr class="ctus">
                  <td>LIGA NG MGA BARANGAY</td>
                  <td class="pula">7750 1539</td>
                  <td>lnb.sanjuancitychapter@gmail.com</td>
                </tr>
                <tr class="ctus">
                  <td>CITY HEALTH OFFICE (COVID-19)</td>
                  <td class="pula">7949 8358 / 8655 8683</td>
                  <td>cho@sanjuancity.ph</td>
                </tr>
                <tr class="ctus">
                  <td>CITY LEGAL DEPARTMENT</td>
                  <td class="pula">7728 9807 / 8656 3258</td>
                  <td>citylegal.sanjuancity@yahoo.com</td>
                </tr>
                <tr class="ctus">
                  <td>COMMISSION OF AUDIT</td>
                  <td class="pula">7750 1602/7625 5846/8477 3545</td>
                  <td></td>
                </tr>
                <tr class="ctus">
                  <td>CITY SOCIAL WELFARE & DEVELOPMENT DEPARTMENT </td>
                  <td class="pula">7729 0120 / 0956 429 7998</td>
                  <td>sjccswdo2017@gmail.com/cswdd@sanjuancity.gov.ph</td>
                </tr>
                <tr class="ctus">
                  <td>DEPARTMENT OF THE INTERIOR & LOCAL GOVERNMENT </td>
                  <td class="pula">7750 5422</td>
                  <td>sanjuan.dilg@gmail.com</td>
                </tr>
                <tr class="ctus">
                  <td>METROPOLITAN MANILA DEVELOPMENT AUTHORITY</td>
                  <td class="pula">7750 1618</td>
                  <td></td>
                </tr>
                <tr class="ctus">
                  <td>PAROLE AND PROBATION</td>
                  <td class="pula">7728 9708</td>
                  <td>sanjuanppo@gmail.com</td>
                </tr>
                <tr class="ctus">
                  <td>PUBLIC EMPLOYMENT SERVICES OFFICE</td>
                  <td class="pula">7728 9746</td>
                  <td>pesosanjuan20@gmail.com</td>
                </tr>
                <tr class="ctus">
                  <td>SANGGUNIANG PANLUNGSOD</td>
                  <td class="pula">8655 8394/8477 0295</td>
                  <td>sanjuancitycouncil@gmail.com</td>
                </tr>
                <tr class="sjcat">
                  <td>Upperground Floor</td>
                  <td class="pula"></td>
                  <td></td>
                </tr>
                <tr class="ctus">
                  <td>CITY PUBLIC INFORMATION DEPARTMENT</td>
                  <td class="pula">7729 0005</td>
                  <td>publicinfo.sjc@gmail.com</td>
                </tr>
                <tr class="ctus">
                  <td>BUSINESS PERMIT & LICENSE OFFICE </td>
                  <td class="pula">8655 9697</td>
                  <td>bplo_csj@yahoo.com / bplo@sanjuancity.gov.ph</td>
                </tr>
                <tr class="ctus">
                  <td>CITY ASSESSOR'S OFFICE</td>
                  <td class="pula">8477 4572</td>
                  <td>sanjuancityassessor@gmail.com</td>
                </tr>
                <tr class="ctus">
                  <td>CITY BUILDING OFFICIAL</td>
                  <td class="pula">8654 0747/7750 1537</td>
                  <td>sanjuan_buildingofficial@yahoo.com</td>
                </tr>
                <tr class="ctus">
                  <td>CITY CIVIL REGISTRY DEPARTMENT</td>
                  <td class="pula">7625 5842</td>
                  <td>jalviormagno@yahoo.com / Facebook: San Juan City Civil Registry Dept.</td>
                </tr>
                <tr class="ctus">
                  <td>CITY HEALTH & NUTRITION OFFICE</td>
                  <td class="pula">7625 5845</td>
                  <td>healthoffice.sjc@gmail.com</td>
                </tr>
                <tr class="ctus">
                  <td>CITY INVESTMENT PROMOTION CENTER</td>
                  <td class="pula">8255 3736</td>
                  <td>ken.lsgh@yahoo.com</td>
                </tr>
                <tr class="ctus">
                  <td>CITY POPULATION DEVELOPMENT OFFICE </td>
                  <td class="pula">8470 9921/7750 1680</td>
                  <td>popdevsanjuan@gmail.com</td>
                </tr>
                <tr class="ctus">
                  <td>CITY SPORTS OFFICE</td>
                  <td class="pula">7750 1407</td>
                  <td>sportofficesanjuan@yahoo.com</td>
                </tr>
                <tr class="ctus">
                  <td>CITY TOURISM & CULTURAL AFFAIRS OFFICE</td>
                  <td class="pula">7728 9818</td>
                  <td>ctcaosj@gmail.com</td>
                </tr>
                <tr class="ctus">
                  <td>CITY TREASURY DEPARTMENT</td>
                  <td class="pula">ADMIN:7576 4477 CASH:8655 8509<br>REAL PROPERY TAX:8655 8050<br>LICENSE:7728 9835 </td>
                  <td>sjc_treasurydept@yahoo.com</td>
                </tr>
                <tr class="ctus">
                  <td>COOPERATIVE DEVELOPMENT OFFICE </td>
                  <td class="pula">7728 7906</td>
                  <td>sjcoopdevtofc@gmail.com</td>
                </tr>
                <tr class="ctus">
                  <td>OFFICE OF THE SENIOR CITIZEN AFFAIRS </td>
                  <td class="pula">7625 5843</td>
                  <td>oscasanjuancity@gmail.com</td>
                </tr>
                <tr class="ctus">
                  <td>ORDINANCE VIOLATION CITATION TICKET</td>
                  <td class="pula">7750 1697</td>
                  <td>vantopacio@gmail.com</td>
                </tr>
                <tr class="ctus">
                  <td>PERSON WITH DISABILITY AFFAIRS OFFICE</td>
                  <td class="pula">7621 1508</td>
                  <td>jewelpage03@yahoo.com</td>
                </tr>
                <tr class="ctus">
                  <td>PUBLIC ASSISTANCE CENTER</td>
                  <td class="pula">7750 1697</td>
                  <td>vantopacio@gmail.com</td>
                </tr>
                <tr class="ctus">
                  <td>URBAN POOR AFFAIRS OFFICE</td>
                  <td class="pula">8477 9043/7754 8006</td>
                  <td>upao.sanjuancity@gmail.com</td>
                </tr>
                <tr class="sjcat">
                  <td>Lowerground Floor</td>
                  <td class="pula"></td>
                  <td></td>
                </tr>
                <tr class="ctus">
                  <td>CITY DISASTER RISK REDUCTION & MANAGEMENT OFFICE </td>
                  <td class="pula">7238 4333</td>
                  <td>sjcdrrmo2011@gmail.com / cdrrmo.sanjuan@gmail.com</td>
                </tr>
                <tr class="ctus">
                  <td>CITY ENGINEERING DEPARTMENT</td>
                  <td class="pula">8997 8182/7728 9917</td>
                  <td>sanjuanengineering@gmail.com</td>
                </tr>
                <tr class="ctus">
                  <td>CITY ENVIRONMENT AND NATURAL RESOURCES</td>
                  <td class="pula">0917 387 0508 / 0961 078 8935</td>
                  <td>cenrosanjuancity@gmail.com</td>
                </tr>
                <tr class="ctus">
                  <td>CITY LIBRARY</td>
                  <td class="pula">7744 2695</td>
                  <td></td>
                </tr>
                <tr class="ctus">
                  <td>GENERAL SERVICES DEPARTMENT </td>
                  <td class="pula">8477 4010/7728 7426</td>
                  <td>arevalorizalina@yahoo.com</td>
                </tr>
                <tr class="ctus">
                  <td>OFFICE OF VETERINARY SERVICES </td>
                  <td class="pula">77289780</td>
                  <td>veterinaryoffice27@gmail.com</td>
                </tr>
                <tr class="ctus">
                  <td>PUBLIC ORDER & SAFETY OFFICE </td>
                  <td class="pula">8477 5887</td>
                  <td>tpmopososanjuan@gmail.com</td>
                </tr>
                <tr class="ctus">
                  <td>TASK FORCE DISIPLINA</td>
                  <td class="pula">8477 5887</td>
                  <td>tfdsanjuancity@gmail.com</td>
                </tr>
                <tr class="ctus">
                  <td>TRAFFIC PARKING & MANAGEMENT OFFICE </td>
                  <td class="pula">8655 8364/7625 5844</td>
                  <td>tpmopososanjuan@gmail.com</td>
                </tr>
                <tr class="ctus">
                  <td>TRICYCLE REGULATORY BOARD</td>
                  <td class="pula">8477 5887</td>
                  <td></td>
                </tr>

                <tr class="ctus">
                  <td class="sjcat">Outside</td>
                  <td class="pula"></td>
                  <td></td>
                </tr>
                <tr class="ctus">
                  <td>CITY HEALTH DEPARTMENT I</td>
                  <td class="pula">7625 5845</td>
                  <td>healthoffice.sjc@gmail.com / cho@sanjuancity.ph</td>
                </tr>
                <tr class="ctus">
                  <td>CITY HEALTH DEPARTMENT II</td>
                  <td class="pula">7728 9715</td>
                  <td>cho@sanjuancity.ph</td>
                </tr>
                <tr class="ctus">
                  <td>ONSE HEALTH CENTER</td>
                  <td class="pula">7750 9034</td>
                  <td></td>
                </tr>
                <tr class="ctus">
                  <td>MARKET ADMINISTRATION</td>
                  <td class="pula">7508 9562</td>
                  <td>sjagoramarket@yahoo.com</td>
                </tr>
                <tr class="ctus">
                  <td>SAN JUAN CEMETERY</td>
                  <td class="pula">8556 6117</td>
                  <td></td>
                </tr>
                <tr class="ctus">
                  <td>SAN JUAN MEDICAL CENTER </td>
                  <td class="pula">8725 9764/ 8724 3266/8725 9247/ 8725 9804/8725 9804/8725 9412</td>
                  <td></td>
                </tr>
                <tr class="ctus">
                  <td>SKILLS & LIVELIHOOD TRAINING CENTER</td>
                  <td class="pula">8693 9464</td>
                  <td>sltcsanjuan@gmail.com</td>
                </tr>
                <tr class="ctus">
                  <td>POLYTECHNIC UNIVERSITY OF THE PHILIPPINES </td>
                  <td class="pula">7246 322/497 4460/632 7738/738 5071</td>
                  <td></td>
                </tr>
                <tr class="ctus">
                  <td>SCHOOLS DIVISION OFFICE </td>
                  <td class="pula">8451-26994512383 / 4512699/9387269 / 6617899</td>
                  <td></td>
                </tr>
                <tr class="sjcat">
                  <td>National Offices</td>
                  <td class="pula"></td>
                  <td></td>
                </tr>
                <tr class="ctus">
                  <td>PHILIPPINE NATIONAL POLICE</td>
                  <td class="pula">8724 2515/8724 3744/ 8298 7603/8724 8854</td>
                  <td>opas.sanjuancps@gmail.com</td>
                </tr>
                <tr class="ctus">
                  <td>POST OFFICE GREENHILLS</td>
                  <td class="pula">8727 5881</td>
                  <td></td>
                </tr>
                <tr class="ctus">
                  <td>BUREAU OF FIRE PROTECTION</td>
                  <td class="pula">8725 2079 / 8725 8044</td>
                  <td>sanjuanfire@yahoo.com</td>
                </tr>
                <tr class="ctus">
                  <td>BUREAU OF JAIL MANAGEMENT AND PENOLOGY (MALE)</td>
                  <td class="pula">8534 1828</td>
                  <td></td>
                </tr>
                <tr class="ctus">
                  <td>BUREAU OF JAIL MANAGEMENT AND PENOLOGY (FEMALE)</td>
                  <td class="pula">8705 1764</td>
                  <td>sanjuancityjailfemale@gmail.com</td>
                </tr>
                <tr class="ctus">
                  <td>MUSEO EL DEPOSITO</td>
                  <td class="pula">7753 5439 / 0998 247 0042</td>
                  <td></td>
                </tr>
                <tr class="ctus">
                  <td>COMELEC</td>
                  <td class="pula">8693 7504</td>
                  <td></td>
                </tr>
                <tr class="ctus">
                  <td>LANDBANK SAN JUAN BRANCH</td>
                  <td class="pula">7799-5003 / 8726-0227 / 0917-551-5001 / 0929-672-25-08</td>
                  <td>rdo_42@bir.gov.ph</td>
                </tr>
                <tr class="ctus">
                  <td>BIR SAN JUAN </td>
                  <td class="pula">8723-8183</td>
                  <td></td>
                </tr>
                <tr class="ctus">
                  <td>OFFICE OF THE CLERK OF COURT</td>
                  <td class="pula">7750-5132</td>
                  <td></td>
                </tr>
                <tr class="ctus">
                  <td>MTC 57</td>
                  <td class="pula">7750-6127</td>
                  <td></td>
                </tr>
                <tr class="ctus">
                  <td>MTC 58</td>
                  <td class="pula">7750-5169</td>
                  <td></td>
                </tr>
                <tr class="ctus">
                  <td>Public Attorney's Office</td>
                  <td class="pula">8654-6386</td>
                  <td></td>
                </tr>
                <tr class="ctus">
                  <td>Prosecutor's Office - DOJ San Juan</td>
                  <td class="pula">8693-2117</td>
                  <td></td>
                </tr>
                <tr class="ctus">
                  <td>RTC 68</td>
                  <td class="pula">7949-7586</td>
                  <td></td>
                </tr>
                <tr class="ctus">
                  <td>RTC 160</td>
                  <td class="pula">7949-7588</td>
                  <td></td>
                </tr>
                <tr class="ctus">
                  <td>RTC 162</td>
                  <td class="pula">0949-992-3070 / 7949-7559</td>
                  <td></td>
                </tr>
                <tr class="ctus">
                  <td>RTC 264</td>
                  <td class="pula">7949-7587</td>
                  <td></td>
                </tr>
                <tr class="ctus">
                  <td>SSS San Juan</td>
                  <td class="pula">8721-5195 / FAX 8721-8686</td>
                  <td></td>
                </tr>
                <tr class="ctus">
                  <td>Filoil Flying V Centre</td>
                  <td class="pula">8477 7644/8654 0772</td>
                  <td></td>
                </tr>

              </tbody>
            </table>
          </div>
        </div>

        <div class="container" id="brgyconus">
          <div class="contactform mt-5">
            <h1 class="brgyd" style="text-align:center; color:#1b2560; font-weight:600;cursor:pointer;">BARANGAY DIRECTORY</h1>
            <table id="brgydirect"class="table table-hover"style="display:none; transition: .3s;">
              <thead>
                <tr id="sjchbrgy">
                  <th>BARANGAY</th>
                  <th>CONTACT NUMBER</th>
                  <th>EMAIL</th>
                </tr>
              </thead>
              <tbody>
                <tr class="ctus">
                  <td>ADDITION HILLS</td>
                  <td class="pula">8352 0211</td>
                  <td>additionhills@yahoo.com.ph</td>
                </tr>
                <tr class="ctus">
                  <td>BALONG BATO</td>
                  <td class="pula">8723 9561</td>
                  <td>balongbatosanjuan@gmail.com</td>
                </tr>
                <tr class="ctus">
                  <td>BATIS</td>
                  <td class="pula">7744 0737</td>
                  <td>batis.sanjuan@gmail.com</td>
                </tr>
                <tr class="ctus">
                  <td>CORAZON DE JESUS</td>
                  <td class="pula">8393 5398 / 8254 9102</td>
                  <td>brgycdj@gmail.com</td>
                </tr>
                <tr class="ctus">
                  <td>ERMITANO</td>
                  <td class="pula">7919 4885</td>
                  <td>ermitano.sanjuan@gmail.com</td>
                </tr>
                <tr class="ctus">
                  <td>GREENHILLS</td>
                  <td class="pula">8724 5163</td>
                  <td>greenhills.sanjuan@gmail.com</td>
                </tr>
                <tr class="ctus">
                  <td>ISABELITA</td>
                  <td class="pula">8722 6948</td>
                  <td>brgy.isabelita@gmail.com</td>
                </tr>
                <tr class="ctus">
                  <td>KABAYANAN</td>
                  <td class="pula">8726 4952</td>
                  <td>brgy.kabayanan@gmail.com</td>
                </tr>
                <tr class="ctus">
                  <td>LITTLE BAGUIO</td>
                  <td class="pula">8725 4484</td>
                  <td>littlebaguiosanjuan@gmail.com</td>
                </tr>
                <tr class="ctus">
                  <td>MAYTUNAS</td>
                  <td class="pula">8722 7848</td>
                  <td>maytunassanjuan@gmail.com</td>
                </tr>
                <tr class="ctus">
                  <td>ONSE</td>
                  <td class="pula">7744 0740</td>
                  <td>onse.sanjuan@gmail.com</td>
                </tr>
                <tr class="ctus">
                  <td>PASADENA</td>
                  <td class="pula">7745 3451</td>
                  <td>barangaypasadena2018@gmail.com / website: barangaypasadena.com</td>
                </tr>
                <tr class="ctus">
                  <td>PEDRO CRUZ</td>
                  <td class="pula">8288 6467</td>
                  <td>brgypedrocruz.sanjuancity@yahoo.com</td>
                </tr>
                <tr class="ctus">
                  <td>PROGRESO</td>
                  <td class="pula">8727 5635</td>
                  <td>barangayprogreso@yahoo.com</td>
                </tr>
                <tr class="ctus">
                  <td>RIVERA</td>
                  <td class="pula">8942 2543</td>
                  <td>rivera.sanjuan15@gmail.com</td>
                </tr>
                <tr class="ctus">
                  <td>SALAPAN</td>
                  <td class="pula">8251 3116</td>
                  <td>franciabarbon@gmail.com</td>
                </tr>
                <tr class="ctus">
                  <td>SAN PERFECTO</td>
                  <td class="pula">8633 3596</td>
                  <td>sanperfecto.barangay@gmail.com</td>
                </tr>
                <tr class="ctus">
                  <td>STA LUCIA</td>
                  <td class="pula">7726 5385</td>
                  <td>sta.lucia.sanjuan@gmail.com</td>
                </tr>
                <tr class="ctus">
                  <td>ST. JOSEPH</td>
                  <td class="pula">7968 2186</td>
                  <td></td>
                </tr>
                <tr class="ctus">
                  <td>TIBAGAN</td>
                  <td class="pula">8723 9837</td>
                  <td>tibaganbarangaycouncil@gmail.com</td>
                </tr>
                <tr class="ctus">
                  <td>WEST CRAME</td>
                  <td class="pula">8635 0169</td>
                  <td>westcramebrgy@gmail.com</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="container" id="konsiconus">
          <div class="contactform mt-5">
            <h1 class="konsi" style="text-align:center; color:#1b2560; font-weight:600;cursor:pointer;">COUNCILOR'S OFFICE</h1>
            <table id="konsehal"class="table table-hover"style="display:none; transition: .3s;">
              <thead>
                <tr id="konsilaman">
                  <th>COUNCILOR</th>
                  <th>CONTACT NUMBER</th>
                </tr>
              </thead>
              <tbody>
                <tr class="sjcat">
                  <td>Distict I</td>
                  <td class="pula"></td>

                </tr>
                <tr class="ctus">
                  <td>COUN. VINCENT RAINIER M. PACHECO</td>
                  <td class="pula">7625-5768</td>

                </tr>
                <tr class="ctus">
                  <td>COUN. PAUL ANTHONY D. ARTADI </td>
                  <td class="pula">7625-5767</td>
                </tr>
                <tr class="ctus">
                  <td>COUN. MA. ANTONIA RAISSA DAWN H. LAUREL</td>
                  <td class="pula">7625-5771</td>

                </tr>
                <tr class="ctus">
                  <td>COUN. VICTOR JOSE L. REYES</td>
                  <td class="pula">7625-5762</td>

                </tr>
                <tr class="ctus">
                  <td>COUN. FRANCHESCO PAUL R. VELASCO </td>
                  <td class="pula">7625-5769</td>

                </tr>
                <tr class="ctus">
                  <td>COUN. ARTHUR ALFRED E. AQUINO</td>
                  <td class="pula">7625-5760</td>

                </tr>
                <tr class="sjcat">
                  <td>Distict II</td>
                  <td class="pula"></td>
                  <td></td>
                </tr>
                <tr class="ctus">
                  <td>COUN. JANNAH A .EJERCITO</td>
                  <td class="pula">7625-5763</td>

                </tr>
                <tr class="ctus">
                  <td>COUN. BEA CELINE D. DE GUZMAN </td>
                  <td class="pula">7625-5770</td>

                </tr>
                <tr class="ctus">
                  <td>COUN. ROLANDO M. BERNARDO</td>
                  <td class="pula">7625-5764</td>

                </tr>
                <tr class="ctus">
                  <td>COUN. MICHAEL CHRISTOPHER R. MATHAY </td>
                  <td class="pula">7625-5769</td>

                </tr>
                <tr class="ctus">
                  <td>COUN. MARY JOY A. IBUNA-LEOY</td>
                  <td class="pula">7625-5765</td>

                </tr>
                <tr class="ctus">
                  <td>COUN. FRANCIS KEITH R. PERALTA</td>
                  <td class="pula">7625-5761</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

      </section>
     </body>
        <br>
        <br>
        <br>
        <br>
        <br>
        <script>
        $(document).ready(function(){
          $(".sanj").click(function(){
           $("#dir").slideToggle( "slow" );

          })
          $(".brgyd").click(function(){
           $("#brgydirect").slideToggle( "slow" );

         })
         $(".konsi").click(function(){
          $("#konsehal").slideToggle( "slow" );

         })
      });
        </script> -->

@endsection
