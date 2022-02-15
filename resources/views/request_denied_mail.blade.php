<!DOCTYPE html>
<html>
<head>
    <title>Certificate of Recovery Request</title>
</head>
<body>
    <p>Good day, {{$data['last_name']}} {{$data['suffix']}}, {{$data['first_name']}} {{$data['middle_name']}}</p>

    <p>We have received the request for your Covid19 Certificate of Recovery. Unfortunately your request have been declined for the following reason(s):</p>

    <p>{!! nl2br($data['remarks']) !!}</p>

    <p>You may go to our office located near Landbank San Juan to submit any requirements stated in the remarks.</p>

    <p>Thank you for your understanding.</p>

    <p>San Juan City Health Office</p>
</body>
</html>