
<style>
  .certreco{
    box-shadow: 0 2px 5px 0 rgb(0 0 0 / 70%), 0 2px 10px 0 rgb(0 0 0 / 70%);
    padding: 0;
    background-color: #F9F9F3;
  }
  .cert label{
    font-weight: 700;
  }
  @media screen and (max-width: 766px) and (min-width: 200px){
    .cert{
      max-width: 100% !important;
      width: 100% !important;
      flex: 0 0 100%;
    }
    .cert .certimg{
      width: 100% !important;
    }
    .cert .blue{
      font-size: 20px !important;
    }
    .cert h1{
      font-size: 17px !important;
    }
  }
</style>
<div class="container cert mb-4" id="cert" style="padding-right: 0 !important; padding-left: 0 !important;">
  <div class="row">
    <div class="col-12 exebanner mt-2" style=" width: 100% !important; padding-right: 0 !important; padding-left: 0 !important;">
      <h1 style="position: absolute; top: 50%; left: 35%;transform: translate(-50%, -50%); color:white !important; font-size:50px; text-shadow: 1px 1px 2px black, 0 0 1em blue, 0 0 0.2em darkblue;">CERTIFICATE OF RECOVERY</h1>
      <img style=" width: 100%;" src="{{asset('assets/bandept2.png')}}" />
    </div>
  </div>
</div>

<div class="container cert mb-5" id="cert" style="width:85%;">
    <div class="row justify-content-center">
      <div class="certreco">
        <div class="row">
          <div class="col-12" style="padding:0;">
            <h2 class="card-title blue" style="color:#fff !important; padding: 0 !important; text-align: center; color: #1f1c4b;font-weight: 700; font-size:40px;">REQUEST FORM</h2>
          </div>

            <div class="col-12" style="padding-left: 20px; padding-right: 20px;">

                    @if(session()->has('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <!-- <div class="card-header">Certificate of Recovery Request Form</div> -->

                    <div class="card-body">
                        <form method="POST" action="{{action('HomeController@submit')}}" id="data_form" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <label>Enter the following information</label>

                            <div class="col-sm-4">
                                <label>First Name</label><span style="color: red">*</span>
                                <input type="text" class="form-control" id="first_name" name="first_name" required>
                            </div>
                            <div class="col-sm-3">
                                <label>Middle Name</label>
                                <input type="text" class="form-control" id="middle_name" name="middle_name">
                            </div>
                            <div class="col-sm-4">
                                <label>Last Name</label><span style="color: red">*</span><br>
                                <input type="text" class="form-control" id="last_name" name="last_name" required>
                            </div>
                            <div class="col-sm-1">
                                <label>Suffix</label><br>
                                <input type="text" class="form-control" id="suffix" name="suffix">
                            </div>
                            <div class="col-sm-1">
                               <label>Sex</label><span style="color: red">*</span>
                               <select class="form-control" id="sex" name="sex">
                                 <option value="">--Select--</option>
                                 <option value="Male">Male</option>
                                 <option value="Female">Female</option>
                               </select>
                            </div>
                            <div class="col-sm-2">
                               <label>Birthdate</label><span style="color: red">*</span>
                               <input type="date" class="form-control" id="datePickerId" id="bday" name="bday" required>
                            </div>
                            <div class="col-sm-1">
                                <label>Age</label><br>
                                <input type="text" class="form-control" id="age" name="age">
                            </div>
                            <div class="col-sm-4">
                                <label>House No. and Street No.</label><span style="color: red">*</span>
                                <input type="text" class="form-control" id="address" name="address" required>
                            </div>

                          <div class="col-sm-2">
                            <label>Barangay</label><span style="color: red">*</span>
                            <select name="barangay" id="barangay" class="form-control" required>
                              <option value="">--Select--</option>
                              <option value="BATIS">BATIS</option>
                              <option value="CORAZON DE JESUS">CORAZON DE JESUS</option>
                              <option value="ERMITAÑO">ERMITAÑO</option>
                              <option value="PASADENA">PASADENA</option>
                              <option value="PEDRO CRUZ">PEDRO CRUZ</option>
                              <option value="PROGRESO">PROGRESO</option>
                              <option value="RIVERA">RIVERA</option>
                              <option value="SALAPAN">SALAPAN</option>
                              <option value="SAN PERFECTO">SAN PERFECTO</option>
                              <option value="BALONG BATO">BALONG BATO</option>
                              <option value="ADDITION HILLS">ADDITION HILLS</option>
                              <option value="GREENHILLS">GREENHILLS</option>
                              <option value="ISABELITA">ISABELITA</option>
                              <option value="KABAYANAN">KABAYANAN</option>
                              <option value="LITTLE BAGUIO">LITTLE BAGUIO</option>
                              <option value="MAYTUNAS">MAYTUNAS</option>
                              <option value="ONSE">ONSE</option>
                              <option value="ST. JOSEPH">ST. JOSEPH</option>
                              <option value="STA. LUCIA">STA. LUCIA</option>
                              <option value="TIBAGAN">TIBAGAN</option>
                              <option value="WEST CRAME">WEST CRAME</option>
                            </select>
                          </div>
                          <div class="col-sm-2">
                              <label>City</label>
                              <input type="text" class="form-control" id="city" name="city" value="San Juan City" readonly>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-3">
                             <label>Date Swabbed</label><span style="color: red">*</span>
                             <input type="date" class="form-control" id="datePickerId" id="swab_date" name="swab_date" required>
                          </div>

                          <div class="col-sm-3">
                              <label>Quarantine Date Start</label><span style="color: red">*</span>
                              <input type="date" class="form-control qrt_date" id="date_start" name="date_start" required>
                          </div>
                          <div class="col-sm-3">
                              <label>Quarantine Date End</label><span style="color: red">*</span>
                              <input type="date" class="form-control qrt_date" id="date_end" name="date_end" required>
                          </div>
                          <div class="col-sm-3">
                              <label>Quarantine Duration</label>
                              <input type="text" class="form-control" id="qrtn_duration" name="qrtn_duration" value="0" readonly>
                          </div>

                          <div class="col-sm-12">
                             <label>Facility</label><span style="color: red">*</span>
                             <select class="form-control" id="facility" name="facility">
                               <option value="HOME">Home</option>
                               <option value="CARDINAL SANTOS MEDICAL CENTER">Cardinal Santos Medical Center</option>
                               <option value="KAAGAPAY">Kaagapay</option>
                               <option value="KALINGA">Kalinga</option>
                               <option value="SAN JUAN MEDICAL CENTER">San Juan Medical Center</option>
                               <option value="Others">Others</option>
                             </select>
                             <input type="text" class="form-control" style="display: none;" id="other_facility" name="other_facility">
                          </div>
                          <!-- <div class="col-sm-4">
                               <label>Fit to Work</label><span style="color: red">*</span>
                               <input type="text" class="form-control" id="fit_to_work" name="fit_to_work" required>
                          </div> -->

                          <div class="col-sm-4">
                             <label>Fit to Work</label><span style="color: red">*</span>
                             <select class="form-control" id="fit_to_work" name="fit_to_work">
                               <option value="YES">Yes</option>
                               <option value="NO">No</option>
                             </select>
                          </div>

                          <div class="col-sm-4">
                               <label>Contact Number</label><span style="color: red">*</span>
                               <input type="text" class="form-control" id="contact" name="contact" required>
                           </div>
                           <div class="col-sm-4">
                               <label>E-mail Address</label><span style="color: red">*</span>
                               <input type="email" class="form-control" id="email" name="email" required>
                           </div>

                           <label>Attach photocopy image of the following:</label>
                            <br>
                            <div class="col-sm-6">
                                <label>Swab Result (required)</label><span style="color: red">*</span>
                                <input type="file" class="form-control" id="swab_result" name="swab_result" required>
                            </div>
                            <div class="col-sm-6">
                                <label>Monitoring Sheet (optional)</label>
                                <input type="file" class="form-control" id="monitoring_sheet" name="monitoring_sheet">
                            </div>
                            <br>
                            <div style="text-align: center;">
                                <img class="certimg"style="width:12%;" src="{{asset('assets/cert.png')}}" alt="Card image cap"><br>
                                <button type="submit" class="btn btn-primary" style="font-weight:800; font-size:20px; border-radius:10px;">Submit</button>
                            </div>

                      </div>

                    </div>



                  </form>


              </div>

        </div>

      </div>

      </div>

    </div>
</div>

<script type="application/javascript">
window.setTimeout(function () {
   $(".alert").fadeTo(500, 0).slideUp(500, function () {
       $(this).remove();
   });
}, 3000);

$('.qrt_date').on('change', function(){
    var a = $('#date_start').val();
    var b = $('#date_end').val();
    var start = new Date(a);
    var end = new Date(b);
    var duration = (end.getTime()-start.getTime());
    var Difference_In_Days = duration / (1000 * 3600 * 24);

    $('#qrtn_duration').val(Difference_In_Days+" days");
    console.log(Difference_In_Days);
})

$('#facility').on('change', function(){
  var sel = $(this).val();
  if(sel == "Others")
  {
    $('#other_facility').prop('required', true);
    $('#other_facility').show();
  }
  else
  {
    $('#other_facility').prop('required', false);
    $('#other_facility').hide();
    $('#other_facility').val("");
  }
})

$("#swab_result").on('change', function () {
    var fileExtension = ['jpeg', 'jpg', 'png'];
    if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
        alert("Only formats are allowed : "+fileExtension.join(', '));
        $(this).val("");
    }
});

$("#monitoring_sheet").on('change', function () {
    var fileExtension = ['jpeg', 'jpg', 'png'];
    if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
        alert("Only formats are allowed : "+fileExtension.join(', '));
        $(this).val("");
    }
});

</script>

<script>
  datePickerId.max = new Date().toISOString().split("T")[0];
  date_start.max = new Date().toISOString().split("T")[0];
  date_end.max = new Date().toISOString().split("T")[0];
</script>
