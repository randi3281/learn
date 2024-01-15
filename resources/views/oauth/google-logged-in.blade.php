<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kamu sudah login</title>
</head>

<body>
    <h1>Kamu sudah login</h1>
    <p>
        Nama : {{ $user->getName() }} <br>
        Email : {{ $email }} <br>
    </p>
</body>

</html>
