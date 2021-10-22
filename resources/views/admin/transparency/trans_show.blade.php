<!DOCTYPE html>
<html>

<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>

<link rel="stylesheet" type="text/css" href="{{ asset('css/flipbook.style.css')}}">


<script src="{{ asset('js/flipbook.min.js')}}"></script>

<script type="text/javascript">

$(document).ready(function () {
        $("#transparency").flipBook({
            pdfUrl:"{{asset("uploads/" . $trans->trans_pdf) }}",
        });

    })
</script>

</head>

<body>
    <div class="container">
      <div class="row">
        <div class="col-12">
          
        </div>
      </div>
    </div>

</body>

</html>
