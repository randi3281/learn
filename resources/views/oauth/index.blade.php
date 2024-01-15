<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Oauth Login</title>
    <link rel="stylesheet" href="{{ asset('oauth_public/css/app.css') }}">
</head>

<body>
    <div class="form">

        <a href="{{ route('oauth.redirect') }}">
            <img src="{{ asset('oauth_public/image/google.png') }}">
        </a>

        {{-- <input type="email" name="email" placeholder="Email" />

        <input type="password" name="Password" placeholder="Password" />

        <button>Sign in</button>


        <a href="https://www.google.com/">Create account</a> --}}

    </div>
</body>

</html>
