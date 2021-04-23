<!-- 
    <div class="container">
        <div class="row">
            <div class="col-sm">
            <p><b>Name:</b>{{$data['firstname']}} {{$data['lastname']}}</p>
            </div>
            <div class="col-sm">
                <p><b>Message: </b></p>
            </div>
        </div>
    </div> -->
<style>
/* PUT ALL CSS IN THE EMAIL <HEAD>

These styles are meant for clients that recognize CSS in the <head>; the email WILL STILL WORK for those that don't. */

#outlook a{padding:0;}
body{width:100% !important; background-color:#41849a;-webkit-text-size-adjust:none; -ms-text-size-adjust:none;margin:0 !important; padding:0 !important;}  
.ReadMsgBody{width:100%;} 
.ExternalClass{width:100%;}
ol li {margin-bottom:15px;}
	
img{height:auto; line-height:100%; outline:none; text-decoration:none;}
#backgroundTable{height:100% !important; margin:0; padding:0; width:100% !important;}
	
p {margin: 1em 0;}
	
h1, h2, h3, h4, h5, h6 {color:#222222 !important; font-family:Arial, Helvetica, sans-serif; line-height: 100% !important;}
	
table td {border-collapse:collapse;}
	
.yshortcuts, .yshortcuts a, .yshortcuts a:link,.yshortcuts a:visited, .yshortcuts a:hover, .yshortcuts a span { color: black; text-decoration: none !important; border-bottom: none !important; background: none !important;}
	
.im {color:black;}
div[id="tablewrap"] {
		width:100%; 
		max-width:80%!important;
	}
table[class="fulltable"], td[class="fulltd"] {
		max-width:100% !important;
		width:100% !important;
		height:auto !important;
	}
			
@media screen and (max-device-width: 430px), screen and (max-width: 430px) { 
		td[class=emailcolsplit]{
			width:100%!important; 
			float:left!important;
			padding-left:0!important;
			max-width:430px !important;
		}
    td[class=emailcolsplit] img {
    margin-bottom:20px !important;
    }
    div[id="tablewrap"] {
		width:100%; 
		max-width:100%!important;
	}
}
</style>
<body style="width:100% !important; margin:0 !important; padding:0 !important; -webkit-text-size-adjust:none; -ms-text-size-adjust:none; background-color:#FFFFFF;">
    <!-- <table bgcolor="rgb(49, 64, 150);" border="0" cellspacing="0" cellpadding="0" width="100%">
        <tr>
            <td width="100%" bgcolor="#004d99">
                <div style="margin:2% 0 ;">
                    <img style="margin-left:10%;" src="https://sanjuancity.gov.ph/sanjuan/pid/public/assets/sjc.png" style="margin-right: 0 !important;"  alt="" width="80" height="80">
                    <img  src="https://sanjuancity.gov.ph/sanjuan/pid/public/assets/makabago.png"  alt="" width="80" height="80">
                </div>
            </td>
        </tr>
    </table> -->
    <table cellpadding="0" cellspacing="0" border="0" id="backgroundTable" style="height:auto !important; margin:0; padding:0; width:100% !important; background-color:#FFFFFF; color:#222222;">
        <tr>
            <td>
            <div id="tablewrap" style="width:100% !important; text-align:center !important; margin-top:0 !important; margin-right: auto !important; margin-bottom:0 !important; margin-left: auto !important;">
                    <br>

                    <table bgcolor="#FFFFFF" border="0" cellspacing="0" cellpadding="25" width="100%">
                            <tr>
                                <td width="100%" bgcolor="#ffffff" style="text-align:left;">
                                    <!-- <p style="color:#222222; font-family:Arial, Helvetica, sans-serif; font-size:15px; line-height:23px; margin-top:0; margin-bottom:20px; padding:0; font-weight:normal;">
                                        Dear City of San Juan,                                  
                                    </p> -->
                                    <div style="color:#222222; font-family:Arial, Helvetica, sans-serif; font-size:15px; line-height:23px; margin-top:0; margin-bottom:20px; padding:0; font-weight:normal;">
                                     <?php echo $data['message'] ?>
                                    </div>
                                    <br>
                                    <p style="float:left;color:#222222; font-family:Arial, Helvetica, sans-serif; font-size:15px; line-height:23px; margin-top:0; margin-bottom:20px; padding:0; font-weight:normal;">
                                        <b>Sender's info</b>
                                        <br>
                                        {{$data['firstname']}} {{$data['lastname']}}
                                        <br>
                                        {{$data['contact']}}
                                        <br>
                                        {{$data['email']}} 
                                    </p>
                                </td>
                            </tr>
                    </table>
                 
                    <!-- <table bgcolor="#FFFFFF" border="0" cellspacing="0" cellpadding="25" width="100%">
                            <tr>
                                <td width="100%" bgcolor="#ffffff" style="text-align:left;">
                                    <p style="color:#222222; font-family:Arial, Helvetica, sans-serif; font-size:11px; line-height:14px; margin-top:0; margin-bottom:15px; padding:0; font-weight:normal;">
                                        Email not displaying correctly? <a style="color:#2489B3; font-weight:bold; text-decoration:underline;" href="#">View it in your browser.</a>
                                    </p>
                                    <p style="color:#222222; font-family:Arial, Helvetica, sans-serif; font-size:11px; line-height:14px; margin-top:0; margin-bottom:15px; padding:0; font-weight:normal;">
                                        Copyright 2013 Your Company. All Rights Reserved.<br>
                                        If you no longer wish to receive emails from us, you may <a style="color:#2489B3; font-weight:normal; text-decoration:underline;" href="#">unsubscribe</a>.
                                    </p>
                                </td>
                            </tr>
                    </table> -->
                    </td>
                </tr>
                </table>
            </div>
            </td>
        </tr>
    </table> 
    <!-- <table bgcolor="rgb(49, 64, 150);" border="0" cellspacing="0" cellpadding="0" width="100%">
        <tr>
            <td width="100%" bgcolor="#e82525">
                <div style="margin:2% 0 ;">
                    <center>
                        <p style="color:#fff; font-family:Arial, Helvetica, sans-serif; font-size:15px; line-height:23px; margin-top:0; margin-bottom:20px; padding:0; font-weight:normal;">
                            SAN JUAN CITY © ALL RIGHTS RESERVED.
                        </p>
                    </center>
                </div>
            </td>
        </tr>
    </table> -->
</body>