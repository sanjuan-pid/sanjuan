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
*{
  margin: 0;
  padding: 0;
  font-family:'Poppins', sans-serif;
}
section{
  position: relative;
  justify-content: center;
  align-items: center;
  min-height: 100vh;

}
section::before{
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 50%;
  height: 100%;

}
section .container{
  width: 80%;
  position: relative;
  min-width: 1100px;
  min-height: 550px;
  display: flex;
  z-index: 1;
}
section .container .contactinfo{
  position: absolute;
  top: 40px;
  width: 350px;
  height: calc(100% - 80px);
  background: #3d92e6;
  z-index: 1;
  padding: 40px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  border-style: solid;
  border-color: white;
  box-shadow: 0 20px 20px rgba(0, 0, 0, 0.2);
  border-radius: 5px;
}
section .container .contactinfo h2{
  color:white !important;
  font-size: 30px;
  font-weight: 600;
  text-align: center;
}
section .container .contactinfo .info{
  position: relative;
  margin: 20px 0;
  padding:0;
}
section .container .contactinfo .info li{
  position: relative;
  list-style: none;
  display: flex;
  margin: 50px 0;
  cursor: pointer;
  align-items: flex-start;
}
section .container .contactinfo .info li span:nth-child(1){
  width: 30px;
  min-width: 30px;
}
section .container .contactinfo .info li span:nth-child(1) img{
  max-width: 100%;
  filter: invert(1);
}
section .container .contactinfo .info li span:nth-child(2){
  color:white !important;
  margin-left: 10px;
  font-weight: 600;
  font-size: 17px;

}
section .container .contactinfo .info li:hover span:nth-child(1) img,
section .container .contactinfo .info li:hover span:nth-child(2){
  opacity: 1;
}
section .container .contactinfo .sci{
  position: relative;
  display: flex;
}
section .container .contactinfo .sci li{
  list-style: none;
  margin-right: 15px;
}
section .container .contactinfo .sci li a{
  text-decoration: none;
}
section .container .contactinfo .sci li a img{
  filter: invert(1);
  opacity: 0.5;
}
section .container .contactinfo .sci li:hover a img{

  opacity: 1;
}

section .container .contactform{
  position: absolute;
  padding: 30px 50px;
  background: #fff;
  margin-left: 150px;
  padding-left: 250px;
  width: calc(100% - 150px);
  height: 100%;
  border-style: solid;
  border-color: blue;
  box-shadow: 0 50px 50px rgba(0, 0, 0, 0.2);
  border-radius: 5px;
}
section .container .contactform h2{
  color: #0f3959 !important;
  font-size: 24px;
  font-weight: 500;
}
section .container .contactform .formbox{
  position: relative;
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  padding-top: 5px;
}
section .container .contactform .formbox .inputbox{
  position: relative;
  margin: 0 0 35px 0;
}
section .container .contactform .formbox .inputbox.w50{
  width: 47% !important;
}
section .container .contactform .formbox .inputbox.w100{
  width: 100% !important;
}
section .container .contactform .formbox .inputbox input{
  width: 100%;
  padding: 20px 0;
  font-size: 18px;
  font-weight: 300;
  color: #333 !important;
  border: none;
  border-bottom: 1px solid #777 !important;
  outline: none;
}
section .container .contactform .formbox .inputbox input,
section .container .contactform .formbox .inputbox textarea{
  width: 100% ;
  padding: 5px 0;
  font-size: 18px;
  font-weight: 300;
  color: #333 !important;
  border: none;
  border-bottom: 1px solid #777 !important;
  outline: none;
  resize: none;
}
section .container .contactform .formbox .inputbox textarea{
  min-height: 120px;
}
.ql-snow .ql-tooltip.ql-editing input[type=text] {
    display: inline-block;
    width: 66% !important;
}
section .container .contactform .formbox .inputbox span{
  position: absolute;
  left: 0;
  padding: 5px 0;
  font-size: 18px;
  font-weight: 300;
  color: #333 !important;
  transition: 0.3;
  pointer-events: none;
}
section .container .contactform .formbox .inputbox input:focus ~ span,
section .container .contactform .formbox .inputbox textarea:focus ~ span,
section .container .contactform .formbox .inputbox input:valid ~ span,
section .container .contactform .formbox .inputbox textarea:valid ~ span{
  transform: translateY(-20px);
  font-size: 12px;
  font-weight: 400;
  letter-spacing: 1px;
  color: #ff568c !important;
}
section .container .contactform .formbox .inputbox input[type='submit']{
position: relative;
cursor: pointer;
background: #0f3959 !important;
color: #fff !important;
border: none;
max-width: 150px;
padding: 12px;
border-radius: 5px;
}
section .container .contactform .formbox .inputbox input[type='submit']:hover{
  background: red !important;


}
@media screen and (max-width: 766px) and (min-width: 200px) {
section .container .contactinfo {
    position: relative;
    top: 0;
    width: 350px;
    height: auto;
    background: #3d92e6;
    z-index: 1;
    padding: 40px;
    display: block;
    flex-direction: column;
    justify-content: space-between;
    border-style: solid;
    border-color: white;
    box-shadow: 0 20px 20px rgb(0 0 0 / 20%);
    border-radius: 5px;
}
  section .container {
    position: relative;
    min-width: auto;
    min-height: auto;
    display: block;
    z-index: 1;
}
  section .container .contactform {
    position: relative;
    padding: 10px !important;
    background: #fff;
    margin-left: 0;
    padding-left: 0;
    width: 100%;
    height: 100%;
    border-style: solid;
    border-color: blue;
    box-shadow: 0 50px 50px rgb(0 0 0 / 20%);
    border-radius: 5px;
	}
  section .container .contactinfo{
    width:100% !important;
  }
    div#submit_btn {
      margin-top: 8% !important;
      text-align: center;
      position: relative;
      display: block;
  }
  ul.info {
      padding: 0;
  }
}
@media screen and (max-width: 766px) and (min-width: 200px) {
  .conus_sj {
    max-width: 100% !important;
    width:100% !important;
    flex: 0 0 100%;
  }

  .responsive-map-container {
    position: relative;
    padding-bottom: 56.25%;
    padding-top: 30px;
    height: 0;
    overflow: hidden;
}

.responsive-map-container iframe,
.responsive-map-container object,
.responsive-map-container embed {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

}
</style>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

      <section>
        <div class="container">
          <div class="row">
            <div class="col-sm contactinfo mt-5">
              <div>
                <h2>Contact Info</h2>
                <ul class="info">
                  <li>
                    <span><img src="{{asset('assets/location.png')}}" style="width:100%;"></span>
                      <span>Pinaglabanan Street, cor Dr.P. A. Narciso, Street, San Juan, Metro Manila</span>
                  </li>
                  <li>
                    <span><img src="{{asset('assets/email.png')}}"></span>
                    <span>publicinfo@sanjuancity.gov.ph</span>
                  </li>
                  <li>
                    <span><img src="{{asset('assets/phone.png')}}"></span>
                    <span>137-135</span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-sm contactform mt-5">
              <h2>Send a Message</h2>
              @if (count($errors) > 0)
                <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
                </ul>
                </div>
              @endif
              @if ($message = Session::get('Success'))
              <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                      <strong>{{ $message }}</strong>
              </div>
              @endif
              <form method="post" action="{{url('contactus_page/send')}}">
                {{ csrf_field() }}
                <div class="formbox">
                  <div class="inputbox w50">
                    <input type="text" name="firstname" required>
                    <span>First Name</span>
                  </div>
                  <div class="inputbox w50">
                    <input type="text" name="lastname" required>
                    <span>Last Name</span>
                  </div>
                  <div class="inputbox w50">
                    <input type="text" name="email" required>
                    <span>Email Address</span>
                  </div>
                  <div class="inputbox w50">
                    <input type="text" name="contact" maxlength="11" required>
                    <span>Contact Number</span>
                    <p id="error" style="color:red !important;">Invalid Contact Number !</p>
                  </div>
                  <div class="inputbox w100" style="height: 200px;">
                      <div id="toolbar">
                        <button class="ql-bold">Bold</button>
                        <button class="ql-italic">Italic</button>
                        <button class="ql-underline"></button>
                        <button class="ql-list"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="7" x2="15" y1="4" y2="4"></line> <line class="ql-stroke" x1="7" x2="15" y1="9" y2="9"></line> <line class="ql-stroke" x1="7" x2="15" y1="14" y2="14"></line> <line class="ql-stroke ql-thin" x1="2.5" x2="4.5" y1="5.5" y2="5.5"></line> <path class="ql-fill" d="M3.5,6A0.5,0.5,0,0,1,3,5.5V3.085l-0.276.138A0.5,0.5,0,0,1,2.053,3c-0.124-.247-0.023-0.324.224-0.447l1-.5A0.5,0.5,0,0,1,4,2.5v3A0.5,0.5,0,0,1,3.5,6Z"></path> <path class="ql-stroke ql-thin" d="M4.5,10.5h-2c0-.234,1.85-1.076,1.85-2.234A0.959,0.959,0,0,0,2.5,8.156"></path> <path class="ql-stroke ql-thin" d="M2.5,14.846a0.959,0.959,0,0,0,1.85-.109A0.7,0.7,0,0,0,3.75,14a0.688,0.688,0,0,0,.6-0.736,0.959,0.959,0,0,0-1.85-.109"></path> </svg></button>

                      </div>
                      <div id="editor" style="z-index: 99;">
                        </div>
                        <textarea  rows="10" id="description" hidden name ="message" class="form-control"></textarea>
                  </div>
                  <br>
                  <div class="inputbox w100" id="submit_btn" style="margin-top:2%;">
                    <input type="submit" value="Submit">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="responsive-map-container d-flex justify-content-center">
              <iframe src="https://maps.google.com/maps?q=san%20juan%20city%20hall&t=&z=13&ie=UTF8&iwloc=&output=embed" width="1000" height="500" frameborder="0" style="border:0"></iframe>
        </div>
      </section>
        <br>
        <br>
        <!-- Include Quill stylesheet -->
        <link href="https://cdn.quilljs.com/1.0.0/quill.snow.css" rel="stylesheet">
        <script src="https://cdn.quilljs.com/1.0.0/quill.js"></script>

        <!-- Initialize Quill editor -->
        <script>
          var editor = new Quill('#editor', {
            modules: { toolbar: '#toolbar' },
            theme: 'snow'
          });
          $(document).ready(function(){
            $("#error").hide();
            $("#editor").keyup(function(){
                var test= $(".ql-editor").html();
                $("#description").val(test)

            })
            $(".ql-toolbar.ql-snow").click(function(){
                var test= $(".ql-editor").html();
                $("#description").val(test)

            })
            $('input[name="contact"]').keyup(function(e)
              {

              if (/\D/g.test(this.value))
              {
                // Filter non-digits from input value.
                this.value = this.value.replace(/\D/g, '');
              }
            });
            $('input[name="contact"]').blur(function(e)
              {
              var contact = $('input[name="contact"]').val().length;

              if (contact < 11) {
                $("#error").show();
              }
              else{
                $("#error").hide();
              }

            });

          });
        </script>
        <!-- Include the Quill library -->
@endsection
