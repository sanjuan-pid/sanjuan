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
        <br>
        <br>
        <h3 style="text-align: center; color: #1f1c4b; font-size: 60px; font-weight: 700;">AGENDA</h3>
        <div class="container"  >
          <div class="row">
            <div class="col mt-5">
              <div class="tab" style="height: 512px; overflow-y: scroll;">
                  <button class="tablinks" onclick="openCity(event, 'two')" id="defaultOpen"><img src="{{asset('assets/Icon/hospital-buildings.svg')}}" style="width:20%;display: block; margin-left: auto; margin-right: auto;"/></button>
                  <button class="tablinks" onclick="openCity(event, 'three')"><img src="{{asset('assets/Icon/school.svg')}}"style="width:20%;display: block; margin-left: auto; margin-right: auto;"/></button>
                  <button class="tablinks" onclick="openCity(event, 'four')"><img src="{{asset('assets/Icon/statistics.svg')}}"style="width:20%;display: block; margin-left: auto; margin-right: auto;"/></button>
                  <button class="tablinks" onclick="openCity(event, 'six')"><img src="{{asset('assets/Icon/wifi.svg')}}"style="width:20%;display: block; margin-left: auto; margin-right: auto;"/></button>
                  <button class="tablinks" onclick="openCity(event, 'eight')"><img src="{{asset('assets/Icon/seeding.svg')}}"style="width:20%;display: block; margin-left: auto; margin-right: auto;"/></button>
                  <button class="tablinks" onclick="openCity(event, 'nine')"><img src="{{asset('assets/Icon/fam.svg')}}"style="width:20%;display: block; margin-left: auto; margin-right: auto;"/></button>
                  <button class="tablinks" onclick="openCity(event, 'ten')"><img src="{{asset('assets/Icon/businessmen.svg')}}"style="width:20%;display: block; margin-left: auto; margin-right: auto;"/></button>

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
               <div id="six" class="tabcontent">
                <br>
                <br>
                <img src="{{asset('assets/Agenda/6.png')}}"style="width:50%;display: block; margin-left: auto; margin-right: auto;"/>
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
            </div>
           </div>
        </div>
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
