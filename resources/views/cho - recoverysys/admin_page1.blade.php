@extends('layouts.app')

@section('content')
<style type="text/css">
  textarea {
  width: 100%;
  height: 150px;
}
button.dt-button {
    background-color: green;
    color: white;
    font-size: 15px;
    font-weight: 700;
}
button.dt-button:hover{
  background-color: lightgreen !important;
  color: black;
  font-size: 15px;
  font-weight: 700 !important;
}
@media only screen and (max-width: 1600px) and (min-width: 900px){
  #datat.d-flex {
    display: flex !important;
    flex-direction: column;
}
}
</style>
<div class="header bg-primary pb-6">
    <div id="datat" class="container-fluid d-flex justify-content-center" style="max-width: 100% !important;">

        <!-- Card stats -->
        <div class="row mt-3">
          <div class="col-xl-12 col-md-12">
            @if(session()->has('message'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                <span class="alert-text"><strong>Success!</strong>  {{ session()->get('message') }}</span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @elseif(session()->has('declined'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                <span class="alert-text"><strong>Notice!</strong> {{ session()->get('declined') }}</span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif
            <div class="card card-stats">
              <!-- Card body -->
              <input type="hidden" id="confirmed" name="confirmed" readonly>
              <div class="card-body">

                  <table class="table table-bordered table-responsive" id="app_table" style="white-space: nowrap;">
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
    </div>

  <!-- Page content -->
  <div class="container" style="max-width: 100% !important;">
    <div class="row">
      <div class="col-12">
        <form method="POST" action="#" id="data_form" enctype="multipart/form-data">
          @csrf
        <div class="card mb-4">
          <!-- Card header -->
          <div class="card-header">
            <h3 class="mb-0">DETAILS</h3>
          </div>
          <!-- Card body -->
          <div class="card-body">
            <!-- Form groups used in grid -->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="form-control-label" for="name">NAME</label>
                  <input type="text" class="form-control" id="name" name="name" readonly>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="form-control-label" for="address">ADDRESS</label>
                  <input type="text" class="form-control" id="address" name="address" readonly>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 col-md-3">
                <div class="form-group">
                  <label class="form-control-label" for="date_swabbed">DATE SWABBED</label>
                  <input type="date" class="form-control" id="date_swabbed" name="date_swabbed" readonly>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="form-group">
                  <label class="form-control-label" for="duration">QUARANTINE DURATION</label>
                  <input type="text" class="form-control" id="duration" name="duration" readonly>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="form-group">
                  <label class="form-control-label" for="date_start">QUARANTINE DATE START</label>
                  <input type="date" class="form-control" id="date_start" name="date_start" readonly>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="form-group">
                  <label class="form-control-label" for="date_end">QUARANTINE DATE END</label>
                  <input type="date" class="form-control" id="date_end" name="date_end" readonly>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 col-md-3">
                <div class="form-group">
                  <label class="form-control-label" for="facility">QUARANTINE FACILITY</label>
                  <input type="text" class="form-control" id="facility" name="facility" readonly>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="form-group">
                  <label class="form-control-label" for="fit_to_work">FIT TO WORK</label>
                  <input type="text" class="form-control" id="fit_to_work" name="fit_to_work" readonly>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="form-group">
                  <label class="form-control-label" for="contact">CONTACT NO.</label>
                  <input type="text" class="form-control" id="contact" name="contact" readonly>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="form-group">
                  <label class="form-control-label" for="email">EMAIL ADDRESS</label>
                  <input type="text" class="form-control" id="email" name="email" readonly>
                </div>
              </div>
            </div>
            <div class="row" id="attch">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="form-control-label" for="swab_result">SWAB RESULT</label>
                  <img src="" width="400" height="500" id="swab_result">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="form-control-label" for="monitoring_sheet">MONITORING SHEET</label>
                  <img src="" width="400" height="500" id="monitoring_sheet">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="form-control-label" for="remarks_done">REMARKS</label>
                  <textarea id="remarks_done" name="remarks_done" readonly></textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <input type="hidden" id="id" name="id" readonly>
              <div class="col-md-6">
                <div class="form-group">
                  <button type="button" class="btn btn-danger btn-block" id="decline_req">Decline Request</button>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block" id="confirm_req">Confirm Request</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Decline Modal -->
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
      </div>
    </div>


     <!-- Print Modal -->
    <div class="modal fade" id="printNowModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="POST" action="{{action('HomeController1@print_later')}}" id="print_now">
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

    <!-- Loading Modal -->
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
          $('#data_form').prop('action', '{{action("HomeController1@decline")}}');
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
