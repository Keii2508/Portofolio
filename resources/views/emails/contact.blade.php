<!DOCTYPE html>
<html>
<head>
    <title>Pesan Baru dari Portfolio</title>
</head>
<body>
    <h2>You received a new message from your Portfolio!</h2>
    <p><strong>Name:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Subject:</strong> {{ $data['subject'] }}</p>
    <br>
    <p><strong>Message:</strong></p>
    <p>{{ $data['message'] }}</p>
</body>
</html>