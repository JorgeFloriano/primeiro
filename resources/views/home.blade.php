<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Home, passing data !!</h1>
    Name: {{$name}}<br>
    Age: <?=$age?><br>
    Surname: {{$surname}}<br>
    Fones:
    <ul>
    @foreach ($fones as $fone)
        <li>{{ $fone }}</li>
    @endforeach
    </ul>
</body>
</html>