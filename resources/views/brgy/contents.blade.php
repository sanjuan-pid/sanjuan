@extends('layouts.nav-bar')
@section('content')
<div class="container" id="news_contents">
    <div class="row" id="news_contents_row">
        <div class="col-sm-12" >
            <br><br>
            <div class="card">
                <div class="card-body">
                        <br>
                            <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
                            <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/rowgroup/1.1.2/css/rowGroup.jqueryui.min.css">
                            <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.jqueryui.min.css">
                            <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
                            <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
        
                    <div class="row">    
                        @foreach($brgy as $row)
                            <h1 style="text-align: center; font-weight:900;">{{ $row->name }}</h1>
                            <br>
                            <p style="text-align: center; font-weight:500;font-weight:600;"><?php echo $row->address ?></p>
                            <div id= officials style="text-align: center; font-weight:600;">
                                <?php echo $row ->officials ?>
                            </div>
                            <?php echo $row ->brgy_code ?>
                            <h1>SAP LIST</h1>
                             @if($row ->brgy_code  == "AD")
                                 @include('layouts.index.sap.ad') 
                             @endif
                             @if($row ->brgy_code  == "BB")
                                 @include('layouts.index.sap.balong-bato') 
                             @endif
                             @if($row ->brgy_code  == "BT")
                                 @include('layouts.index.sap.batis') 
                             @endif 
                             @if($row ->brgy_code  == "CDJ") 
                                 @include('layouts.index.sap.cdj') 
                             @endif   
                             @if($row ->brgy_code  == "EM") 
                                 @include('layouts.index.sap.ermitaño') 
                             @endif     
                             @if($row ->brgy_code  == "GH")
                                 @include('layouts.index.sap.greenhills') 
                             @endif 
                             @if($row ->brgy_code  == "IB")  
                                 @include('layouts.index.sap.isabelita') 
                             @endif   
                             @if($row ->brgy_code  == "PC")  
                                 @include('layouts.index.sap.pedrocruz') 
                             @endif        
                             @if($row ->brgy_code  == "PG")  
                                 @include('layouts.index.sap.progreso') 
                             @endif
                             @if($row ->brgy_code  == "RV")  
                                 @include('layouts.index.sap.rivera') 
                             @endif 
                             @if($row ->brgy_code  == "SP")  
                                 @include('layouts.index.sap.sanperfecto') 
                             @endif  
                             @if($row ->brgy_code  == "SJ")  
                                 @include('layouts.index.sap.stjoseph') 
                             @endif    
                             @if($row ->brgy_code  == "WC")  
                                 @include('layouts.index.sap.westcrame') 
                             @endif     
                             @if($row ->brgy_code  == "KB")  
                                 @include('layouts.index.sap.kabayanan') 
                             @endif     
                             @if($row ->brgy_code  == "LB")  
                                 @include('layouts.index.sap.LB') 
                             @endif      
                             @if($row ->brgy_code  == "MT")  
                                 @include('layouts.index.sap.MAYTUNAS') 
                             @endif 

                             @if($row ->brgy_code  == "ON")  
                                 @include('layouts.index.sap.ONSE') 
                             @endif   

                             @if($row ->brgy_code  == "PD")  
                                 @include('layouts.index.sap.PASADEÑA') 
                             @endif    

                             @if($row ->brgy_code  == "SL")  
                                 @include('layouts.index.sap.SALAPAN') 
                             @endif     

                             @if($row ->brgy_code  == "TB")  
                                 @include('layouts.index.sap.TIBAGAN') 
                             @endif                       

                        @endforeach
                    </div>
                        
                </div>
            </div>
            <br><br>
        </div>
    </div>
</div>   

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.jqueryui.min.js"></script>
<script src="https://cdn.datatables.net/rowgroup/1.1.2/js/dataTables.rowGroup.min.js"></script>

<script>
$(document).ready(function() {
    var table = $('#example').DataTable( {
        rowReorder: {
            selector: 'td:nth-child(2)'
        },
        responsive: true
    } );
} );
</script>
@endsection
