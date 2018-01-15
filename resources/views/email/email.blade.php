<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            text-align: center;
            background: darkgray;
        }

        div {
            color: darkblue;
            background: yellow;
        }
    </style>
</head>
<body>

    <div>Name: {{ $client->name }}</div>
    <div>Phone: {{ $client->phone }}</div>
    @if($client->email)
        <div>{{ $client->email }}</div>
    @endif
    @if($client->message)
        <div>{{ $client->message }}</div>
    @endif
</body>
</html>