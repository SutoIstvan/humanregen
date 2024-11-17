<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Új foglalás</title>
</head>
<body>
    <h2>Új foglalás</h2>
    <ul>
        <li><strong>Ügyfél neve:</strong> {{ $bookingDetails['name'] }}</li>
        <li><strong>Ügyfél email címe:</strong> {{ $bookingDetails['client_email'] }}</li>
        <li><strong>Ügyfél telefonszáma:</strong> {{ $bookingDetails['client_phone'] }}</li>
        <li><strong>Foglalás dátuma:</strong> {{ $bookingDetails['date'] }}</li>
        <li><strong>Foglalás ideje:</strong> {{ $bookingDetails['time'] }}</li>
        <li><strong>Időtartam:</strong> {{ $bookingDetails['service'] }}</li>
    </ul>
</body>
</html>
