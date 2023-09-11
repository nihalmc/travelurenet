<x-mail::message>

Name: {{ $rentacarData['name'] }}<br>
Email: {{ $rentacarData['email'] }}<br>
Phone: {{$rentacarData['phonenumber']}}<br>
City of Rental:: {{ $rentacarData['from'] }}<br>
Type of Vehicle: {{ $rentacarData['travel'] }}<br>
Pick up Date: {{ $rentacarData['ddate'] }}<br>
Return Date:{{ $rentacarData['rdate'] }}<br>
Pick up Time:: {{ $rentacarData['accOnwardspickhrs'] }}:{{ $rentacarData['accOnwardspickupmin'] }}<br>
Return Time: {{ $rentacarData['accOnwardspickhr'] }}:{{ $rentacarData['accOnwardspickupmi'] }}<br>
Address: {{ $rentacarData['address'] }}<br>
adults: {{ $rentacarData['adults'] }}<br>
Child: {{ $rentacarData['child'] }}<br>
A/C/No A/C: {{ implode(', ', $rentacarData['options']) }}<br>
Message: {{ $rentacarData['messages'] }}<br>


<x-mail::button :url="''">
</x-mail::button>

Thanks,<br>

</x-mail::message>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HOTELS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>



Thanks,<br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>




