<!DOCTYPE html>
<html>
<head>
    <title>Certificate of Recovery Request</title>
</head>
<body>
    <p>Good day, {{$data['last_name']}} {{$data['suffix']}}, {{$data['first_name']}} {{$data['middle_name']}}</p>

    <p>We have received the request for your Covid19 Certificate of Recovery. Unfortunately, your request has declined for the following reason(s);</p>

    <p>{!! nl2br($data['remarks']) !!}</p>

    <p>Please visit our office at GF, CDRRMO Office, Steel Parking, Dr. P. A. Narciso St. Corazon De Jesus, beside Landbank San Juan. Office hours are from Monday to Friday from 8 AM to 5 PM. Bring your documents if needed or stated in remarks.</p>

    <p>Thank you for your understanding.</p>

    <p>San Juan City Health Office</p>
</body>
</html>