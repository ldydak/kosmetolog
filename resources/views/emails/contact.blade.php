<!DOCTYPE html>
<html>
<head>
    <title>Wiadomosc z formularza WooSklepy</title>
</head>
<body>
    <p>Imię i nazwisko: {{ $details['name'] }}</p>
    <p>Firma: {{ $details['company'] }}</p>
    <p>Email: {{ $details['email'] }}</p>
    <p>Telefon: {{ $details['phone'] }}</p>
    <p>Wiadomość: {{ $details['message'] }}</p>
    <p>Kontaktuję się w sprawie: {{ $details['checkboxes'] }}</p>
</body>
</html>