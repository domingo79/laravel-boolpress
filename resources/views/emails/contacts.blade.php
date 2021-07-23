<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New email</title>
</head>

<body>
    <div class="container">
        <h3>Ciao, hai ricevuto un nuovo messaggio da: {{ $data['full_name'] }}</h1>
            <p>Messaggio Ricevuto da: {{ $data['email'] }}</p>
            <p>Messaggio: {{ $data['message'] }}</p>
    </div>
</body>

</html>
