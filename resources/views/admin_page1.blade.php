@extends('layouts.app')

@section('content')
<style type="text/css">
  textarea {
  width: 100%;
  height: 150px;
}
</style>
@if(session()->has('message'))
    <div class="alert alert-success" role="alert" style="text-align: center;">
        {{ session()->get('message') }}
    </div>
@elseif(session()->has('declined'))
    <div class="alert alert-danger" role="alert" style="text-align: center;">
        {{ session()->get('declined') }}
    </div>
@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <input type="hidden" id="confirmed" name="confirmed" readonly>
                <div class="card-body">
                    <table class="table table-bordered" id="app_table" style="white-space: nowrap;">
                      <thead>
                        <th>Request No.</th>
                        <th>Date Requested</th>                        
                        <th>Request Confirmed?</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Date Swabbed</th>
                        <th>No. of Days Quarantined</th>
                        <th>Quarantine Facility</th>
                      </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<form method="POST" action="#" id="data_form" enctype="multipart/form-data">
  @csrf
  <div class="container-fluid">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Details</div>

                  <div class="col">
                    <label>Name</label>
                    <input type="text" class="form-control" id="name" name="name" readonly>
                  </div>

                  <div class="col">
                    <label>Address</label>
                    <input type="text" class="form-control" id="address" name="address" readonly>
                  </div>

                  <div class="col">
                    <label>Date Swabbed</label>
                    <input type="date" class="form-control" id="date_swabbed" name="date_swabbed" readonly>
                  </div>

                  <div class="col">
                    <label>Quarantine Duration</label>
                    <input type="text" class="form-control" id="duration" name="duration" readonly>
                  </div>

                  <div class="col">
                    <label>Quarantine Date Start</label>
                    <input type="date" class="form-control" id="date_start" name="date_start" readonly>
                  </div>

                  <div class="col">
                    <label>Quarantine Date End</label>
                    <input type="date" class="form-control" id="date_end" name="date_end" readonly>
                  </div>

                  <div class="col">
                    <label>Quarantine Facility</label>
                    <input type="text" class="form-control" id="facility" name="facility" readonly>
                  </div>

                  <div class="col">
                    <label>Fit to Work</label>
                    <input type="text" class="form-control" id="fit_to_work" name="fit_to_work" readonly>
                  </div>

                  <div class="col">
                    <label>Contact No.</label>
                    <input type="text" class="form-control" id="contact" name="contact" readonly>
                  </div>

                  <div class="col">
                    <label>E-mail Address</label>
                    <input type="text" class="form-control" id="email" name="email" readonly>
                  </div>
                  <br>
                  <label for="attch" class="col">Attachments:</label>
                  <div class="col form-inline" id="attch">
                    
                    <div class="col" style="text-align: center;">
                      <label>Swab Result</label><br>
                      <img src="" width="400" height="500" id="swab_result">
                    </div>
                    <div class="col" style="text-align: center;">
                      <label>Monitoring Sheet</label><br>
                      <img src="" width="400" height="500" id="monitoring_sheet">
                    </div>
                  </div>
                  <br>
                  <div class="col">
                    <label>Remarks</label>
                    <textarea id="remarks_done" name="remarks_done" readonly></textarea>
                  </div>
                  <div class="col" style="text-align: center; padding-top: 15px;">
                    <input type="hidden" id="id" name="id" readonly>
                    <button type="button" class="btn btn-danger" id="decline_req">Decline Request</button>
                    <button type="submit" class="btn btn-primary" id="confirm_req">Confirm Request</button>
                  </div>
                  <div style="padding-bottom: 15px"></div>
              </div>
          </div>
      </div>
  </div>

  <div class="modal fade" id="declineModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><h3>Enter reason for declining</h3></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <textarea class="auto-text-area" name="remarks" id="remarks"></textarea>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
  </div>

</form>

<div class="modal fade" id="printNowModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="{{action('HomeController@print_later')}}" id="print_now">
        @csrf
        <div class="modal-body">
          <h3>Print Certificate Now?</h3>
          <input type="hidden" id="printID" name="printID" readonly>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-secondary">No</button>
          <button type="button" class="btn btn-primary" id="printNow">Yes</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="loadingModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        
      </div>
      <div class="modal-body">
        <div class="form-inline">
          <div class="spinner-border" role="status">
            <span class="sr-only"></span>
          </div>
          <h3 style="padding-left: 15px; padding-top: 10px;">Loading...</h3>
        </div>
        
      </div>
      <div class="modal-footer">
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

$('#app_table').dataTable({
  ajax: '{{ url('list') }}',
    dom: 'Bfrtip',
    select: true,
    "lengthChange": false,
    "scrollX": true,
    pageLength: 10,
    "order": [[ 0, "asc" ]],
    buttons: [
        {
            text: 'Print Certificate',
            action: function ( e, dt, node, config ) {
                if($('#confirmed').val() > 0)
                {
                  var id = $('#id').val();
                  var src = "files/"+id+"/CertRecovery_"+id+".pdf";
                  window.open(src, "_blank",  "toolbar=yes,scrollbars=yes,resizable=yes,top=10,left=500,width=800,height=800");
                }
                else
                {
                  alert("REQUEST HAS NOT YET BEEN CONFIRMED!");
                }
            }
        }
    ],
    language: {
      paginate: {
        next: '>', 
        previous: '<',
        first: '<<',
        last: '>>'
      }
    },
    columns: 
        [
            {data: 'request_no', name: 'request_no'},
            {data: 'date_req', name: 'date_req'},
            {data: 'confirm', name: 'confirm'},
            {data: 'last_name', name: 'last_name'},
            {data: 'first_name', name: 'first_name'},
            {data: 'middle_name', name: 'middle_name'},
            {data: 'swab', name: 'swab'},
            {data: 'quarantine_duration', name: 'quarantine_duration'},
            {data: 'quarantine_facility', name: 'quarantine_facility'},
        ],
    pagingType: "full_numbers",
})

var app_list = $('#app_table').DataTable();
$('#app_table tbody').on('click', 'tr', function(){
  $(this).addClass('selected').siblings().removeClass("selected");
  var data = app_list.row(this).data();
  console.log(data.swab_result);
  $('#id').val(data.id);
  $('#confirmed').val(data.confirmed);
  if(data.suffix == null)
  {
    var suf = "";
  }
  else
  {
    var suf = " " + data.suffix
  }

  if(data.middle_name == null)
  {
    var mid = "";
  }
  else
  {
    var  mid = " " + data.middle_name
  }

  $('#name').val(data.last_name + suf + ", " + data.first_name + mid);
  $('#address').val(data.house_no + ", " + data.barangay + ", " + data.city);
  $("#date_swabbed").val(data.date_swabbed);
  $('#duration').val(data.quarantine_duration);
  $('#date_start').val(data.date_start);
  $('#date_end').val(data.date_end);
  $('#facility').val(data.quarantine_facility);
  $('#fit_to_work').val(data.fit_to_work);
  $('#contact').val(data.contact);
  $('#email').val(data.email);
  $('#remarks_done').val(data.remarks);

  $('#swab_result').prop('src', "files/"+data.id+"/"+data.swab_result);
  if(data.monitoring_sheet != null)
  {
    $('#monitoring_sheet').prop('src', "files/"+data.id+"/"+data.monitoring_sheet);
  }
  else
  {
    $('#monitoring_sheet').prop('disabled', true);
  }
  

  if(data.confirmed == 1)
  {
    $('#confirm_req').prop('disabled', true);
  }
  else
  {
    $('#confirm_req').prop('disabled', false);
  }

})

$('#confirm_req').on('click', function(){
  $('#remarks').prop('required', false);
  $("#data_form").submit(function (e) {
    var get_id = $('#id').val();
    if(get_id>0)
    {    
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        e.preventDefault();
        $('#loadingModal').modal('show');
        var form = $('#data_form')[0];
        var formData = new FormData(form);
        var type = "POST";
        var my_url = "{{ url('/update')}}/"+get_id;
        var info = '<strong>Success!</strong>';

        console.log(formData);
        
        $.ajax({

            type: type,
            url: my_url,
            data: formData,
            dataType: 'json',
            contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
            processData: false, // NEEDED, DON'T OMIT This
            success: function (data) {
                console.log(data);
                $('#loadingModal').modal('toggle');
                $("#printNowModal").modal('show');
                $("#printID").val(get_id);
            },
            error: function (data) {
                console.log('Error:', data);
                $('#loadingModal').hide();
            }
        });
    }
  });
});

$('#decline_req').on('click', function(){
  var get_id = $('#id').val();
  $('#remarks').prop('required', true);
  if(get_id>0)
  {
    $('#data_form').prop('action', '{{action("HomeController@decline")}}');
    $("#declineModal").modal('show');
  }
  else
  {
    alert("Select request first!");
  }
});

$('#printNow').on('click', function(){
  $('#printNowModal').modal('hide');
  var id = $('#id').val();
  var src = "files/"+id+"/CertRecovery_"+id+".pdf";
  window.open(src, "_blank",  "toolbar=yes,scrollbars=yes,resizable=yes,top=10,left=500,width=800,height=800");
})

$('#printNowModal').on('hidden.bs.modal', function () {
    $(this).find('form').trigger('reset');
})

</script>

@endsection
