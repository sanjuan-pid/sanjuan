<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 30%;
  height: 512px;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 70%;
  border-left: none;
  height: 512px;
}
</style>

        <div class="container" id="agenda_row" >

          <br>
          <div class="row">
            <h1 style="text-align: center; :font-size: 60px; font-weight: 700;">AGENDA</h1>
            <div class="col">
                <div class="tab" style="height: 512px; overflow-y: scroll;">
                  <button class="tablinks" onclick="openCity(event, 'one')" id="defaultOpen"><img src="{{asset('assets/Icon/home.svg')}}" style="width:20%;display: block; margin-left: auto; margin-right: auto;"/><p style="text-align: center; color : #1b2560 !important;">PABAHAY</p></button>
                  <button class="tablinks" onclick="openCity(event, 'two')" id="defaultOpen"><img src="{{asset('assets/Icon/hospital-buildings.svg')}}" style="width:20%;display: block; margin-left: auto; margin-right: auto;"/><p style="text-align: center; color : #1b2560 !important;">KALUSUGAN</p></button>
                  <button class="tablinks" onclick="openCity(event, 'three')"><img src="{{asset('assets/Icon/school.svg')}}"style="width:20%;display: block; margin-left: auto; margin-right: auto;"/><p style="text-align: center; color : #1b2560 !important;">EDUKASYON</p></button>
                  <button class="tablinks" onclick="openCity(event, 'four')"><img src="{{asset('assets/Icon/statistics.svg')}}"style="width:20%;display: block; margin-left: auto; margin-right: auto;"/><p style="text-align: center; color : #1b2560 !important;">KABUHAYAN</p></button>
                  <button class="tablinks" onclick="openCity(event, 'five')"><img src="{{asset('assets/Icon/building.svg')}}"style="width:20%;display: block; margin-left: auto; margin-right: auto;"/><p style="text-align: center; color : #1b2560 !important; ">IMPRASTRAKTURA</p></button>
                  <button class="tablinks" onclick="openCity(event, 'six')"><img src="{{asset('assets/Icon/wifi.svg')}}"style="width:20%;display: block; margin-left: auto; margin-right: auto;"/><p style="text-align: center; color : #1b2560 !important;">SMART CITY</p></button>
                  <button class="tablinks" onclick="openCity(event, 'seven')"><img src="{{asset('assets/Icon/alert.svg')}}"style="width:20%;display: block; margin-left: auto; margin-right: auto;"/><p style="text-align: center; color : #1b2560 !important;">PEACE AND ORDER, ANTI-DRUGS, & DISASTER RISK REDUCTION</p></button>
                  <button class="tablinks" onclick="openCity(event, 'eight')"><img src="{{asset('assets/Icon/seeding.svg')}}"style="width:20%;display: block; margin-left: auto; margin-right: auto;"/><p style="text-align: center; color : #1b2560 !important;">KALIKASAN</p></button>
                  <button class="tablinks" onclick="openCity(event, 'nine')"><img src="{{asset('assets/Icon/fam.svg')}}"style="width:20%;display: block; margin-left: auto; margin-right: auto;"/><p style="text-align: center; color : #1b2560 !important;">PAMILYA</p></button>
                  <button class="tablinks" onclick="openCity(event, 'ten')"><img src="{{asset('assets/Icon/businessmen.svg')}}"style="width:20%;display: block; margin-left: auto; margin-right: auto;"/><p style="text-align: center; color : #1b2560 !important;">TAPAT AT MALINIS NA PAMUMUNO NA NAKIKINIG SA BOSES NG MAMAMAYAN</p></button>
                </div>
                <div id="one" class="tabcontent">
                  <br>
                  <br>
                  <img src="{{asset('assets/Agenda/1.png')}}"style="width:50%;display: block; margin-left: auto; margin-right: auto;"/>
                </div>
                <div id="two" class="tabcontent">
                    <br>
                    <br>
                    <img src="{{asset('assets/Agenda/2.png')}}"style="width:50%;display: block; margin-left: auto; margin-right: auto;"/>
                </div>
                <div id="three" class="tabcontent">
                    <br>
                    <br>
                    <img src="{{asset('assets/Agenda/3.png')}}"style="width:50%;display: block; margin-left: auto; margin-right: auto;"/>
                </div>
                <div id="four" class="tabcontent">
                    <br>
                    <br>
                    <img src="{{asset('assets/Agenda/4.png')}}"style="width:50%;display: block; margin-left: auto; margin-right: auto;"/>
                </div>
                <div id="five" class="tabcontent">
                    <br>
                    <br>
                    <img src="{{asset('assets/Agenda/5.png')}}"style="width:50%;display: block; margin-left: auto; margin-right: auto;"/>
                </div>
                <div id="six" class="tabcontent">
                    <br>
                    <br>
                    <img src="{{asset('assets/Agenda/6.png')}}"style="width:50%;display: block; margin-left: auto; margin-right: auto;"/>
                </div>
                <div id="seven" class="tabcontent">
                    <br>
                    <br>
                    <img src="{{asset('assets/Agenda/7.png')}}"style="width:50%;display: block; margin-left: auto; margin-right: auto;"/>
                </div>
                <div id="eight" class="tabcontent">
                    <br>
                    <br>
                    <img src="{{asset('assets/Agenda/8.png')}}"style="width:50%;display: block; margin-left: auto; margin-right: auto;"/>
                </div>
                <div id="nine" class="tabcontent">
                    <br>
                    <br>
                    <img src="{{asset('assets/Agenda/9.png')}}"style="width:50%;display: block; margin-left: auto; margin-right: auto;"/>
                </div>
                <div id="ten" class="tabcontent">
                    <br>
                    <br>
                    <img src="{{asset('assets/Agenda/10.png')}}"style="width:50%;display: block; margin-left: auto; margin-right: auto;"/>
                </div>
                {{-- <img src="{{asset('assets/Agenda/10.png')}}"style="width:50%;display: block; margin-left: auto; margin-right: auto;"/> --}}
              </div>
           </div>
        </div>
        <br><br><br>
        <script>
            function openCity(evt, cityName) {
              var i, tabcontent, tablinks;
              tabcontent = document.getElementsByClassName("tabcontent");
              for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
              }
              tablinks = document.getElementsByClassName("tablinks");
              for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
              }
              document.getElementById(cityName).style.display = "block";
              evt.currentTarget.className += " active";
            }

            // Get the element with id="defaultOpen" and click on it
            document.getElementById("defaultOpen").click();
       </script>
