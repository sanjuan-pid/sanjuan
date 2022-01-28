@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if(session()->has('message'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <div class="card-header">Certificate of Recovery Request Form</div>

                <div class="card-body">
                    <form method="POST" action="{{action('HomeController1@submit')}}" id="data_form" enctype="multipart/form-data">
                    @csrf
                        <label>Enter the ff. information</label>
                        <div class="col-sm-12">
                            <label>First Name</label><span style="color: red">*</span><br>
                            <input type="text" class="form-control" id="first_name" name="first_name" required>
                        </div>
                        <div class="col-sm-12">
                            <label>Middle Name</label><br>
                            <input type="text" class="form-control" id="middle_name" name="middle_name">
                        </div>
                        <div class="col-sm-12">
                            <label>Last Name</label><span style="color: red">*</span><br>
                            <input type="text" class="form-control" id="last_name" name="last_name" required>
                        </div>
                        <div class="col-sm-12">
                            <label>Suffix</label><br>
                            <input type="text" class="form-control" id="suffix" name="suffix">
                        </div>
                        <div class="col-sm-12">
                            <label>House No. and Street No.</label><span style="color: red">*</span>
                            <input type="text" class="form-control" id="address" name="address" required>
                        </div>
                        <div class="col-sm-12">
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
                              <option value="SAN JUAN MEDICAL CENTER">SAN JUAN MEDICAL CENTER</option>
                              <option value="KALINGA">KALINGA</option>
                              <option value="SAN JUAN CITY HALL">SAN JUAN CITY HALL</option>
                            </select>
                        </div>
                        <div class="col-sm-12">
                            <label>City</label>
                            <input type="text" class="form-control" id="city" name="city" value="San Juan City" readonly>
                        </div>
                        <div class="col-sm-12">
                            <label>Date Swabbed</label><span style="color: red">*</span>
                            <input type="date" class="form-control" id="swab_date" name="swab_date" required>
                        </div>
                        <div class="col-sm-12">
                            <label>Quarantine Date Start</label><span style="color: red">*</span>
                            <input type="date" class="form-control qrt_date" id="date_start" name="date_start" required>
                        </div>
                        <div class="col-sm-12">
                            <label>Quarantine Date End</label><span style="color: red">*</span>
                            <input type="date" class="form-control qrt_date" id="date_end" name="date_end" required>
                        </div>
                        <div class="col-sm-12">
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
                        <div class="col-sm-12">
                            <label>Fit to Work</label><span style="color: red">*</span>
                            <input type="text" class="form-control" id="fit_to_work" name="fit_to_work" required>
                        </div>
                        <div class="col-sm-12">
                            <label>Contact Number</label><span style="color: red">*</span>
                            <input type="text" class="form-control" id="contact" name="contact" required>
                        </div>
                        <div class="col-sm-12">
                            <label>E-mail Address</label><span style="color: red">*</span>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <br>
                            <label>Attach photocopy image of the ff:</label>
                        <br>
                        <div class="col-sm-12">
                            <label>Swab Result (required)</label><span style="color: red">*</span>
                            <input type="file" class="form-control" id="swab_result" name="swab_result" required>
                        </div>
                        <div class="col-sm-12">
                            <label>Monitoring Sheet (optional)</label>
                            <input type="file" class="form-control" id="monitoring_sheet" name="monitoring_sheet">
                        </div>
                        <br>
                        <div style="text-align: center;">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
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
    $('#other_facility').prop('required', true);
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

@endsection
